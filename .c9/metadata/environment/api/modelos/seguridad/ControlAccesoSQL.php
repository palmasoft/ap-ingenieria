{"filter":false,"title":"ControlAccesoSQL.php","tooltip":"/api/modelos/seguridad/ControlAccesoSQL.php","undoManager":{"mark":4,"position":4,"stack":[[{"start":{"row":13,"column":0},"end":{"row":23,"column":4},"action":"remove","lines":["","const DATOS_COMPLETOS = <<<sql","    SELECT","    \tMenuComponentes.*,","    \tMenuOperaciones.*","    FROM","    \tMenuOperaciones","    LEFT JOIN MenuComponentes ON","    \tMenuComponentes.componenteID = MenuOperaciones.componenteID","","sql;"],"id":2},{"start":{"row":13,"column":0},"end":{"row":23,"column":4},"action":"insert","lines":["","const DATOS_COMPLETOS = <<<sql","    SELECT","    \tMenuComponentes.*,","    \tMenuOperaciones.*","    FROM","    \tMenuOperaciones","    LEFT JOIN MenuComponentes ON","    \tMenuComponentes.componenteID = MenuOperaciones.componenteID","","sql;"]}],[{"start":{"row":23,"column":4},"end":{"row":33,"column":4},"action":"insert","lines":["","const DATOS_COMPLETOS = <<<sql","    SELECT","    \tMenuComponentes.*,","    \tMenuOperaciones.*","    FROM","    \tMenuOperaciones","    LEFT JOIN MenuComponentes ON","    \tMenuComponentes.componenteID = MenuOperaciones.componenteID","","sql;"],"id":3}],[{"start":{"row":23,"column":4},"end":{"row":24,"column":0},"action":"insert","lines":["",""],"id":4}],[{"start":{"row":25,"column":21},"end":{"row":25,"column":22},"action":"insert","lines":["_"],"id":5},{"start":{"row":25,"column":22},"end":{"row":25,"column":23},"action":"insert","lines":["2"]}],[{"start":{"row":27,"column":22},"end":{"row":28,"column":22},"action":"remove","lines":[",","    \tMenuOperaciones.*"],"id":6}]]},"ace":{"folds":[],"scrolltop":315.5,"scrollleft":0,"selection":{"start":{"row":25,"column":6},"end":{"row":25,"column":23},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":185,"mode":"ace/mode/php"}},"timestamp":1573932833161,"hash":"c3d1e4ad9715f8c807fd0b41e981f522b9bcf287"}