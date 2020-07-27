<?php

namespace App\Model;

use \PDO;

class Model 
{	

	protected $dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";port=".DB_PORT.";charset=".DB_CHARSET;
	protected $opt = [
	    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
	    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	    PDO::ATTR_EMULATE_PREPARES   => false,
	];

	protected $db;

	public function __construct()
	{
		$this->db = new PDO($this->dsn, DB_USER, DB_PASS, $this->opt);
	}

	public function postFeedback($a)
	{	
		$q = "INSERT INTO `comments` (items_id, title, text, author, rating, user_submit, date)
				VALUES (:id, :title, :feedback, :author, :rating, :user_submit, CURRENT_TIMESTAMP)";

		$stmt = $this->db->prepare($q); // stmt = statement
		$stmt -> execute([':id' => $a['id'], ':title' => $a['feedback_title'], ':feedback' =>$a['feedback_text'], ':author' => $a['feedback_name'], ':rating' => $a['feedback_rate'], ':user_submit' => $a['user_submit']]);

	}

	public function search($s)
	{
		$sql_query = '

			SELECT
				
				items.id,
				items.name,
				items.image,
				items.slug

			from places
			
			-- where
			-- MATCH (items.name) AGAINST (:s IN NATURAL LANGUAGE MODE)
			WHERE places.name LIKE :s

			limit 10
		';

		$stmt = $this->db->prepare($sql_query); // stmt = statement
		$stmt -> execute([':s' => '%'. str_replace(' ', '%', $s) . '%']);
		
		return $sql_res = $stmt -> fetchAll();
		
	}


	public function homePage() {

		$result = array();

		$sql_query = '

			SELECT 

				(place_reviews.place_id),
				(place_reviews.review_text) as text,
				-- (place_reviews.image) as ,
				(place_reviews.rating) as rating,

				-- ANY_VALUE(comments.author) as author,

				places.id as items_id,
				places.name as items_name,
				places.image as items_image,
				places.slug as items_slug

			from place_reviews 

			join places ON (places.id = place_reviews.place_id)
			
			-- where
			-- places.images_json is not null

			-- group by place_reviews.place_id

			limit 10
		';

		$stmt = $this->db->prepare($sql_query); // stmt = statement
		$stmt -> execute();

		$result['comments'] = $sql_res = $stmt -> fetchAll();

		// print_r($result['comments']); die;

		$sql_query = '

			SELECT
				
				places.id,
				places.name,
				places.slug,
				places.image

				-- place_images.place_id,
				-- place_images.attribute_value as image

				-- items.slug

			from places

			-- join place_images on (place_images.place_id = places.id)
			where places.image is not NULL
			
			limit 100		
		';

		$stmt = $this->db->prepare($sql_query); // stmt = statement
		$stmt -> execute();
		
		$sql_res = $stmt -> fetchAll();

		$result['items'] = $sql_res;


		return $result;
	}

	public function catPage($cat_id, $page) {

		$offset = $page;
		if ($page>0)
			$offset = $page-1;

		$sql_query = '

			SELECT
				
				places.id,
				places.name,
				places.image,
				places.slug,
				places.category,

				categories_names.name as categories,
				categories_names.id as categories_id

				-- place_images.place_id,
				-- place_images.attribute_value as image

				-- categories_names.name as cats,
				-- categories_names.id as cats_id 

			from places

			left join categories ON (places.id = categories.places_id)
			left join categories_names ON (categories_names.id = categories.categories_names_id)

			-- join place_images ON place_images.place_id = places.id

			-- join place_images ON place_images.place_id = (
			-- 	select place_images.place_id from place_images 
			-- 	where place_images.place_id = places.id
			-- 	limit 1
			-- )
			-- inner join categories_names ON (categories_names.id = categories.categories_names_id)
			
			where
			categories.id = '.$cat_id.'

			limit '.(CATEGORY_ITEMS_PER_PAGE+1).'
			offset '.($offset*CATEGORY_ITEMS_PER_PAGE).'
		';

		$stmt = $this->db->prepare($sql_query); // stmt = statement
		$stmt -> execute();
		
		$sql_res = $stmt -> fetchAll();

		// print_r($sql_res); die;

		foreach ($sql_res as $key => $value) {
			$sql_query = 'select review_text as text from place_reviews where place_id = '.$value['id'].' limit 1';
			$stmt = $this->db->prepare($sql_query);
			$stmt -> execute(); 
			$t = $stmt -> fetchAll();
			if (isset($t[0]['text']))
				$sql_res[$key]['text'] = $t[0]['text'];
		}

		// print_r($sql_res); die;

		$next_page = false;
 
		if (count($sql_res)>CATEGORY_ITEMS_PER_PAGE)
		{
			$next_page = true;
			array_pop($sql_res);
		}

		// print_r($sql_res); die;

		return array('sql_res' => $sql_res, 'next_page' => $next_page);

	}


