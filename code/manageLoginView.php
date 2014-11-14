<?php
require_once 'pageView.php';
class ManageLoginView extends PageView {
	public function build() {
		include('manageLoginTemplate.php');
	}
}
