<?php
class ControllerAccountRate extends Controller{
	public function index() {
		if (!$this->customer->isLogged()) {
			$this->session->data['redirect'] = $this->url->link('account/rate', '', true);

			$this->response->redirect($this->url->link('account/login', '', true));
		}

		$this->load->language('account/rate');

		$this->document->setTitle($this->language->get('heading_title'));
		
		$url = '';

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}
		
		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_account'),
			'href' => $this->url->link('account/account', '', true)
		);
		
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('account/order', $url, true)
		);

		if (isset($this->request->get['page'])) {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		// select product
		$data['products'] = array();

		$this->load->model('account/rate');

		$order_total = $this->model_account_rate->getTotalOrders();

		$products = $this->model_account_rate->getOrderProducts(($page - 1) * 10, 10);

		foreach ($products as $product) {
			$product_total = $this->model_account_rate->getTotalOrderProductsByOrderId($product['order_id']);

			$data['products'][] = array(
				'product_id'	=> $product['product_id'],
				'order_id'     => $product['order_id'],
				'name'     => $product['name'],
				'model'    => $product['model'],
				'quantity' => $product['quantity'],
				'rate_status' => $product['rate_status'],
				'href'      => $this->url->link('product/product', 'product_id=' . $product['product_id'])
			);
		}
		// end

		$pagination = new Pagination();
		$pagination->total = $order_total;
		$pagination->page = $page;
		$pagination->limit = 10;
		$pagination->url = $this->url->link('account/rate', 'page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($order_total) ? (($page - 1) * 10) + 1 : 0, ((($page - 1) * 10) > ($order_total - 10)) ? $order_total : ((($page - 1) * 10) + 10), $order_total, ceil($order_total / 10));

		// rating status
		if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
			
			$ordernum =  $_POST['ordernum'];
			$ratestatus = $_POST['rate_status'];
			$productid = $this->model_account_rate->updateRate($ordernum, $ratestatus);

			$this->model_account_rate->addReview($ordernum);
			// redirect

			$this->response->redirect($this->url->link('product/product','product_id='. $productid));
		}

		if (isset($this->request->post['rate_status'])) {
			$data['rate_status'] = $this->request->post['rate_status'];
		} else {
			$data['rate_status'] = '';
		}
		// end
		
		$data['continue'] = $this->url->link('account/account', '', true);

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('account/rate', $data));
	}
}
?>