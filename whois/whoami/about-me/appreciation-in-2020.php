<?php
$items = [
	[
		'name' => 'Jega',
		'img' => 'man.png',
		'role' => 'Consultant, Trainer',
		'fullWidth' => true,
		'writeup' => wpautop('Hello,
Good Evening Everyone,
Good Evening Imran,

It is nice to give this wonderful message of appreciation for the hard work and sincerity of putting in to get your dream come true; your dream of bringing people together on a common platform where the givers can give and the takers can take.  Your\'s is a wonderful idea.  The moment I spent with you in Coimbatore was very encouraging, you have such a good vision and you have sacrificed many of your personal goals to achieve this dream of yours that too particularly for the benefit of others.

With like-minded people around you and good people who are joining you in your venture I am sure you will be able to make your dreams come true.  Not only this, you are a person of versatile thinking, you think a lot, you think about each and everything that has to be done in a process.  You have both the vertical thinking and the horizontal thinking because of which you are able to create a platform which can accommodate all the people in the society.

A few things which I had observed in the WhatsApp group was really mind blowing right from natural agriculture, the cows, to natural manures, to teaching, to counselling, to psychotherapy, to yoga, a lot of things we have discussed, it only stimulates my mind to do more.  So Imran, wish you all the best in taking YieldMore.org to greater heights and definitely we are all with you for your growth and support.  This is only for that reason because you are thinking more than the "I" you are thinking about the "We and the others".  This is what I appreciate in your vision.

Thank you
All the best
')
	],

	[
		'name' => 'Imran Ali Namazi',
		'img' => 'imran.jpg',
		'role' => 'Founder',
		'writeup' => 'The journey to clarity, focus and confidence takes long sometimes. I\'ve received plenty of encouragement and faith from all of you, my friends.
The picture is a lot clearer now than when i began in 2013 and the goals achievable. Lets toil side by side and win our dreams!'
	],

	[
		'name' => 'Anbarasu J',
		'img' => 'man.png',
		'role' => 'Founder of Ammai Appar Agam',
		'writeup' => 'YieldMore is a bird which will fly high and you are the trainer. Train the bird to spread its wings and fly higher. With its vision you will have a better view of the surrounding so identify the needs of  humanity and focus your services with compassion.'
	],

	[
		'name' => 'A and C',
		'img' => 'man.png',
		'role' => '2 Critics',
		'writeup' => 'Where is the charity? Where is the action? Where is the clarity? Where is the marketplace? Why hasnt any of this taken shape yet?'
	],

	[
		'name' => 'Mustafa Badsha',
		'img' => 'mustafa.jpg',
		'role' => 'Consultant, Social Worker',
		'writeup' => 'YieldMore.org is one of those rare organizations that aims for peace, progress and prosperity for every human soul. I wish em well in all its endeavors.'
	],

/*
	[
		'name' => 'Zaid',
		'img' => 'man.png',
		'role' => 'Supporter',
		'writeup' => 'Nice initiative. We have to make this earth a better place because we came in. That should be our motto. May the Almighty shower his blessing and make the initiative a proactive one. God bless!'
	],

	[
		'name' => 'Sara Kachwalla',
		'img' => 'sara.jpg',
		'role' => 'Consultant, Healer & Life Coach',
		'writeup' => 'I wish Imran and Yield more a fantastic rebirth. It definitely is time for a new awakening and yield more can definitely be a core part in this new world. Wishing the best to manifest.'
	],
*/
];

sectionId('testimonials', 'container');

$img = replaceHtml('%cdn%wellwishers/');

$template = '
<div class="%colSnaps%"><div class="content-box px-3">
	<a name="%name_safe%"></a>
	<h3>
		<img height="90px" src="%img%" class="testimonial-img" alt="%name%">
		%name%, %role%
	</h3>
	<p>
		<i class="bx bxs-quote-alt-left quote-icon-left"></i>
		%writeup%
		<i class="bx bxs-quote-alt-right quote-icon-right"></i>
	</p>
</div></div>

';

echo '<div class="row">' . NEWLINE;
foreach ($items as $item) {
	$item['img'] = $img . urlize($item['img']);
	$item['name_safe'] = urlize($item['name']);
	$item['colSnaps'] = valueIfSetAndNotEmpty($item, 'fullWidth', false) ? 'col-12' : 'col-md-6 col-sm-12';
	echo replaceItems($template, $item, '%');
}
echo '</div>' . NEWLINE;

section('end');
