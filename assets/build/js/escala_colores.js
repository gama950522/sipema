var escala = null;
     var error_color = {
          0  : '#f8696b',
          1  : '#f86b6b',
          2  : '#f86e6c',
          3  : '#f8706c',
          4  : '#f8736d',
          5  : '#f8766d',
          6  : '#f8786e',
          7  : '#f87b6e',
          8  : '#f97d6f',
          9  : '#f9806f',
          10 : '#f98370',
          11 : '#f98570',
          12 : '#f98871',
          13 : '#f98a71',
          14 : '#f98d72',
          15 : '#fa9072',
          16 : '#fa9273',
          17 : '#fa9573',
          18 : '#fa9774',
          19 : '#fa9a74',
          20 : '#fa9d75',
          21 : '#fa9f75',
          22 : '#fba276',
          23 : '#fba476',
          24 : '#fba777',
          25 : '#fbaa77',
          26 : '#fbac78',
          27 : '#fbaf78',
          28 : '#fbb179',
          29 : '#fcb479',
          30 : '#fcb77a',
          31 : '#fcb97a',
          32 : '#fcbc7b',
          33 : '#fcbe7b',
          34 : '#fcc17c'
     };
     var warning_color = {
          35 : '#fcc47c',
          36 : '#fdc67d',
          37 : '#fdc97d',
          38 : '#fdcb7e',
          39 : '#fdce7e',
          40 : '#fdd17f',
          41 : '#fdd37f',
          42 : '#fdd680',
          43 : '#fed880',
          44 : '#fedb81',
          45 : '#fede81',
          46 : '#fee082',
          47 : '#fee382',
          48 : '#fee583',
          49 : '#fee883',
          50 : '#ffeb84',
          51 : '#fceb84',
          52 : '#f9ea84',
          53 : '#f6e984',
          54 : '#f3e884',
          55 : '#f0e784',
          56 : '#ede683',
          57 : '#eae583',
          58 : '#e7e483',
          59 : '#e3e383',
          60 : '#e0e383',
          61 : '#dde283',
          62 : '#dae182',
          63 : '#d7e082',
          64 : '#d4df82',
          65 : '#d1de82',
          66 : '#cedd82',
          67 : '#cadc81',
          68 : '#c7db81',
          69 : '#c7db81',
          70 : '#c1da81'
     };
     var success_color = {
          71  : '#bed981',
          72  : '#bbd881',
          73  : '#b8d780',
          74  : '#b5d680',
          75  : '#b1d580',
          76  : '#aed480',
          77  : '#abd380',
          78  : '#a8d27f',
          79  : '#a5d17f',
          80  : '#a2d07f',
          81  : '#9fd07f',
          82  : '#9ccf7f',
          83  : '#99ce7f',
          84  : '#95cd7e',
          85  : '#92cc7e',
          86  : '#8fcb7e',
          87  : '#8cca7e',
          88  : '#89c97e',
          89  : '#86c87d',
          90  : '#83c77d',
          91  : '#80c77d',
          92  : '#7cc67d',
          93  : '#79c57d',
          94  : '#76c47d',
          95  : '#73c37c',
          96  : '#70c27c',
          97  : '#6dc17c',
          98  : '#6ac07c',
          99  : '#67bf7c',
          100 : '#63be7b'
     };

     function colores(porcentaje) 
     {
          var color = '#ddd';
          if (porcentaje >= 0 && porcentaje < 35) 
          {
               escala = error_color;
          } 
          else if (porcentaje >= 35 && porcentaje < 71)
          {
               escala = warning_color;
          }
          else
          {
               escala = success_color;
          }
          $.each(escala, function(index, val) {
               if (porcentaje === index) 
               {
                    color = val;
                    return false;
               }
          });
          return color;
     }
