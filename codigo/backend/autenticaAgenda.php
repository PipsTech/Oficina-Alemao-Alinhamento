<?php
    date_default_timezone_set('America/Sao_Paulo');

    // Mês anterior e próximo
    if (isset($_GET['ym'])) {
        $ym = $_GET['ym'];
    } else {
        // Esse mês
        $ym = date('Y-m');
    }

    $timestamp = strtotime($ym, "-01");
    if ($timestamp === false) {
        $timestamp = time();
    }

    // Hoje
    $today = date('Y-m-j', time());

    // For H3 title
    $html_title = date('M - Y', $timestamp);

    //meses em pt-br
    $mes_nome = date('F - Y', $timestamp);
    
    // Num do mês
    $mes_num = date('m - Y', $timestamp);

    // Create prev & next month link     mktime(hour,minute,second,month,day,year)
    $prev = date('Y-m', mktime(0, 0, 0, date('m', $timestamp) - 1, 1, date('Y', $timestamp)));
    $next = date('Y-m', mktime(0, 0, 0, date('m', $timestamp) + 1, 1, date('Y', $timestamp)));
    $now = date('Y-m', mktime(0, 0, 0, date('m', $timestamp), 1, date('Y', $timestamp)));

    // Number of days in the month
    $day_count = date('t', $timestamp);

    // 0:Sun 1:Mon 2:Tue ...
    $str = date('w', mktime(0, 0, 0, date('m', $timestamp), 1, date('Y', $timestamp)));


    // Create Calendar!!
    $weeks = array();
    $week = '';

    // Add empty cell
    $week .= str_repeat('<td></td>', $str);

    for ($day = 1; $day <= $day_count; $day++, $str++) {

        $date = $ym . '-' . $day;

        if ($today == $date) {
            $week .= '<td class="today"   style=" text-align:center; background: #2A3F54; color: gold;"><a href="agendaEletronica.php?ym='.$mes_num.'&function=visuAdia&data='.$date.'">' . $day;
        } else {
            $week .= '<td   style="text-align:center"><a href="agendaEletronica.php?ym='.$now.'&function=visuAdia&data='.$date.'">' . $day;
        }
        $week .= '</a></td>';

        // End of the week OR End of the month
        if ($str % 7 == 6 || $day == $day_count) {

            if ($day == $day_count) {
                // Add empty cell
                $week .= str_repeat('<td></td>', 6 - ($str % 7));
            }

            $weeks[] = '<tr>' . $week . '</tr>';

            // Prepare for new week
            $week = '';
        }
    }



    ?>