	/*public function tagPage($tag_id, $page) {

		$offset = $page;
		if ($page>0)
			$offset = $page-1;

		$sql_query = '

			SELECT
				
				places.id,
				places.name,
				places.image,
				places.slug,
				places.category,

				tags_names.name as tags,
				tags_names.id as tags_id

			from places

			left join tags ON (places.id = tags.places_id)
			left join tags_names ON (tags_names.id = tags.tags_names_id)

			where
			tags.id = '.$tag_id.'

			limit '.(CATEGORY_ITEMS_PER_PAGE+1).'
			offset '.($offset*CATEGORY_ITEMS_PER_PAGE).'
		';

		$stmt = $this->db->prepare($sql_query); // stmt = statement
		$stmt -> execute();
		
		$sql_res = $stmt -> fetchAll();

		// print_r($sql_res); die;

		foreach ($sql_res as $key => $value) {
			$sql_query = 'select review_text as text from place_reviews where place_id = '.$value['id'].' limit 1';
			$stmt = $this->db->prepare($sql_query);
			$stmt -> execute(); 
			$t = $stmt -> fetchAll();
			if (isset($t[0]['text']))
				$sql_res[$key]['text'] = $t[0]['text'];
		}

		// print_r($sql_res); die;

		$next_page = false;
 
		if (count($sql_res)>CATEGORY_ITEMS_PER_PAGE)
		{
			$next_page = true;
			array_pop($sql_res);
		}

		// print_r($sql_res); die;

		return array('sql_res' => $sql_res, 'next_page' => $next_page);

	}
*/
	public function locationPage($state_id, $town_id, $category_id) {

		/*$offset = $page;
		if ($page>0)
			$offset = $page-1;*/

		if ($town_id == null)
			$town_sql = 'is not null';
		else
			$town_sql = ' = '.$town_id;

		$sql_query = '

			SELECT
				
				places.id,
				places.name,
				places.image,
				places.slug,
				places.category,
				places.address,
				places.reviews,
				-- places.town

				l1.id as town_id,
				l2.id as state_id,
				l1.name as town,
				l2.name as state,

				categories_names.name as categories,
				categories_names.id as categories_id
 
			from places

			join locations l1 on (l1.id = places.town_id)
			join locations l2 on (l2.id = places.state_id)

			left join categories ON (places.id = categories.places_id)
			left join categories_names ON (categories_names.id = categories.categories_names_id)

			-- join place_images ON place_images.place_id = places.id

			-- join place_images ON place_images.place_id = (
			-- 	select place_images.place_id from place_images 
			-- 	where place_images.place_id = places.id
			-- 	limit 1
			-- )
			-- inner join categories_names ON (categories_names.id = categories.categories_names_id)
			
			where
				places.state_id = '.$state_id.' 
			and
				places.town_id '.$town_sql.'
			and
				categories.id = '.$category_id.' 
			
			-- and  places.reviews > 0

			ORDER BY `rating` DESC	

			limit '.(CATEGORY_ITEMS_PER_PAGE+1);

		$stmt = $this->db->prepare($sql_query); // stmt = statement
		$stmt -> execute();
		
		$sql_res = $stmt -> fetchAll();

		if (empty($sql_res)) {

			$sql_query = '

			SELECT
				
				places.id,
				places.name,
				places.image,
				places.slug,
				places.category,
				places.address,
				-- places.state,
				-- places.town

				l1.id as town_id,
				l2.id as state_id,
				l1.name as town,
				l2.name as state

			from places

			join locations l1 on (l1.id = places.town_id)
			join locations l2 on (l2.id = places.state_id)
 
			where
				places.state_id = '.$state_id.' 
			and
				places.town_id '.$town_sql.'
			and
				category_id = '.$category_id.' 

			ORDER BY `rating` DESC	

			limit '.(CATEGORY_ITEMS_PER_PAGE+1);

			$stmt = $this->db->prepare($sql_query); // stmt = statement
			$stmt -> execute();
			
			$sql_res = $stmt -> fetchAll();
		}

		// print_r($sql_res); die;

		foreach ($sql_res as $key => $value) {
			$sql_query = 'select review_text as text from place_reviews where place_id = '.$value['id'].' limit 1';
			$stmt = $this->db->prepare($sql_query);
			$stmt -> execute(); 
			$t = $stmt -> fetchAll();
			if (isset($t[0]['text']))
				$sql_res[$key]['text'] = $t[0]['text'];
		}

		// print_r($sql_res); die;

		$next_page = false;
 
		if (count($sql_res)>CATEGORY_ITEMS_PER_PAGE)
		{
			$next_page = true;
			array_pop($sql_res);
		}

		// print_r($sql_res); die;

		return array('sql_res' => $sql_res, 'next_page' => $next_page);

	}

