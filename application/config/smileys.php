<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
  | -------------------------------------------------------------------
  | SMILEYS
  | -------------------------------------------------------------------
  | This file contains an array of smileys for use with the emoticon helper.
  | Individual images can be used to replace multiple smileys.  For example:
  | :-) and :) use the same image replacement.
  |
  | Please see user guide for more info:
  | https://codeigniter.com/user_guide/helpers/smiley_helper.html
  |
 */
$smileys = array(
//	smiley			image name						width	height	alt
    ':grinning:'                     => array('1f600.svg', '30px', '30px'),
    ':grin:'                         => array('1f601.svg', '30px', '30px'),
    ':joy:'                          => array('1f602.svg', '30px', '30px', ''),
    ':rofl:'                         => array('1f923.svg', '30px', '30px', ''),
    ':smiley:'                       => array('1f603.svg', '30px', '30px', ''),
    ':smile:'                        => array('1f604.svg', '30px', '30px', ''),
    ':sweat_smile:'                  => array('1f605.svg', '30px', '30px', ''),
    ':laughing:'                     => array('1f606.svg', '30px', '30px', ''),
    ':wink:'                         => array('1f609.svg', '30px', '30px', ''),
    ':blush:'                        => array('1f60a.svg', '30px', '30px', ''),
    ':yum:'                          => array('1f60b.svg', '30px', '30px', ''),
    ':sunglasses:'                   => array('1f60e.svg', '30px', '30px', ''),
    ':heart_eyes:'                   => array('1f60d.svg', '30px', '30px', ''),
    ':kissing_heart:'                => array('1f618.svg', '30px', '30px', ''),
    ':kissing:'                      => array('1f617.svg', '30px', '30px', ''),
    ':kissing_smiling_eyes:'         => array('1f619.svg', '30px', '30px', ''),
    ':kissing_closed_eyes:'          => array('1f61a.svg', '30px', '30px', ''),
    ':drelaxed:'                     => array('263a.svg', '30px', '30px', ''),
    ':slight_smile:'                 => array('1f642.svg', '30px', '30px', ''),
    ':hugging:'                      => array('1f917.svg', '30px', '30px', ''),
    ':thinking:'                     => array('1f914.svg', '30px', '30px', ''),
    ':neutral_face:'                 => array('1f610.svg', '30px', '30px', ''),
    ':expressionless:'               => array('1f611.svg', '30px', '30px', ''),
    ':no_mouth:'                     => array('1f636.svg', '30px', '30px', ''),
    ':rolling_eyes:'                 => array('1f644.svg', '30px', '30px', ''),
    ':smirk:'                        => array('1f60f.svg', '30px', '30px', ''),
    ':persevere:'                    => array('1f623.svg', '30px', '30px', ''),
    ':disappointed_relieved:'        => array('1f625.svg', '30px', '30px', ''),
    ':open_mouth:'                   => array('1f62e.svg', '30px', '30px', ''),
    ':zipper_mouth:'                 => array('1f910.svg', '30px', '30px', ''),
    ':hushed:'                       => array('1f62f.svg', '30px', '30px', ''),
    ':sleepy:'                       => array('1f62a.svg', '30px', '30px', ''),
    ':tired_face:'                   => array('1f62b.svg', '30px', '30px', ''),
    ':sleeping:'                     => array('1f634.svg', '30px', '30px', ''),
    ':relieved:'                     => array('1f60c.svg', '30px', '30px', ''),
    ':nerd:'                         => array('1f913.svg', '30px', '30px', ''),
    ':stuck_out_tongue:'             => array('1f61b.svg', '30px', '30px', ''),
    ':stuck_out_tongue_winking_eye:' => array('1f61c.svg', '30px', '30px', ''),
    ':stuck_out_tongue_closed_eyes:' => array('1f61d.svg', '30px', '30px', ''),
    ':drooling_face:'                => array('1f924.svg', '30px', '30px', ''),
    ':unamused:'                     => array('1f612.svg', '30px', '30px', ''),
    ':sweat:'                        => array('1f613.svg', '30px', '30px', ''),
    ':pensive:'                      => array('1f614.svg', '30px', '30px', ''),
    ':confused:'                     => array('1f615.svg', '30px', '30px', ''),
    ':upside_down:'                  => array('1f643.svg', '30px', '30px', ''),
    ':money_mouth:'                  => array('1f911.svg', '30px', '30px', ''),
    ':astonished:'                   => array('1f632.svg', '30px', '30px', ''),
    ':frowning2:'                    => array('2639.svg', '30px', '30px', ''),
    ':slight_frown:'                 => array('1f641.svg', '30px', '30px', ''),
    ':confounded:'                   => array('1f616.svg', '30px', '30px', ''),
    ':disappointed:'                 => array('1f61e.svg', '30px', '30px', ''),
    ':worried:'                      => array('1f61f.svg', '30px', '30px', ''),
    ':triumph:'                      => array('1f624.svg', '30px', '30px', ''),
    ':cry:'                          => array('1f622.svg', '30px', '30px', ''),
    ':sob:'                          => array('1f62d.svg', '30px', '30px', ''),
    ':frowning:'                     => array('1f626.svg', '30px', '30px', ''),
    ':anguished:'                    => array('1f627.svg', '30px', '30px', ''),
    ':fearful:'                      => array('1f628.svg', '30px', '30px', ''),
    ':weary:'                        => array('1f629.svg', '30px', '30px', ''),
    ':grimacing:'                    => array('1f62c.svg', '30px', '30px', ''),
    ':cold_sweat:'                   => array('1f630.svg', '30px', '30px', ''),
    ':scream:'                       => array('1f631.svg', '30px', '30px', ''),
    ':flushed:'                      => array('1f633.svg', '30px', '30px', ''),
    ':dizzy_face:'                   => array('1f635.svg', '30px', '30px', ''),
    ':rage:'                         => array('1f621.svg', '30px', '30px', ''),
    ':angry:'                        => array('1f620.svg', '30px', '30px', ''),
    ':innocent:'                     => array('1f607.svg', '30px', '30px', ''),
    ':cowboy:'                       => array('1f920.svg', '30px', '30px', ''),
    ':clown:'                        => array('1f921.svg', '30px', '30px', ''),
    ':lying_face:'                   => array('1f925.svg', '30px', '30px', ''),
    ':mask:'                         => array('1f637.svg', '30px', '30px', ''),
    ':thermometer_face:'             => array('1f912.svg', '30px', '30px', ''),
    ':head_bandage:'                 => array('1f915.svg', '30px', '30px', ''),
    ':nauseated_face:'               => array('1f922.svg', '30px', '30px', ''),
    ':sneezing_face:'                => array('1f927.svg', '30px', '30px', ''),
    ':smiling_imp:'                  => array('1f608.svg', '30px', '30px', ''),
    ':imp:'                          => array('1f47f.svg', '30px', '30px', ''),
    ':japanese_ogre:'                => array('1f479.svg', '30px', '30px', ''),
    ':japanese_goblin:'              => array('1f47a.svg', '30px', '30px', ''),
    ':skull:'                        => array('1f480.svg', '30px', '30px', ''),
    ':ghost:'                        => array('1f47b.svg', '30px', '30px', ''),
    ':alien:'                        => array('1f47d.svg', '30px', '30px', ''),
    ':robot:'                        => array('1f916.svg', '30px', '30px', ''),
    ':poop:'                         => array('1f4a9.svg', '30px', '30px', ''),
    ':smiley_cat:'                   => array('1f63a.svg', '30px', '30px', ''),
    ':smile_cat:'                    => array('1f638.svg', '30px', '30px', ''),
    ':joy_cat:'                      => array('1f639.svg', '30px', '30px', ''),
    ':heart_eyes_cat:'               => array('1f63b.svg', '30px', '30px', ''),
    ':smirk_cat:'                    => array('1f63c.svg', '30px', '30px', ''),
    ':kissing_cat:'                  => array('1f63d.svg', '30px', '30px', ''),
    ':scream_cat:'                   => array('1f640.svg', '30px', '30px', ''),
    ':crying_cat_face:'              => array('1f63f.svg', '30px', '30px', ''),
    ':pouting_cat:'                  => array('1f63e.svg', '30px', '30px', ''),
    ':boy:'                          => array('1f466.svg', '30px', '30px', ''),
    ':girl:'                         => array('1f467.svg', '30px', '30px', ''),
    ':man:'                          => array('1f468.svg', '30px', '30px', ''),
    ':woman:'                        => array('1f469.svg', '30px', '30px', ''),
    ':older_man:'                    => array('1f474.svg', '30px', '30px', ''),
    ':older_woman:'                  => array('1f475.svg', '30px', '30px', ''),
    ':baby:'                         => array('1f476.svg', '30px', '30px', ''),
    ':angel:'                        => array('1f47c.svg', '30px', '30px', ''),
    ':cop:'                          => array('1f46e.svg', '30px', '30px', ''),
    ':spy:'                          => array('1f575.svg', '30px', '30px', ''),
    ':guardsman:'                    => array('1f482.svg', '30px', '30px', ''),
    ':construction_worker:'          => array('1f477.svg', '30px', '30px', ''),
    ':man_with_turban:'              => array('1f473.svg', '30px', '30px', ''),
    ':person_with_blond_hair:'       => array('1f471.svg', '30px', '30px', ''),
    ':santa:'                        => array('1f385.svg', '30px', '30px', ''),
    ':mrs_claus:'                    => array('1f936.svg', '30px', '30px', ''),
    ':princess:'                     => array('1f478.svg', '30px', '30px', ''),
    ':prince:'                       => array('1f934.svg', '30px', '30px', ''),
    ':bride_with_veil:'              => array('1f470.svg', '30px', '30px', ''),
    ':man_in_tuxedo:'                => array('1f935.svg', '30px', '30px', ''),
    ':pregnant_woman:'               => array('1f930.svg', '30px', '30px', ''),
    ':man_with_gua_pi_mao:'          => array('1f472.svg', '30px', '30px', ''),
    ':person_frowning:'              => array('1f64d.svg', '30px', '30px', ''),
    ':person_with_pouting_face:'     => array('1f64e.svg', '30px', '30px', ''),
    ':no_good:'                      => array('1f645.svg', '30px', '30px', ''),
    ':ok_woman:'                     => array('1f646.svg', '30px', '30px', ''),
    ':information_desk_person:'      => array('1f481.svg', '30px', '30px', ''),
    ':raising_hand:'                 => array('1f64b.svg', '30px', '30px', ''),
    ':bow:'                          => array('1f647.svg', '30px', '30px', ''),
    ':face_palm:'                    => array('1f926.svg', '30px', '30px', ''),
    ':shrug:'                        => array('1f937.svg', '30px', '30px', ''),
    ':massage:'                      => array('1f486.svg', '30px', '30px', ''),
    ':haircut:'                      => array('1f487.svg', '30px', '30px', ''),
    ':walking:'                      => array('1f6b6.svg', '30px', '30px', ''),
    ':runner:'                       => array('1f3c3.svg', '30px', '30px', ''),
    ':dancer:'                       => array('1f483.svg', '30px', '30px', ''),
    ':man_dancing:'                  => array('1f57a.svg', '30px', '30px', ''),
    ':dancers:'                      => array('1f46f.svg', '30px', '30px', ''),
    ':speaking_head:'                => array('1f5e3.svg', '30px', '30px', ''),
    ':bust_in_silhouette:'           => array('1f464.svg', '30px', '30px', ''),
    ':busts_in_silhouette:'          => array('1f465.svg', '30px', '30px', ''),
    ':couple:'                       => array('1f46b.svg', '30px', '30px', ''),
    ':two_men_holding_hands:'        => array('1f46c.svg', '30px', '30px', ''),
    ':two_women_holding_hands:'      => array('1f46d.svg', '30px', '30px', ''),
    ':couplekiss:'                   => array('1f48f.svg', '30px', '30px', ''),
    ':kiss_mm:'                      => array('1f468-2764-1f48b-1f468.svg', '30px', '30px', ''),
    ':kiss_ww:'                      => array('1f469-2764-1f48b-1f469.svg', '30px', '30px', ''),
    ':couple_with_heart:'            => array('1f491.svg', '30px', '30px', ''),
    ':couple_mm:'                    => array('1f468-2764-1f468.svg', '30px', '30px', ''),
    ':couple_ww:'                    => array('1f469-2764-1f469.svg', '30px', '30px', ''),
    ':family:'                       => array('1f46a.svg', '30px', '30px', ''),
    ':family_mwg'                    => array('1f468-1f469-1f467.svg', '30px', '30px', ''),
    ':family_mwgb:'                  => array('1f468-1f469-1f467-1f466.svg', '30px', '30px', ''),
    ':family_mwbb:'                  => array('1f468-1f469-1f466-1f466.svg', '30px', '30px', ''),
    ':family_mwgg:'                  => array('1f468-1f469-1f467-1f467.svg', '30px', '30px', ''),
    ':family_mmb:'                   => array('1f468-1f468-1f466.svg', '30px', '30px', ''),
    ':family_mmg:'                   => array('1f468-1f468-1f467.svg', '30px', '30px', ''),
    ':family_mmgb:'                  => array('1f468-1f468-1f467-1f466.svg', '30px', '30px', ''),
    ':family_mmbb:'                  => array('1f468-1f468-1f466-1f466.svg', '30px', '30px', ''),
    ':family_mmgg:'                  => array('1f468-1f468-1f467-1f467.svg', '30px', '30px', ''),
    ':family_wwb:'                   => array('1f469-1f469-1f466.svg', '30px', '30px', ''),
    ':family_wwg:'                   => array('1f469-1f469-1f467.svg', '30px', '30px', ''),
    ':family_wwgb:" '                => array('1f469-1f469-1f467-1f466.svg', '30px', '30px', ''),
    ':family_wwbb:" '                => array('1f469-1f469-1f466-1f466.svg', '30px', '30px', ''),
    ':family_wwgg:" '                => array('1f469-1f469-1f467-1f467.svg', '30px', '30px', ''),
    ':muscle:'                       => array('1f4aa.svg', '30px', '30px', ''),
    ':selfie:'                       => array('1f933.svg', '30px', '30px', ''),
    ':point_left:'                   => array('1f448.svg', '30px', '30px', ''),
    ':point_right:'                  => array('1f449.svg', '30px', '30px', ''),
    ':point_up:'                     => array('261d.svg', '30px', '30px', ''),
    ':point_up_2:'                   => array('1f446.svg', '30px', '30px', ''),
    ':middle_finger:'                => array('1f595.svg', '30px', '30px', ''),
    ':point_down:'                   => array('1f447.svg', '30px', '30px', ''),
    ':v:'                            => array('270c.svg', '30px', '30px', ''),
    ':fingers_crossed:'              => array('1f91e.svg', '30px', '30px', ''),
    ':vulcan:'                       => array('1f596.svg', '30px', '30px', ''),
    ':metal:'                        => array('1f918.svg', '30px', '30px', ''),
    ':call_me:'                      => array('1f919.svg', '30px', '30px', ''),
    ':hand_splayed:'                 => array('1f590.svg', '30px', '30px', ''),
    ':raised_hand:'                  => array('270b.svg', '30px', '30px', ''),
    ':ok_hand:'                      => array('1f44c.svg', '30px', '30px', ''),
    ':thumbsup:'                     => array('1f44d.svg', '30px', '30px', ''),
    ':thumbsdown:'                   => array('1f44e.svg', '30px', '30px', ''),
    ':fist:'                         => array('270a.svg', '30px', '30px', ''),
    ':punch:'                        => array('1f44a.svg', '30px', '30px', ''),
    ':left_facing_fist:'             => array('1f91b.svg', '30px', '30px', ''),
    ':right_facing_fist:'            => array('1f91c.svg', '30px', '30px', ''),
    ':raised_back_of_hand:'          => array('1f91a.svg', '30px', '30px', ''),
    ':wave:'                         => array('1f44b.svg', '30px', '30px', ''),
    ':clap:'                         => array('1f44f.svg', '30px', '30px', ''),
    ':writing_hand:'                 => array('270d.svg', '30px', '30px', ''),
    ':open_hands:'                   => array('1f450.svg', '30px', '30px', ''),
    ':raised_hands:'                 => array('1f64c.svg', '30px', '30px', ''),
    ':pray:'                         => array('1f64f.svg', '30px', '30px', ''),
    ':handshake:'                    => array('1f91d.svg', '30px', '30px', ''),
    ':nail_care:'                    => array('1f485.svg', '30px', '30px', ''),
    ':ear:'                          => array('1f442.svg', '30px', '30px', ''),
    ':nose:'                         => array('1f443.svg', '30px', '30px', ''),
    ':footprints:'                   => array('1f463.svg', '30px', '30px', ''),
    ':eyes:'                         => array('1f440.svg', '30px', '30px', ''),
    ':eye:'                          => array('1f441.svg', '30px', '30px', ''),
    ':tongue:'                       => array('1f445.svg', '30px', '30px', ''),
    ':lips:'                         => array('1f444.svg', '30px', '30px', ''),
    ':kiss:'                         => array('1f48b.svg', '30px', '30px', ''),
    ':zzz:'                          => array('1f4a4.svg', '30px', '30px', ''),
    ':eyeglasses:'                   => array('1f453.svg', '30px', '30px', ''),
    ':dark_sunglasses:'              => array('1f576.svg', '30px', '30px', ''),
    ':necktie:'                      => array('1f454.svg', '30px', '30px', ''),
    ':shirt:'                        => array('1f455.svg', '30px', '30px', ''),
    ':jeans:'                        => array('1f456.svg', '30px', '30px', ''),
    ':dress:'                        => array('1f457.svg', '30px', '30px', ''),
    ':kimono:'                       => array('1f458.svg', '30px', '30px', ''),
    ':bikini:'                       => array('1f459.svg', '30px', '30px', ''),
    ':womans_clothes:'               => array('1f45a.svg', '30px', '30px', ''),
    ':purse:'                        => array('1f45b.svg', '30px', '30px', ''),
    ':handbag:'                      => array('1f45c.svg', '30px', '30px', ''),
    ':pouch:'                        => array('1f45d.svg', '30px', '30px', ''),
    ':school_satchel:'               => array('1f392.svg', '30px', '30px', ''),
    ':mans_shoe:'                    => array('1f45e.svg', '30px', '30px', ''),
    ':athletic_shoe:'                => array('1f45f.svg', '30px', '30px', ''),
    ':high_heel:'                    => array('1f460.svg', '30px', '30px', ''),
    ':sandal:'                       => array('1f461.svg', '30px', '30px', ''),
    ':boot:'                         => array('1f462.svg', '30px', '30px', ''),
    ':crown:'                        => array('1f451.svg', '30px', '30px', ''),
    ':womans_hat:'                   => array('1f452.svg', '30px', '30px', ''),
    ':tophat:'                       => array('1f3a9.svg', '30px', '30px', ''),
    ':mortar_board:'                 => array('1f393.svg', '30px', '30px', ''),
    ':helmet_with_cross:'            => array('26d1.svg', '30px', '30px', ''),
    ':lipstick:'                     => array('1f484.svg', '30px', '30px', ''),
    ':ring:'                         => array('1f48d.svg', '30px', '30px', ''),
    ':closed_umbrella:'              => array('1f302.svg', '30px', '30px', ''),
    ':briefcase:'                    => array('1f4bc.svg', '30px', '30px', '')
);

