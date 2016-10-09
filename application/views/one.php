

<?php
	error_reporting(0);
	@ini_set('display_errors', 0);
   $a =isset($_POST['send'])?$_POST['send']:'not yet';
   $bbc =isset($_POST['other1'])?$_POST['other1']:'not yet';
	//$a='1y2<<br>मानव/40 संसाधन/41 मंत्रालय/42<font size="0.5" color="green">महिला/44 एवं/45 बाल/46 विकास/47 विभाग/48</font><button id="1h2">H</button><button id="1m2">M</button><a id="1d2">delete</a><मंत्रालय/42<1t1<महिला/44 एवं/45 बाल/46 विकास/47 विभाग/48<font size="0.5" color="green"></font><button id="1h1">H</button><button id="1m1">M</button>    <a id="1d1">delete</a><विभाग/48<1t3<<br>विभाग/67<font size="0.5" color="green"></font><button id="1h3">H</button><button id="1m3">M</button><a id="1d3">delete</a><विभाग/67<1t4<<br>विभाग/90<font size="0.5" color="green"></font><button id="1h4">H</button><button id="1m4">M</button><a id="1d4">delete</a><विभाग/90<1t5<<br> महिला/137 एवं/138 बाल/139 विकास/140 विभाग/141<font size="0.5" color="green"></font><button id="1h5">H</button><button id="1m5">M</button><a id="1d5">delete</a><विभाग/141<1t6<<br>विभाग/172<font size="0.5" color="green"></font><button id="1h6">H</button><button id="1m6">M</button><a id="1d6">delete</a><विभाग/172<2t2<<br>सचिव/174<font size="0.5" color="green"></font><button id="2h2">H</button><button id="2m2">M</button><a id="2d2">delete</a><सचिव/174<2t1<रेवा/175 नैयर/176<font size="0.5" color="green"></font><button id="2h1">H</button><button id="2m1">M</button>    <a id="2d1">delete</a><नैयर/176<2y3<<br>विभाग/172<font size="0.5" color="green"><br>सचिव/174</font><button id="2h3">H</button><button id="2m3">M</button><a id="2d3">delete</a><विभाग/172<2t4<<br>तकरीबन/189<font size="0.5" color="green"></font><button id="2h4">H</button><button id="2m4">M</button><a id="2d4">delete</a><none<';
   //$bbc='data/fullnews_id_2489463_date_30_5_2004.dat';
   //'1t1<=&gt; महिला/44 एवं/45 बाल/46 विकास/47 विभाग/48<font></font><button id="1h1">H</button><button id="1m1">M</button>    <a id="1d1">delete</a><विभाग/48<1t2<<br>=&gt;विभाग/67<font></font><button id="1h2">H</button><button id="1m2">M</button><a id="1d2">delete</a><विभाग/67<1t3<<br>=&gt;विभाग/90<font></font><button id="1h3">H</button><button id="1m3">M</button><a id="1d3">delete</a><विभाग/90<1t4<<br>=&gt;महिला/137 एवं/138 बाल/139 विकास/140 विभाग/141<font></font><button id="1h4">H</button><button id="1m4">M</button><a id="1d4">delete</a><विभाग/141<1t5<<br>=&gt;मानव/40 संसाधन/41 मंत्रालय/42<font color="green" size="0.5">=&gt; महिला/44 एवं/45 बाल/46 विकास/47 विभाग/48<font></font></font><button id="1h5">H</button><button id="1m5">M</button><a id="1d5">delete</a><मंत्रालय/42<'
   //$a='1t2<<br>=&gt;मानव/40 संसाधन/41 मंत्रालय/42<font color="green" size="0.5">=&gt;महिला/44 एवं/45 बाल/46 विकास/47 विभाग/48</font><button id="1h2">H</button><button id="1m2">M</button><a id="1d2">delete</a><मंत्रालय/42<=====1t1<=&gt;महिला/44 एवं/45 बाल/46 विकास/47 विभाग/48<font></font><button id="1h1">H</button><button id="1m1">M</button>    <a id="1d1">delete</a><विभाग/48<=====';
   //$a='2t3<<br>=&gt;करना/59<font color="green" size="0.5">=&gt;बच्चों/71</font><button id="2h3">H</button><button id="2m3">M</button><a id="2d3">delete</a><करना/59<=====2t1<=&gt;बच्चों/71<font></font><button id="2h1">H</button><button id="2m1">M</button>    <a id="2d1">delete</a><बच्चों/71<=====1t1<=&gt;महिला/44 एवं/45 बाल/46 विकास/47 विभाग/48<font></font><button id="1h1">H</button><button id="1m1">M</button>    <a id="1d1">delete</a><विभाग/48<=====2t2<<br>=&gt;मानव/40 संसाधन/41 मंत्रालय/42<font color="green" size="0.5">=&gt;महिला/44 एवं/45 बाल/46 विकास/47 विभाग/48</font><button id="2h2">H</button><button id="2m2">M</button><a id="2d2">delete</a><मंत्रालय/42<=====';
   //$a='3t5<<br>=&gt;मुंबई/85<font></font><button id="3h5">H</button><button id="3m5">M</button><a id="3d5">delete</a><मुंबई/85<=====3t2<<br>=&gt;ट्रेन/71<font></font><button id="3h2">H</button><button id="3m2">M</button><a id="3d2">delete</a><ट्रेन/71<=====3t1<=&gt; ट्रेन/63<font></font><button id="3h1">H</button><button id="3m1">M</button> <a id="3d1">delete</a><ट्रेन/63<=====2t1<=&gt; मुंबई/56 सेंट्रल/57<font></font><button id="2h1">H</button><button id="2m1">M</button>    <a id="2d1">delete</a><सेंट्रल/57<=====3t3<<br>=&gt; मुंबई/118<font></font><button id="3h3">H</button><button id="3m3">M</button><a id="3d3">delete</a><मुंबई/118<=====3t4<<br>=&gt;नई/134 दिल्ली/135<font></font><button id="3h4">H</button><button id="3m4">M</button><a id="3d4">delete</a><दिल्ली/135<=====1t1<=&gt;नई/53 दिल्ली/54 <font></font><button id="1h1">H</button><button id="1m1">M</button>    <a id="1d1">delete</a><दिल्ली/54<=====';
   //$a='7t3<<br>=&gt;दिल्ली/174<font color="green" size="0.5">=&gt;लेफ्टिनेंट/176 गवर्नर/177 </font><button id="7h3">H</button><button id="7m3">M</button><a id="7d3">delete</a><दिल्ली/174<=====7t2<<br>=&gt;बी./178 एल./179 जोशी/180<font></font><button id="7h2">H</button><button id="7m2">M</button><a id="7d2">delete</a><जोशी/180<=====7t1<=&gt;लेफ्टिनेंट/176 गवर्नर/177 <font></font><button id="7h1">H</button><button id="7m1">M</button>    <a id="7d1">delete</a><गवर्नर/177<=====6t1<=&gt;दिल्ली/174<font></font><button id="6h1">H</button><button id="6m1">M</button> <a id="6d1">delete</a><दिल्ली/174<=====5t1<=&gt;भारत/120<font></font><button id="5h1">H</button><button id="5m1">M</button>    <a id="5d1">delete</a><भारत/120<=====5t2<<br>=&gt;होली/141<font></font><button id="5h2">H</button><button id="5m2">M</button><a id="5d2">delete</a><होली/141<=====4t2<<br>=&gt;होली/92<font></font><button id="4h2">H</button><button id="4m2">M</button><a id="4d2">delete</a><होली/92<=====4t1<=&gt;होली/74<font></font><button id="4h1">H</button><button id="4m1">M</button>    <a id="4d1">delete</a><होली/74<=====3t7<<br>=&gt;सोनिया/136 गांधी/137<font></font><button id="3h7">H</button><button id="3m7">M</button><a id="3d7">delete</a><गांधी/137<=====3t2<<br>=&gt;सोनिया/67 गांधी/68 <font></font><button id="3h2">H</button><button id="3m2">M</button><a id="3d2">delete</a><गांधी/68<=====3t1<=&gt;यूपीए/65 अध्यक्ष/66<font></font><button id="3h1">H</button><button id="3m1">M</button> <a id="3d1">delete</a><अध्यक्ष/66<=====3t6<<br>=&gt; सिंह/109<font></font><button id="3h6">H</button><button id="3m6">M</button><a id="3d6">delete</a><सिंह/109<=====3t5<<br>=&gt;प्रधानमंत्री/108<font></font><button id="3h5">H</button><button id="3m5">M</button><a id="3d5">delete</a><प्रधानमंत्री/108<=====2t2<<br>=&gt; मनमोहन/62 सिंह/63<font></font><button id="2h2">H</button><button id="2m2">M</button><a id="2d2">delete</a><सिंह/63<=====2t1<=&gt;प्रधानमंत्री/61<font></font><button id="2h1">H</button><button id="2m1">M</button>    <a id="2d1">delete</a><प्रधानमंत्री/61<=====3t4<<br>=&gt;कलाम/84<font></font><button id="3h4">H</button><button id="3m4">M</button><a id="3d4">delete</a><कलाम/84<=====3t3<<br>=&gt;राष्ट्रपति/83<font></font><button id="3h3">H</button><button id="3m3">M</button><a id="3d3">delete</a><राष्ट्रपति/83<=====1t2<<br>=&gt;एपीजे/57 अब्दुल/58 कलाम/59<font></font><button id="1h2">H</button><button id="1m2">M</button><a id="1d2">delete</a>< कलाम/59<=====1t1<=&gt;राष्ट्रपति/56<font></font><button id="1h1">H</button><button id="1m1">M</button>    <a id="1d1">delete</a><राष्ट्रपति/56<=====';
   //$a='1t3<<br>=&gt;कलाम/59<font color="green" size="0.5"><br>=&gt;मनमोहन/62 सिंह/63</font><button id="1h3">H</button><button id="1m3">M</button><a id="1d3">delete</a><कलाम/59<=====1t2<<br>=&gt;मनमोहन/62 सिंह/63<font></font><button id="1h2">H</button><button id="1m2">M</button><a id="1d2">delete</a><सिंह/63<=====1t1<=&gt;प्रधानमंत्री/61<font></font><button id="1h1">H</button><button id="1m1">M</button>    <a id="1d1">delete</a><प्रधानमंत्री/61<=====';
   //$a='1t1<=&gt;राष्ट्रपति/56<font></font><button id="1h1">H</button><button id="1m1">M</button>    <a id="1d1">delete</a><राष्ट्रपति/56<=====1t2<<br>=&gt;एपीजे/57 अब्दुल/58 कलाम/59<font></font><button id="1h2">H</button><button id="1m2">M</button><a id="1d2">delete</a><कलाम/59<=====1t8<<br>=&gt;राष्ट्रपति/83<font></font><button id="1h8">H</button><button id="1m8">M</button><a id="1d8">delete</a><राष्ट्रपति/83<=====1t9<<br>=&gt; कलाम/84<font></font><button id="1h9">H</button><button id="1m9">M</button><a id="1d9">delete</a><कलाम/84<=====2t3<=&gt; प्रधानमंत्री/61<font></font><button id="2h3">H</button><button id="2m3">M</button> <a id="2d3">delete</a><प्रधानमंत्री/61<=====2t4<<br>=&gt;मनमोहन/62 सिंह/63<font></font><button id="2h4">H</button><button id="2m4">M</button><a id="2d4">delete</a><सिंह/63<=====2t11<<br>=&gt;प्रधानमंत्री/108<font></font><button id="2h11">H</button><button id="2m11">M</button><a id="2d11">delete</a><प्रधानमंत्री/108<=====2t12<<br>=&gt;सिंह/109<font></font><button id="2h12">H</button><button id="2m12">M</button><a id="2d12">delete</a><सिंह/109<=====3t5<=&gt;यूपीए/65 अध्यक्ष/66<font></font><button id="3h5">H</button><button id="3m5">M</button>    <a id="3d5">delete</a><अध्यक्ष/66<=====3t6<<br>=&gt;सोनिया/67 गांधी/68<font></font><button id="3h6">H</button><button id="3m6">M</button><a id="3d6">delete</a><गांधी/68<=====3t14<<br>=&gt;सोनिया/136 गांधी/137<font></font><button id="3h14">H</button><button id="3m14">M</button><a id="3d14">delete</a><गांधी/137<=====4t7<=&gt;होली/74<font></font><button id="4h7">H</button><button id="4m7">M</button>    <a id="4d7">delete</a><होली/74<=====4t10<<br>=&gt;होली/92<font></font><button id="4h10">H</button><button id="4m10">M</button><a id="4d10">delete</a><होली/92<=====4t15<<br>=&gt;होली/141<font></font><button id="4h15">H</button><button id="4m15">M</button><a id="4d15">delete</a><होली/141<=====5t13<=&gt;भारत/120<font></font><button id="5h13">H</button><button id="5m13">M</button>    <a id="5d13">delete</a><भारत/120<=====6t16<=&gt;दिल्ली/174<font></font><button id="6h16">H</button><button id="6m16">M</button>    <a id="6d16">delete</a><दिल्ली/174<=====7t17<=&gt;लेफ्टिनेंट/176 गवर्नर/177<font></font><button id="7h17">H</button><button id="7m17">M</button>    <a id="7d17">delete</a><गवर्नर/177<=====7t18<<br>=&gt;बी./178 एल./179 जोशी/180<font></font><button id="7h18">H</button><button id="7m18">M</button><a id="7d18">delete</a><जोशी/180<=====7t19<<br>=&gt;दिल्ली/174<font color="green" size="0.5">=&gt;लेफ्टिनेंट/176 गवर्नर/177</font><button id="7h19">H</button><button id="7m19">M</button><a id="7d19">delete</a><दिल्ली/174<=====';
   //$a='1t1<=&gt;भारतीय/50 प्रधानमंत्री/51<font></font><button id="1h1">H</button><button id="1m1">M</button><button id="1l1">D</button><a id="1d1">delete</a><प्रधानमंत्री/51<=====1t2<<br>=&gt;मनमोहन/52 सिंह/53<font></font><button id="1h2">H</button><button id="1m2">M</button><button id="1l2">D</button><a id="1d2">delete</a><सिंह/53<=====2t3<=&gt;राष्ट्रपति/57<font></font><button id="2h3">H</button><button id="2m3">M</button><button id="2l3">D</button><a id="2d3">delete</a><राष्ट्रपति/57<=====2t4<<br>=&gt;परवेज़/58 मुशर्रफ/59<font></font><button id="2h4">H</button><button id="2m4">M</button><button id="2l4">D</button><a id="2d4">delete</a><मुशर्रफ/59<=====3t5<=&gt;मनमोहन/102  मुशर्रफ/104<font></font><button id="3h5">H</button><button id="3m5">M</button><button id="3l5">D</button> <a id="3d5">delete</a>< मुशर्रफ/104<=====';
   //$a='1t1<=&gt; प्रधानमंत्री/51<font></font><button id="1h1">H</button><button id="1m1">M</button><button id="1l1">D</button><a id="1d1">delete</a><प्रधानमंत्री/51<=====1t2<<br>=&gt;मनमोहन/52 सिंह/53<font></font><button id="1h2">H</button><button id="1m2">M</button><button id="1l2">D</button><a id="1d2">delete</a><सिंह/53<=====1t3<<br>=&gt;भारतीय/50<font color="green" size="0.5">=&gt; प्रधानमंत्री/51</font><button id="1h3">H</button><button id="1m3">M</button><button id="1l3">D</button><a id="1d3">delete</a><भारतीय/50<=====2t4<=&gt;राष्ट्रपति/57<font></font><button id="2h4">H</button><button id="2m4">M</button><button id="2l4">D</button><a id="2d4">delete</a><राष्ट्रपति/57<=====2t5<<br>=&gt;परवेज़/58 मुशर्रफ/59<font></font><button id="2h5">H</button><button id="2m5">M</button><button id="2l5">D</button><a id="2d5">delete</a><मुशर्रफ/59<=====2t6<<br>=&gt;पाकिस्तान/55<font color="green" size="0.5">=&gt;राष्ट्रपति/57</font><button id="2h6">H</button><button id="2m6">M</button><button id="2l6">D</button><a id="2d6">delete</a><पाकिस्तान/55<=====3t7<=&gt;मनमोहन/102  मुशर्रफ/104 <font></font><button id="3h7">H</button><button id="3m7">M</button><button id="3l7">D</button> <a id="3d7">delete</a><मुशर्रफ/104<=====';
   //$a='1t1<=&gt;इनामी/43<font></font><button id="1h1">H</button><button id="1m1">M</button><button id="1l1">D</button><a id="1d1">delete</a><इनामी/43<=====1t4<<br>=&gt;पांच/40 लाख/41<font color="green" size="0.5">=&gt;इनामी/43</font><button id="1h4">H</button><button id="1m4">M</button><button id="1l4">D</button><a id="1d4">delete</a><लाख/41<=====2t2<=&gt;कुख्यात/45 स्वयंभू/46 नक्सल/47 कमांडर/48<font></font><button id="2h2">H</button><button id="2m2">M</button><button id="2l2">D</button><a id="2d2">delete</a><कमांडर/48<=====2t3<<br>=&gt;कमलेश्वर/49 बैठा/50<font></font><button id="2h3">H</button><button id="2m3">M</button><button id="2l3">D</button><a id="2d3">delete</a><बैठा/50<=====3t5<=&gt;उत्तर/64 प्रदेश/65 बिहार/67  झारखंड/69 <font></font><button id="3h5">H</button><button id="3m5">M</button><button id="3l5">D</button> <a id="3d5">delete</a><झारखंड/69<=====4t7<<br>=&gt;सोमवार/159<font color="green" size="0.5">=&gt;रात/161</font><button id="4h7">H</button><button id="4m7">M</button><button id="4l7">D</button><a id="4d7">delete</a><सोमवार/159<=====4t6<=&gt;रात/161<font></font><button id="4h6">H</button><button id="4m6">M</button><button id="4l6">D</button><a id="4d6">delete</a><रात/161<=====';
   //$a='1t1<=&gt;कमलेश्वर/49 बैठा/50<font></font><button id="1h1">H</button><button id="1m1">M</button><button id="1l1">D</button><a id="1d1">delete</a><बैठा/50<=====1t5<<br>=&gt;कुख्यात/45 स्वयंभू/46 नक्सल/47 कमांडर/48<font></font><button id="1h5">H</button><button id="1m5">M</button><button id="1l5">D</button><a id="1d5">delete</a><कमांडर/48<=====1t6<<br>=&gt;पांच/40 लाख/41 का/42 इनामी/43<font></font><button id="1h6">H</button><button id="1m6">M</button><button id="1l6">D</button><a id="1d6">delete</a><इनामी/43<=====1t14<<br>=&gt;यह/85 खूंखार/86 नक्सली/87<font></font><button id="1h14">H</button><button id="1m14">M</button><button id="1l14">D</button><a id="1d14">delete</a><नक्सली/87<=====1t19<<br>=&gt;नक्सल/164 कमांडर/165<font></font><button id="1h19">H</button><button id="1m19">M</button><button id="1l19">D</button><a id="1d19">delete</a><कमांडर/165<=====1t20<<br>=&gt;कमलेश्वर/166 बैठा/167<font></font><button id="1h20">H</button><button id="1m20">M</button><button id="1l20">D</button><a id="1d20">delete</a><बैठा/167<=====1t23<<br>=&gt;बैठा/185<font></font><button id="1h23">H</button><button id="1m23">M</button><button id="1l23">D</button><a id="1d23">delete</a><बैठा/185<=====1t24<<br>=&gt;इस/209 नक्सली/210 नेता/211<font></font><button id="1h24">H</button><button id="1m24">M</button><button id="1l24">D</button><a id="1d24">delete</a><नेता/211<=====1t27<<br>=&gt;बैठा/236<font></font><button id="1h27">H</button><button id="1m27">M</button><button id="1l27">D</button><a id="1d27">delete</a><बैठा/236<=====1t34<<br>=&gt;बैठा/335<font></font><button id="1h34">H</button><button id="1m34">M</button><button id="1l34">D</button><a id="1d34">delete</a><बैठा/335<=====1t35<<br>=&gt; विस्फोटक/350 बनाने/351 का/352  विशेषज्ञ/354<font></font><button id="1h35">H</button><button id="1m35">M</button><button id="1l35">D</button><a id="1d35">delete</a><विशेषज्ञ/354<=====2t7<=&gt;पटना/51<font></font><button id="2h7">H</button><button id="2m7">M</button><button id="2l7">D</button><a id="2d7">delete</a><पटना/51<=====2t21<<br>=&gt; शहर/169<font></font><button id="2h21">H</button><button id="2m21">M</button><button id="2l21">D</button><a id="2d21">delete</a><शहर/169<=====3t8<=&gt;उत्तर/64 प्रदेश/65<font></font><button id="3h8">H</button><button id="3m8">M</button><button id="3l8">D</button> <a id="3d8">delete</a><प्रदेश/65<=====3t18<<br>=&gt;उत्तर/138 प्रदेश/139<font></font><button id="3h18">H</button><button id="3m18">M</button><button id="3l18">D</button><a id="3d18">delete</a><प्रदेश/139<=====3t25<<br>=&gt;उत्तर/216 प्रदेश/217<font></font><button id="3h25">H</button><button id="3m25">M</button><button id="3l25">D</button><a id="3d25">delete</a><प्रदेश/217<=====3t28<<br>=&gt;उत्तर/255 प्रदेश/256<font></font><button id="3h28">H</button><button id="3m28">M</button><button id="3l28">D</button><a id="3d28">delete</a><प्रदेश/256<=====3t31<<br>=&gt;उत्तर/274 प्रदेश/275<font></font><button id="3h31">H</button><button id="3m31">M</button><button id="3l31">D</button><a id="3d31">delete</a><प्रदेश/275<=====4t9<=&gt;बिहार/67<font></font><button id="4h9">H</button><button id="4m9">M</button><button id="4l9">D</button><a id="4d9">delete</a><बिहार/67<=====4t32<<br>=&gt;बिहार/277<font></font><button id="4h32">H</button><button id="4m32">M</button><button id="4l32">D</button><a id="4d32">delete</a><बिहार/277<=====5t10<=&gt;झारखंड/69<font></font><button id="5h10">H</button><button id="5m10">M</button><button id="5l10">D</button><a id="5d10">delete</a><झारखंड/69<=====5t26<<br>=&gt;झारखंड/219<font></font><button id="5h26">H</button><button id="5m26">M</button><button id="5l26">D</button><a id="5d26">delete</a><झारखंड/219<=====5t29<<br>=&gt;झारखंड/258<font></font><button id="5h29">H</button><button id="5m29">M</button><button id="5l29">D</button><a id="5d29">delete</a><झारखंड/258<=====5t33<<br>=&gt;झारखंड/304<font></font><button id="5h33">H</button><button id="5m33">M</button><button id="5l33">D</button><a id="5d33">delete</a><झारखंड/304<=====6t11<=&gt;पुलिस/71<font></font><button id="6h11">H</button><button id="6m11">M</button><button id="6l11">D</button> <a id="6d11">delete</a><पुलिस/71<=====6t13<<br>=&gt;उत्तर/64 प्रदेश/65 ,/66 बिहार/67 और/68 झारखंड/69<font size="0.5" color="green">=&gt;पुलिस/71</font><button id="6h13">H</button><button id="6m13">M</button><button id="6l13">D</button><a id="6d13">delete</a><झारखंड/69<=====6t17<<br>=&gt;पुलिस/136<font></font><button id="6h17">H</button><button id="6m17">M</button><button id="6l17">D</button><a id="6d17">delete</a><पुलिस/136<=====6t30<<br>=&gt;पुलिस/239<font></font><button id="6h30">H</button><button id="6m30">M</button><button id="6l30">D</button><a id="6d30">delete</a><पुलिस/239<=====7t15<=&gt;अशीष/118 रंजन/119<font></font><button id="7h15">H</button><button id="7m15">M</button><button id="7l15">D</button><a id="7d15">delete</a><रंजन/119<=====7t16<<br>=&gt;डीआईजी/116 पुलिस/117<font></font><button id="7h16">H</button><button id="7m16">M</button><button id="7l16">D</button><a id="7d16">delete</a><पुलिस/117<=====7t22<<br>=&gt;डीआईजी/181<font></font><button id="7h22">H</button><button id="7m22">M</button><button id="7l22">D</button><a id="7d22">delete</a><डीआईजी/181<=====8t36<=&gt;खूंखार/374 नक्सली/375 <font></font><button id="8h36">H</button><button id="8m36">M</button><button id="8l36">D</button><a id="8d36">delete</a><नक्सली/375<=====8t39<<br>=&gt; रामबचन/376 यादव/377<font></font><button id="8h39">H</button><button id="8m39">M</button><button id="8l39">D</button><a id="8d39">delete</a><यादव/377<=====8t44<<br>=&gt;भाकपा/367 (/368 माओवादी/369 )/370<font size="0.5" color="green">=&gt;खूंखार/374 नक्सली/375 </font><button id="8h44">H</button><button id="8m44">M</button><button id="8l44">D</button><a id="8d44">delete</a><भाकपा/367 <=====9t37<=&gt;भाकपा/367<font></font><button id="9h37">H</button><button id="9m37">M</button><button id="9l37">D</button> <a id="9d37">delete</a><भाकपा/367<=====9t38<<br>=&gt;माओवादी/369<font></font><button id="9h38">H</button><button id="9m38">M</button><button id="9l38">D</button><a id="9d38">delete</a><माओवादी/369<=====10t41<<br>=&gt;रोहतास/381 जिले/382<font></font><button id="10h41">H</button><button id="10m41">M</button><button id="10l41">D</button><a id="10d41">delete</a><जिले/382<=====11t42<=&gt; ७०/88 पुलिस/89 कर्मियों/90<font></font><button id="11h42">H</button><button id="11m42">M</button><button id="11l42">D</button><a id="11d42">delete</a><कर्मियों/90<=====11t43<<br>=&gt; ७०/238 पुलिस/239 कर्मियों/240<font></font><button id="11h43">H</button><button id="11m43">M</button><button id="11l43">D</button><a id="11d43">delete</a><कर्मियों/240<=====​';
   $afinal=$a;
   
   $temp = spliti ("=====", $a);
   $a='';
   for ($x=0; $x<count($temp); $x++) {
   		if (preg_match('/.*green.*>.*/',$temp[$x]))
   		{
   		
   		$fg=substr_replace($temp[$x], 'y', 1 , 1);
   		$a=$a.$fg;
   		}
   		else 
   		{
   		$a=$a.$temp[$x];
   		}
    	$a=trim($a);	
   }
   $a=str_replace("<br>", "", $a);
   $a=str_replace("=&gt;", "", $a);
   $a=str_replace("  ", " ", $a);
   //echo $a ;
   $chunks = spliti ("<", $a);
   $dumy = array();
   $kkey='';
   $vvlue='';
  		
   $modarray='';
   $flag=0;
   //print_r(chunks);
   for ($x=0; $x<count($chunks); $x++) {
   		$chunks[$x]=trim($chunks[$x]);
   		if($x%13==0)
   		{
   			if (strpos($chunks[$x],'y') !== false) {
		    	$flag=1;
			}
   		}
   		if($flag)
   		{
   			$modarray=$modarray.$chunks[$x].'<';
   			$chunks[$x]='';
   			//print $chunks[$x]."  \r\n<br/>";
   		}
   		if($x%13==12)
   		{
   		$flag=0;
   		}
  		//print $chunks[$x]."  \r\n";
  	}
  	//print $modarray;
  		//old part
		
	//for all the general notation	
   $forfirstkey=0;
   for ($x=0; $x<count($chunks); $x++) {
   		if($chunks[$x]=='')
   			continue;
   		$chunks[$x]=trim($chunks[$x]);
		//print $chunks[$x]."  \r\n<br/>";
		$valuetmp='';
   		if($x%13==0)
   		{
   			//print $chunks[$x]."  \r\n<br/>";
  			$a1=spliti("t",$chunks[$x]);
  		
  			//print "1111   : $a1[0] \r\n";
  			$vvlue=trim($a1[0]);
   		}
  		if($x%13==1)
  		{
  			//print $chunks[$x]."  \r\n";
  			$a2=spliti(" ",trim($chunks[$x]));
  			//print_r($a2);
			
			for($tr=0;$tr<=count($a2);$tr++)
			{
				if(trim($a2[$tr])!='')
				{
				$bn=spliti("/",$a2[$tr]);
				$valuetmp=$valuetmp.'%'.trim($bn[1]);
				//print "2222   : $a2[$tr] ::    $bn[1] ::   $trim($vvlue) \r\n";
				//print "2222   : $valuetmp \r\n";
				}
			}
  			
  			//print "2222   : $b2[1]   : $c2[1] \r\n";
  			//$vvlue=trim($b2[1]).'%'.trim($vvlue).'%'.trim($c2[1]);
  			$vvlue=trim($valuetmp).'@'.trim($vvlue);
			$forfirstkey++;
			$kkey=$forfirstkey;
  		}
   		/*if($x%13==2)
  		{
  			$chunks[$x]=str_replace("font size=\"0.5\" color=\"green\">", "", $chunks[$x]);
  			//print $chunks[$x]."  \r\n";
  			$a2=spliti(" ",$chunks[$x]);
  			$b2=spliti("/",$a2[0]);
  			$c2=spliti("/",end($a2));
  			//print "2222   : $b2[1]   : $c2[1] \r\n";
  			$vvlue=$vvlue.'%'.$c2[1];
  			$kkey=$b2[1];
  		}*/
  		if($x%13==12)
  		{
  			//print $chunks[$x]."  \r\n<br/>";
  			$b2=spliti("/",$chunks[$x]);
  			//print "6666   : $b2[1] \r\n";
  			$vvlue=trim($vvlue).'&'.trim($b2[1]);
  			//print "$kkey : $vvlue   \r\n";
  			$dumy[trim($kkey)]=trim($vvlue);
  			$kkey='';
  		$vvlue='';
  		}
  		
  		
	}
	ksort($dumy);
	
	
	$fcd='';
	$secondpartkey=0;
	//new part for modifier relation 
	$modarray=str_replace("<br>", "", $modarray);
   $modarray=str_replace("=&gt;", "", $modarray);
   $modarray=str_replace("  ", " ", $modarray);
	$chunks1 = spliti ("<", $modarray);
	//print_r($chunks1);
    $dumy1 = array();
    $kkey1='';
    $vvlue1='';
	   for ($x=0; $x<count($chunks1); $x++) {
	   $valuetmp1='';
   		if($chunks1[$x]=='')
   			continue;
   		$chunks1[$x]=trim($chunks1[$x]);
		//print $chunks1[$x]."  \r\n<br/>";
   		if($x%13==0)
   		{
   			//print $chunks1[$x]."  \r\n<br/>";
  			$a1=spliti("y",$chunks1[$x]);
  		
  			//print "1111   : $a1[0] \r\n";
  			$vvlue1='m';
   		}
  		if($x%13==1)
  		{
  			//print "".$chunks1[$x]."  \r\n<br/>";
			$a2=spliti(" ",trim($chunks1[$x]));
  			
			
			for($tr=0;$tr<=count($a2);$tr++)
			{
				if($a2[$tr]!='')
				{
				$bn=spliti("/",$a2[$tr]);
				$valuetmp1=$valuetmp1.'%'.trim($bn[1]);
				//print "2222   : $a2[$tr] ::    $bn[1] ::   $trim($vvlue) \r\n";
				//print "2222   : $valuetmp \r\n";
				}
			}
  			
  			//print "2222   : $b2[1]   : $c2[1] \r\n";
  			
  			$vvlue1=trim($valuetmp1).'@'.trim($vvlue1);
			//print "".$vvlue1."  \r\n";
			
			
			
			
			
  			$a2=spliti(" ",$chunks1[$x]);
  			$b2=spliti("/",$a2[0]);
  			//$c2=spliti("/",end($a2));
  			//print "1111   : $b2[1]   : $c2[1] \r\n<br/>";
  			//$vvlue1=$b2[1].'%'.$vvlue1.'%'.$c2[1];
			$fcd=$b2[1];
  			$secondpartkey++;
			$kkey1=$secondpartkey;
			
  		}
   		if($x%13==2)
  		{
			//print "2   ".$chunks1[$x]."  \r\n<br/>";
  			$chunks1[$x]=str_replace("font color=\"green\" size=\"0.5\">", "", $chunks1[$x]);
  			$chunks1[$x]=str_replace("font size=\"0.5\" color=\"green\">", "", $chunks1[$x]);
			//print "2   ".$chunks1[$x]."  \r\n";
			$chunks1[$x]=trim($chunks1[$x]);
  			$a2=spliti(" ",$chunks1[$x]);
  			$b2=spliti("/",$a2[0]);
  			$c2=spliti("/",end($a2));
			//print "2222   : $a2[0]  ::  $b2[1]   : $c2[1] \r\n<br/>";
  			//print "2222   : $b2[1]   : $c2[1] \r\n<br/>";
  			//$d2=spliti("%",$dumy[$b2[1]]);
			$fd=getfinaldetail($b2[1],$dumy);
  			//print " vvvv    :".$fd."      "."\r\n";
  			//$vvlue12=$fd.'$'.$kkey1;
  			//$kkey12=$d2[2];
			$vvlue12=$fd.'m=m'.$fcd;
			$secondpartkey++;
			$kkey12=$secondpartkey;
			
  			$dumy1[$kkey12]=$vvlue12;
  			$kkey12='';
  			$vvlue12='';
  		}
  		if($x%13==12)
  		{
  			//print $chunks[$x]."    bbb \r\n";
  			$b2=spliti("/",$chunks1[$x]);
  			//print "6666   : $b2[1] \r\n";
  			$vvlue1=$vvlue1.'%'.$b2[1];
  			//print "$kkey : $vvlue   \r\n";
  			$dumy1[$kkey1]=$vvlue1;
  			$kkey1='';
  			$vvlue1='';
			$fcd='';
  		}
  		
  		
	}
	ksort($dumy1);
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
   $fh = fopen($bbc,'r');
   	$line_count=1;	
   	$sstart=array();
   	$send=array();
   	$inddex=array();
   	while ($line = fgets($fh)) {
   	
   	//print $line_count.'   ===>   '.$line;	
   	$line_count=$line_count+1;
   	$matches;
   	if(preg_match("/<Sentence id=.*(\d+).*/", $line, $matches1)){
			preg_match("/<Sentence id=\"(\d+)\".*/", $line, $matches);
			array_push($inddex,$matches[1]);
			$sstart[$matches[1]]=$line_count;
			//echo $line_count."   bb  ".$matches[1]. "\r\n";
			
   	}
   	if(preg_match("/.*<\/Sentence>.*/", $line, $matches1)){
   		//print $line_count."   nayan"."\r\n";
   		$send[$matches[1]]=$line_count;
   	}
   	}
   	//print_r($sstart);
   	//print_r($send);
	//print_r($inddex);
   	fclose($fh);
   	
   	
   	
   	function sendsentid($val,$sstart,$send,$inddex) {
   		//print 'chimaaa                 '.$val."  \r\n";
  		for($i=0;$i<=count($sstart);$i++)
  		{
  			//print $send[$i].'      '.$sstart[$i];
  			if($val<=$send[$i] && $val>=$sstart[$i])
  			{
  			//print 'founddd'."\r\n";
			//print $inddex[$i-1] ."\r\n\r\n";
  			return $inddex[$i-1];
  			}
  		}
			//return 'cc';
	}
	//print_r($dumy);
   	
   	function getfinaldetail($val,$dumy) {
   		//print $val.'   chimaaa                 '."  \r\n";
  		foreach ($dumy as $key => $row)
		{
			$d1=spliti("&",$row);
			$d2=spliti("@",$row);
			$d2=spliti("%",$d2[0]);
			//print_r($d2);
			//print $val.'   chimaaa                 '.$d2[1]."  \r\n";
			if(trim($d2[1])==trim($val))
			{
				//print 'chimaaa in                '.$d1[1]."  \r\n";
				return trim($d1[1]);
			}
		}
	}
   	
   	//print "<br/>";
   	//print_r($dumy);
   	//print "<br/>";
