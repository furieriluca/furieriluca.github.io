
<style>

table#tlayout {
border: none;
border-collapse: separate;
background: white;
}

body {
background: white;
    font-family: Georgia, serif;
    padding-bottom: 8px;
margin: 0;
}

#layout-menu {
background: #f6f6f6;
border: 1px solid #dddddd;
padding-top: 0.5em;
padding-left: 8px;
padding-right: 8px;
font-size: 1.0em;
width: auto;
white-space: nowrap;
text-align: left;
vertical-align: top;
}

#layout-menu td {
background: #f4f4f4;
vertical-align: top;
}

#layout-content {
padding-top: 0.0em;
padding-left: 1.0em;
padding-right: 1.0em;
border: none;
background: white;
text-align: left;
vertical-align: top;
}

#layout-menu a {
line-height: 1.5em;
margin-left: 0.5em;
}

tt {
background: #ffffdd;
}

pre, tt {
    font-size: 90%;
    font-family: monaco, monospace;
}

a, a > tt {
color: #224b8d;
    text-decoration: none;
}

a:hover {
    border-bottom: 1px gray dotted;
}

#layout-menu a.current:link, #layout-menu a.current:visited {
color: #022b6d;
border-bottom: 1px gray solid;
}
#layout-menu a:link, #layout-menu a:visited, #layout-menu a:hover {
color: #527bbd;
text-decoration: none;
}
#layout-menu a:hover {
text-decoration: none;
}

div.menu-category {
    border-bottom: 1px solid gray;
    margin-top: 0.8em;
    padding-top: 0.2em;
    padding-bottom: 0.1em;
    font-weight: bold;
}

div.menu-item {
    padding-left: 16px;
    text-indent: -16px;
}

div#toptitle {
padding-bottom: 0.2em;
margin-bottom: 1.5em;
border-bottom: 3px double gray;
}

/* Reduce space if we begin the page with a title. */
div#toptitle + h2, div#toptitle + h3 {
margin-top: -0.7em;
}

div#subtitle {
margin-top: 0.0em;
margin-bottom: 0.0em;
padding-top: 0em;
padding-bottom: 0.1em;
}

em {
    font-style: italic;
}

strong {
    font-weight: bold;
}


h1, h2, h3 {
color: #527bbd;
    margin-top: 0.7em;
    margin-bottom: 0.3em;
    padding-bottom: 0.2em;
    line-height: 1.0;
    padding-top: 0.5em;
    border-bottom: 1px solid #aaaaaa;
}

h1 {
    font-size: 165%;
}

h2 {
    padding-top: 0.8em;
    font-size: 125%;
}

h2 + h3 {
    padding-top: 0.2em;
}

h3 {
    font-size: 110%;
    border-bottom: none;
}

p {
    margin-top: 0.0em;
    margin-bottom: 0.8em;
padding: 0;
    line-height: 1.3;
}

pre {
padding: 0;
margin: 0;
}

div#footer {
font-size: small;
border-top: 1px solid #c0c0c0;
padding-top: 0.1em;
margin-top: 4.0em;
color: #c0c0c0;
}

div#footer a {
color: #80a0b0;
}

div#footer-text {
float: left;
padding-bottom: 8px;
}

ul, ol, dl {
    margin-top: 0.2em;
    padding-top: 0;
    margin-bottom: 0.8em;
}

dt {
    margin-top: 0.5em;
    margin-bottom: 0;
}

dl {
    margin-left: 20px;
}

dd {
color: #222222;
}

dd > *:first-child {
    margin-top: 0;
}

ul {
    list-style-position: outside;
    list-style-type: disc;
    list-style-color: blue;
}

p + ul, p + ol {
    margin-top: -0.5em;
}

li ul, li ol {
    margin-top: -0.3em;
}

ol {
    list-style-position: outside;
    list-style-type: decimal;
}

li p, dd p {
    margin-bottom: 0.3em;
}

ol ol {
    list-style-type: lower-alpha;
}

ol ol ol {
    list-style-type: lower-roman;
}

p + div.codeblock {
    margin-top: -0.6em;
}

div.codeblock, div.infoblock {
    margin-right: 0%;
    margin-top: 1.2em;
    margin-bottom: 1.3em;
}

