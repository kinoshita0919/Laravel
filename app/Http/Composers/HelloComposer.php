<?php

namespace App\Http\Composers;

use Illuminate\View\View;
/**
 * Description of HelloComposer
 *
 * @author kinoshita
 */
class HelloComposer {
    public function compose(View $view)
    {
        $view->with('view_message', 'this view is "' . $view->getName() . '" !!');
    }
}