//print_r($dumy);
   	
   	$file_new="";
   	$line_count=1;	
   	$fh = fopen($bbc,'r');
   			while ($line = fgets($fh)) {
   			$iiic=1;
   			$line=trim($line);
			//echo "$line   \n";
   				foreach ($dumy as $key => $value) {
					$chs = spliti ("&", $value);
					$head=$chs[1];
					$chs = spliti ("@", $chs[0]);
					$chain=$chs[1];
					$chs=preg_replace('/%/', '', $chs[0], 1);
    				$chs = spliti ("%", $chs);
    				//$chain=$chs[1];
    				//$end=$chs[2];
    				//$head=$chs[3];
    				//$start=$chs[0];
    				$d_st;
					//print_r($chs);
					//echo "\n";
   					//echo " vandan    $head :  $chain \n";
					preg_match("/(\d+)(.*)/", $line, $matches);
					$start=$chs[0];
					$end=$chs[count($chs)-1];
					for($f1=0;$f1<=count($chs);$f1++)
					{
						if(($line_count>=$start && $line_count<=$end)&& $line_count==$chs[$f1])
						{
							if (preg_match("/.*cref=.*/", $line))
							{
								$line=str_replace("\">", "", $line);
								$line=trim($line);
								
								//print "vandan   ".$matches[1]."\r\n";
							if($line_count==$start)
							{	
								$d_st=$matches[1];
								if($line_count==$end)
								{
									
									if($line_count==$head)
									{	
										//print $line_count ."   IIN  ".sendsentid($line_count,$sstart,$send,$inddex)."  \r\n";
										//print $line_count ."  VAB ".sendsentid($line_count,$sstart,$send,$inddex)."   \r\n";
										$line=trim($line). ',i'.$iiic.'%1:t'.$chain.':1:'.sendsentid($line_count,$sstart,$send,$inddex).'%'.$matches[1].':'.sendsentid($line_count,$sstart,$send,$inddex).'%'.$matches[1].'">';
										//print $line_count.'   ===>   '.trim($line). 'cref="i'.$iiic.'%1,t'.$chain.',1,'.sendsentid($line_count,$sstart,$send,$inddex).'%'.$matches[1].','.sendsentid($line_count,$sstart,$send,$inddex).'%'.$matches[1].'" ';			 
										//print "\r\n";
									}
									else 
									{
										//not applicable
									}
								}
								else 
								{
									if($line_count==$head)
									{
										$line=trim($line). ',i'.$iiic.'%0:t'.$chain.':1:'.':'.'">';
										//print $line_count.'   ===>   '.trim($line). 'cref="i'.$iiic.'%0,t'.$chain.',1,'.','.'" ';			 
										//print "\r\n";
									}
									else 
									{
										$line=trim($line). ',i'.$iiic.'%0:t'.$chain.':0:'.':'.'">';
										//print $line_count.'   ===>   '.trim($line). 'cref="i'.$iiic.'%0,t'.$chain.',0,'.','.'" ';			 
										//print "\r\n";
									}
								}
							}
							else 
							{
							
								if($line_count==$end)
								{
									if($line_count==$head)
									{
										$line=trim($line). ',i'.$iiic.'%1:t'.$chain.':1:'.sendsentid($line_count,$sstart,$send,$inddex).'%'.$d_st.':'.sendsentid($line_count,$sstart,$send,$inddex).'%'.$matches[1].'">';
										//print $line_count.'   ===>   '.trim($line). 'cref="i'.$iiic.'%1,t'.$chain.',1,'.sendsentid($line_count,$sstart,$send,$inddex).'%'.$d_st.','.sendsentid($line_count,$sstart,$send,$inddex).'%'.$matches[1].'" ';			 
										//print "\r\n";
									}
									else 
									{
										$line=trim($line). ',i'.$iiic.'%1:t'.$chain.':0:'.sendsentid($line_count,$sstart,$send,$inddex).'%'.$d_st.':'.sendsentid($line_count,$sstart,$send,$inddex).'%'.$matches[1].'">';
										//print $line_count.'   ===>   '.trim($line). 'cref="i'.$iiic.'%1,t'.$chain.',0,'.sendsentid($line_count,$sstart,$send,$inddex).'%'.$d_st.','.sendsentid($line_count,$sstart,$send,$inddex).'%'.$matches[1].'" ';			 
										//print "\r\n";
									}
								}
								else 
								{
									if($line_count==$head)
									{
										$line=trim($line). ',i'.$iiic.'%0:t'.$chain.':1:'.':'.'">';
										//print $line_count.'   ===>   '.trim($line). 'cref="i'.$iiic.'%0,t'.$chain.',1,'.','.'" ';			 
										//print "\r\n";    							
									}
									else 
									{
										$line=trim($line). ',i'.$iiic.'%0:t'.$chain.':0:'.':'.'">';
										//print $line_count.'   ===>   '.trim($line). 'cref="i'.$iiic.'%0,t'.$chain.',0,'.','.'" ';			 
										//print "\r\n";    							
									}
								}
							}
								
								
								
								
							}
							else
							{
								$line=str_replace(">", "", $line);
								$line=trim($line);
								//print "vandan   ".$matches[1]."\r\n";
							if($line_count==$start)
							{	
								$d_st=$matches[1];
								if($line_count==$end)
								{
									
									if($line_count==$head)
									{	
										//print $line_count ."   IIN  ".sendsentid($line_count,$sstart,$send,$inddex)."  \r\n";
										//print $line_count ."  VAB ".sendsentid($line_count,$sstart,$send,$inddex)."   \r\n";
										$line=trim($line). ' cref="i'.$iiic.'%1:t'.$chain.':1:'.sendsentid($line_count,$sstart,$send,$inddex).'%'.$matches[1].':'.sendsentid($line_count,$sstart,$send,$inddex).'%'.$matches[1].'">';
										//print $line_count.'   ===>   '.trim($line). 'cref="i'.$iiic.'%1,t'.$chain.',1,'.sendsentid($line_count,$sstart,$send,$inddex).'%'.$matches[1].','.sendsentid($line_count,$sstart,$send,$inddex).'%'.$matches[1].'" ';			 
										//print "\r\n";
									}
									else 
									{
										//not applicable
									}
								}
								else 
								{
									if($line_count==$head)
									{
										$line=trim($line). ' cref="i'.$iiic.'%0:t'.$chain.':1:'.':'.'">';
										//print $line_count.'   ===>   '.trim($line). 'cref="i'.$iiic.'%0,t'.$chain.',1,'.','.'" ';			 
										//print "\r\n";
									}
									else 
									{
										$line=trim($line). ' cref="i'.$iiic.'%0:t'.$chain.':0:'.':'.'">';
										//print $line_count.'   ===>   '.trim($line). 'cref="i'.$iiic.'%0,t'.$chain.',0,'.','.'" ';			 
										//print "\r\n";
									}
								}
							}
							else 
							{
							
								if($line_count==$end)
								{
									if($line_count==$head)
									{
										$line=trim($line). ' cref="i'.$iiic.'%1:t'.$chain.':1:'.sendsentid($line_count,$sstart,$send,$inddex).'%'.$d_st.':'.sendsentid($line_count,$sstart,$send,$inddex).'%'.$matches[1].'">';
										//print $line_count.'   ===>   '.trim($line). 'cref="i'.$iiic.'%1,t'.$chain.',1,'.sendsentid($line_count,$sstart,$send,$inddex).'%'.$d_st.','.sendsentid($line_count,$sstart,$send,$inddex).'%'.$matches[1].'" ';			 
										//print "\r\n";
									}
									else 
									{
										$line=trim($line). ' cref="i'.$iiic.'%1:t'.$chain.':0:'.sendsentid($line_count,$sstart,$send,$inddex).'%'.$d_st.':'.sendsentid($line_count,$sstart,$send,$inddex).'%'.$matches[1].'">';
										//print $line_count.'   ===>   '.trim($line). 'cref="i'.$iiic.'%1,t'.$chain.',0,'.sendsentid($line_count,$sstart,$send,$inddex).'%'.$d_st.','.sendsentid($line_count,$sstart,$send,$inddex).'%'.$matches[1].'" ';			 
										//print "\r\n";
									}
								}
								else 
								{
									if($line_count==$head)
									{
										$line=trim($line). ' cref="i'.$iiic.'%0:t'.$chain.':1:'.':'.'">';
										//print $line_count.'   ===>   '.trim($line). 'cref="i'.$iiic.'%0,t'.$chain.',1,'.','.'" ';			 
										//print "\r\n";    							
									}
									else 
									{
										$line=trim($line). ' cref="i'.$iiic.'%0:t'.$chain.':0:'.':'.'">';
										//print $line_count.'   ===>   '.trim($line). 'cref="i'.$iiic.'%0,t'.$chain.',0,'.','.'" ';			 
										//print "\r\n";    							
									}
								}
							}
								
								
							}
							
							
							
											
						}
					}
		   				$iiic++;
		   				
   				}
   				$line=$line."===="; 
   				$file_new=$file_new.$line;
   				
				$line_count=$line_count+1;
			}    
    		fclose($fh);
    		
    		
    		
    		
    		
    		
    		
    		//nnneeeewww
    //print_r($dumy);	
    //print_r($dumy1);	
    $flatu= array();	
   	//$file_new="";
   	$line_count=0;	
   	//$fh = fopen($bbc,'r');
   	$cs=spliti ("====", $file_new);
   	//print_r($cs);
   	$file_new="";
   	for ($x=0; $x<count($cs); $x++) {
   			
   			$line_count++;
   			//while ($line = fgets($fh)) {
   			$line=$cs[$x];
   			//print htmlspecialchars($line.' MUJADIA  '.'\r\n<br/>');
   			$iiic=0;
   				foreach ($dumy1 as $key => $value) {
				//print "vandan   ".$value."\r\n";
				
   				if(strpos($value,"@")==true){
				//print "vandan   ".$value."\r\n";
	   					$chs1 = spliti ("@", $value);
						$chs12 = spliti ("%", $chs1[1]);
	   					$chs = spliti ("%", $chs1[0]);
						$end=trim($chs[count($chs)-1]);
						$head=trim($chs12[1]);
						$start=trim($chs[1]);
						if(isset($flatu[$start]))
	   					{
	   						$iiic=$flatu[$start];
	   					}
	   					else 
	   					{
	   						$iiic++;
	   						$flatu[$start]=$iiic;
	   					}
   						//print_r($chs12);
    					//print "vandan".$end."  HE  ".$chs12[1]."  ST ".$start."\r\n";
    					//
    				//$chain=$chs[0];
    				
    				$d_st;
   					for($f1=1;$f1<count($chs);$f1++)
					{
					//print "vandan   ".$chs[$f1]."\r\n";
					preg_match("/(\d+)(.*)/", $line, $matches);
    				//print ' '.$line_count;
					if(($line_count>=$start && $line_count<=$end )  && trim($line_count)==trim($chs[$f1]))
    				{
    					//print '<br/> vandan <br/>';
    					$line=str_replace(">", "", $line);
    					//print "vandan   ".$chs[$f1]."\r\n";
    					if($line_count==$start)
    					{
    						$d_st=$matches[1];
    						//print $d_st.'<br/>';
    						if($line_count==$end)
    						{
    							if($line_count==$head)
    							{
									//print "vandan   ".$line_count."\r\n";
    								$line=trim($line). ' acrefmod="m'.$iiic.'%1:1:'.sendsentid($line_count,$sstart,$send,$inddex).'%'.$matches[1].':'.sendsentid($line_count,$sstart,$send,$inddex).'%'.$matches[1].'">';
    								//print $line_count.'   ===>   '.trim($line). 'cref="i'.$iiic.'%1,t'.$chain.',1,'.sendsentid($line_count,$sstart,$send,$inddex).'%'.$matches[1].','.sendsentid($line_count,$sstart,$send,$inddex).'%'.$matches[1].'" <br/>';			 
									//print "\r\n";
    							}
    							else 
    							{
    								//not applicable
    							}
    						}
    						else 
    						{
    							if($line_count==$head)
    							{
    								$line=trim($line). ' acrefmod="m'.$iiic.'%0:1:'.':'.'">';
    								//print $line_count.'   ===>   '.trim($line). 'cref="i'.$iiic.'%0,t'.$chain.',1,'.','.'" ';			 
									//print "\r\n";
    							}
    							else 
    							{
    								$line=trim($line). ' acrefmod="m'.$iiic.'%0:0:'.':'.'">';
    								//print $line_count.'   ===>   '.trim($line). 'cref="i'.$iiic.'%0,t'.$chain.',0,'.','.'" ';			 
									//print "\r\n";
    							}
    						}
    					}
    					else 
    					{
    					
	   						if($line_count==$end)
    						{
    							if($line_count==$head)
    							{
    								$line=trim($line). ' acrefmod="m'.$iiic.'%1:1:'.sendsentid($line_count,$sstart,$send,$inddex).'%'.$d_st.':'.sendsentid($line_count,$sstart,$send,$inddex).'%'.$matches[1].'">';
    								//print $line_count.'   ===>   '.trim($line). 'cref="i'.$iiic.'%1,t'.$chain.',1,'.sendsentid($line_count,$sstart,$send,$inddex).'%'.$d_st.','.sendsentid($line_count,$sstart,$send,$inddex).'%'.$matches[1].'" ';			 
									//print "\r\n";
    							}
    							else 
    							{
    								$line=trim($line). ' acrefmod="m'.$iiic.'%1:0:'.sendsentid($line_count,$sstart,$send,$inddex).'%'.$d_st.':'.sendsentid($line_count,$sstart,$send,$inddex).'%'.$matches[1].'">';
    								//print $line_count.'   ===>   '.trim($line). 'cref="i'.$iiic.'%1,t'.$chain.',0,'.sendsentid($line_count,$sstart,$send,$inddex).'%'.$d_st.','.sendsentid($line_count,$sstart,$send,$inddex).'%'.$matches[1].'" ';			 
									//print "\r\n";
    							}
    						}
    						else 
    						{
    							if($line_count==$head)
    							{
    								$line=trim($line). ' acrefmod="m'.$iiic.'%0:1:'.':'.'">';
    								//print $line_count.'   ===>   '.trim($line). 'cref="i'.$iiic.'%0,t'.$chain.',1,'.','.'" ';			 
									//print "\r\n";    							
    							}
    							else 
    							{
    								$line=trim($line). ' acrefmod="m'.$iiic.'%0:0:'.':'.'">';
    								//print $line_count.'   ===>   '.trim($line). 'cref="i'.$iiic.'%0,t'.$chain.',0,'.','.'" ';			 
									//print "\r\n";    							
    							}
    						}
    					}
 									
    				}
		   				
		   			}	
   				}
   				else {
				//print "vandan   ".$value."\r\n";;
						//echo "$line_count   Key: $key; Value: $value\n";
							$chs1 = spliti ("m=m", $value);
							//print_r($chs1);
		   				   	if(isset($flatu[$chs1[1]]))
		   					{
		   						$iiic=$flatu[$chs1[1]];
		   					}
		   					else 
		   					{
		   						$iiic++;
		   						$flatu[$chs1[1]]=$iiic;
		   					}
							
							
		   					if($line_count==$chs1[0])
		   					{
		   						$line=str_replace(">", "", $line);
		   						$line=trim($line). ' crefmod="m'.$iiic.'">';
		   					}
		   					
   				}
   				
   				
   				
   				
   			}
   			$line=$line."\r\n";
   				$file_new=$file_new.$line;
   				
				//$line_count=$line_count+1;
			}    
    		//fclose($fh);
    		
    		
    		
    		
    		
    		
    		
    		
    		
    		//print $afinal;
    		
    		print $file_new;
    		//print $bbc;
			rename($bbc, 'done1_'.$bbc);
    		
			//print htmlspecialchars($file_new);
			/*
			//print $file_new;
			$file = fopen("data_done/1070425029_2.dat","w");
			//fwrite($file,$file_new);
			file_put_contents("data_done/1070425029_2.dat", $file_new);
			fclose($file);
			
			
			$myFile = "data_done/1070425029_2.dat";
			$fh = fopen($myFile, 'w') or die("can't open file"); 
			fwrite($fh, "SOME OUTPUT FROM THE PAGE"); 
			fclose($fh);  
			*/
			/*
			$my_file = 'data_done/1070425029_2.dat';
			$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file); //implicitly creates file
			$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file); //open file for writing ('w','r','a')...
			
			$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
			$data = 'This is the data';
			fwrite($handle, $data);
			$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
			//write some data here
			fclose($handle);*/
   ?>
