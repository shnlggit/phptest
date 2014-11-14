<?php
require_once 'pageView.php';
class ManagerLoginView extends PageView {
	public function build() {
		include('managerLoginTemplate.php');
	}
}