// ':-)'			=>	array('grin.gif',			'19',	'19',	'grin'),
	// ':lol:'			=>	array('lol.gif',			'19',	'19',	'LOL'),
	// ':cheese:'		=>	array('cheese.gif',			'19',	'19',	'cheese'),
	// ':)'			=>	array('smile.gif',			'19',	'19',	'smile'),
	// ';-)'			=>	array('wink.gif',			'19',	'19',	'wink'),
	// ';)'			=>	array('wink.gif',			'19',	'19',	'wink'),
	// ':smirk:'		=>	array('smirk.gif',			'19',	'19',	'smirk'),
	// ':roll:'		=>	array('rolleyes.gif',		'19',	'19',	'rolleyes'),
	// ':-S'			=>	array('confused.gif',		'19',	'19',	'confused'),
	// ':wow:'			=>	array('surprise.gif',		'19',	'19',	'surprised'),
	// ':bug:'			=>	array('bigsurprise.gif',	'19',	'19',	'big surprise'),
	// ':-P'			=>	array('tongue_laugh.gif',	'19',	'19',	'tongue laugh'),
	// '%-P'			=>	array('tongue_rolleye.gif',	'19',	'19',	'tongue rolleye'),
	// ';-P'			=>	array('tongue_wink.gif',	'19',	'19',	'tongue wink'),
	// ':P'			=>	array('raspberry.gif',		'19',	'19',	'raspberry'),
	// ':blank:'		=>	array('blank.gif',			'19',	'19',	'blank stare'),
	// ':long:'		=>	array('longface.gif',		'19',	'19',	'long face'),
	// ':ohh:'			=>	array('ohh.gif',			'19',	'19',	'ohh'),
	// ':grrr:'		=>	array('grrr.gif',			'19',	'19',	'grrr'),
	// ':gulp:'		=>	array('gulp.gif',			'19',	'19',	'gulp'),
	// '8-/'			=>	array('ohoh.gif',			'19',	'19',	'oh oh'),
	// ':down:'		=>	array('downer.gif',			'19',	'19',	'downer'),
	// ':red:'			=>	array('embarrassed.gif',	'19',	'19',	'red face'),
	// ':sick:'		=>	array('sick.gif',			'19',	'19',	'sick'),
	// ':shut:'		=>	array('shuteye.gif',		'19',	'19',	'shut eye'),
	// ':-/'			=>	array('hmm.gif',			'19',	'19',	'hmmm'),
	// '>:('			=>	array('mad.gif',			'19',	'19',	'mad'),
	// ':mad:'			=>	array('mad.gif',			'19',	'19',	'mad'),
	// '>:-('			=>	array('angry.gif',			'19',	'19',	'angry'),
	// ':angry:'		=>	array('angry.gif',			'19',	'19',	'angry'),
	// ':zip:'			=>	array('zip.gif',			'19',	'19',	'zipper'),
	// ':kiss:'		=>	array('kiss.gif',			'19',	'19',	'kiss'),
	// ':ahhh:'		=>	array('shock.gif',			'19',	'19',	'shock'),
	// ':coolsmile:'	=>	array('shade_smile.gif',	'19',	'19',	'cool smile'),
	// ':coolsmirk:'	=>	array('shade_smirk.gif',	'19',	'19',	'cool smirk'),
	// ':coolgrin:'	=>	array('shade_grin.gif',		'19',	'19',	'cool grin'),
	// ':coolhmm:'		=>	array('shade_hmm.gif',		'19',	'19',	'cool hmm'),
	// ':coolmad:'		=>	array('shade_mad.gif',		'19',	'19',	'cool mad'),
	// ':coolcheese:'	=>	array('shade_cheese.gif',	'19',	'19',	'cool cheese'),
	// ':vampire:'		=>	array('vampire.gif',		'19',	'19',	'vampire'),
	// ':snake:'		=>	array('snake.gif',			'19',	'19',	'snake'),
	// ':exclaim:'		=>	array('exclaim.gif',		'19',	'19',	'exclaim'),
	// ':question:'	=>	array('question.gif',		'19',	'19',	'question')
	


