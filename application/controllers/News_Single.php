<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_Single extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index($news_id)
	{
		$news = $this->news_model->GetNews($news_id);
		$month_data = $this->news_model->GetNewsMonthPost();
		$category = $this->news_model->GetCategory();

		$this->load->view('news_single', array(
			'data' => $news,
			'month' => $month_data,
			'category' => $category,
			)
		);
	}
}
