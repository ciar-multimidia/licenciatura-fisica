window.MathJax = {
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
        eps: "{\\varepsilon}",
        limfunc: ["{\\mathop{\\rm #1}}", 1],
        func: ["{\\mathop{\\rm #1}\\nolimits}", 1],
        ve: ["{\\hat{\\mathbf{e}}_{ #1}}", 1],
        unit: ["{\\mathop{\\rm #1}\\nolimits}", 1],
        sen: "{\\mathop{\\rm sen}}",
        senh: "{\\mathop{\\rm senh}}",
        cosh: "{\\mathop{\\rm cosh}}",
        tagh: "{\\mathop{\\rm tagh}}",
        cotagh: "{\\mathop{\\rm cotagh}}",
        cossech: "{\\mathop{\\rm cossech}}",
        sech: "{\\mathop{\\rm sech}}",
        tg: "{\\mathop{\\rm tg}}",
        vu: ["{\\mathbf{e}_{#1}}", 1]
      },
    },

    showMathMenu: true,
	showMathMenuMSIE: true,

	menuSettings: {
		zoom: 'Click',
		zscale: "200%"
	    
    }
  };