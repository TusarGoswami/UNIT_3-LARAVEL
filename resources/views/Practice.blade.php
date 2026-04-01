<h2> Age verification </h2>
@if($age < 18)
<p> Not eligible for voting </p>
@elseif($age >= 18 && $age <= 65)
<p> You can cast vote </p>
@else
<p> You need special voting </p>
@endif