	public function itemPage($id) {

		// artist data

		$sql_query = '

			SELECT
				
				places.id,
				places.name,
				places.category,
				places.category_id,
				places.website_url as website,
				places.image,
				places.slug,
				places.address,

				l1.id as town_id,
				l2.id as state_id,
				l1.name as town,
				l2.name as state,

				categories_names.name as categories,
				categories_names.id as categories_id


				-- items.slug

			from places

			left join locations l1 on (l1.id = places.town_id)
			left join locations l2 on (l2.id = places.state_id)

			left join categories ON (places.id = categories.places_id)
			left join categories_names ON (categories_names.id = categories.categories_names_id)

			-- left join categories ON (places.id = categories.places_id)
			-- left join categories_names ON (categories_names.id = categories.categories_names_id)
			-- left join images ON (places.id = images.places_id)

			where
			places.id = '.$id.'
		';

		$stmt = $this->db->prepare($sql_query); 
		$stmt -> execute();
		
		$sql_res = $stmt -> fetchAll();

		// print_r($sql_res); die;

		// flattering results
		foreach ($sql_res as $tmp) {
			foreach ($tmp as $tmp_key => $tmp_value) {
				if (!isset($res[$tmp_key]))
					$res[$tmp_key] = $tmp_value;
				else {
					if (is_array($res[$tmp_key]))
					{
						if (!in_array($tmp_value, $res[$tmp_key]))
							$res[$tmp_key][] = $tmp_value;
					} else {
						if ($res[$tmp_key] != $tmp_value)
						{
							$res[$tmp_key] = array($res[$tmp_key]);
							$res[$tmp_key][] = $tmp_value;
						}
					}
				}
			}
		}


	 
		if (is_array($res['image']))
			$res['image'] = $res['image'][0];

		// neighboring placesby id

		// print_r($res); die;

		$sql_query = '

			(SELECT id,name,slug from places where id > '.$id.' limit 4)
			UNION
			(SELECT id,name,slug from places where id = (select max(id) from places where id < '.$id.'))
		';

		$stmt = $this->db->prepare($sql_query);
		$stmt -> execute();
		
		$sql_res = $stmt -> fetchAll();

		$res['neighbors'] = array();

		foreach ($sql_res as $key => $value) {
			$res['neighbors'][] = array('name'=>$value['name'], 'id'=>$value['id'], 'slug'=>$value['slug']);
		}


		/* Comments
		* CMS has an option to drip feed comments no matter if they are dated pre or post today's date. 
		* Here we are checking how many comments can be published based on options in config.php
		*/
		$max_comments = MAX_COMMENTS_PER_PAGE;

		if (defined('POSTPONED_COMMENT_PUBLISH') and POSTPONED_COMMENT_PUBLISH === true) {

			$now = time(); 
			$start_date = strtotime(FIRST_ITEM_DATE); //strtotime($res['date_created']);
			$datediff = $now - $start_date;
			$datediff =  round($datediff / (60 * 60 * 24));

			$max_comments = round($datediff / PUBLISH_ONE_COMMENT_EACH_DAYS); // 1 comment each "PUBLISH_ONE_COMMENT_EACH_DAYS" days

			if ($max_comments<MINIMUM_COMMENTS)
				$max_comments = MINIMUM_COMMENTS;

			// making early added items have MINIMUM_COMMENTS_FIRST_items comments
			// if (strtotime($res['date_created']) < strtotime(FIRST_ITEMS_LATEST_DATE) and $max_comments < MINIMUM_COMMENTS_FIRST_ITEMS)
			// 	$max_comments = MINIMUM_COMMENTS_FIRST_ITEMS;

			// no more than MAX_COMMENTS_PER_PAGE will be displayed
			if ($max_comments > MAX_COMMENTS_PER_PAGE)
				$max_comments = MAX_COMMENTS_PER_PAGE;
		}

		// user comments as a stand-alone query

		// $sql_query = '

		// 	SELECT

		// 		comments.text as text,
		// 		comments.title as title,
		// 		comments.avatar as avatar,
		// 		comments.rating as rating,
		// 		comments.author as author

		// 	from comments 

		// 	where
		// 	user_submit = 1 and
	 
		// 	comments.items_id = '.$id.' 
		// 	ORDER BY date
		// 	limit '.$max_comments.'
		// ';

		// $stmt = $this->db->prepare($sql_query); // stmt = statement
		// $stmt -> execute();
		
		// $res['comments'] = $stmt -> fetchAll();

		// all comments


		$sql_query = '

			SELECT

				place_reviews.review_text as text,
				-- place_reviews.title as title,
				-- place_reviews.avatar as avatar,
				place_reviews.rating as rating,
				place_reviews.user_name as author,
				place_reviews.publish_time as date

			from place_reviews 

			where
			-- user_submit is NULL and
			-- date <= CURDATE() and
			place_reviews.place_id = '.$id.' 
			ORDER BY date DESC
			limit ' .$max_comments;
		

		$stmt = $this->db->prepare($sql_query); // stmt = statement
		$stmt -> execute();
		
		$res['comments'] =  $stmt -> fetchAll(); //array_merge($res['comments'],$stmt -> fetchAll());

		// print_r($res['comments']);


		$t = '';
		foreach ($res['comments'] as $v) {
			$t .= $v['text'];
		}


		if (count($res['comments'])<1 or strlen($t)<80)
		{
			$last_digit = substr($id, 0, 1).substr($id,-1);
			$last_digit = $last_digit*137;

			$sql_query = '

			SELECT

				ANY_VALUE(place_reviews.review_text) as text,
				-- reviews.title as title,
				-- reviews.avatar as avatar,
				ANY_VALUE(place_reviews.rating) as rating,
				ANY_VALUE(place_reviews.user_name) as author,
				ANY_VALUE(place_reviews.publish_time) as date,
				ANY_VALUE(place_reviews.place_id) as place_id,

				places.id, 
				places.name,
				places.slug,
				places.image 

			from place_reviews 

			join places ON (places.id = place_reviews.place_id)
	 
			where
				LENGTH(place_reviews.review_text)>100
				and
				-- cylex.image is not null
			-- and 
				places.id > '.($id + $last_digit).'

			group by place_reviews.place_id

			limit 2
			';

			$stmt = $this->db->prepare($sql_query); // stmt = statement
			$stmt -> execute();

			$res['neighbor_comments'] = $sql_res = $stmt -> fetchAll();

			// print_r($res['neighbor_comments']); die;
		}

		$q = '

			SELECT 

				place_open_hours.day,
				place_open_hours.open_interval

			from place_open_hours

			where place_open_hours.place_id = '.$id.'
		';

		$stmt = $this->db->prepare($q); // stmt = statement
		$stmt -> execute();
		
		$res['timetable'] =  $stmt -> fetchAll(); //array_merge($res['comments'],$stmt -> fetchAll());

		// print_r($res['timetable']); die;

		return $res;

	}

}

  
