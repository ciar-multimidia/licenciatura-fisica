<div id="loader">
	<div class="posrel">
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>

	</div>
</div>


<script src='<?php print("../assets/js/jquery-3.2.1.min.js"); ?>'></script>
<script type="text/x-mathjax-config">
  MathJax.Hub.Config({
	  jax: ["input/TeX","output/HTML-CSS"],
    tex2jax: {
      inlineMath: [ ['$','$'] ],
      displayMath: [ ['$$','$$'], ["\\[","\\]"] ],
      processEscapes: true
    },
    TeX: {
      Macros: {
        degreec: "{\\text{\\textdegree C}}",
        degreef: "{\\text{\\textdegree F}}",
        kelvin: "{\\text{K}}",
        R: "{\\mathbb{R}}",
        C: "{\\mathbb{C}}",
        Z: "{\\mathbb{Z}}",
        N: "{\\mathbb{N}}",
        Q: "{\\mathbb{Q}}",
        K: "{\\mathbb{K}}",
        F: "{\\mathfrak{F}}",
        D: "{\\mathscr{D}}",
        Cont: "{\\mathscr{C}}",
        T: "{{\\scriptscriptstyle\\mathrm{T}}}",
        compl: "{{\\scriptscriptstyle\\mathrm{c}}}",
        Riemann: "{\\mathfrak{R}}",
        vazio: "{\\varnothing}",
        contido: "{\\subseteq}",
        cqd: "{$\\blacksquare$}",
        Om: "{\\Omega}",
        eps: "{\\varepsilon}"
      }
    },

    showMathMenu: true,
	showMathMenuMSIE: true,

	menuSettings: {
		zoom: 'Click',
		zscale: "200%"
	    
    }
  });
</script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js?config=TeX-MML-AM_CHTML'></script>
<script src='<?php print("../assets/js/app.js"); ?>'></script>
</body>
</html>

