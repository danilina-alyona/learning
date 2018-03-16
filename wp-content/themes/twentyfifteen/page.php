<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		// End the loop.
		endwhile;
		?>

    <?php
    $array = array(
      array(
        'lastName' => 'Андреева',
        'firstName' => 'Алина',
        'secondName' => 'Алексеевна',
        'math' => 5,
        'physics' => 5,
        'painting' => 5
      ),
      array(
        'lastName' => 'Архипенко',
        'firstName' => 'Илья',
        'secondName' => 'Алексеевич',
        'math' => 3,
        'physics' => 2,
        'painting' => 4
      ),
      array(
        'lastName' => 'Белов',
        'firstName' => 'Илья',
        'secondName' => 'Станиславович',
        'math' => 5,
        'physics' => 3,
        'painting' => 5
      ),
      array(
        'lastName' => 'Бобров',
        'firstName' => 'Яков',
        'secondName' => 'Владимирович',
        'math' => 4,
        'physics' => 3,
        'painting' => 4
      ),
      array(
        'lastName' => 'Гусельников',
        'firstName' => 'Андрей',
        'secondName' => 'Сергеевич',
        'math' => 5,
        'physics' => 5,
        'painting' => 3
      ),
      array(
        'lastName' => 'Данильченко',
        'firstName' => 'Леонид',
        'secondName' => 'Евгеньевич',
        'math' => 5,
        'physics' => 4,
        'painting' => 4
      ),
      array(
        'lastName' => 'Дукова',
        'firstName' => 'Елизавета',
        'secondName' => 'Леонидовна',
        'math' => 3,
        'physics' => 2,
        'painting' => 3
      ),
      array(
        'lastName' => 'Жигулев',
        'firstName' => 'Максим',
        'secondName' => 'Константинович',
        'math' => 3,
        'physics' => 4,
        'painting' => 5
      ),
      array(
        'lastName' => 'Жилин',
        'firstName' => 'Тимофей',
        'secondName' => 'Сергеевич',
        'math' => 5,
        'physics' => 5,
        'painting' => 3
      ),
      array(
        'lastName' => 'Илющенко',
        'firstName' => 'Владимир',
        'secondName' => 'Андреевич',
        'math' => 3,
        'physics' => 2,
        'painting' => 2
      ),
      array(
        'lastName' => 'Ионов',
        'firstName' => 'Илья',
        'secondName' => 'Валерьевич',
        'math' => 4,
        'physics' => 4,
        'painting' => 4
      ),
      array(
        'lastName' => 'Калашников',
        'firstName' => 'Александр',
        'secondName' => 'Денисович',
        'math' => 4,
        'physics' => 5,
        'painting' => 5
      ),
      array(
        'lastName' => 'Капранов',
        'firstName' => 'Семен',
        'secondName' => 'Алексеевич',
        'math' => 5,
        'physics' => 5,
        'painting' => 2
      ),
      array(
        'lastName' => 'Клишина',
        'firstName' => 'Арина',
        'secondName' => 'Дмитриевна',
        'math' => 3,
        'physics' => 3,
        'painting' => 4
      ),
      array(
        'lastName' => 'Колотвин',
        'firstName' => 'Данила',
        'secondName' => 'Дмитриевич',
        'math' => 4,
        'physics' => 4,
        'painting' => 3
      ),
      array(
        'lastname' => 'Комаров',
        'firstName' => 'Данила',
        'secondName' => 'Евгеньевич',
        'math' => 5,
        'physics' => 5,
        'painting' => 4
      ),
      array(
        'lastName' => 'Корнев',
        'firstName' => 'Кирилл',
        'secondName' => 'Львович',
        'math' => 3,
        'physics' => 4,
        'painting' => 3
      ),
      array(
        'lastName' => 'Кремлев',
        'firstName' => 'Артем',
        'secondName' => 'Дмитриевич',
        'math' => 5,
        'physics' => 4,
        'painting' => 3
      ),
      array(
        'lastName' => 'Куликов',
        'firstName' => 'Егор',
        'secondName' => 'Станиславович',
        'math' => 5,
        'physics' => 4,
        'painting' => 5
      ),
      array(
        'lastName' => 'Ложкин',
        'firstName' => 'Николай',
        'secondName' => 'Евгеньевич',
        'math' => 4,
        'physics' => 4,
        'painting' => 5
      ),
    );
    //Вывести все
    //for ($i = 0, $size = count($array); $i <= $size; $i++) {
    //    echo '<p>' . $array[$i]['lastName'] . ' ';
    //    echo $array[$i]['firstName'] . ' ';
    //    echo $array[$i]['math'] . ' ';
    //    echo $array[$i]['physics'] . ' ';
    //    echo $array[$i]['painting'] . '</p>';
    //};


    //foreach ($array as $item) {
    //    foreach ($item as $key=>$data) {
    //        echo $key . ': ' . $data . '<br>';
    //    }
    //}

    //Вывести все фамилии
    // foreach($array as $item) {
    // echo $item['lastName'];
    // };
    //Вывести все фамилии, количество букв в которых больше 5
    //foreach ($array as $item) {
    //    $lastName = $item['lastName'];
    //    $length = mb_strlen($lastName);
    //    if ($length > 5) {
    //        echo '<p><b>' . $lastName . '</b>' . ' ' . $length . '</p>';
    //    }
    //}
    //Вывести фамилии отличников (ученики, у которых все оценки 5)
    //foreach ($array as $item) {
    //    if ($item['math'] == 5 && $item['physics'] == 5 && $item['painting'] == 5) {
    ////        echo '<p>' . $item['lastName'] . '</p>';
    ////        echo '<p>' . $item['math'] . '</p>';
    ////        echo '<p>' . $item['physics'] . '</p>';
    ////        echo '<p>' . $item['painting'] . '</p>';
    //        foreach ($item as $key=>$val) {
    //            echo '<p>' . $key . ': ' . $val . '</p>';
    //        }
    //    }
    //}
    //Вывести фамилии учеников у кого средний балл меньше 4.
    //foreach ($array as $item) {
    //    $averageValue = ($item['math'] + $item['physics'] + $item['painting']) / 3;
    //    if ($averageValue >= 4) {
    //        echo '<p>' . $item['lastName'] . ' <strong>средний балл</strong> ' . $averageValue . '</p>';
    //    }
    //}

    //Вывести всех учеников, которые не имеют тезок в классе. То есть если три Сергея, то ни одного не должно быть в и
    //способ нашла в инете, разбираюсь
    //$keys = array(); // Массив ключей, которые уже встречались
    //foreach ($array as $key => $val) {
    //    if (in_array($val['firstName'], $keys)) {
    //        unset($array[$key]);
    //    } else {
    //        $keys[$val['firstName']] = 1;
    //    }
    //}
    //var_dump($array);

    //Вывести все имена в классе без повторов. Например, если в классе 5 Сергеев, то вывести имя Сергей один раз.
    //$arrNew = array();
    //
    //foreach ($array as $item) {
    //    $arrNew[$item['firstName']] = $item;
    //    //echo $arrNew[$item['firstName']];
    //}
    ////print_r($arrNew);
    //foreach ($arrNew as $key => $value) {
    //    echo '<p><b>' . $key . '</b></p>';
    //}

    //Вывести средний бал (показатель успеваемости в классе) по всем ученикам, по каждому предмету.
    //$mathSum = 0;
    //$physicsSum = 0;
    //$paintingSum = 0;
    //
    //$srBall = array(
    //    'mathSum' => 0,
    //    'physicsSum'=> 0,
    //    'paintingSum' => 0,
    //);
    //
    //$translation = array(
    //    'mathSum' => 'математике',
    //    'physicsSum'=> 'физике',
    //    'paintingSum' => 'рисование',
    //);
    //
    //for ($i = 0, $size = count($array); $i <= $size; $i++) {
    //    $srBall['mathSum'] += $array[$i]['math'];
    //    $srBall['physicsSum'] += $array[$i]['physics'];
    //    $srBall['paintingSum'] += $array[$i]['painting'];
    //};

    //echo 'суммарный балл по математике ' . $mathSum . '</br>';
    //echo 'суммарный балл по физике ' . $physicsSum . '</br>';
    //echo 'суммарный балл по рисованию ' . $paintingSum . '</br>';
    //
    //echo 'количество учеников ' . $size . '</br>';
    //
    //$averageScoreMath = $mathSum / $size;
    //$averageScorePhysics = $physicsSum / $size;
    //$averageScorePainting = $paintingSum / $size;

    //echo 'средний балл по математике ' . $averageScoreMath . '</br>';
    //echo 'средний балл по математике ' . $averageScorePhysics . '</br>';
    //echo 'средний балл по математике ' . $averageScorePainting . '</br>';

    //foreach ($srBall as $key => $val) {
    //    echo 'средний балл по ' . $translation[$key] . ': ' . $val/$size . '</br>';
    //}


    // Вывести количество фамилий в классе, начинающихся с гласной буквы.
    //foreach ($array as $item) {
    //    $reg = preg_match('/^А|О|И|Е|Ё|Э|Ы|У|Ю|Я/', $item['lastName']);
    //    if ($reg) {
    //        echo $item['lastName'] . '</br>';
    //    }
    //}


    //$string = 'jzxvkjzbxcvjbxzkljcbvbxzvklbxzcvkаljbxzlcvbxzl';
    //$count  = strlen($string);
    //$array  = str_split($string);
    //
    //
    //echo '<p>количество элементов в массиве: ' . $count . '</p>';
    //
    //var_dump($array);
    //
    //if ($count % 2 != 0) {
    //    echo 'Не четное колличество <br>';
    //    echo 'Центр: ' . $array[round($count/2)] . '<br>';
    //} else {
    //    $center1 = round($count/2);
    //    $center2 = $center1 + 1;
    //
    //    echo 'Четное колличество' . '<br>';
    //    echo 'Центр 1: ' . $array[$center1] . '<br>';
    //    echo 'Центр 2: ' . $array[$center2] . '<br>';
    //}


    //if ($count % 2 != 0) {
    //    $med = floor($count / 2);
    //    echo "медиана массива: позиция $med, элемент $array[$med]";
    //} else {
    //    $med = $count / 2;
    //    $two = $array[$med];
    //    $one = $array[$med - 1];
    //    echo "медиана массива: позиция " . ($med - 1) . " и " . $med . ", сумма " . ($one + $two) / 2;
    //}


//    $numb = 21;
//    $sum1 = 0;
//    $sum = 0;
//
//    for ($i = 0; $i < $numb; $i++) {
//      if ($i % 3 == 0) {
//        $sum += $i;
//      }
//
//      if ($i % 5 == 0) {
//        if ($i % 3 == 0 && $i % 5 == 0) {
//          continue;
//        }
//
//        $sum1 += $i;
//      }
//    }
//
//    echo 'Сумма кратных 3: ' . $sum . '<br>';
//    echo 'Сумма кратных 5: ' . $sum1 . '<br>';

    ?>



		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
