<!-- <h2> This is the which is returned via controller</h2> -->

<h2>Current URL generation</h2>
<p> The current url is : {{ url()->current() }}</p>
<p> The full url is : {{ url()->full() }}</p>
<p> The request url is : {{ request()->url()}}</p>
<p> The full request url is : {{ request()->fullUrl() }}</p>




//Create one patent layout called myParent, inside that you have to create a blade template called home.blade.php, inside that template there will be navigation like(Home, About, Contact, profile) there must be on image, that should be in landscape format, and then you have to add a footter section which contains copyright and year details. Now you have to create three views in the views folder(home, about, contact), in that views you have to add the details in the corresponding colors and include the parent content only in two pages in your choice 


//Create a middleware globaly where you need to authorize url with token 123a, if you are authorized then a new view will be returned which will display your feature, otherwise it will showcase custom error message. "You are outsider"