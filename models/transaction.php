<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Users
 *
 * This model represents user authentication data. It operates the following tables:
 * - user account data,
 * - user profiles
 *
 * @package	Tank_auth
 * @author	Ilya Konyukhov (http://konyukhov.com/soft/)
 */
class Transaction extends CI_Model
{
	private $table_name			= 'transactions';			// user accounts

	function __construct()
	{
		parent::__construct();

		$ci =& get_instance();
	}

	function create($data)
	{
		if ($this->db->insert($this->table_name, $data))
		 {
			$transaction_id = $this->db->insert_id();
			return array('transaction_id' => $transaction_id);
		}
		return NULL;
	}

	function create_subscription($data)
	{
		if ($this->db->insert('subscriptions', $data))
		 {
			$subscription_id = $this->db->insert_id();
			return array('subscription_id' => $subscription_id);
		}
		return NULL;
	}
}

/* End of file users.php */
/* Location: ./application/models/auth/users.php */