div.blocktitle {
    font-weight: bold;
color: #cd7b62;
    margin-top: 1.2em;
    margin-bottom: 0.1em;
}

div.blockcontent {
border: 1px solid silver;
padding: 0.3em 0.5em;
}

div.infoblock > div.blockcontent {
background: #ffffee;
}

div.blockcontent p + ul, div.blockcontent p + ol {
    margin-top: 0.4em;
}

div.infoblock p {
    margin-bottom: 0em;
}

div.infoblock li p, div.infoblock dd p {
    margin-bottom: 0.5em;
}

div.infoblock p + p {
    margin-top: 0.8em;
}

div.codeblock > div.blockcontent {
background: #f6f6f6;
}

span.pycommand {
color: #000070;
}

span.statement {
color: #008800;
}
span.builtin {
color: #000088;
}
span.special {
color: #990000;
}
span.operator {
color: #880000;
}
span.error {
color: #aa0000;
}
span.comment, span.comment > *, span.string, span.string > * {
color: #606060;
}

@media print {
    #layout-menu { display: none; }
}

#fwtitle {
margin: 2px;
}

#fwtitle #toptitle {
padding-left: 0.5em;
margin-bottom: 0.5em;
}

#layout-content h1:first-child, #layout-content h2:first-child, #layout-content h3:first-child {
margin-top: -0.7em;
}

div#toptitle h1, #layout-content div#toptitle h1 {
margin-bottom: 0.0em;
padding-bottom: 0.1em;
padding-top: 0;
margin-top: 0.5em;
border-bottom: none;
}

img.eq {
padding: 0;
    padding-left: 0.1em;
    padding-right: 0.1em;
margin: 0;
}

img.eqwl {
    padding-left: 2em;
    padding-top: 0.6em;
    padding-bottom: 0.2em;
margin: 0;
}

table {
border: 2px solid black;
    border-collapse: collapse;
}

td {
padding: 2px;
    padding-left: 0.5em;
    padding-right: 0.5em;
    text-align: center;
border: 1px solid gray;
}

table + table {
    margin-top: 1em;
}

tr.heading {
    font-weight: bold;
    border-bottom: 2px solid black;
}

img {
border: none;
}

table.imgtable, table.imgtable td {
border: none;
    text-align: left;
}
</style>







<div id="content">



<div id="group0navbar">





<!-- All content goes here -->





<!--  <tbody>-->




<td id="layout-content">



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>

<head>

<meta name="google-site-verification" content="cSOIrpu546vlBpegoC69tDYlVX5Q-GFwUeCXy040sYc" />

<meta http-equiv="content-type"

content="text/html; charset=ISO-8859-1">

<title>Luca Furieri, PhD Candidate</title>

</head>

