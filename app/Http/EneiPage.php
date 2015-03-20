<? namespace App\Http\Controllers;

class EneiPageController extends Controller {
	public function index(){
		return View::make('index');
	}
}