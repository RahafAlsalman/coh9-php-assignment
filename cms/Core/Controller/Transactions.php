<?php
namespace Core\Controller;
use Core\Base\Controller;
use Core\Helpers\Helper;
use Core\Helpers\Tests;
use Core\Model\transaction;
use Core\Model\Tag;

class Transactions extends Controller
{

    use Tests;

    public function render()
    {
        if (!empty($this->view))
            $this->view();
    }

    function __construct()
    {
        $this->auth();
      $this->admin_view(true);
    }

    /**
     * Gets all items
     *
     * @return array
     */
    public function index()
    {
       $this->permissions(['item:read']);
        $this->view = 'transactions.index';
        $transaction = new Transaction; // new model items.
        $this->data['transactions'] = $transaction->get_all();
        $this->data['transactions_count'] = count($transaction->get_all());
        
    }

    public function single()
    {

        self::check_if_exists(isset($_GET['id']), "Please make sure the id is exists");

     $this->permissions(['item:read']);
        $this->view = 'transactions.single';
        $transactions = new Transaction();
        $this->data['transactions'] = $transactions->get_by_id($_GET['id']);
    }

    /**
     * Display the HTML form for post creation
     *
     * @return void
     */
    public function create()
    {
        $this->permissions(['item:create']);
        $this->view = 'transactions.create';
    }

    /**
     * Creates new post
     *
     * @return void
     */
    public function store()
    {
       $this->permissions(['item:create']);
        $transaction = new Transaction();
       // this is the id of the current logged in user. Because the post creator would be the same logged in user.
       $transaction->create($_POST);
      
        Helper::redirect('/transactions');
    }

    /**
     * Display the HTML form for post update
     *
     * @return void
     */
    public function edit()
    {
    $this->permissions(['item:read', 'item:update']);
        $this->view = 'transactions.edit';
        $transactions= new Transaction();
        $tag = new Tag();
        $selected_transaction = $$transactions->get_by_id($_GET['id']);
        $selected_transaction->tags = $tag->get_all();
        $this->data['transaction'] = $selected_transaction;
    }

    /**
     * Updates the post
     *
     * @return void
     */
    public function update()
    {
        $this->permissions(['item:read', 'item:update']);
        $transaction = new Transaction();

        // Handle posts_tags relations
        $transaction_id = $_POST['id'];
       $related_tags = $_POST['tags'] ?? null;
        // if (!empty($related_tags)) {
        //     foreach ($related_tags as $tag_id) {
        //         $sql = "INSERT INTO _tags (item_id, tag_id) VALUES ($transaction_id, $tag_id)";
        //         $transaction->connection->query($sql);
        //     }
        // }
        unset($_POST['tags']);

        $transaction->update($_POST);
        Helper::redirect('/transaction?id=' . $_POST['id']);
    }

    /**
     * Delete the post
     *
     * @return void
     */
    public function delete()
    {
        $this->permissions(['item:read', 'item:delete']);
       $transaction = new Transaction();
       $transaction->delete($_GET['id']);
        Helper::redirect('/transactions');
    }
}