<body>
<table summary="Table for page layout." id="tlayout">
<tr valign="top">
<td id="layout-menu">
<div class="menu-category">Luca Furieri</div>
<div class="menu-item"><a href="index.html" class="current">Home</a></div>
<div class="menu-item"><a href="cv_yang.pdf">CV</a></div>
<div class="menu-category">Reserach</div>
<div class="menu-item"><a href="publications.html">Publications</a></div>
<div class="menu-item"><a href="presentations.html">Presentations</a></div>
<div class="menu-item"><a href="people.html">People</a></div>
<div class="menu-item"><a href="software.html">Software</a></div>
<div class="menu-item"><a href="masterthesis.html">Master&nbsp;Thesis</a></div>
<div class="menu-item"><a href="services.html">Services</a></div>
<div class="menu-item"><a href="awards.html">Awards</a></div>
<div class="menu-category">Others</div>
<div class="menu-item"><a href="">Travel</a></div>
</td>
<td id="layout-content">
<h1>Luca Furieri</h1>
<table class="imgtable"><tr><td>
<p><img style="float: left; margin-right: 10px; margin-top: 20px; height: 220px;" src="Luca_Furieri.jpg" alt=“Luca Furieri” /></p><td align="left"><p><a href="">Luca Furieri</a></p>
<p>PhD Candidate <br />
<a href="https://www.ee.ethz.ch/">Departement Informationstechnologie und Elektrotechnik (D-ITET)</a> <br />
<a href="https://www.ethz.ch/en.html">ETH Zurich</a></p>
<p>Address: <br />
Physikstrasse 3 <br />
8092 Zurich, Switzerland.</p>
<p>Mobile:+41 44 632 85 31 <br />
E-mail: furieril@control.ee.ethz.ch</p>
</td></tr></table>
<h2>Brief Biography</h2>
<p>I am a Ph.D. candidate in control theory at the Automatic Control Laboratory, ETH - Zurich, under the supervision of Prof. Maryam Kamgarpour. I received the Bachelor and Master degrees in Automation Engineering from the University of Bologna, both with honours, in 2014 and 2016 respectively. In 2016, I visited the Autonomous Systems Laboratory, ETH - Zurich as a student researcher to work on the control of small fixed-wing UAVs in windy environments. I  received   the   O. Hugo Schuck Best Paper Award in 2018. My current research interests   are centered around the theoretical challenges of optimal distributed control for constrained large-scale systems. I am also interested in game theoretic approaches to the control of  multi-agent dynamical systems  and in several  applications ranging from the electrical power grid to formations of autonomous vehicles.</p>
<h2>Upcoming invited talks</h2>
<h2>News</h2>
<ul>
<li><p>01/2019: Our paper: <a href="papers/1707.05058.pdf">Chordal decomposition in operator-splitting methods for sparse semidefinite programs</a>, was accepted for publication in Mathematical Programming. Codes are available on
Github: <a href="https://github.com/OxfordControl/CDCS">CDCS</a>;</p>
</li>
<li><p>12/2018: A new paper on mixed traffic systems: <a href="papers/Smooth_Traffic_Flow.pdf">Smoothing traffic flow via control of autonomous vheicles</a>;</p>
</li>
<li><p>12/2018: Our paper, <a href="papers/1708.04174.pdf">Fast ADMM for sum-of-squares programs using partial orthogonality</a>, was accepted in the IEEE Transactions on Automatic Control. Codes are available through the SOS option in <a href="https://github.com/OxfordControl/CDCS">CDCS</a>.</p>
</li>
<li><p>11/2018: Seminar at UT Austin, Institute for Computational Engineering and Sciences, hosted by Prof. Ufuk Topcu, 8 November;</p>
</li>
<li><p>11/2018: invited talk in a general session: Large-scale conic optimization, at the INFORMS Annual Meeting; </p>
</li>
<li><p>10/2018: We submitted two papers to ECC 2019: <a href="publications.html">On separable quadratic Lyapunov functions for convex design of distributed controllers</a>, and <a href="publications.html">Block factor-width-two matrices in semidefinite programming</a></p>
</li>
<li><p>09/2018: A new paper on reducing time headway for connected vehicles, <a href="publications.html">Reducing Time Headway for Platooning of Connected Vehicles via V2V
Communication</a>, submitted to TRC.</p>
</li>
<li><p>08/2018: Our paper, <a href="papers/1805.04304.pdf">Cooperative control of heterogeneous connected vehicles under directed acyclic interactions</a>, was accepted in the IEEE Intelligent Transportation Systems Magzine;</p>
</li>
<li><p>07/2018: I visited Prof. Lina at Harvard from 9th July to 13th July, and presented a seminar talk on chordal decomposition in sparse semidenite optimization and sum-of-squares (SOS) optimization;</p>
</li>
<li><p>07/2018: Seminar at Northeastern University, Departement of Electrial &amp; Computer Engineering, hosted by Prof. Mario Sznaier, 13 July;</p>
</li>
<li><p>07/2018: I gave a <a href="https://lids.mit.edu/news-and-events/events/chordal-decomposition-sparse-semidefinite-optimization-and-sum-squares-sos">seminar</a> at LIDS, MIT, hosted by Prof. Pablo Parrilo, 12 July; </p>
</li>
<li><p>07/2018: A new paper on sparse SOS optimization: <a href="papers/1807.05463.pdf">Sparse sum-of-squares (SOS) optimization: A bridge between DSOS/SDSOS and SOS optimization for sparse polynomials</a></p>
</li>
<li><p>07/2018: Our paper, <a href="papers/1804.02711.pdf">Decomposition and completion of sum-of-squares matrices</a>, was accepted to CDC 2018.</p>
</li>
<li><p>06/2018: Two papers, <a href="papers/ITSC2018_admm.pdf">Parallel Optimal Control for Cooperative Automation of Large-scale
Connected Vehicles via ADMM</a>, <a href="papers/ITSC2018_time_headway.pdf">Reducing Time Headway for Platoons of Connected Vehicles via Multiple-Predecessor Following</a>, were accepted to ITSC 2018.</p>
</li>
<li><p>05/2018: A new paper on connected vehicles: <a href="papers/1805.04304.pdf">Cooperative control of heterogeneous connected vehicles under directed acyclic interactions</a>. </p>
</li>
<li><p>04/2018: Our paper, <a href="papers/AVEC18.pdf">Behavioral Cooperation of Multiple Connected Vehicles with Directed Acyclic Interactions using Feedforward-Feedback
Control</a>, was accepted to AVEC 2018. </p>
</li>
<li><p>02/2018: Our paper <a href="papers/1803.05996.pdf">Scalable analysis of linear networked systems via chordal decomposition</a> was accepted to ECC 2018.</p>
</li>
<li><p>12/2017: I attended the 56th CDC at Melbourne, Australia, and presented two papers: <a href="papers/1709.06809.pdf">Block-Diagonal Solutions to Lyapunov Inequalities and Generalisations of Diagonal Dominance</a>,
and <a href="papers/2017_07932549.pdf">Exploiting Sparsity in the Coefficient Matching Conditions in Sum-of-Squares Programs using ADMM</a>.
A tutorial session was organized successfully; see our paper <a href="papers/TutorialCDC2017.pdf">Improving efficiency and scalability of sum of squares optimization: recent advances and limitations</a>.</p>
</li>
<li><p>09/2017: I presented a seminar talk on <a href="">Analyis and Synthesis of Large-scale Networked Systems with Chordal Sparsity</a> at Department of Automotive Engineering, Tsinghua University.</p>
</li>
<li><p>08/2017: A new paper on SOS programs: <a href="papers/1708.04174.pdf">Fast ADMM for sum-of-squares programs
using partial orthogonality</a>. Codes are available through the SOS option in <a href="https://github.com/OxfordControl/CDCS">CDCS</a>.</p>
</li>
<li><p>07/2017: We are organizing a tutorial session on <a href="papers/TutorialCDC2017.pdf">Improving efficiency and scalability of sum of squares optimization: recent advances and limitations</a> at the CDC 2017.</p>
</li>
<li><p>07/2017: We submitted a paper: <a href="papers/1707.05058.pdf">Chordal decomposition in operator-splitting methods for sparse semidefinite programs</a>, to Mathematical Programming. Codes are available on
Github: <a href="https://github.com/OxfordControl/CDCS">CDCS</a>;</p>
</li>
<li><p>07/2017: Our paper, <a href="papers/2016_Platooning_of_Connected_Vehicles.pdf">Platooning of Connected Vehicles with Undirected Topologies: Robustness Analysis and Distributed H-infinity Controller Synthesis</a>,
was accepted in the IEEE Transactions on Intelligent Transportation Systems;</p>
</li>
<li><p>06/2017: Our paper, <a href="papers/Scalable_design_of_structured_controllers.pdf">Scalable Design of Structured Controllers using Chordal Decomposition</a>,
was accepted as a full paper in the IEEE Transactions on Automatic Control;</p>
</li>
<li><p>06/2017: Visiting Lund University, Sweden for <a href="https://www.lccc.lth.se/index.php?page=june-2017-optimization">LCCC Workshop on Large-Scale and Distributed Optimization</a>
from 13th June, 2017 to 30th June, 2017;</p>
</li>
<li><p>05/2017: Our paper, <a href="papers/2017_Crash_Porbability_Estimation.pdf">Crash probability estimation via quantifying driver hazard perception</a>, was accepted in the Accident Analysis and Prevention (AAP).</p>
</li>
<li><p>05/2017: Our paper, <a href="papers/2017_07932549.pdf">Exploiting Sparsity in the Coefficient Matching Conditions in Sum-of-Squares Programs using ADMM</a>,
was accepted in the IEEE Control Systems Letters (L-CSS). Codes are available on <a href="https://github.com/zhengy09/SOSADMM">Github</a>.  </p>
</li>
<li><p>05/2017: I presented a seminar talk on <a href="talks/Talk_Cranfield_Yang.pdf">Distributed Control of Connected Vehicles and
Fast ADMM for Sparse SDPs</a> at the Advanced Vehicle Engineering Centre, Cranfield University on May 3, 2017.</p>
</li>
<li><p>04/2017: Our paper, <a href="papers/Connected_Automated_Vehicles_Challenges_and_Opportunities_Final.pdf">Dynamical Modeling and Distributed Control of Connected and Automated Vehicles: Challenges and Opportunities</a>,
was accepted in the IEEE Intelligent Transportation Systems Magazine. </p>
</li>
<li><p>02/2017: I presented a seminar talk on <a href="talks/Talk_Yang_Birmingham.pdf">Fast ADMM for Semidefinite Programs (SDPs) with Chordal Sparsity</a> at the School of Mathematics, University of Birmingham on Feb. 2, 2017.</p>
</li>
<li><p>12/2016: I visited <a href="http://www.seas.ucla.edu/~vandenbe/">Prof. Lieven Vandenberghe</a> at UCLA from 6 Dec. 2016 to 10 Dec. 2016, and then attended
the <a href="http://cdc2016.ieeecss.org">55th IEEE Conference on Decision and Control</a> at Las Vegas from 11 Dec. 2016 to 15 Dec. 2016.</p>
</li>
<li><p>11/2016: We submited a paper <a href="papers/2016_1611.01828v1.pdf">Fast ADMM for Homogeneous Self-dual Embedding of Sparse SDPs</a> to IFAC 2017.</p>
</li>
<li><p>11/2016: New paper on platoon control: <a href="papers/2016_Platooning_of_Connected_Vehicles.pdf">Platooning of Connected Vehicles with Undirected Topologies: Robustness Analysis and Distributed H-infinity Controller Synthesis</a>,
submitted to Transactions on Intelligent Transportation Systems.</p>
</li>
<li><p>09/2016: We've released a first-order sparse conic solver, called <a href="https://github.com/giofantuzzi/CDCS">CDCS (Cone Decomposition Conic Solver)</a>.
Codes are avaiable on <a href="https://github.com/giofantuzzi/CDCS">Github</a>.
Related paper:  <a href="papers/Fast_ADMM_for_SDPs.pdf">Fast ADMM for Semidefinite Programs with Chordal Sparsity</a>. </p>
</li>
<li><p>09/2016: We submited a paper: <a href="papers/Fast_ADMM_for_SDPs.pdf">Fast ADMM for Semidefinite Programs with Chordal Sparsity</a> to ACC 2017</p>
</li>
<li><p>09/2016: I visited <a href="http://control.ee.ethz.ch/~maryamk/">Prof. Maryam Kamgarpour</a> at ETH, Zurich from 26 Sep. 2016 to 1st Oct. 2016</p>
</li>
<li><p>08/ 2016: Our paper, <a href="papers/2016_J_DMPC_TCST.pdf">Distributed Model Predictive Control for Heterogeneous Vehicle Platoons
under Unidirectional Topologies</a>, was accepted by the IEEE Transactions on Control Systems Technology </p>
</li>
<li><p>07/2016: Our paper: <a href="papers/2016_Scalable_CDC.pdf">A Chordal Decomposition Approach to Scalable Design of Structured
Feedback Gains over Directed Graphs</a>, <a href="papers/2016_C_Distributed_SMC_Platoon.pdf">Distributed Sliding Mode Control for Multi-vehicle Systems with
Positive Definite Topologies</a>, to appear in 55th IEEE Conference on Decision and Control</p>
</li>
</ul>
<div class="infoblock">
<div class="blockcontent">
</div></div>


Number of visits since 03/2017:



<div id="footer">
<div id="footer-text">
Page generated 2019-01-20 15:47:14 GMT Standard Time, by <a href="http://jemdoc.jaboc.net/">jemdoc</a>.
</div>
</div>
</td>
</tr>
</table>
</body>

</html>

