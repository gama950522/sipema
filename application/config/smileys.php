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
    ':grin:'                         => array('1f601.svg', '25', '25'),
    ':joy:'                          => array('1f602.svg', '25', '25', ''),
    ':rofl:'                         => array('1f923.svg', '25', '25', ''),
    ':smiley:'                       => array('1f603.svg', '25', '25', ''),
    ':smile:'                        => array('1f604.svg', '25', '25', ''),
    ':sweat_smile:'                  => array('1f605.svg', '25', '25', ''),
    ':laughing:'                     => array('1f606.svg', '25', '25', ''),
    ':wink:'                         => array('1f609.svg', '25', '25', ''),
    ':blush:'                        => array('1f60a.svg', '25', '25', ''),
    ':yum:'                          => array('1f60b.svg', '25', '25', ''),
    ':sunglasses:'                   => array('1f60e.svg', '25', '25', ''),
    ':heart_eyes:'                   => array('1f60d.svg', '25', '25', ''),
    ':kissing_heart:'                => array('1f618.svg', '25', '25', ''),
    ':kissing:'                      => array('1f617.svg', '25', '25', ''),
    ':kissing_smiling_eyes:'         => array('1f619.svg', '25', '25', ''),
    ':kissing_closed_eyes:'          => array('1f61a.svg', '25', '25', ''),
    ':drelaxed:'                     => array('263a.svg', '25', '25', ''),
    ':slight_smile:'                 => array('1f642.svg', '25', '25', ''),
    ':hugging:'                      => array('1f917.svg', '25', '25', ''),
    ':thinking:'                     => array('1f914.svg', '25', '25', ''),
    ':neutral_face:'                 => array('1f610.svg', '25', '25', ''),
    ':expressionless:'               => array('1f611.svg', '25', '25', ''),
    ':no_mouth:'                     => array('1f636.svg', '25', '25', ''),
    ':rolling_eyes:'                 => array('1f644.svg', '25', '25', ''),
    ':smirk:'                        => array('1f60f.svg', '25', '25', ''),
    ':persevere:'                    => array('1f623.svg', '25', '25', ''),
    ':disappointed_relieved:'        => array('1f625.svg', '25', '25', ''),
    ':open_mouth:'                   => array('1f62e.svg', '25', '25', ''),
    ':zipper_mouth:'                 => array('1f910.svg', '25', '25', ''),
    ':hushed:'                       => array('1f62f.svg', '25', '25', ''),
    ':sleepy:'                       => array('1f62a.svg', '25', '25', ''),
    ':tired_face:'                   => array('1f62b.svg', '25', '25', ''),
    ':sleeping:'                     => array('1f634.svg', '25', '25', ''),
    ':relieved:'                     => array('1f60c.svg', '25', '25', ''),
    ':nerd:'                         => array('1f913.svg', '25', '25', ''),
    ':stuck_out_tongue:'             => array('1f61b.svg', '25', '25', ''),
    ':stuck_out_tongue_winking_eye:' => array('1f61c.svg', '25', '25', ''),
    ':stuck_out_tongue_closed_eyes:' => array('1f61d.svg', '25', '25', ''),
    ':drooling_face:'                => array('1f924.svg', '25', '25', ''),
    ':unamused:'                     => array('1f612.svg', '25', '25', ''),
    ':sweat:'                        => array('1f613.svg', '25', '25', ''),
    ':pensive:'                      => array('1f614.svg', '25', '25', ''),
    ':confused:'                     => array('1f615.svg', '25', '25', ''),
    ':upside_down:'                  => array('1f643.svg', '25', '25', ''),
    ':money_mouth:'                  => array('1f911.svg', '25', '25', ''),
    ':astonished:'                   => array('1f632.svg', '25', '25', ''),
    ':frowning2:'                    => array('2639.svg', '25', '25', ''),
    ':slight_frown:'                 => array('1f641.svg', '25', '25', ''),
    ':confounded:'                   => array('1f616.svg', '25', '25', ''),
    ':disappointed:'                 => array('1f61e.svg', '25', '25', ''),
    ':worried:'                      => array('1f61f.svg', '25', '25', ''),
    ':triumph:'                      => array('1f624.svg', '25', '25', ''),
    ':cry:'                          => array('1f622.svg', '25', '25', ''),
    ':sob:'                          => array('1f62d.svg', '25', '25', ''),
    ':frowning:'                     => array('1f626.svg', '25', '25', ''),
    ':anguished:'                    => array('1f627.svg', '25', '25', ''),
    ':fearful:'                      => array('1f628.svg', '25', '25', ''),
    ':weary:'                        => array('1f629.svg', '25', '25', ''),
    ':grimacing:'                    => array('1f62c.svg', '25', '25', ''),
    ':cold_sweat:'                   => array('1f630.svg', '25', '25', ''),
    ':scream:'                       => array('1f631.svg', '25', '25', ''),
    ':flushed:'                      => array('1f633.svg', '25', '25', ''),
    ':dizzy_face:'                   => array('1f635.svg', '25', '25', ''),
    ':rage:'                         => array('1f621.svg', '25', '25', ''),
    ':angry:'                        => array('1f625.svg', '25', '25', ''),
    ':innocent:'                     => array('1f607.svg', '25', '25', ''),
    ':cowboy:'                       => array('1f925.svg', '25', '25', ''),
    ':clown:'                        => array('1f921.svg', '25', '25', ''),
    ':lying_face:'                   => array('1f925.svg', '25', '25', ''),
    ':mask:'                         => array('1f637.svg', '25', '25', ''),
    ':thermometer_face:'             => array('1f912.svg', '25', '25', ''),
    ':head_bandage:'                 => array('1f915.svg', '25', '25', ''),
    ':nauseated_face:'               => array('1f922.svg', '25', '25', ''),
    ':sneezing_face:'                => array('1f927.svg', '25', '25', ''),
    ':smiling_imp:'                  => array('1f608.svg', '25', '25', ''),
    ':imp:'                          => array('1f47f.svg', '25', '25', ''),
    ':japanese_ogre:'                => array('1f479.svg', '25', '25', ''),
    ':japanese_goblin:'              => array('1f47a.svg', '25', '25', ''),
    ':skull:'                        => array('1f480.svg', '25', '25', ''),
    ':ghost:'                        => array('1f47b.svg', '25', '25', ''),
    ':alien:'                        => array('1f47d.svg', '25', '25', ''),
    ':robot:'                        => array('1f916.svg', '25', '25', ''),
    ':poop:'                         => array('1f4a9.svg', '25', '25', ''),
    ':smiley_cat:'                   => array('1f63a.svg', '25', '25', ''),
    ':smile_cat:'                    => array('1f638.svg', '25', '25', ''),
    ':joy_cat:'                      => array('1f639.svg', '25', '25', ''),
    ':heart_eyes_cat:'               => array('1f63b.svg', '25', '25', ''),
    ':smirk_cat:'                    => array('1f63c.svg', '25', '25', ''),
    ':kissing_cat:'                  => array('1f63d.svg', '25', '25', ''),
    ':scream_cat:'                   => array('1f640.svg', '25', '25', ''),
    ':crying_cat_face:'              => array('1f63f.svg', '25', '25', ''),
    ':pouting_cat:'                  => array('1f63e.svg', '25', '25', ''),
    ':boy:'                          => array('1f466.svg', '25', '25', ''),
    ':girl:'                         => array('1f467.svg', '25', '25', ''),
    ':man:'                          => array('1f468.svg', '25', '25', ''),
    ':woman:'                        => array('1f469.svg', '25', '25', ''),
    ':older_man:'                    => array('1f474.svg', '25', '25', ''),
    ':older_woman:'                  => array('1f475.svg', '25', '25', ''),
    ':baby:'                         => array('1f476.svg', '25', '25', ''),
    ':angel:'                        => array('1f47c.svg', '25', '25', ''),
    ':cop:'                          => array('1f46e.svg', '25', '25', ''),
    ':spy:'                          => array('1f575.svg', '25', '25', ''),
    ':guardsman:'                    => array('1f482.svg', '25', '25', ''),
    ':construction_worker:'          => array('1f477.svg', '25', '25', ''),
    ':man_with_turban:'              => array('1f473.svg', '25', '25', ''),
    ':person_with_blond_hair:'       => array('1f471.svg', '25', '25', ''),
    ':santa:'                        => array('1f385.svg', '25', '25', ''),
    ':mrs_claus:'                    => array('1f936.svg', '25', '25', ''),
    ':princess:'                     => array('1f478.svg', '25', '25', ''),
    ':prince:'                       => array('1f934.svg', '25', '25', ''),
    ':bride_with_veil:'              => array('1f470.svg', '25', '25', ''),
    ':man_in_tuxedo:'                => array('1f935.svg', '25', '25', ''),
    ':pregnant_woman:'               => array('1f930.svg', '25', '25', ''),
    ':man_with_gua_pi_mao:'          => array('1f472.svg', '25', '25', ''),
    ':person_frowning:'              => array('1f64d.svg', '25', '25', ''),
    ':person_with_pouting_face:'     => array('1f64e.svg', '25', '25', ''),
    ':no_good:'                      => array('1f645.svg', '25', '25', ''),
    ':ok_woman:'                     => array('1f646.svg', '25', '25', ''),
    ':information_desk_person:'      => array('1f481.svg', '25', '25', ''),
    ':raising_hand:'                 => array('1f64b.svg', '25', '25', ''),
    ':bow:'                          => array('1f647.svg', '25', '25', ''),
    ':face_palm:'                    => array('1f926.svg', '25', '25', ''),
    ':shrug:'                        => array('1f937.svg', '25', '25', ''),
    ':massage:'                      => array('1f486.svg', '25', '25', ''),
    ':haircut:'                      => array('1f487.svg', '25', '25', ''),
    ':walking:'                      => array('1f6b6.svg', '25', '25', ''),
    ':runner:'                       => array('1f3c3.svg', '25', '25', ''),
    ':dancer:'                       => array('1f483.svg', '25', '25', ''),
    ':man_dancing:'                  => array('1f57a.svg', '25', '25', ''),
    ':dancers:'                      => array('1f46f.svg', '25', '25', ''),
    ':speaking_head:'                => array('1f5e3.svg', '25', '25', ''),
    ':bust_in_silhouette:'           => array('1f464.svg', '25', '25', ''),
    ':busts_in_silhouette:'          => array('1f465.svg', '25', '25', ''),
    ':couple:'                       => array('1f46b.svg', '25', '25', ''),
    ':two_men_holding_hands:'        => array('1f46c.svg', '25', '25', ''),
    ':two_women_holding_hands:'      => array('1f46d.svg', '25', '25', ''),
    ':couplekiss:'                   => array('1f48f.svg', '25', '25', ''),
    ':kiss_mm:'                      => array('1f468-2764-1f48b-1f468.svg', '25', '25', ''),
    ':kiss_ww:'                      => array('1f469-2764-1f48b-1f469.svg', '25', '25', ''),
    ':couple_with_heart:'            => array('1f491.svg', '25', '25', ''),
    ':couple_mm:'                    => array('1f468-2764-1f468.svg', '25', '25', ''),
    ':couple_ww:'                    => array('1f469-2764-1f469.svg', '25', '25', ''),
    ':family:'                       => array('1f46a.svg', '25', '25', ''),
    ':family_mwg'                    => array('1f468-1f469-1f467.svg', '25', '25', ''),
    ':family_mwgb:'                  => array('1f468-1f469-1f467-1f466.svg', '25', '25', ''),
    ':family_mwbb:'                  => array('1f468-1f469-1f466-1f466.svg', '25', '25', ''),
    ':family_mwgg:'                  => array('1f468-1f469-1f467-1f467.svg', '25', '25', ''),
    ':family_mmb:'                   => array('1f468-1f468-1f466.svg', '25', '25', ''),
    ':family_mmg:'                   => array('1f468-1f468-1f467.svg', '25', '25', ''),
    ':family_mmgb:'                  => array('1f468-1f468-1f467-1f466.svg', '25', '25', ''),
    ':family_mmbb:'                  => array('1f468-1f468-1f466-1f466.svg', '25', '25', ''),
    ':family_mmgg:'                  => array('1f468-1f468-1f467-1f467.svg', '25', '25', ''),
    ':family_wwb:'                   => array('1f469-1f469-1f466.svg', '25', '25', ''),
    ':family_wwg:'                   => array('1f469-1f469-1f467.svg', '25', '25', ''),
    ':family_wwgb:" '                => array('1f469-1f469-1f467-1f466.svg', '25', '25', ''),
    ':family_wwbb:" '                => array('1f469-1f469-1f466-1f466.svg', '25', '25', ''),
    ':family_wwgg:" '                => array('1f469-1f469-1f467-1f467.svg', '25', '25', ''),
    ':muscle:'                       => array('1f4aa.svg', '25', '25', ''),
    ':selfie:'                       => array('1f933.svg', '25', '25', ''),
    ':point_left:'                   => array('1f448.svg', '25', '25', ''),
    ':point_right:'                  => array('1f449.svg', '25', '25', ''),
    ':point_up:'                     => array('261d.svg', '25', '25', ''),
    ':point_up_2:'                   => array('1f446.svg', '25', '25', ''),
    ':middle_finger:'                => array('1f595.svg', '25', '25', ''),
    ':point_down:'                   => array('1f447.svg', '25', '25', ''),
    ':v:'                            => array('270c.svg', '25', '25', ''),
    ':fingers_crossed:'              => array('1f91e.svg', '25', '25', ''),
    ':vulcan:'                       => array('1f596.svg', '25', '25', ''),
    ':metal:'                        => array('1f918.svg', '25', '25', ''),
    ':call_me:'                      => array('1f919.svg', '25', '25', ''),
    ':hand_splayed:'                 => array('1f590.svg', '25', '25', ''),
    ':raised_hand:'                  => array('270b.svg', '25', '25', ''),
    ':ok_hand:'                      => array('1f44c.svg', '25', '25', ''),
    ':thumbsup:'                     => array('1f44d.svg', '25', '25', ''),
    ':thumbsdown:'                   => array('1f44e.svg', '25', '25', ''),
    ':fist:'                         => array('270a.svg', '25', '25', ''),
    ':punch:'                        => array('1f44a.svg', '25', '25', ''),
    ':left_facing_fist:'             => array('1f91b.svg', '25', '25', ''),
    ':right_facing_fist:'            => array('1f91c.svg', '25', '25', ''),
    ':raised_back_of_hand:'          => array('1f91a.svg', '25', '25', ''),
    ':wave:'                         => array('1f44b.svg', '25', '25', ''),
    ':clap:'                         => array('1f44f.svg', '25', '25', ''),
    ':writing_hand:'                 => array('270d.svg', '25', '25', ''),
    ':open_hands:'                   => array('1f450.svg', '25', '25', ''),
    ':raised_hands:'                 => array('1f64c.svg', '25', '25', ''),
    ':pray:'                         => array('1f64f.svg', '25', '25', ''),
    ':handshake:'                    => array('1f91d.svg', '25', '25', ''),
    ':nail_care:'                    => array('1f485.svg', '25', '25', ''),
    ':ear:'                          => array('1f442.svg', '25', '25', ''),
    ':nose:'                         => array('1f443.svg', '25', '25', ''),
    ':footprints:'                   => array('1f463.svg', '25', '25', ''),
    ':eyes:'                         => array('1f440.svg', '25', '25', ''),
    ':eye:'                          => array('1f441.svg', '25', '25', ''),
    ':tongue:'                       => array('1f445.svg', '25', '25', ''),
    ':lips:'                         => array('1f444.svg', '25', '25', ''),
    ':kiss:'                         => array('1f48b.svg', '25', '25', ''),
    ':zzz:'                          => array('1f4a4.svg', '25', '25', ''),
    ':eyeglasses:'                   => array('1f453.svg', '25', '25', ''),
    ':dark_sunglasses:'              => array('1f576.svg', '25', '25', ''),
    ':necktie:'                      => array('1f454.svg', '25', '25', ''),
    ':shirt:'                        => array('1f455.svg', '25', '25', ''),
    ':jeans:'                        => array('1f456.svg', '25', '25', ''),
    ':dress:'                        => array('1f457.svg', '25', '25', ''),
    ':kimono:'                       => array('1f458.svg', '25', '25', ''),
    ':bikini:'                       => array('1f459.svg', '25', '25', ''),
    ':womans_clothes:'               => array('1f45a.svg', '25', '25', ''),
    ':purse:'                        => array('1f45b.svg', '25', '25', ''),
    ':handbag:'                      => array('1f45c.svg', '25', '25', ''),
    ':pouch:'                        => array('1f45d.svg', '25', '25', ''),
    ':school_satchel:'               => array('1f392.svg', '25', '25', ''),
    ':mans_shoe:'                    => array('1f45e.svg', '25', '25', ''),
    ':athletic_shoe:'                => array('1f45f.svg', '25', '25', ''),
    ':high_heel:'                    => array('1f460.svg', '25', '25', ''),
    ':sandal:'                       => array('1f461.svg', '25', '25', ''),
    ':boot:'                         => array('1f462.svg', '25', '25', ''),
    ':crown:'                        => array('1f451.svg', '25', '25', ''),
    ':womans_hat:'                   => array('1f452.svg', '25', '25', ''),
    ':tophat:'                       => array('1f3a9.svg', '25', '25', ''),
    ':mortar_board:'                 => array('1f393.svg', '25', '25', ''),
    ':helmet_with_cross:'            => array('26d1.svg', '25', '25', ''),
    ':lipstick:'                     => array('1f484.svg', '25', '25', ''),
    ':ring:'                         => array('1f48d.svg', '25', '25', ''),
    ':closed_umbrella:'              => array('1f302.svg', '25', '25', ''),
    ':briefcase:'                    => array('1f4bc.svg', '25', '25', '')
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
	


