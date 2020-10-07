<?php


namespace App\Classes;


class ReplicGetDB
{
    public function connect_pg () {


        $conn_string = "host=192.168.1.12 dbname=regofficex user=vu_miheikin password=dhgFFx1VP2";
        $pgsql_conn = pg_connect($conn_string);

        $query = "
WITH q1 AS (
    SELECT COUNT(DISTINCT abonent_id) AS data,
           extract(month FROM creation_time) AS month, extract(year FROM creation_time) AS year
    FROM ro_agent
    WHERE creation_time > to_timestamp('2020/12/31', 'YYYY/MM/DD') AND to_timestamp('2020/12/31','YYYY/MM/DD') > creation_time
    GROUP BY month, year),
q2 AS (SELECT COUNT(DISTINCT abonent_id) AS data_off,extract(month FROM off_time) AS month, extract(year FROM off_time) AS year FROM ro_agent WHERE off_time > to_timestamp('2020/12/31', 'YYYY/MM/DD') AND to_timestamp('2020/12/31','YYYY/MM/DD') > off_time GROUP BY month, year)
    SELECT COALESCE(q1.month, q2.month) AS month, COALESCE(q1.year, q2.year) AS year, COALESCE(q1.data, 0) AS data, COALESCE(q2.data_off) AS data_off
FROM q1 FULL JOIN q2 ON q2.year = q1.year AND q2.month = q1.month ORDER BY COALESCE(q1.month, q2.month), COALESCE(q1.year, q2.year) DESC";

        $result = pg_query($pgsql_conn,$query);
        $n = pg_num_rows($result);

        print_r($n);

    }
}
