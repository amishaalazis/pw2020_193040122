<?php
	$tulisan = 
	"I know your eyes in the morning sun
<br> I feel you touch me in the pouring rain
<br> And the moment that you wander far from me
<br> I want to feel you in my arms again
<br> And you come to me on a summer breeze
<br> Keep me warm in your love, then you softly leave
<br> And it's me you need to show
<br> How deep is your love, how deep is your love
<br> How deep is your love?
<br> I really mean to learn
<br> 'Cause we're living in a world of fools
<br> Breaking us down when they all should let us be
<br> We belong to you and me
<br> I believe in you
<br> You know the door to my very soul
<br> You're the light in my deepest, darkest hour
<br> You're my savior when I fall
<br> And you may not think I care for you
<br> When you know down inside that I really do
<br> And it's me you need to show
<br> How deep is your love, how deep is your love
<br> How deep is your love?
<br> I really mean to learn
<br> 'Cause we're living in a world of fools
<br> Breaking us down when they all should let us be
<br> We belong to you and me
<br> And you come to me on a summer breeze
<br> Keep me warm in your love, then you softly leave
<br> And it's me you need to show
<br> How deep is your love, how deep is your love
<br> How deep is your love?
<br> I really mean to learn
<br> 'Cause we're living in a world of fools
<br> Breaking us down when they all should let us be
<br> We belong to you and me
<br> How deep is your love, how deep is your love
<br> I really mean to learn
<br> 'Cause we're living in a world of fools
<br> Breaking us down when they all should let us be
<br> We belong to you and me
<br> How deep is your love, how deep is your love
<br> I really mean to learn
<br> 'Cause we're living in a world of fools
<br> Breaking us down when they all should let us be
<br> We belong to you and me";

	$tulisan1 = str_replace("a", "o", $tulisan);
	$tulisan2 = str_replace("i", "o", $tulisan1);
	$tulisan3 = str_replace("u", "o", $tulisan2);
	$tulisan4 = str_replace("e", "o", $tulisan2);

	echo "$tulisan4";

 ?>